FROM php:7.2-fpm

COPY src/composer.lock src/composer.json /var/www/

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    jpegoptim optipng pngquant gifsicle \
    zip \
    vim \
    unzip \
    git \
    openssl \
    curl

WORKDIR /var/www

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD ./src /var/www

RUN composer install

RUN chmod -R 777 /var/www/storage/logs/


