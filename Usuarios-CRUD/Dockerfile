FROM ubuntu
RUN apt update && apt upgrade -y
RUN DEBIAN_FRONTEND="noninteractive" TZ="America/New_York" apt install -y tzdata supervisor
RUN apt install -y apache2 php php-mysql git

COPY apache.conf /etc/apache2/sites-available/UserManager.conf
RUN mkdir /var/www/html/UserManager
RUN git clone https://github.com/Charlie3701/UserManager.git
RUN cp -R ./UserManager/* /var/www/html/UserManager

COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf
RUN /bin/sh -c a2ensite UserManager.conf
RUN /bin/sh -c a2dissite 000-default.conf

RUN echo 'mysql-server mysql-server/root_password password root' | debconf-set-selections
RUN echo 'mysql-server mysql-server/root_password_again password root' | debconf-set-selections
RUN apt install -qqy mysql-server

RUN (service mysql start &); sleep 5; mysqladmin -u root -proot create usuarios
RUN (service mysql start &); sleep 5; mysql -u root -proot usuarios < /var/www/html/UserManager/usuarios.sql

EXPOSE 80

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
CMD ["/usr/bin/supervisord"]