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
define( 'AUTH_KEY',          '/)Jd}yY/}yki7<W$GmiP[g$Uy2zT&r%jFe~RFwsMI8>Kli)Oe^?.H#VoLc=4rExs' );
define( 'SECURE_AUTH_KEY',   'CYw5)m7A~vU-tQ#0PxB0Ho%>QI/jCP+I>)y3e;JG![8S$o]Io>I^O>#Ua.>fM]uo' );
define( 'LOGGED_IN_KEY',     '_ki,LkA!1L4Y?tnk|_Ft+]W:C#nB5?KzodoLYJ Tkc4g$W{z~k7zbT&~Z8@X,ES(' );
define( 'NONCE_KEY',         'fRf#?.d_~! b](uGx[~%!5CD1WD,{KojC/K[+oQ>?o>:5il[,e5N91nk*rr@-/}x' );
define( 'AUTH_SALT',         'E%EZt0v>R[?pme(hzR*Fs8JD>)17xO d2+qWIvc^i_8^M~SZ#1AB4$sgbg=U.CKX' );
define( 'SECURE_AUTH_SALT',  '>RS@L6L-D3PW/D:Zv-&R<Y)B$6RfW)JiKrxDgHdj8RrvLm|301# uB`N(j{#9,$.' );
define( 'LOGGED_IN_SALT',    '}4+x$+}v`#e;N}r*]eA:U;(cAzQ,;Pcy?N>S8Pe|IR:Go).iL]tPCt3t[r/w<y84' );
define( 'NONCE_SALT',        'w?XPjD^@QB<i8@7zbs:k~wCVxKVRTi<n70L$UgBY*%Zu2c|.wB!6]k$!mNQ=Cz>3' );
define( 'WP_CACHE_KEY_SALT', 'zrJ]2~sJ]sR}~qdUMlz(>Z{T6=X}bu=u~P`{*-CwwX/z%(P0!.mmu37wye7u*_2o' );

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
