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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MYSQL_DATABASE') );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER')  );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD')  );

/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xnJqq1nI`&{7QGu9n/2Jpyy%WMg<WR@|A `}JUcC?e{i[LJUSSmVml/w%T8HS~]s');
	define('SECURE_AUTH_KEY',  'tzb-(-I~{88&BB<K,Q9bx~:xspD7wVQoD]8-dg~pckHyXq2,8.{Fr/gtIJ#Q_%yS');
	define('LOGGED_IN_KEY',    '7Hf}|1`*24ACqy%_TuZx~|H}4StV^oN^$hX/L+CU!$`Da(qEY9-v,%&)k2&KBI^v');
	define('NONCE_KEY',        't$S%leG,<JMcUW$.YmK:InkaB_Z:)_!$w=$njJU, BRPe$m`YRDNq+Nm_D!1>|?O');
	define('AUTH_SALT',        '~.QKeJ_#L&E{-Ox_eyMpri8-d7q`tm|l0Ff7,3JR:xD4MqU~%+<~0-Ugc@o6,H5s');
	define('SECURE_AUTH_SALT', 'WnH@/?TM?;mpW3E@aVv`;{0JnPo8x7g(,`c^_A%/vj$-gcui_`LaOOm}/+c6%tu|');
	define('LOGGED_IN_SALT',   '}Xu]rsiq3QGWwDRG5-i`~zq&+L>N$Mo2/Xhsu|+ic`jD3Tx[^Y<MJCiEYB@&HfK(');
	define('NONCE_SALT',       '{|j.Rx6G+*`*JS>4~-c<+l-FE[bzYwWw1+|6OT^aHo|eWkw+79dY*C#Wo^jgVu:9');
/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
