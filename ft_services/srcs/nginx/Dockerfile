FROM alpine:3.12

RUN apk update && apk upgrade && apk add nginx openssl openssh supervisor

RUN openssl req -x509 -nodes -days 14 -newkey rsa:2048 -keyout \
 /etc/ssl/nginx.key -out /etc/ssl/nginx.crt -subj \
 "/C=RF/ST=RT/L=Kazan/O=School21/OU=IT/CN=troxanna"

RUN mkdir /var/www/troxanna/

COPY nginx.conf ./etc/nginx/conf.d/default.conf
COPY supervisord.conf /etc/supervisord.conf
COPY index.html /var/www/troxanna
COPY start.sh /
RUN chmod +x /start.sh

EXPOSE 80 443 22

CMD sh start.sh