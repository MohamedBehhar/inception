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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'mbehhar_u' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mbehhar111' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define('AUTH_KEY',         'E]2s.29f0P0!N->:2E>F&J{0R|Ym7PwxQm ?%lo@1P+T_,Bzh`MYlhwCQ1x)jsjd');
	define('SECURE_AUTH_KEY',  '4}i)^-V.W-]j/I39jZNHvq7WXlHYz:rKV8zeFat8IHP=#=Vb9R}r(bBTwRd@kK[5');
	define('LOGGED_IN_KEY',    'Qn .5:G#bCOC7dDFVq|r+lMR/qcDMU.1H)|yA5 -ab}kyGK9^uB{!di@=Jx,4|25');
	define('NONCE_KEY',        'c$%p2BZB|&s^SSa8,$R!+G>Axg8xWRy7nB!*j|~cS+]}=DGfy|ce=mQdHN|K%v.I');
	define('AUTH_SALT',        'WnA/dQ9m?hg<|8ip>AjLa(,=5Sb,r<[o|q@+j1[5L8$C&ca|Npre`Ky2zE=?,s{A');
	define('SECURE_AUTH_SALT', 'r-b0H+|I<M:]<j0!yJc7:/q>H_u^^Jmj]zR.E8+Z+<e#!x!+-*@ve,Yh<c)D~6U4');
	define('LOGGED_IN_SALT',   'r+6$hy^O8n.G9sSVx1V3dC|L>cW|^(}3l:]pn[O`b_xJG ^28^]e.oQLR}>@e-3C');
	define('NONCE_SALT',       'ZUQV+c<bk|qE[lF-Q<6zs-I%)CSM6z+=N;YarFM0ST+lP%xsdTt?RSUuO2JsZ!_P');

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
