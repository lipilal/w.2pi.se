<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'w.2pi.se' );

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
define( 'AUTH_KEY',         '.G-)RhK(h((0o+kI[Kr{CT{PG?UY9B7D`}6-8;o6wj;/}v9a9yRV(U[&uJAI1(=/' );
define( 'SECURE_AUTH_KEY',  'Hr}]Zt;l%_16=[wq-9x7& ;,cyvqxJZLUsfrR3;N3@O9;[S[t14Wj]4SitzPX^B_' );
define( 'LOGGED_IN_KEY',    '%a,~po^_i5^4JAM;K-:E;W}+*ZF8WRN,nhd8X*Oi/j3t@AdgdZD63i?51#W@y-xn' );
define( 'NONCE_KEY',        'cWULpe#m@~r79D-[,A^;-[D11koE6F@8m#rZovgm& A|#9~7b._!72M YR1^F4+I' );
define( 'AUTH_SALT',        'DLU4.bZnbGUFCMdmK-wH!wz}_|+1l=(N.GV3WM_a.qyRO5#W4r!#8:nDr#[]Puf`' );
define( 'SECURE_AUTH_SALT', 'QR`T4:$7R,(HL3osR+)Y7Waog]M`|(3U7&db~O$%0[>pa&BEY6Y:*Baz8(ww7L^x' );
define( 'LOGGED_IN_SALT',   'a/+}.gLI4#[g6_VE_PtX`56P6~%1pR!u*m&]f26):nPmUJK1%9Q7u At`hPX1kc!' );
define( 'NONCE_SALT',       'j9}Jop4G8478%pTGP^gxd)|qGXYhPmA#JSVYjocJk3:sz@5=<4k)d`3U>T,&sxFX' );

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
