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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u745471757_qbc' );

/** Database username */
define( 'DB_USER', 'u745471757_qbc' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@q1w2e3r4' );

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
define( 'AUTH_KEY',         ':Z7@TGU/Wgza:gbjOO;;1g+e9LEgmy5b@S:AVN ,,Fl.s`ok,9>P%Y&mG4,oa#$I' );
define( 'SECURE_AUTH_KEY',  '}S^LC~a*2!Jfyzfh)~R/Au^-@g0mZ# b5`9VzsEJu4jF0CDrf&Mi-%ZI>cfo;ku#' );
define( 'LOGGED_IN_KEY',    'k9Va@P|Pj%!CEZ/r Qkp0T/]oZhFb~<U76qG6_*U]%@.- K e$0 BdiIVpQ/`?8C' );
define( 'NONCE_KEY',        ':%h8 q5%mb`Hw&Z[$o-)D]-8p:E9XbDW1W] 6+g=s|b-4+m8>57.UqG69b:Z~NzG' );
define( 'AUTH_SALT',        '3Nwb0ie)1;RN,]38TEjVX.7Avr3Ze0y-XYh-H{5eX*N]skZwmO3aT/tGo6*rh:fm' );
define( 'SECURE_AUTH_SALT', 'y!;d yy$WNu][J1@Rh)r1{CI{U0H3+Q}2D*1v%yBiMhw0DD}L)r@Sc}#lh$[|BWV' );
define( 'LOGGED_IN_SALT',   'VP.=(bt3!+;SY+V;y[L&vMm@dwA6Kznuz1p%-D>GBNIl3]5+_(d J%3]!cQDx,i5' );
define( 'NONCE_SALT',       'y}A[_%[w:?!XP6NB0_ows3iv8c)*]xs*/rll]oz&ag&0+8TvJn@FwP9GL1]&2m-!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qbcdb_';

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
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
