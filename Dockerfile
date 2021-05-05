FROM php:7.4.18-apache

RUN chmod +rwx /var/www/html

WORKDIR /var/www/html