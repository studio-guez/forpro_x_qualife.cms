FROM php:8.4-apache

RUN a2enmod rewrite headers

RUN apt-get update && apt-get install -y \
    libgd-dev \
    libzip-dev \
    && docker-php-ext-install gd zip \
    && rm -rf /var/lib/apt/lists/*

COPY --chown=www-data:www-data . /var/www/html/

RUN chown -R www-data:www-data /var/www/html/site/sessions \
    /var/www/html/site/accounts \
    /var/www/html/media

EXPOSE 80

CMD ["apache2-foreground"]
