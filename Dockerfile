# Image used to actually host the app
FROM php:8.0.7-apache AS app

WORKDIR /var/www

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod 0755 /usr/local/bin/install-php-extensions

RUN install-php-extensions \
    pdo_mysql \
    intl

ADD --chown=root:root docker/apache2.conf /etc/apache2/apache2.conf
ADD --chown=root:root docker/php.ini /usr/local/etc/php/php.ini

ADD --chown=www-data:www-data . /var/www


# Image used to run analysis and tests
FROM app AS cli

# Install extra php extensions
RUN install-php-extensions \
    ast

# Create a folder to mount our home directory to
RUN mkdir -p /home/user

# Install composer
ADD https://getcomposer.org/download/2.1.3/composer.phar /usr/local/bin/composer
RUN chmod 0755 /usr/local/bin/composer
