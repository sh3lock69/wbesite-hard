FROM php:8.2-apache

# Install dependencies (if needed, add additional packages here)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable mod_rewrite if needed (optional)
RUN a2enmod rewrite

# Copy website files to Apache's document root
COPY . /var/www/html/
RUN composer install --no-dev --optimize-autoloader

# Expose port 80
EXPOSE 80

CMD ["apache2-foreground"]
