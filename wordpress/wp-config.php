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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'n@IMNC]`/B[,!XpfUfG_@9F!{`8teN{4?4f<((un&Q43f[1lVP19D)7eM[KW&Feu' );
define( 'SECURE_AUTH_KEY',  'vU+nvw(To4c! Mh]g/Cc?7#W)glDWP5|rr>>lCv 2y3?b<UFO3;hsmE)SJKHgEO>' );
define( 'LOGGED_IN_KEY',    '3EN/&$#^;8<{sl 9g278OiHo C<Jb+4_Y`3E@j;AsD|9YHLPX,SX+0(e=ZkqmeOs' );
define( 'NONCE_KEY',        'o24tBx|#x?m*[C[I7Jw|_D.s[4.ObjhVwty^kJgC]]A9p7B0)d5-`bjLU3&7`U|i' );
define( 'AUTH_SALT',        '9A1Z!@|a0y[)3hbb/18@6(I[$~5hdQ7!HD0m!lW{[?=Kb<E3SK14~V~9$bZvAD#~' );
define( 'SECURE_AUTH_SALT', 'B`tCqAzyywq%UR~75C%Bvx^ gFgSUWk&=Y[a{jkm*S;%]L2eq(M=={(-uV:PGM)[' );
define( 'LOGGED_IN_SALT',   'lv/8Dc?w?dE@}8eEy>Bc57Cw.5ao${TC3>|YYIh{2%S!SuQ`6@7{=HdbyO+t1/S)' );
define( 'NONCE_SALT',       'x|D^OWCKf]~IdX?I6Bp0#lPs-0bp0VS7?L1lROX)OP3I!p%Oaw`#~0Vs3lf/RaUl' );

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
