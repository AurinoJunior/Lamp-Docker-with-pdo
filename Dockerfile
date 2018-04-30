FROM php:apache

RUN apt-get update && \
    docker-php-ext-install pdo pdo_mysql

COPY ./app /var/www/html/