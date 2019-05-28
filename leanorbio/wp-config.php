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
define( 'AUTH_KEY',          '}q!8nPu(n,^{9m`xol:tM{b?o,RD kR6yQWwnqFxu=6Y4W>N=0D-%/[C.2b*|U9{' );
define( 'SECURE_AUTH_KEY',   'vQ7/Gp[6HqWv7_SO2D+3Zt<8+zKz/@zy1x6=)/Co:xD_7`{I^<M+[B(,|rw`H)kT' );
define( 'LOGGED_IN_KEY',     '2(M)5JGohBT~Mm)SH|z)V8Kt94.[WO9?fEnb{z?r~!WN&zw*jt(ta*|!$9jg;Lg7' );
define( 'NONCE_KEY',         'z?[;O3EZ=5=RrZeZi3Z>8y 8N(5]FnEo]mJI1-OjftnyF>-P2/)ieC`z/Q+EEp$Z' );
define( 'AUTH_SALT',         '_~p@e*d)U~zpTM`u}P7LZBj?wO~c/*KvG@-#VzUs_6WcUy:;9~okQPX6f?pz)/j&' );
define( 'SECURE_AUTH_SALT',  'Pi-yx1d=v:G4VS<1HwE]^oyR&LmbHmvi(,LkW]`Vm059f7*}si)OIc3~t+Mjd> x' );
define( 'LOGGED_IN_SALT',    '`/1{],+2/Sn2}27@#al&FEs?p[JK7/bBEO<EFkm-[bsGkVGnARRcAt x+GFSpZGv' );
define( 'NONCE_SALT',        '`4/<<=<~*V A28pPwz+B0Aipk!C%B$n4WI*#fZZ@I=W)$Q>/KMw>m-;w+x&lzlfs' );
define( 'WP_CACHE_KEY_SALT', 'KNKA[m:gwIt(xMW?2*4F1`hb9C*&~4D~N,u~vWrt#o qBASg-eVIotP^yntf]F=k' );

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
