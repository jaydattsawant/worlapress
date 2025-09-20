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
define( 'DB_NAME', 'sawantxampphp' );

/** Database username */
define( 'DB_USER', 'User' );

/** Database password */
define( 'DB_PASSWORD', 'User' );

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
define( 'AUTH_KEY',         'n4ggE>s<BE;ua5bAO &p-_ 0*(AR}>YKZK/`&L3[hJ1HE1VRAZ]z+y|xaSzs8^Kr' );
define( 'SECURE_AUTH_KEY',  'g>T@*dI}PJ$yzeYP,!d9iwm$X5^P,2GetIDK@S%P^BuvI)Dr|:4$S.M&)MPfX`rY' );
define( 'LOGGED_IN_KEY',    'a@MB+Xf@[+tQ7g_V!QWZ@F``qn2!m#Qy+Gp?JDz(L% wVx1PYfRD0(#tG.u@H![_' );
define( 'NONCE_KEY',        '*tC;R8n7&AS!5;n$R8T}3,;[-SQsj!2T6(]R-m=!F.S=+{7TVS4O8-_f,SunuC2<' );
define( 'AUTH_SALT',        '%W~Z^pL& MYf~R[<!oXkCwob>Q!HpWR&#9Ec:-F5zv8!LVz{FXYf+v|pCp$c4zmO' );
define( 'SECURE_AUTH_SALT', ':G8?:D@n3g(x]38)6[54U4vuuD)_XB%0HC_DN,}7T;s)+0*WfJ8J][#P&u2wm{[M' );
define( 'LOGGED_IN_SALT',   'FNO,ewzkajdEanBRW6]Rc,4?q5Q4jw<nl|jwN3qT,gE!XkNrB0fs.o<*|{4)6Vv[' );
define( 'NONCE_SALT',       'i,5A|3rl$7;6>;M `PS3$VqJw)eTvU##T6wH{((DI!`nxEkr<95$H y)teV^6XLv' );

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
