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
define( 'AUTH_KEY',          '*s@#I&;o~v5Uii7` Snz,657v|te*?00pEF3uqt]R@=_+sQPo|5(ANEXb={`H)^}' );
define( 'SECURE_AUTH_KEY',   'Iuq}$]DlvYw_q;_vQIyV2C_dU?W<SpyU$DWqTLmzAxyHrnRa`E!@~n[6XjyvcF1M' );
define( 'LOGGED_IN_KEY',     'H96D W@)+/X0%Y(AxYbD[zadQH^Zpl=mNDCQbooPZ/kgj KwtT+D<Do$/EE|iJU9' );
define( 'NONCE_KEY',         'c^99DEq|.?[wC2#Gp_U$,}M,uYI@gp7jY{QaeSyR@F/W-qfa[O0!Nfih;^MXR;/6' );
define( 'AUTH_SALT',         'J(O#c4+:>L=e@2A=P@[kcoJ$>]HmrD1%rhk;7^qgpGYjI53xClbf<|E?Bg]|~S|u' );
define( 'SECURE_AUTH_SALT',  'X,(r([U!qPnbx@Uwszh$xn58c!pI5-^w.xz/X|j zj%D^%%nR_;Nqr`#sHJupfI@' );
define( 'LOGGED_IN_SALT',    '5T&0||kATt?[ucs;A`mwS5-0@}>6TnT {(,O7+@4cGnWvc9-ZRjnp1u~_W$3jE>e' );
define( 'NONCE_SALT',        '/P=X68s:TVZ;4r7Wq..2$o15acaZT1;*DV2xUc+TMV]Eas?8vl}@rTHI=B(A]UJt' );
define( 'WP_CACHE_KEY_SALT', '+3^+|wOCKaUp6B(PILMiQ42]qYbd]rrjap^JPE*sLoqWZG{tj~qxYU}7y/p_K<Xf' );

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
