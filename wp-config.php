<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'appbr' );

/** Database username */
define( 'DB_USER', 'app' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

/** Database hostname */
define( 'DB_HOST', 'mysql1.inulogic.fr:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mq,_Ah:-<?mqbzf{&4 *jN/[ceg!,*87]QLSwb~?,hl0}t.5H@k07t=zjtan4[ef' );
define( 'SECURE_AUTH_KEY',  '47. iv~?_lqT 1:tT*o@C&Kxs=G+AS?>P@w4qP6=@_z*nas0VKcA5C+^iLomXNMA' );
define( 'LOGGED_IN_KEY',    'W)t#)Y9_Bd1AE:;+?n}ec./v|a8G2~k((hY-^VoLSb]IWx%#s@X<3@FCfKLTQBCb' );
define( 'NONCE_KEY',        'm<y-y5MV=7gZI-Hs/7CUEhXH*igzk3XY(L4w[)d?O.i8OsX8Unh;_cev5cHzEM0R' );
define( 'AUTH_SALT',        '9Z*gz9FL_kCu-ORha-(5jzHTcJZD#AVl`}MawW.-UGD}+4OOjY1?.q^T_$vP_V!1' );
define( 'SECURE_AUTH_SALT', 'j>L=}+ywU<}(wHT4]>~uY6+L|]TM]/4w)PB[l_7KN8?b$sp`<ubG 1Y5~;>8>YSb' );
define( 'LOGGED_IN_SALT',   'X<q>DeONb5<,F] |_)%XJ|.{d>%u/gm-nJ{L![I/!b,i9f&gqmAo3~x#TLqt4SF.' );
define( 'NONCE_SALT',       '~Q9LFfCo051hL!K25G|~i{E4)QA]Bf9W|Eg*mJ_X&B)(l?<+lSV<!5v-^SN]$=J<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
