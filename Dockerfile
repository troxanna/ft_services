FROM alpine:3.11

WORKDIR .
RUN apk update && apk upgrade
RUN apk add nginx openssl

#SSL
RUN openssl req -x509 -nodes -subj "/C=RU/O=troxanna\ site/CN=troxanna.ft_services.com/emailAddress=troxanna@ft_services.com" \
						-days 365 -newkey rsa:2048 -keyout /etc/ssl/private/ft_services.key -out /etc/ssl/certs/ft_services.crt

#NGINX
COPY ./srcs/nginx_config /etc/nginx/sites-available


EXPOSE 80 443

COPY ./srcs/services_conf.sh .
RUN chmod 755 services_conf.sh
RUN mkdir -p /run/nginx
CMD ./services_conf.sh