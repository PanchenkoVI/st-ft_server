service mysql start
mysql < entry.sql

service php7.3-fpm start
nginx -g 'daemon off;'