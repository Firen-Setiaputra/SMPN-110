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
define( 'DB_NAME', 'db_smpn-110' );

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
define( 'AUTH_KEY',         '9;#~^&Iqm87t:b|]#* WjZu@!-qslwE^gD(QJBP6nqTTeu6`d,y> 7iF{(.Bml<<' );
define( 'SECURE_AUTH_KEY',  'Se.${d|AJv>finl0wxc_LOLksR,/9}+5-+jF{1wE0:1JqvNt*r Ufk4gBPOawzjg' );
define( 'LOGGED_IN_KEY',    'Pj_1TXt`4LvyLR11Sd Q!gVEeeRBg]I!s!aSq]urU@d#U_~}IPC^8+g!o&$0Nq8:' );
define( 'NONCE_KEY',        'SV<r6G^!Ww58bQ&GV#yg!B!^A%i]ZNNa+_bqPH0`rf;sSn,Z$pu|0!u[:Ze2[F#D' );
define( 'AUTH_SALT',        'MH8Fjbp((9(< O}c/Ht*P_c+Yx8B-.1@](DJ5O}|4,7%=JiLqLh/f0h-)WOBd :i' );
define( 'SECURE_AUTH_SALT', 'J<tIDYm,nP4iprH$%T9q5 l>p]?]<.2`K[:?OGA6w#w<3-9Pq!Rw!#f{{2(#S$sR' );
define( 'LOGGED_IN_SALT',   '`(M]-H|Y BgH-UKz#npSkNZZ%QZsL|z^9c?v3]G^^.[=X}[-~[!D ;L^LmnlBz{N' );
define( 'NONCE_SALT',       '[q$mn86I)Ze+npLEtNHre%[I|zLi+=SE[1t(q!qP1ufzBLF%-JO.7Pb_,|fsqcYR' );

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
