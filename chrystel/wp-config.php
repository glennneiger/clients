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
define( 'AUTH_KEY',          '@v>Bdw.y#sFE(0GXR`zjRk4*gtwn.?;llJ{do^Kmj?]Np_4*!c&.(v?O@i`e?GFq' );
define( 'SECURE_AUTH_KEY',   '/]T6)D{D#Z%0tJMD!F2UzRGT<n@Mhm~5Cm9Q#_CTjA?zhzIRsRTVPPI::0t&lF=9' );
define( 'LOGGED_IN_KEY',     'k59GEx9rm!0?5JB*QXV_9v|&WDc6=%WE^2[S$)M(Q7vjYel8B{ty(%G! Hoi8Ska' );
define( 'NONCE_KEY',         'KbW,-v9^;#*v&mW,pR4zbwZE+95!rf4Kz?0d LrovL@eWcc8p2mm=*=$2>M<OHe}' );
define( 'AUTH_SALT',         ')>6&-s;R!-B)&2(tf__bPu)rUDo:+}+GgCf55WoDl=a0e4i8n`/6wNyMaTD%92jw' );
define( 'SECURE_AUTH_SALT',  '2*1z*e*3!5`t$:{c)6u]UPrz}rtmnJEa<j #&|oQKLS!l#Mwn0^#yR}(J4TT`!g[' );
define( 'LOGGED_IN_SALT',    'Vd^Qiho?=52yn <K}4Bv{VJ}=wocT(65N BkSI]`IU%t0ssse1pR:y7#;|3)7&75' );
define( 'NONCE_SALT',        '*4`v4l?bFetA{5g9MqzDg>{R37u/#4w&Cj^6R^Ozu/EqSvq#1Pak@_v ;_=C4Z)R' );
define( 'WP_CACHE_KEY_SALT', '%ma]k~vB)?~3$>;[:z#2%(7!:c.N<(~U+sE|fD_PMttpXvYC#QIj8T.rm;$b~bCb' );

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
