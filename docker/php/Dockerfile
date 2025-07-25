FROM php:8.0-apache

RUN apt-get update && apt-get install -y \
    zip unzip curl git libonig-dev libzip-dev libpq-dev \
    && docker-php-ext-install pdo pdo_mysql zip 
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html