FROM php:8.2.7-fpm-alpine3.17

# package install
RUN apk update && \
    apk add --no-cache \
    autoconf \
    gcc \
    g++ \
    git \
    icu-dev \
    libzip-dev \
    make \
    oniguruma-dev && \
    pecl install redis pcov && \
    docker-php-ext-enable redis pcov && \
    docker-php-ext-install intl pdo_mysql

# composer
COPY --from=composer:2.5.8 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/
