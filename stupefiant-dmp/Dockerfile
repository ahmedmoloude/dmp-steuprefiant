FROM php:8.1.3-apache-buster
RUN a2enmod rewrite headers deflate
RUN apt-get update -y && apt-get install -y libpng-dev zip unzip git libzip-dev
RUN docker-php-ext-install pdo pdo_mysql gd zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


WORKDIR /var/www/html

COPY composer.json ./
##COPY composer.lock ./
RUN composer install --no-scripts --no-autoloader
COPY . ./
RUN cp .env.example .env

# RUN php artisan key:generate
RUN php artisan storage:link
#RUN php artisan migrate:fresh --seed --force

# #Log User interface */log-viewer
# #RUN php artisan log-viewer:publish --force

# #Clear Database
# #RUN php artisan migrate:fresh --drop-views
# #RUN php artisan db:seed --force

RUN chmod -R 777 storage
RUN chmod -R 777 bootstrap/cache/

#optimizing configuration loading
RUN php artisan config:cache

#Optimizing Route Loading
RUN php artisan route:cache

#RUN service supervisor start
#RUN supervisorctl start queue_worker:*
#RUN supervisorctl restart all

# RUN php /var/www/html/artisan passport:keys
RUN rm /etc/apache2/sites-available/000-default.conf && rm /etc/apache2/sites-enabled/000-default.conf
RUN cp vhost.docker.conf /etc/apache2/sites-available/vhost.docker.conf
RUN a2ensite vhost.docker.conf

# Send mail to testers
#RUN php artisan notify:testers


EXPOSE 80

