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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scale_db' );

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
define( 'AUTH_KEY',         ',X!+nspz|wg9{f>`hA*hjZqR+)aJdP%w!{4Z#rmErEh91C699uLHE|7#.Dxa7{i7' );
define( 'SECURE_AUTH_KEY',  't[x8e}U7PRIW`L5ar(3ZvDb<, hLwfY+5%1*:Xe,|MP>Er eb%yp!1itqZ?(1OeQ' );
define( 'LOGGED_IN_KEY',    'wIZ)V~%ocg,IzjK9:>FO-:%&DHMt*rhCPu _%]&?V2fb9l(1Z;i3!Y%?q5<Dsk=~' );
define( 'NONCE_KEY',        'jgH,^&l@Gp@gEMsm|sVWNmT`izTTwH*xG_xFpuN#1uft7}+z&x_[_pivQ)gFw&5T' );
define( 'AUTH_SALT',        '7BrO(F~JIbNj)PPVKC#T&:/1:t)5[ES}S?|V6 zra)I-yDQY1+~iWUueX)J(qLp^' );
define( 'SECURE_AUTH_SALT', '[eMgQ1cggJ=@H&Z~=jGZYf0Z2m?M$n<$0#C(w4_X;U#aI./.*/~UV-?}{UlQm~~^' );
define( 'LOGGED_IN_SALT',   '/mlBq9S^<pTSvt^E(k@EV0$fZ1ByRD*3tbLe-i$[2V{m Cf7oKernkFgx/O-?p[j' );
define( 'NONCE_SALT',       'trN KgF48pPIhVg:=lP03Ow(bO^&P}Z9fST 6sS .1_tOo}Z,DXu!=H6[!^lvwY|' );

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
