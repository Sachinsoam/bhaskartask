FROM php:7.4-apache

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy application files to the container
COPY ./www /var/www/html
