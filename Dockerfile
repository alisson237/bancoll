FROM php:8.2-apache

COPY . /var/www/html/

RUN echo "DirectoryIndex index.php index.html" > /etc/apache2/conf-available/custom.conf \
 && a2enconf custom

RUN chown -R www-data:www-data /var/www/html
