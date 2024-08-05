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
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         's.uD85ozU`VfMVk59NHa|FjM61c&?|1} <+_@-FY1d9YDKZ.x$oLyku$3Es }L;j' );
define( 'SECURE_AUTH_KEY',  '~>Buyxq{HXpC[sGz*7WW_mz}9NITi^@-+ScH>wo9(ABM}5[ND9P:!P3y%IpNC(an' );
define( 'LOGGED_IN_KEY',    ';;*6(!(g,w.qtr-9=83p,:=yXJ{:_q9HYJS1Q=XkfK/&)PTIx;6=K6GSD*7lp3Ij' );
define( 'NONCE_KEY',        'GWNkV.3%iV4Cn[~2[!0|=SJk.G%2i?[@5o5pRRf2n<x[~^$Kg1Mp,9#5}rrRHz}U' );
define( 'AUTH_SALT',        '}ZN$-FmCVW.d_ulbeSw6<J35-bsi8uU7@Z59465H%xV3H/++rk[=S!hGQ5t3YMPW' );
define( 'SECURE_AUTH_SALT', '(2[q~pxUL=Q@,68kc}HmC3.+_qf)60;)WoP)6Vl-DmC&CIJd7C;WX8t B3YSQ55w' );
define( 'LOGGED_IN_SALT',   'zz+T>Sh~*phg3^bOM3qw6ZOQTFcK.>9leR6tI8|2I,qel7;Mn&5G:J*m*r;L}Mfc' );
define( 'NONCE_SALT',       'gC?uefb_N 9H(j.<;McCc1dJ0[HUn*u ~o.2JAj9bM}Y`5`Nv]Us,1M-z4- O!i;' );

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
