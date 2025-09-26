FROM jakubboucek/lamp-devstack-php:latest
COPY ./src /var/www/html/www
RUN chown -R www-data:www-data /var/www/html
