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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'kek' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pep' );

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
define( 'AUTH_KEY',         'COIv::1x@.tacbU{Z6Q6g+g1c6epms|l|an9staf;,=?Tcu2=Lhb(ehL/z=8Fe6Z' );
define( 'SECURE_AUTH_KEY',  'P~%]9@,14Ak77)qX9Bg|6]:en@nN/a:cnU9f~@D]}qd<x$2@8,mjkm9TSqiYYJ,B' );
define( 'LOGGED_IN_KEY',    'M!SmnqJ_x${-S@GTkQ$(KQH]e{c`fdvw6dZF)UymmaO$e T :up @F))($m=iaH:' );
define( 'NONCE_KEY',        'o8]kOjdRZBoA@8(8B!nQv0$b=nK}>XO#YR{wN/l9|3M)V6^LK7Fmrw.goO[/n_@;' );
define( 'AUTH_SALT',        'HC[nRdJd1?P%*{UheJkKNNEWr@UM`TbVKsT*y*I{H_|H/sin7^v`J[>-JkUdz I7' );
define( 'SECURE_AUTH_SALT', '*dV)C33Yf1Knrwc^*0R]TCESp*0G&aq*!JU|d0TbM{TU(m#g5.^{.[zSF&D%|?_@' );
define( 'LOGGED_IN_SALT',   '?;o5Ww`A(IvmSF*K4k]=ANIH&K/Y/Zx]&{+|uRb[]hpQPs!92FhS`9gT6_&d 2<R' );
define( 'NONCE_SALT',       'wy]lPPpn~.D77&_NeG0G|;U %gwfB9D{6zjcl=pMU[fdpi??w&?nfZ-fw/D_*28@' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
