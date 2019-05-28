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
define( 'AUTH_KEY',          'RV8[DIWas^SwZF{2Nk/>l`2RQ^v#l(nBQ5$Z$WAS_nqjv<sq%.|=r6tRiI^](S.k' );
define( 'SECURE_AUTH_KEY',   ':5~w{J%AU+5wBXRi3^V<AvV/pt91kJQ;%$n5i@pCsVecv38Cu%V=0Zlxh`! G|#z' );
define( 'LOGGED_IN_KEY',     '6G9,7Rk],+EW&F|_@CC4{l6MoGYL;SMAz>13j[]MIvz27_rB,s.<`~oTs,@m=UVO' );
define( 'NONCE_KEY',         'ml{KTjo*U_a7jc}*l:UtVU(`gL(Ewrv*`7A0{R 2DpKS7A1`c,0V|[o[> p7ETF=' );
define( 'AUTH_SALT',         '|>mrq`Jhi@l@CQV,+CV)Q`Z$7:QatyhSm.jR~=Z/+PJD/C/EZY:<AX(rO<fF1tsr' );
define( 'SECURE_AUTH_SALT',  'G28rn`w|5 _uzDR2RZncbDFkl]a_.9},$Wne$rZBmY|^W|:A=WJS^}~*rlf.w!KD' );
define( 'LOGGED_IN_SALT',    '[Eh$85l/~CQ!RVyZ]Z>Vm#plAcHR;s8Eg.<.qPFKfAnKQe6O86rx_6q0%DG<ueRQ' );
define( 'NONCE_SALT',        'Zn|r|;cY0!I4B^.BI/sf|)61u8yo|`Kfs$qL4%fuc2 8]yb:Jr$Q^dPC^l[Bbx89' );
define( 'WP_CACHE_KEY_SALT', '9pXFOs:*$zI~-AyPC3#5 *nEPERNgLD^b/XzTDF1A1D~X7FO:8/}~K/+tM}=rMh#' );

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
