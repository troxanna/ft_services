FROM alpine:3.12

RUN apk update && apk upgrade && apk add vsftpd openssl openrc
RUN rc-update add vsftpd default

RUN openssl req -x509 -nodes -days 14 -newkey rsa:2048 -keyout \
 /etc/ssl/ftps.key -out /etc/ssl/ftps.pem -subj \
 "/C=RF/ST=RT/L=Kazan/O=School21/OU=IT/CN=troxanna"

#Передаем список допустимых оболочек для chpass
RUN echo "/usr/sbin/nologin" >> /etc/shell
RUN mkdir -p /var/ftps
RUN adduser --home=/var/ftps -D troxanna
RUN echo "troxanna:troxanna" | chpasswd
RUN chmod +x /var/ftps
RUN chown -R troxanna:troxanna /var/ftps
#RUN chown -R "troxanna:troxanna" /var/ftps

#RUN chown -R troxanna /var/ftps

COPY vsftpd.conf /etc/vsftpd/vsftpd.conf


COPY start.sh ./
RUN chmod +x ./start.sh

EXPOSE 20 21 21009

CMD sh start.sh