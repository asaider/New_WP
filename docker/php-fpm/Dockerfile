FROM php:7.2-fpm
RUN pecl install xdebug-2.7.0 \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install mysqli

COPY xdebug.ini /usr/local/etc/php/conf.d