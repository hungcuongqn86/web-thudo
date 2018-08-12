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
define('DB_NAME', 'thudomedia');

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
define('AUTH_KEY',         ';IR45 Kw<`O9Rqxyf)S2E.b=X!uA]W;B.EDphyexg]s}=@=|brUa0u(B2WxOf$Ni');
define('SECURE_AUTH_KEY',  ',5+6^3g^aa7`&0w-b_NTKm/=jD`2F@)?/LSh&*#TO(nDN`^sT8h/e<WiCr;h3J8>');
define('LOGGED_IN_KEY',    'ZU(CDlmN$im@C:GQ:OdcOF326`xNb=(X8k5MzQyIG-%Gq?ae,;2&MDN9CzKe$)yQ');
define('NONCE_KEY',        '[V3aB9?#(h[kSi{3KBs{lfQGIw>5)`n^1cO)AH[bz!ePUXYp}*J~l.}#N2F$[vt9');
define('AUTH_SALT',        ']f_k>56J@R,m;P@j@F7YLCjKZk##+@+l70;,QRUC :^gCU8B5 :#Cu3vy#2kRyR{');
define('SECURE_AUTH_SALT', 'Av;r;%bxc*_`59E6N!8ykH`>B;_KJIEu/Y`+O^36SfS+L:Z-dUb x[38,g3[GtrX');
define('LOGGED_IN_SALT',   '**&Aklmi(=<$ouIoK }{TUXaVD$W4`e[.Mju/W4@pv7v|w6xyMy=zT0VXIW[Eed#');
define('NONCE_SALT',       '/3y;pYMm301o ftYNp~Y4L~}%fa* EMgaFOfjftsb5>3MA,]T8&NF4Fn%NIS_,c<');

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
