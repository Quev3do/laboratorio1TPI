FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite
#docker run -d --name mi-servidor-php -p 8080:80 -v .:/var/www/html imagen-apache-php
RUN printf "<Directory /var/www/html>\nOptions Indexes FollowSymLinks\nAllowOverride All\nRequire all granted\n</Directory>\n" \ > /etc/apache2/conf-available/z-override.conf \ && a2enconf z-override

WORKDIR /var/www/html

EXPOSE 80