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
define('DB_NAME', 'brittanybloomer');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '$t%)eg$>5HdFR>M#JEU%o5wY@h5/CI<CE34{VpxKZ0H$pOl[=;t79Q`bLimz4Czo');
define('SECURE_AUTH_KEY',  '8G%7v20XIc`vV@4r>~[`=`UAatk#5k[9h6C(kWQ|?=G?wezt*cf^MQK/O)R~3la]');
define('LOGGED_IN_KEY',    ',IN~.V[L<L(AMfE2//}ndrBGE[IY@<0a23v>@y_zC5>0^u4;M%(<UzM59d5Ue0EP');
define('NONCE_KEY',        'M5RxQyl0;0ttwq+<SP_?1Z@q3qD#y$IR(3uVoq9zX6M1#r-^4] i*Q}2)S7cOqDY');
define('AUTH_SALT',        '.U}2dq+~zHlZr;w-lqLB6Z$JahVOR#yRn,+DD?]jQCcG!)$>-L7D(ZjXdq,;C$xG');
define('SECURE_AUTH_SALT', '3^425UdBm680KUVAhwI9r=@o29tO{nWub4*/pYSRoIw8cwKyVo<)}C31OIE*[hLT');
define('LOGGED_IN_SALT',   '`<pB4jCBV>|VwksJG^bl,>)%.7PZ0tzxGX*z|cV8jF/E2mR5 Vd8$}YWv-br I{%');
define('NONCE_SALT',       '.d$LEx;?wBuZp.~0I>&m#:8:+$.C<<>n wSuqv3DW(dODFgj-PG1?o&I6_N8BD*s');

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
