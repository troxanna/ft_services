<?php

define( 'DB_NAME', 'data_base' );
define( 'DB_USER', 'admin' );
define( 'DB_PASSWORD', 'admin' );
define( 'DB_HOST', 'mysql-svc' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'H0Y:141m(AJU5+I`{NT=c76#:<hnhu#^rXN13~h+.@@*6=K<V%G}X@7xq(+~{uMn');
define('SECURE_AUTH_KEY',  '(tv3]kRhkdpC%W$6A}wp1U7+CD@=phW><=;8}fmN??&3^Ui(|. :T3-|NJkJ3<k-');
define('LOGGED_IN_KEY',    'WuslPqX:NMm)E1w/n=iP:&BvC6uNmLd$ug$[7m!r6+jzt1UZwu#+zB^,LO<+i!Yp');
define('NONCE_KEY',        '3kG{_BrlvimJjp yBf5X:(y>-?vD4d0sDIW}S8mc[ji9l0T3Ft5:>!qtP:#<y)UG');
define('AUTH_SALT',        'k$lCOrfBtS_)|=9sO2SFu <P4|!@JmjyQ/vZETo{Bw#2^OPQ)9~wAy`jBtmWTWpt');
define('SECURE_AUTH_SALT', '+bf%:*ZPE!xkc?z,DI_gt42-*x#V#j1-)7]U-LWqNq-n&l}@)K)tQ{#t?V1R&&Po');
define('LOGGED_IN_SALT',   '@)}OTn&|No{]]|r.n/$;qU|rwUKqIY&U_kd6SS?S|bZv[?eU c#)P[mhH9,s@<C(');
define('NONCE_SALT',       '/Uq/7ryUFA@@e*A4^.,0=7kvhgysFH&DRow@B}-U+-Sg{)alwUNC+13s;Q--395Y');
define('WP_HOME', 'http://192.168.99.100:5050');
define('WP_SITEURL','http://192.168.99.100:5050');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';