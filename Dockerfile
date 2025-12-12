# Stage 1 — node build (produce public/dist)
FROM node:20 AS node-build
WORKDIR /app

# copy only package files to speed up installs
COPY package*.json ./
# if you use pnpm or yarn, adjust accordingly
RUN npm ci

# copy frontend source (adjust if your frontend is in resources/)
COPY resources resources
COPY vite.config.js . || true
COPY webpack.mix.js . || true
# copy any assets referenced by build
COPY public public

# run build — adjust command if you use `npm run build` or `vite build`
RUN npm run build

# Stage 2 — PHP + Composer
FROM php:8.2-fpm AS php-base

# system deps required for Laravel + zip ext, database drivers
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev zlib1g-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl

# install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# copy app files
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# copy rest of project
COPY . /var/www/html

# copy built assets from node stage into public (overwrite)
# adjust path if node build outputs to public/build instead of public/dist
COPY --from=node-build /app/public /var/www/html/public

# set permissions for Laravel storage and bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache || true
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache || true

# generate key at build time (or set APP_KEY in Render env vars)
RUN php artisan key:generate --ansi || true
RUN php artisan config:cache || true

EXPOSE 8000

# Simple start — for hobby apps. Replace with php-fpm + nginx for production.
CMD php artisan serve --host=0.0.0.0 --port=8000
