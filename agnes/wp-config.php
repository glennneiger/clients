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
define( 'AUTH_KEY',          'oOs KhUrS+.Hxj9o^-XDa5R)9-|rA.@U4AaQxy&pR&v=s%#So |UqZUyH0R=Zk+]' );
define( 'SECURE_AUTH_KEY',   'CWx4w7bdW_J;T1z+_@[{,7.5g^{<f6niID61,pw>:5HQ?#Yu]=/f&p*/7|G]aN<=' );
define( 'LOGGED_IN_KEY',     'u%M/L@`TjHSnX]tFj}u,<+Ao2W}f_]cXGh4PU!W(UX(TwLm~b`$sne6!)FdO29 ]' );
define( 'NONCE_KEY',         '3f<kN&Srovk{rKD&oW}W]g$a>dF{k3rBdOIL]36Qs<]SJJ@cBho.Y>N02hv_)Eb;' );
define( 'AUTH_SALT',         'Y(SqYk3fa5#aa=]@1 =VYx~<C!}z=Eturh~MvDL3ozV%;w/wZS2zbC/6RRBocn$B' );
define( 'SECURE_AUTH_SALT',  'E9Fk C_(W5Rj3[Yd]YN%d|<3VbR_p;M9$NQmqgM_Iwe+^094{&M3pU{US|h<y(}q' );
define( 'LOGGED_IN_SALT',    'CIQJ|KpNV c,WMW=LM&4FDH|[H0C UoWsgU3yM=s}AkpcR(DxVjX/ -V2JkS53Oa' );
define( 'NONCE_SALT',        'Wu;t?(dR~1i>XV1tnPoKum)+H,T)2Xq6CR=LcaO,@V8RmU cjL<g9HjMub}(*?>]' );
define( 'WP_CACHE_KEY_SALT', 'ocZ8k~$g:a8]Z^x8.>1YdbFOs`pEfDc$c&SY*fd:~^eiq^LaIpX{pyu/J&ViCRxS' );

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
