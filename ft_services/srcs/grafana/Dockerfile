FROM alpine:3.12

RUN apk update && apk upgrade && apk add wget libc6-compat supervisor

RUN wget https://dl.grafana.com/oss/release/grafana-7.4.1.linux-amd64.tar.gz
RUN tar -zxvf grafana-7.4.1.linux-amd64.tar.gz

RUN mv grafana-7.4.1 grafana
RUN rm grafana-7.4.1.linux-amd64.tar.gz

COPY ./grafana.db ./grafana/data/grafana.db

COPY start.sh /
RUN chmod +x /start.sh

EXPOSE 3000
CMD sh start.sh