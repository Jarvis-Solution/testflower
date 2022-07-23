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
define( 'DB_NAME', 'testflower' );

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
define( 'AUTH_KEY',         'nYXB!I?_#GquogqK%P/P}QlrGiy.6n:7zxk1SBo7/vX%up4],&K}0S.16{aaydUE' );
define( 'SECURE_AUTH_KEY',  'KlZxnpuJVcJbhe?Vl8Pd<?6+vX0$W(ls$a_X2syVnx${O=&N};*xOQj;zieW88A=' );
define( 'LOGGED_IN_KEY',    'S}gye)gn(<VZSZnikQO.8j^PSRct1&wr5Z}Ng*XcBg22BS6q3dYV{2Idsuc6?)U%' );
define( 'NONCE_KEY',        'DX*xX<Z=QR6?E_lA=32OVP%j4e<bE7&?Kg0$}T&8.O~8d__@fyZVYo-iC,l,-bq ' );
define( 'AUTH_SALT',        '_PU><n(>52?#MrS) e*$?-^0L3>q?;rm`&0U+#1PNI1L1ZXFq/)OoLQ1b.[<Wn3b' );
define( 'SECURE_AUTH_SALT', '*XJ~/ztE{4q^MCw1XN=_9_PDp-x(TDp863R$HGS%bF}*oE,mJ{Q/s4 6A94{?cNl' );
define( 'LOGGED_IN_SALT',   '^jM#3@e|)%ax3:7[O/6g6qwZ7@*6:< `Sy|{>Woyd$0[=k:V3F:q_q~9Y!hGTj~e' );
define( 'NONCE_SALT',       '#_oT1Es!lgDHU{m/js}o;k|u1307K/w|M==yZqP+^SG_my*6#AueqTZh/K0[YZSq' );

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
