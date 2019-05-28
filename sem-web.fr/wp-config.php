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
define( 'AUTH_KEY',          ':&WI1^8<w3OQrvDysRw/3/PfNb81L4mp]$:^r}0ztyohPR6mF9`srK{q<VAD;}A#' );
define( 'SECURE_AUTH_KEY',   '99-^T-tDh)Mum,hU_NSGc|1hjhJC%Q(&wnE%uA(F9aVSE6$xD&oyb.Zv,dd1`Y,3' );
define( 'LOGGED_IN_KEY',     'rLl}EB1#& }pq. Vd^=3UcU4/GW*,q+Sv/3|SI7PN!S;&.{5/7de ~0][{=Z6|E,' );
define( 'NONCE_KEY',         '_khE_vr<CC2*$[M7 =528,4&^aEIES^#asBb?&i0<bA_I,E$=+@-O#-T{,X6g9wt' );
define( 'AUTH_SALT',         'ek?a1VhjztCQy.oce*$]X4L: ]#18o>$x{xufI_C|y{4/_v&)a/&xUx~g)Q:&x|@' );
define( 'SECURE_AUTH_SALT',  'xg$IxPN3yX]ef!bbWiN%xQ^$ckXQ]>G@mA+>ot;|*d]:G#WhX<rdju8/I6&3e39I' );
define( 'LOGGED_IN_SALT',    '+LqI3/_a8j(nI*tV}!pg$3k[[{,n&P4~hSx(`dtB=H-i6&HlDj5-s yQs)QNtmik' );
define( 'NONCE_SALT',        'OD>LIgMDJf,FN6t f(N~g+5Q=eP+B<:4Z3<qx1HP]!S3P@^7!tDCnRTb]l{,nq&I' );
define( 'WP_CACHE_KEY_SALT', 'mGwSJ.7qzwRHj:3JI4[#p-zi*4$!<Q3s H;cP6,y0vqA:yfl$zP(63cd.g429Rp ' );

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
