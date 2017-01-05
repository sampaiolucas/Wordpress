<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';@`8Z<Uof_ezB3^<,QZ8PBYgv0+8fwstb%i3j@c(6-#c-z$kSERB*7Fp9fU{d@In');
define('SECURE_AUTH_KEY',  '~mnRi$$H<R#c5+d`Y928dzeT#9F)tSbl~lF-)8OjxZBd,[L$VmqwuDQ^[`sN]jrx');
define('LOGGED_IN_KEY',    '@t<H{5LrnTjX2Edzc5zO=%?Ji8I7nX($Z+JE*y:ntrPm~LYXb^!2`xfoxTN*+Smk');
define('NONCE_KEY',        'A$fT#Ws08E!S`D7iqgdgmuiaCe*w2K@hG3tpI(RT+w JK&gx,m{Z86n6Xa6ZNyCn');
define('AUTH_SALT',        '#zy8R{hnZmykphusu|<a)oNW iz]%O#K7H/Z,S<6Pc0ylOG_j6L80K^JT)wbBW&[');
define('SECURE_AUTH_SALT', 'y=LNYj1Fx1FmRleY_B=2{pkOx7%%9?|Vfh:3O*YIK-I^4u]h&0bJWxCv:4d<E8xu');
define('LOGGED_IN_SALT',   'cu8n{=2$]vmNDtz16*zb:?63c&Cz*F+)|D`4aSC gKUf=vI0;mla(pr.1l:wNX>9');
define('NONCE_SALT',       'J1*7_3t^>ru[J0_,($T<wd>,HARyWC/MVPRr/O}nwhgv~a@-L9o{64!#yr_K *M%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
