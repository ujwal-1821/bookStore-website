# Stage 1 — Node build (Vite)
FROM node:20 AS node-build
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY . .
RUN npm run build

# Stage 2 — PHP + Composer (prepare app)
FROM php:8.2-fpm AS php-base

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV PATH=/root/.composer/vendor/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev zlib1g-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl \
    && rm -rf /var/lib/apt/lists/*

# install composer binary
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy full project so artisan exists for composer post scripts
COPY . /var/www/html

# Install composer dependencies (post-autoload scripts will run because artisan exists)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# copy built frontend output from node stage (Vite outputs to public/build)
COPY --from=node-build /app/public /var/www/html/public

# permissions for storage & cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache || true
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache || true

# generate key if not provided in env (harmless if APP_KEY already set)
RUN php artisan key:generate --ansi || true
RUN php artisan config:cache || true

# Stage 3 — Final image: add nginx + supervisor to run php-fpm and nginx together
FROM php-base AS final

# install nginx and supervisor
RUN apt-get update && apt-get install -y nginx supervisor \
    && rm -rf /var/lib/apt/lists/*

# remove default nginx site so we replace it
RUN rm -f /etc/nginx/conf.d/default.conf || true

# copy nginx config and supervisord config from repo into image
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# ensure run dir for php-fpm
RUN mkdir -p /run/php

EXPOSE 80

# supervisord will start php-fpm and nginx
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
