FROM php:8.0.2-apache
RUN a2enmod rewrite headers deflate
RUN apt-get update -y && apt-get install -y libpng-dev git libzip-dev
RUN docker-php-ext-install zip
RUN docker-php-ext-install exif
RUN docker-php-ext-install calendar
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# ARG APP_ENV
# RUN echo "-----------${APP_ENV}-------------"
WORKDIR /var/www/html

COPY composer.json ./
##COPY composer.lock ./
RUN composer install --no-scripts --no-autoloader --no-dev
COPY . ./
RUN cp .env.example .env
RUN composer dump-autoload --optimize
#RUN php artisan migrate --seed
RUN php artisan key:generate
RUN php artisan config:cache

RUN rm /etc/apache2/sites-available/000-default.conf && rm /etc/apache2/sites-enabled/000-default.conf
RUN cp vhost.docker.conf /etc/apache2/sites-available/vhost.docker.conf
RUN a2ensite vhost.docker.conf

RUN chmod -R 777 ./storage

EXPOSE 80