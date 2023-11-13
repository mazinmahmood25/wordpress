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
define( 'DB_NAME', 'studentpaneldb2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         'B2Bz<vc;9DmJ^,I6A5q,>@U{psDV/VXC Ro;srjpAbmHa+8RKAb5HXrEr_.D;&=9' );
define( 'SECURE_AUTH_KEY',  '3STLALtW/t_#fqMmwDX%F,;$.4_)XUNB>(jz2eI`D6K)K$#DET6JFMPQQ|y@g0Ab' );
define( 'LOGGED_IN_KEY',    '!wz7?4/7IrX7qmxsLfjlM<(om7a7Tk!VMl/ /Zj6yU|9Fa=q$`HPY2xxj;nc<0W#' );
define( 'NONCE_KEY',        'JAF!eQ7I{Sk<6:zY5h9,bn-~9=2WQZ5[t>ebf8I%ji*4CVN<p%!V08qDLkt7QX7W' );
define( 'AUTH_SALT',        '63$Fv_zG7bl70PJKKpy{4<Cfx0?EEDiwFjh!T@fZB!7]7PwZ=ydKCE%VU|hC|#;r' );
define( 'SECURE_AUTH_SALT', 'guOcXHs&1_^X$SRGSp>d6Ug!C0qQZhCGdoFCG#07LKg4rLx:l0qQtQ_ZUtc;OMr3' );
define( 'LOGGED_IN_SALT',   '5]~_EC|Vp$<rCqi|D nPt8QL~q{B8L3}7Y[a$(pACe,$[LfQ34A=}C7*Ohv3e=w{' );
define( 'NONCE_SALT',       ' iVC(B<e(a3HNx!.TEe_Q.FoAd?i|Kf<xR{m6mw^o9n9a;{M%z.SeV(fN Ulcj?5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sp_';

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
