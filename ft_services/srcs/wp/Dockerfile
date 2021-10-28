FROM alpine:3.12

RUN apk update && apk upgrade && apk add wget nginx supervisor
RUN apk add php7 php7-fpm php7-ldap php7-iconv php7-mbstring php7-mysqli php7-curl php7-gd php7-json \
php7-soap php7-xml php7-xmlrpc php7-session php7-ctype php7-zlib php7-opcache libc6-compat

RUN wget https://ru.wordpress.org/wordpress-5.6.1-ru_RU.tar.gz
RUN tar -zxvf wordpress-5.6.1-ru_RU.tar.gz && rm wordpress-5.6.1-ru_RU.tar.gz
RUN mkdir -p var/www/troxanna

RUN mv wordpress /var/www/troxanna/wordpress

COPY wp-config.php ./var/www/troxanna/wordpress
COPY supervisord.conf ./etc/supervisord.conf
COPY nginx.conf ./etc/nginx/conf.d/default.conf

COPY start.sh ./
run chmod +x ./start.sh

EXPOSE 5050

CMD sh start.sh