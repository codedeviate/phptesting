FROM php:5.5-alpine

RUN apk upgrade
RUN apk add apk-tools
#
#    Install the necessary packages
# RUN apk add git
# RUN apk add zip
# RUN apk add vim
# RUN apk add libzip-dev
# RUN apk add gmp-dev
# RUN apk add libffi-dev
# RUN apk add libressl-dev
# RUN apk add git zip vim libzip-dev gmp-dev libffi-dev libressl-dev
#
#    Enable required extensions
RUN docker-php-ext-install -j$(nproc) sockets zip gmp pcntl bcmath
#
#    Extensions through pecl are set like this, then in php8 pecl is now missing, so the lines are commented out
RUN PHP_OPENSSL=yes pecl install ev
# RUN docker-php-ext-enable ev
#
#    Cleaning up temporary files
RUN docker-php-source delete
