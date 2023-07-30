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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '.FKv/M0Wky[zpiOf1T9XrV--2p|fKJp$ L58TeQXu;`T^DB,)P&354G;em|vwJ^K' );
define( 'SECURE_AUTH_KEY',  '$sd*MyYVODaD82ToIMIb--IjlI$&w?eaCYhEQ>qs|X@sNL,@.M1; LU9Dm8y~w^b' );
define( 'LOGGED_IN_KEY',    'j_TU1<wLWRg7ww44diK75s$RZ$x`j^,2M}Q[cq`oC+hDkpo1gm)($/l=Z.gBD6=7' );
define( 'NONCE_KEY',        'Br:L3Bz)%Bp%r]fOV)@|YlA4tWh1R%,5pN{bLCt]nu@wj9j8POR=[>grZ@?!]M]m' );
define( 'AUTH_SALT',        '#^M*,=)$$J{NIhPMHLo:1izA}nU|b5A#[1LlVj@!Zh*c(Ya^EnQd&cph^rmTM;Vw' );
define( 'SECURE_AUTH_SALT', 'g.&vsvBY8*dBGZw!=0x{s^F/zRNUhcTkTe|-c`O&aZlweS`_:sd2o.*pBXunu,I(' );
define( 'LOGGED_IN_SALT',   'Z[EGR<G@Y*U|2hDK[L3VrS3g{5faXRx,I>(>x>d!@XKR#Y!?E)zzYM]ZAXG0s98>' );
define( 'NONCE_SALT',       'ATg5@D;0Q9>Y@r^1:p>&&iWN)iWs_0FUAt:ksMqoJ~U?1Un+U+w|&T.oNq(UK(%X' );

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
