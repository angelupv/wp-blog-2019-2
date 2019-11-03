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
define( 'DB_NAME', 'wp-blog-2019-2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '1a1185b22cd00da90eddcec32c4f004196e88e00f4b1f8c9' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Se-YAX`MG(Vf@$FE)oz~DhFsGbIMZ,!n:v)F~&UtJB6i$,d~/0H(3Kfy*kC=A-JG' );
define( 'SECURE_AUTH_KEY',  'q}&7e8~&@U1,CM&m-n}l Q)k(oNvfa,2)IOPa4v9.vU;]Ikjh?hzQr&VX4+=n(;+' );
define( 'LOGGED_IN_KEY',    ' +GuIDmQUz:ER#yuRvjqf=#8wSr%-YpdU-<NHXm|$9qM8H`[-+;[?]N~6l7h<z.E' );
define( 'NONCE_KEY',        'HDL?_15MpK/3cCWLS#2.0}^6sC>PV,7>>|RGkIP4VPAOi0,VS8/rf[@}N6_&[o0[' );
define( 'AUTH_SALT',        'bEdH_+9Omr%0*l@#Pi5sC?aD!yG9j N0T.Dm%C93mo5e&RH$M2,#GY,I^5rxR)wW' );
define( 'SECURE_AUTH_SALT', ';d0<Kb2(+7N^Z/xm{g0xL}2P3,tpA)g]3_DiTR+`dIjM]RepB|5O3[WD^NXoz7NQ' );
define( 'LOGGED_IN_SALT',   'QHl.^^nI3;-PKV+}R`|2VGN`o~dc!#Jd!Gxx{R~*HlLy?.Nyv!wzrNh8aBh#h=6{' );
define( 'NONCE_SALT',       '62v16Zq1=FbvJAl]>vJ%-v:]2X`,#w_Hf<s-%&H_SpDYxP-R)l>Wc-%=E.0/Cf70' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
