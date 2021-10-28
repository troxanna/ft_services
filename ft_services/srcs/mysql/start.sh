#!/bin/sh

mkdir -p /data/mysql
chmod +x /data

rc default
/etc/init.d/mariadb setup
/etc/init.d/mariadb start

mysql -uroot <<MYSQL_SCRIPT
CREATE DATABASE data_base;
CREATE USER 'admin'@'%' IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON data_base.* TO 'admin';
FLUSH PRIVILEGES;
MYSQL_SCRIPT

mysql -uroot data_base < wp.sql

/etc/init.d/mariadb stop
exec /usr/bin/mysqld_safe