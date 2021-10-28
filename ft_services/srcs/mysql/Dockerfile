FROM alpine:3.12

RUN apk update && apk upgrade && apk add --no-cache mysql mysql-client openrc

COPY wp.sql ./
RUN chmod +x ./wp.sql

COPY my.cnf ./etc/my.cnf

EXPOSE 3306

COPY start.sh ./
RUN chmod +x ./start.sh

CMD sh start.sh