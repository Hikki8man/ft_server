#!/bin/sh
if [ "$AUTOINDEX" = "off" ]
then
	mv default_no_ai etc/nginx/sites-available/default
fi
service mysql start && service php7.3-fpm start && nginx -t && nginx -g 'daemon off;'
