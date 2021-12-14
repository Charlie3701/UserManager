FROM mysql:5.7.17

ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=usuarios
ENV MYSQL_USER=root

COPY usuarios.sql /docker-entrypoint-initdb.d/

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["mysqld"]