# FROM alpine:3.11

# RUN apk update && \
# 	apk add --no-cache wget tar gettext \
# 	php7-fpm php7-mysqli php7-json

# RUN mkdir -p /var/www/wordpress
# COPY ./conf/wordpress/ /var/www/wordpress
# # RUN wget https://wordpress.org/latest.tar.gz && \
# # 	tar -xvf latest.tar.gz && \
# # 	mkdir -p /var/www/wordpress && \
# # 	mv wordpress/* /var/www/wordpress/ && \
# # 	rm -rf latest.tar.gz wordpress
# # # COPY ./conf/wordpress /var/www/
# # COPY ./conf/wp-config.php /var/www/wordpress
# # RUN rm -rf /var/www/wp-config-sample.php
# COPY ./conf/www.conf /etc/php7/php-fpm.d/
# COPY ./tools/docker-entrypoint.sh .

# EXPOSE 9000

# ENTRYPOINT ["./docker-entrypoint.sh"]
# CMD ["php-fpm7", "-F"]


FROM alpine:3.11

RUN apk add --update \
	php-phar \
    php7 \
    php7-curl \
    php7-dom \
    php7-gd \
    php7-mbstring \
    php7-mysqli \
    php7-xml \
    curl

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp

COPY ./tools/entrypoint.sh /entrypoint.sh
COPY ./conf/wp-config.php /var/www/wp-config.php
RUN rm -rf /var/www/wp-config-sample.php
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]

EXPOSE 9000

CMD ["php-fpm"]
