FROM debian:buster

RUN apt-get update -y \
	&& apt-get upgrade -y \
	&& apt-get install -y \
			wget \
			nginx \
			default-mysql-server \
			php-mbstring \
			php-zip \
			php-gd \
			php-xml \
			php-pear \
			php-gettext \
			php-cgi \
			php-fpm \
			php-mysql \
			expect

COPY srcs/phpmyadmin /var/www/html/phpmyadmin/

COPY srcs/launcher.sh .

COPY srcs/default_no_ai .

COPY srcs/default /etc/nginx/sites-available/default

COPY srcs/sql_secure_install.sh .

COPY srcs/create_user.sql .

RUN  chown -R www-data:www-data /var/www/html/phpmyadmin/

RUN wget https://wordpress.org/latest.tar.gz && tar -xzvf latest.tar.gz -C /var/www/html &&\
	rm -rf latest.tar.gz && chown www-data:www-data /var/www/html/wordpress -R && \
	chmod -R -wx,u+rwX,g+rX,o+rX /var/www/html/wordpress

COPY srcs/wp-config.php var/www/html/wordpress

RUN service mysql start \
	&& bash sql_secure_install.sh \
	&& mysql -u root < create_user.sql \
	&& mysql -u root < var/www/html/phpmyadmin/sql/create_tables.sql

EXPOSE 80 443

RUN mkdir /etc/nginx/ssl && chmod 700 /etc/nginx/ssl && openssl req -x509 -nodes -days 365 -subj '/C=FR/ST=DOUDOU/L=Lyon/CN=www.test42.com/emailAddress=42@gmail.com' -newkey rsa:4096 -keyout /etc/nginx/ssl/ssl.key -out /etc/nginx/ssl/mycert.crt

CMD sh launcher.sh
