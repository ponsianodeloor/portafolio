FROM php:8.2-fpm

# Install system dependencies and PHP extensions required by Laravel
RUN apt-get update && apt-get install -y \
        git \
        unzip \
        libpng-dev \
        libzip-dev \
        libonig-dev \
        libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath zip \
    && rm -rf /var/lib/apt/lists/*

# Install Composer 2.6.4
COPY --from=composer:2.6.4 /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

# Copy existing application directory contents
COPY . .
# Prepare storage directories and install PHP dependencies
RUN mkdir -p storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/testing \
    storage/framework/views \
    storage/logs \
    && cp .env.example .env \
    && composer install --no-interaction --prefer-dist --optimize-autoloader \
    && php artisan key:generate \
    && php artisan storage:link \
    && php artisan config:clear \
    && php artisan cache:clear \
    && php artisan route:clear \
    && php artisan view:clear

EXPOSE 9000

CMD ["php-fpm"]
