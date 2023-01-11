FROM php:8.2-cli-alpine

RUN apk upgrade
RUN apk add apk-tools
#
#    Install the necessary packages
RUN apk add git zip vim libzip-dev gmp-dev libffi-dev libressl-dev
#
#    Enable required extensions
RUN docker-php-ext-install -j$(nproc) sockets zip gmp pcntl bcmath ffi
#
#    Extensions through pecl are set like this, then in php8 pecl is now missing, so the lines are commented out
#     RUN PHP_OPENSSL=yes pecl install ev
#     RUN docker-php-ext-enable ev
#
#    Cleaning up temporary files
RUN docker-php-source delete
