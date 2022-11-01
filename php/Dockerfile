FROM php:8.0-apache
WORKDIR /var/www/html/
COPY  .  /var/www/html/
EXPOSE 80

# Update system core
RUN apt-get update -y && apt-get install -y libmariadb-dev
RUN docker-php-ext-install mysqli

