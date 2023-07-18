FROM php:8.1-fpm


RUN apt-get update && apt-get install -y \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libjpeg-dev \
      libzip-dev \
      zip unzip \
      git && \
      docker-php-ext-install pgsql && \
      docker-php-ext-install pdo && \
      docker-php-ext-install pdo_pgsql && \
      docker-php-ext-install zip && \
      apt-get clean && \
      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN pecl install xdebug

RUN pecl install redis && docker-php-ext-enable redis

RUN docker-php-ext-configure gd --enable-gd --with-jpeg
RUN docker-php-ext-install exif pcntl bcmath gd


COPY ./.docker/app/conf.d /usr/local/etc/php/conf.d/

#ENV COMPOSER_ALLOW_SUPERUSER=1
#RUN curl -sS https://getcomposer.org/installer | php -- \
#    --filename=composer \
#    --install-dir=/usr/local/bin  \

WORKDIR /var/www
