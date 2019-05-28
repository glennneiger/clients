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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', 'intranetuswww' );

/** MySQL database password */
define( 'DB_PASSWORD', 'YU64BJdN9jRyDhyxnyQY48kpVd3t4d' );

/** MySQL hostname */
define( 'DB_HOST', 'intranetuswww.mysql.db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'wDT1Z3qhI-EKj~f9,QcXWEiWjY9Eg3N]jvi5 (!7WuoJxbgm4UsP3XdGbg,jm!s2' );
define( 'SECURE_AUTH_KEY',   '(P=NkA/8l#A8I4A=-#zc6l57ykAmkF[G(_N26l[l,&-I um8U:H..b~frlz@rsy%' );
define( 'LOGGED_IN_KEY',     '>s%_ESi965m8Aycjo;I1?~rnTibUZQJ8TM|q$>}obsQ{PRijfhUEN`s0;sZ2Hgny' );
define( 'NONCE_KEY',         'rT~J&KO+4fsO?]!aToZo%ZQ+}Fo*w.KYHFP%W>4/ci{E0lv:}Ert4Q4._aM4n<7l' );
define( 'AUTH_SALT',         'Jzn3a/B]y]$$to1^s3!.16D<>mI=yp_2^50VsrZUXE;y>:rr|FVg`MtW:n?t)inI' );
define( 'SECURE_AUTH_SALT',  '4?t,]nBUX7UY*6d$L9`2O]$*XxEuC 9I{rmZYTy1,:`_Qd>sHwBzC+`u:WFUi-b)' );
define( 'LOGGED_IN_SALT',    'Q*Eetqzd.2?>o6S,/ME0YEu7=.@$66qSW{B8P=aD@{G{4Gx6$4Kp%p_>A,f3thK_' );
define( 'NONCE_SALT',        'xY/w<_)eT+u_s9j%G@#SX@=48~!TFIvI5eR/)A6`8jIXLAq4GH-haBVNavUYXIO7' );
define( 'WP_CACHE_KEY_SALT', '+n4[2nF#kH+q{6co:29dPI(?;(B-<XYzHDV.6|uT=|zn.rkHjzEm7#3>y4yq^gE@' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
