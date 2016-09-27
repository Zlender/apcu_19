FROM php:5.6.26-apache
RUN pecl install apcu-4.0.11 \
    && docker-php-ext-enable apcu
COPY src/ /var/www/html/

EXPOSE 80
