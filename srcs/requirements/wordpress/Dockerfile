FROM alpine:3.11

RUN apk update && \
	apk add --no-cache wget tar gettext \
	php7-fpm php7-mysqli php7-json

RUN wget https://wordpress.org/latest.tar.gz && \
	tar -xvf latest.tar.gz && \
	mkdir -p /var/www/wordpress && \
	mv wordpress/* /var/www/wordpress/ && \
	rm -rf latest.tar.gz wordpress
# COPY ./conf/wordpress /var/www/
COPY ./conf/wp-config.php /var/www/wordpress
RUN rm -rf /var/www/wp-config-sample.php
COPY ./conf/www.conf /etc/php7/php-fpm.d/
COPY ./tools/docker-entrypoint.sh .

EXPOSE 9000

ENTRYPOINT ["./docker-entrypoint.sh"]
CMD ["php-fpm7", "-F"]