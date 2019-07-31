FROM php:7.2-fpm

#COPY src/composer.lock src/composer.json /var/www/

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

# agregar usuario para la aplicación laravel
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# copiar los permisos del directorio de la aplicación
COPY --chown=www:www . /var/www

# Cambiar al usuario www
USER www
