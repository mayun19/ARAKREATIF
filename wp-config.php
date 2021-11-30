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
define('DB_NAME', 'arakreatif');

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
define('AUTH_KEY',         '4|bpl=XHaVDr-4,N 71yu#yGxpXYzc,@1@8}MwaK+R*GL#RRN4.:w-6`s#QD<?Zt');
define('SECURE_AUTH_KEY',  'aw!A~i3_(B$:@ao1vq&itEHP58Jaa8(K.8C!-s$m-`khi Ii!jXQ@?ZvvZRunFo_');
define('LOGGED_IN_KEY',    ';&&0EICmll`8G`nmextnH{KA`+KfEqdUM&--JJF3&Xf?RZdj~QW0APNmR6c7`7*s');
define('NONCE_KEY',        'F;N/,f1@RI6I7A6*%f?O!xD~uhN{RfRRji9,(~Be:8[Sktfqg]G#:*{+b=Hewm+&');
define('AUTH_SALT',        '{kmi+7r4?zTXL+|6qVIN7m{G6=dY>/@I~>:i6;<8QMH&!V6)7Jenq9> <Cb7]YP}');
define('SECURE_AUTH_SALT', '_hG;:wFbHvlYouH6c4 .gfjH*|fcSJgkni;Y|N.:g`P=9]$7t.u,S9g,# lCMPR]');
define('LOGGED_IN_SALT',   '960Qc 1I`5+dsqZOwa/YNH,<1-<1kI}rfSIGf~;eA>,[oKZ!5JS5kx~+NgM=Dze2');
define('NONCE_SALT',       ',l.c>1`(Jw/K6_XD/%$u!z^O^f0Y]^i)v3lZiAX<V]p:?_Mq~Q-G*$-K*ny#t48F');

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
