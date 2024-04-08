FROM php:8.0-apache

# Enable Apache Rewrite module
RUN a2enmod rewrite

# Install PDO MySQL extension
RUN docker-php-ext-install pdo_mysql

# Copy your application files into the container
COPY . /var/www/html

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html
