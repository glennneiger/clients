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
define( 'AUTH_KEY',          'D8[} qU Xm%wP7koe}Ud*GhYn(D,5NX]ZdNWRDm--<26l%S(3dJ 77$836xQX}6u' );
define( 'SECURE_AUTH_KEY',   'a|GfM}lEQ7*&>=]javp$zeE?mN~00>iT-tr~r75yul<pf)W;m8BUPVG4?@LZ.B|%' );
define( 'LOGGED_IN_KEY',     '8eGXvcB6dE$Pa>d,ea3^6a.#OwTpNp9K@64~|FnyV<}X|{>S;OFnoP]TSe<>Hw,(' );
define( 'NONCE_KEY',         'zh:,pO2p^}m|t?<Ih4vLfus{*1& {`4Mu!ew$QZ?--OUKi64XAj$h3j9,4<=$ Og' );
define( 'AUTH_SALT',         '!O& M*mn[,`urx$:2D_PK4P44xf<9<9*4P,G|>0MKij%1H H9t-jphY?,q:m75U8' );
define( 'SECURE_AUTH_SALT',  's[V(f$jc7iNiv|l5qM8Vw7Ge}b&nQ,L1w$_E^>LFDTBbq]^O5/IN)DChz&Ayz,K(' );
define( 'LOGGED_IN_SALT',    'r`xG U9w=K`GOoI@0XD,E&1VN}%^FI*narssJ@nb5qWL%YWF9Bn4o*Ih0)BM.6 h' );
define( 'NONCE_SALT',        'a#WYgdq@bF]Q[w~*d&|hht?xs*!2:DlAf<ZDr0YIzx)=Nqf?QvR{z@9}gJj.mfK7' );
define( 'WP_CACHE_KEY_SALT', '$S<%p(*fxrrX{OWj[32K.+GnKw8|n]+4^i{#!TNd<O1NtzAVG>Pkf8.+U:Fg fWj' );

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
