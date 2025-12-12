# Dockerfile.mix
FROM node:20 AS node-build
WORKDIR /app

COPY package*.json ./
RUN npm ci

COPY . .
# Mix build — adjust script if package.json uses different name (e.g., "prod")
RUN npm run production

FROM php:8.2-fpm AS php-base

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev zlib1g-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

COPY . /var/www/html

# copy built public folder created by Mix (e.g., public/js, public/css)
COPY --from=node-build /app/public /var/www/html/public

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache || true
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache || true

RUN php artisan key:generate --ansi || true
RUN php artisan config:cache || true

EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000
