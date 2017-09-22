<?php

/*----------------------------------------------------*/
// WordPress database
/*----------------------------------------------------*/
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', 'utf8mb4_unicode_ci');
$table_prefix = getenv('DB_PREFIX') ? getenv('DB_PREFIX') : 'wp_';

/*----------------------------------------------------*/
// Illuminate database
/*----------------------------------------------------*/
$capsule = new Illuminate\Database\Capsule\Manager();
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USER,
    'password'  => DB_PASSWORD,
    'charset'   => DB_CHARSET,
    'collation' => DB_COLLATE,
    'prefix'    => $table_prefix
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
$GLOBALS['themosis.capsule'] = $capsule;

/*----------------------------------------------------*/
// Authentication unique keys and salts
/*----------------------------------------------------*/
/*
 * @link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service 
 */
define('AUTH_KEY',         'p8>_q g3)IK%@5-:e>d)0$JWZ6$RGMN>5c,;*H5gGBiHz5t8W1v-V7jNV`p]2,Gc');
define('SECURE_AUTH_KEY',  'A-b20BB0,)7WerG>W4E)-D<;[{&ImBwXC)-bRk6/>Z-u[B7[C6G3iQ9}5_Ew@ cb');
define('LOGGED_IN_KEY',    ']-5LdKvuM0gKsl[f(_@0u|-Q5%QttZeasR}JR5|^$sQK=-Q_dxy@%>.eH=miS+>k');
define('NONCE_KEY',        'A^(5G+r&Dh2 ;jYEeH[/TY~c,.+Aj.^*Gn--RDzU-jFl_qYpPwoi7#O2UA6)}$j)');
define('AUTH_SALT',        'Dtgn*$z!h6hU1*zb!t/K<Mc}=T_se^qh-c:L~R[0>$he}9o(0=iy+oN)H]UGVbbI');
define('SECURE_AUTH_SALT', '4@LOT8?(a*@023AfRFn+KNAhx-g&:y/;c=]xfw//!u|%vU:~V61+*jV]Cem- |2/');
define('LOGGED_IN_SALT',   'l$~T7&|E;5!_SL4wIW[a-[P0cAw?-+4^q[^qC!>+P./1rEO[1Kct{V>(J/DLJ+(;');
define('NONCE_SALT',       '?yPAK1x?c|xbJFP5M74XA1+ooPxBjJ{5kI5Zf`^6=J8|yidH.t{gqhgbNPErelJX');

/*----------------------------------------------------*/
// Custom settings
/*----------------------------------------------------*/
define('WP_AUTO_UPDATE_CORE', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_DEFAULT_THEME', 'tc');
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy blogging. */
