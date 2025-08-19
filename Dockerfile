FROM php:8.2.4-cli

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

WORKDIR /var/www

# Copy existing application directory contents
COPY . .

# Install PHP dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
