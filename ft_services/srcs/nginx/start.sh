#!/bin/sh
#apline не создем папку run самостоятельно
mkdir -p /run/nginx

ssh-keygen -A

/usr/bin/supervisord -c /etc/supervisord.conf