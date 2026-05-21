FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    openssl \
    && docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod ssl
RUN a2enmod rewrite

COPY apache.conf /etc/apache2/sites-available/000-default.conf

COPY ssl-cert/server.crt /etc/ssl/certs/server.crt
COPY ssl-cert/server.key /etc/ssl/private/server.key

EXPOSE 80
EXPOSE 443