# Stage 1 — node build (produce public/dist)
FROM node:20 AS node-build
WORKDIR /app

# copy only package files first (speeds caching)
COPY package.json package-lock.json* ./ 

# install node deps
RUN npm ci

# copy frontend and app assets used by build - adjust paths if your frontend lives elsewhere
# If your frontend assets are in resources/, copy them. If in frontend/ adjust accordingly.
COPY resources ./resources
COPY public ./public
# If you have vite.config.js or webpack.mix.js, copy them if present in the repo
# (These COPY commands will fail if files are missing - ensure they exist or remove the COPY)
COPY vite.config.js . 
COPY webpack.mix.js . 

# run build — change to the script you use (vite build / npm run build / mix)
RUN npm run build

# Stage 2 — PHP + Composer
FROM php:8.2-fpm AS php-base

# system deps
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev zlib1g-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl

# install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# copy composer files and install deps (use cache)
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# copy rest of project
COPY . /var/www/html

# copy built assets from node stage into public (this WILL overwrite public contents)
# make sure node build produced the output inside /app/public
COPY --from=node-build /app/public /var/www/html/public

# set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache || true
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache || true

# generate an app key if you want (or set APP_KEY in env)
RUN php artisan key:generate --ansi || true
RUN php artisan config:cache || true

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000
