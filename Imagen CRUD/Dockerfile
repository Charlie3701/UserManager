FROM php:8.0-apache

RUN apt-get update
RUN apt-get install -y supervisor git

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN a2enmod headers expires rewrite

RUN git clone https://github.com/Charlie3701/UserManager.git
RUN cp -R ./UserManager/* /var/www/html

EXPOSE 80

CMD /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf