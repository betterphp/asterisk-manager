FROM php:8.0.7-apache

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions

RUN install-php-extensions \
    pdo_mysql \
    intl

ADD --chown=root:root docker/apache2.conf /etc/apache2/apache2.conf
ADD --chown=root:root docker/php.ini /usr/local/etc/php/php.ini

ADD --chown=www-data:www-data . /var/www
