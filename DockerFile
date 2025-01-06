# Use the official PHP image with Apache as the base image
FROM php:7.4-apache

# Set ServerName globally to avoid the warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Enable Apache mod_rewrite (optional, depending on your use case)
RUN a2enmod rewrite

# Copy your project files into the Apache server's root directory
COPY . /var/www/html/

# Expose port 80 (Apache default)
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
