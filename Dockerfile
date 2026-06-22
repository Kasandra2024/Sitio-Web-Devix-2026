FROM php:8.2-apache

# Instalar extensiones
RUN apt-get update && apt-get install -y libpng-dev libzip-dev git unzip \
    && docker-php-ext-install pdo_mysql gd zip

# Configurar Apache para apuntar a la carpeta /public de Laravel
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar permisos
RUN a2enmod rewrite
COPY . /var/www/html
WORKDIR /var/www/html

# Instalar dependencias y ajustar permisos
RUN composer install --no-dev --optimize-autoloader
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80