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
define( 'DB_NAME', 'lms' );

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
define( 'AUTH_KEY',         '0%ef@Vt% _o;5z|h&|)7?]IQVZwR{`Abgjqh8P+HpVE0u]7-gC)3w{J;^:Y6u^TS' );
define( 'SECURE_AUTH_KEY',  'nH(XlIo@f;|x#O.b#zO{Eo6=+a81BY(IZH=XHa1c$.1VwzDrd)Km1:CKNmP=$na[' );
define( 'LOGGED_IN_KEY',    '.UL^BA*U6993YpaR02&03T0 iz#@wT?JJLr65q9+vH%xSPG|tb=BxsZu0e}L*#:D' );
define( 'NONCE_KEY',        'HGy-[{B_T=4(*(rty_A)qqh8&peb#Bs5~VFPbNB{lWt:*?!r!jOobLi>zCqBB#yA' );
define( 'AUTH_SALT',        'dU*R(ji=ZT91GZtTJYJRex<S2j0wfGRCng*?R7-:[uJvQz2aEs[K).lY-^0eKv^L' );
define( 'SECURE_AUTH_SALT', '[J]5y,C}8kQn4[TL>y~BK`!J5j5(^GQg?$o&CpjQI,8n+yjNjhd@-1>8>Szu>V-(' );
define( 'LOGGED_IN_SALT',   'QTWtNf}!C.KIX]t|?aQ9x|f[SF5Oj|ycpQt:A$09/e=+X?dBYQE+ RNUJyu@sC6V' );
define( 'NONCE_SALT',       'n67Y/zqhW#AB:L&Jr1GabDHFI&avg(}N4zW5.)<iD&psnSU@)q17$C/.yg$^s|lK' );

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
