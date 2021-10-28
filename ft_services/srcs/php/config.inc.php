<?php

declare(strict_types=1);

$cfg['blowfish_secret'] = 'Dv9ei9IT]i8X7nNFHCCcKxJ6bO-qAPLZ';

$i = 0;
$i++;

$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = 'mysql-svc';
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;


$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

$cfg ['TempDir'] = '/var/www/phpmyadmin/tmp';