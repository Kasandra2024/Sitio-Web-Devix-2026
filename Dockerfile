FROM php:8.2-apache

# Instalar extensiones necesarias y Composer
RUN apt-get update && apt-get install -y libpng-dev libzip-dev git unzip \
    && docker-php-ext-install pdo_mysql gd zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar Apache
RUN a2enmod rewrite
COPY . /var/www/html
WORKDIR /var/www/html

# Instalar dependencias
RUN composer install --no-dev --optimize-autoloader

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80