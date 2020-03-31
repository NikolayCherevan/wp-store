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
define( 'DB_NAME', 'wp_database' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_MAX_MEMORY_LIMIT', '128M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B+`/M5EHiZAQm$RGMqX$caDfW^@xe;pr|pVv7Tl/yxtuhkh=++Jo<<pKJ*v<EMA/' );
define( 'SECURE_AUTH_KEY',  'vsf2vicrGFwh&Ssup[M+)nl]Pfu1zP[xO#_C# ^_I70}LhonXoEyS7Wmw<E~`L/{' );
define( 'LOGGED_IN_KEY',    'iF>_/]a?<_#G!Cbu^yjYV`?9Dmpf4Pz;8&WS#b8xyK!Wc3#[MFT.lo; x@-}vY,m' );
define( 'NONCE_KEY',        'RcYStirP3w-p#H2!aWD[0ECp|i]j?ZOfhH5)S5P?2]R:~EX$~R9dX)51<J@8K*~p' );
define( 'AUTH_SALT',        'q#moZ@6]2t#CMtnt9X]yH0mSHzhpyL[D&KP,hnak3Kp=tDlx@cI>2KKy~:+g_]7h' );
define( 'SECURE_AUTH_SALT', 'Ctz-~e1)r3NebgPROe[}}K%ki/dRDRS;2R3<DPcwTI9B<6G_E5h$7ThSAVhZSKxC' );
define( 'LOGGED_IN_SALT',   ' HM/G?$jC]rD!F_H? x~4>1W.rEHo^Uh^sX$- =Eb<Uri#c!7(Rc@sdBZ=<v[?o]' );
define( 'NONCE_SALT',       '%vW}dN3,{WBs4,,{?1AZ+hlvsS_>E6/.nw)@7n}c(cKPd.k.2`>*9.FFm=2)~[yj' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
