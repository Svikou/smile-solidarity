<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ong' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'ug9unS* ]AI0dfz<Cu l6;(10{2;o}Wojm4fTmknxT>FE{xNF.>r{1aSf]5 Jts-' );
define( 'SECURE_AUTH_KEY',  'g6 =m~F]|F$l!34Qu`Tu#AgZN`;8$6)(,`nY]7m%W0{:y(zR,W$V,+{] Y1c0pFg' );
define( 'LOGGED_IN_KEY',    '{,FC%<U{&+^Zr!MW~GM+&:Q(sfI^%M7_1Z%i)tm#D6$w,M-ysaxx5zH+>Zgl^dEw' );
define( 'NONCE_KEY',        '`XW02&Q9M F uN5?HW;=_l:B9F31QS92hFcqo#.2& c7Vf*P?CyLARK2pHya&e L' );
define( 'AUTH_SALT',        '.fUsTj+w06IFU7V>. _r&:Vc8Z4i >C>L53LIv >%vF+&fBaLYf:h3.$?8:;Mmx ' );
define( 'SECURE_AUTH_SALT', ':&n>yh2~9 0]<HCCA$9Fz~Ikm0@y&jxM}XI!C#]h|lv 8!lmjTU`+@jXh}Jk=#<B' );
define( 'LOGGED_IN_SALT',   '9BC0B1|H:LBPr?+AdX1U+iya&fHyF~&cf[v.zx|EoN6{_<pvo1A$,C..mWsx%s>P' );
define( 'NONCE_SALT',       'wjEWH*GavKus)sjDT^<Ek:M:mUJh*`LF7KQoXFjU:Gb!a[LN+;3!)F;71IrE!r&M' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
