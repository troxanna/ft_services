#!/bin/sh

mkdir -p /run/nginx

/usr/bin/supervisord -c /etc/supervisord.conf