FROM alpine:3.12

RUN apk update && apk upgrade && apk add wget nginx supervisor
RUN apk add php7 php7-fpm php7-ldap php7-iconv php7-mbstring php7-mysqli php7-curl php7-gd php7-json \
php7-soap php7-xml php7-xmlrpc php7-session php7-ctype php7-zlib php7-opcache libc6-compat

RUN mkdir var/www/troxanna
RUN wget http://files.directadmin.com/services/all/phpMyAdmin/phpMyAdmin-5.0.4-all-languages.tar.gz
RUN tar -zxvf phpMyAdmin-5.0.4-all-languages.tar.gz && rm phpMyAdmin-5.0.4-all-languages.tar.gz

RUN mv phpMyAdmin-5.0.4-all-languages /var/www/troxanna/phpMyAdmin

COPY config.inc.php ./var/www/troxanna/phpMyAdmin
COPY supervisord.conf ./etc/supervisord.conf
COPY nginx.conf ./etc/nginx/conf.d/default.conf

COPY start.sh ./
RUN chmod +x ./start.sh

EXPOSE 5000

CMD sh start.sh