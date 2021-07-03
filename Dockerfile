FROM debian:buster

EXPOSE 80 443

WORKDIR /srcs

RUN apt-get update
RUN apt-get -y upgrade
RUN apt-get -y install nginx default-mysql-server wordpress
RUN apt-get -y install php php-fpm php-cli php-mbstring php-gd php-mysql
RUN apt-get -y install php7.3-gmp php7.3-curl php7.3-common php7.3-xmlrpc php7.3-xml php7.3-zip php7.3-intl
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpmyadmin.tar.gz

RUN tar -xf phpmyadmin.tar.gz
RUN mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpmyadmin
COPY /srcs/entry.sql /srcs/start.sh /srcs/index.sh ./

COPY /srcs/localhost.conf /etc/nginx/sites-available/

RUN ln -s /etc/nginx/sites-available/localhost.conf /etc/nginx/sites-enabled/localhost.conf
RUN rm /etc/nginx/sites-enabled/default
RUN rm /etc/nginx/sites-available/default

RUN cp -r /usr/share/wordpress /var/www/html/
RUN rm /var/www/html/wordpress/wp-config.php
RUN rm /var/www/html/index.html

COPY /srcs/wp-config.php /var/www/html/wordpress/
RUN chown -R www-data:www-data /var/www/html

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-keyout /etc/ssl/private/localhost.key -out /etc/ssl/certs/localhost.crt \
	-subj "/C=RU/ST=Moscow/L=Moscow/O=21/OU=21/CN=Sverkart"

RUN chmod 755 start.sh

CMD ["bash", "start.sh"]