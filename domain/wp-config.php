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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite2' );

/** Database username */
define( 'DB_USER', 'bruh' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         '%eE{&#LlC_=_xWi6Xm:k%2KJJq5x*ch2N;qH|+V@?2QMXhi1q7b hi;T{kA]79qD' );
define( 'SECURE_AUTH_KEY',  '$XbX>~P*X,;f=B3^[vyLqN6zEN9m>^`[OD6}H.$>j61|xI5]t}E!v%w|SR?Kr4~G' );
define( 'LOGGED_IN_KEY',    '^eU5t{>c,I7MFB/I 7;|KnTiEw8r!?S:@4<#+{5+KQ$SgLD&)B&W|k,I3h(d;Q.W' );
define( 'NONCE_KEY',        'g~5&q]c84b)!Pm#WteGT];kNw_FHxc,.R-wZ7e WNp%*Y~lX<NS##7_X5^;R@>+-' );
define( 'AUTH_SALT',        'n}mlA7RY;B=0Py1#%!Z&gph/Wk]2Q4Y4?<i}Pzy!7&iM:$P K_7~wk:fRY#ni1Xe' );
define( 'SECURE_AUTH_SALT', 'j6=v>]0[&e{-(|&P^*117:ux]q}Tlc85scp^@voK3nnW,GDhYDEdG)W9H)R2dOKa' );
define( 'LOGGED_IN_SALT',   '$+;{]$v+0U4;22q8w5zr XL&!,9GAddYioCHRoQvPwaIH,n)eR_^.(_K7p*[f31#' );
define( 'NONCE_SALT',       '.BFdMttOm^ks^d9mD@AfN]E:FD<kVVvc@ l||LTk-q,H%];G.FGaP>dDP@=oR]if' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
