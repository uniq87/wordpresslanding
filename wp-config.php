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
define( 'DB_NAME', 'demo_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ';Gm6{i/XE_<K{r[)I{J8I5JN3IDwopvyA@*28x:q`NmQ/1kIH`4KVW&qvuA1haW3' );
define( 'SECURE_AUTH_KEY',  '[~hFNxP:_ICRkOVftd^qn)08-NsCVxh<4GQ):{`PQoV!R<s$@xRr!C[t~&#m)(KA' );
define( 'LOGGED_IN_KEY',    'lZofue(Jn$YV@e0gd?q}Imi#gaMEGLx)p8Pg?L0}u5p=PFl5iP^6T8XkFT5xAPg[' );
define( 'NONCE_KEY',        'kNIo,px&Nkg:Dvh#^`D3!_QfIxoLNN*xCZnCPtW(VDt@l4^![$NHSXy)qgqG~1gm' );
define( 'AUTH_SALT',        'Db?EtA>Bn{$U}8K4^};Y9FJ@@9)-|pHX{^1`),i:%aJnZL1(xXQfsZ]tGfQ0>Uk`' );
define( 'SECURE_AUTH_SALT', 'Rw}-D-EpnybKEr7U>Pdoq$_i#6w;>)?~#>}lvJ3 kAXB9@lO7XK$h=K5W7}p9F|n' );
define( 'LOGGED_IN_SALT',   'Rq N2<K95%uL;W<.wLF{Qe{ui|Z1xecc +tFF_9$a?*4;n6aqt]Ua2Hd4D]`OMd8' );
define( 'NONCE_SALT',       'CGMaq>(lJ1FV.V$[mh!6YyCU-z,)}=cR0d6g-)-)h8?BcG#$9 <DM6Lh43.J9,bS' );

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
define( 'WPCF7_AUTOP', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
