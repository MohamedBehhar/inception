#Containers are built using Debian buster

FROM debian:buster

#Install necessary package

RUN apt-get update && apt-get -y install mariadb-server mariadb-client \
&& rm -rf /var/lib/apt/lists/* \
# purge and re-create /var/lib/mysql with appropriate ownership
&& mkdir -p /var/run/mysqld \
&& chown -R mysql:mysql /var/run/mysqld \
# ensure that /var/run/mysqld (used for socket and lock files) is writable regardless of the UID our mysqld instance ends up having at runtime
&& chmod 777 /var/run/mysqld

EXPOSE 3306

COPY ./tools/init.sh /
# COPY ./conf/wordpress.sql /usr/local/bin/
RUN chmod 777 ./init.sh
ENTRYPOINT ["/init.sh"]

#Command to launch mariadb and enable the database to listen globally

CMD ["mysqld", "--bind-address=0.0.0.0"]