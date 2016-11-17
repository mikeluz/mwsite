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
define('DB_NAME', 'MercyWizardWPblogDatabase');

/** MySQL database username */
define('DB_USER', 'MercyWizardAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'mwwpadminbs');

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
define('AUTH_KEY',         '$$+F)m8oq(Q!IN>DvO{*7BujC?qcmTu|>OWs[}@zx%y*rv,bi35tY7Fu8-GF6`=`');
define('SECURE_AUTH_KEY',  '+!d[y*?B]$!?_:nWfpyM2]&`>18A~s UW16 Dj]tz56l~4,ggDj7T3|(Fk><V8cr');
define('LOGGED_IN_KEY',    'l)qCMB(*bs8}n$*yLwh05Xp!978puq50-@}-& >kk|ll>AvuZt#ivD!8CF{oaTyE');
define('NONCE_KEY',        'uO)Gw*`t^?=H0SCW^5i)+{eNjg;6niz8qR4y/R]sfn2 VpO}h>yB4d,PeO]yXRG%');
define('AUTH_SALT',        'z$|+L o6t|t_dZZSLwcV|~cBQ Y*4wUqr;Yf^s$ZKe`%pc9;nf(P5D&7|_a[d1]z');
define('SECURE_AUTH_SALT', '/V3-uCQ!IneDLZFe1Uu%QE;hz=~~(!|FAHNAw)A7XU=8X(VInGw ?d-+5)2)e877');
define('LOGGED_IN_SALT',   'Ykqq+Dx?-M2_3EMp$. GK9Srkg,Gw/(1MrLlj;_= !?0p2tq?.arHYkkQ0EIF@m3');
define('NONCE_SALT',       'P-e?qL/J)uPsJ~[Yh!V,-GVrm<<@s$8}$tru-Qlk bWqo,Vfjka23QVJ@0v*u[=!');

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
