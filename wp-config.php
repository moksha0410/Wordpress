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
define( 'DB_NAME', 'Project' );

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
define( 'AUTH_KEY',         '1D2~i+ovS`!8.2^qOYE&tIQ+%N={h],IB[{Y/qu9#.Z)a H)<pE+sNLYc]ZQkN5d' );
define( 'SECURE_AUTH_KEY',  'N%Q|L|/%m?R#tH]4:7+zXXx9~?CKee8*JPYEZG&9q[Bl99J8@{OF,U~KT@uareeh' );
define( 'LOGGED_IN_KEY',    'a=!Am($u@uCB5o!hJV3B>N}AdDPylUKCksB[$`UbB05Rvn3%-1}`I-@,VwKPr{+o' );
define( 'NONCE_KEY',        'GF#Nwk)Wzd(KD u?d(_5Au&O/YNj4onzR=TSVD.v,^D6VMtv{-;Jk754?GPT]@zU' );
define( 'AUTH_SALT',        'AaU*J@9%[gFg:C6&U@<(n`C:d}]1~AY7W0%:<3&u~zySUzWpfR-@_Z.D1J(V^opt' );
define( 'SECURE_AUTH_SALT', '[uru-7DCr1`-YrA:ww`o_5I_2@AuHhs7_SH$j?+t}f?-t,$-0gmhV` HbQ+alsor' );
define( 'LOGGED_IN_SALT',   'V93x7K@N)h)`n.NlmEppD_w,hWr.~,}7~:6`q!C-HM9/ ]UD3r9m)8F%PBk}&[*,' );
define( 'NONCE_SALT',       'xd,G#*#LEsw!@2)7E_^ZLfDc9}-wdnGcLu]f/Sh+mHZ3;F5jl;/G&?FCZ5B`EZ2 ' );

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
