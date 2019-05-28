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
define( 'DB_NAME', 'intranetuswww' );

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
define( 'AUTH_KEY',          '@EQ+RaVX> 9E|M[)ARwB[h9r>M#k2u& f2#u(f.C=B(F[aKH7Q*YYjt0!P~3e~g[' );
define( 'SECURE_AUTH_KEY',   ')]A4g&GTVHj#-&;pHkmK@]9]`)xY0Gl@NEkdZj~[Ts$i.g)ym]!_KIwmj:y7QCHP' );
define( 'LOGGED_IN_KEY',     'L-:~m@xm]D)[aF5LQ]~d7byCQ{j+3-lsns41f#72kNHZvqpxn=<]Ma9D_LUQHWv|' );
define( 'NONCE_KEY',         ')BnA:W{:aYkm~+bQ8ws5,SIN;e,bgT[e)%.dY~jvA;/UzR{uYw<r5w>lV+M!j3|E' );
define( 'AUTH_SALT',         'H~<33Z^0qi]OCUn^F`]kK6-{+}`Fd&K6uob*UI)-QJ!lOH;+}Qu#Z?A=22^y},$}' );
define( 'SECURE_AUTH_SALT',  '-9Cku~4M_~ttl4+DQ#`mcFNDf{$A5+1 8x%#Pi4}z%Kx](wtHWd8Lx@f?m+v{ngJ' );
define( 'LOGGED_IN_SALT',    '@{im>f1{%k0,X<#P2tj_L7T;V|V+>ytI0 hPH2L9)des6>7ID&,0YhG %vTtoi5T' );
define( 'NONCE_SALT',        'k!F&G32a8C@V<~ziHTH3>12cQe&&$oW$6txWKZ]Ed~)_&2,|a,J*(A6u[Iue%s| ' );
define( 'WP_CACHE_KEY_SALT', 'k_*bYF,j7}-^z=1j)n5)[>|ctBR{+jMJ_8[tKmFEi,QVS~fUD-`ShKL%hL4pa%Y>' );

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
