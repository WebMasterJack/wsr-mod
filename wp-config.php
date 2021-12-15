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
define( 'DB_NAME', 'modb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '6rcQof8=){!7Q}//nmMSy~OXlq|kKyTdY}6N2Ycxwh!5+bjLx^F} Nl|*XwmhUI#' );
define( 'SECURE_AUTH_KEY',  '{Mk 9wZx) ,V &F/pz 7>F,35r72.WgteoS&3l(,{Ys!^t5?Hb$a>E^s*(-63)k&' );
define( 'LOGGED_IN_KEY',    ' uMX9Nbp<?i(P,wrW1~~C0jq[sI/<yHy!~r=m%t`r2>WwBb>Pl`h23y|g:3/%*X{' );
define( 'NONCE_KEY',        'hmieALW%uRORa]g2NC<i.k5,Ow,7LzdE?rYud4|xT^%)S [CA.<<ZjrW,g~YvaN_' );
define( 'AUTH_SALT',        'j7 ^KYYB ,]=d-@4y5znBWx~97}pb9Ij-znn&F~_O)ZW%x52?HM:|Wx;v6Df=K4k' );
define( 'SECURE_AUTH_SALT', '|.hwN12#~F*.iQ:hJ!])A).}7rwnkr7}u?mr)6}WKu$U(8GBYd^Pz;5?<V!9g&tC' );
define( 'LOGGED_IN_SALT',   '&xEh#=$S$n:%cjJcjFck@*>#r$`5Pp!,b3UO%Z7pL||_@`H;C=h<L@y8BC~EK!!?' );
define( 'NONCE_SALT',       '~5G|Izy</UurY#)6,F;s&!gq[A?mp{CQ%x+oU}6%!(0_vB/8xxux,fy^FMD#M9C`' );

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
