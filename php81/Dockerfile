FROM php:8.1-cli

RUN apt-get update && apt-get upgrade -y \
    && apt-get install apt-utils -y \
#
#    Install the necessary packages
    && apt-get install git zip vim libzip-dev libgmp-dev libffi-dev libssl-dev -y \
#
#    Enable required extensions
    && docker-php-ext-install -j$(nproc) sockets zip gmp pcntl bcmath ffi \
#
#    Extensions through pecl are set like this, then in php8 pecl is now missing, so the lines are commented out
#    && PHP_OPENSSL=yes pecl install ev \
#    && docker-php-ext-enable ev \
#
#    Cleaning up temporary files
    && docker-php-source delete \
    && apt-get autoremove --purge -y && apt-get autoclean -y && apt-get clean -y