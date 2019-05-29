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
define( 'AUTH_KEY',          'p!?xB-v?&yO OC%5l!m%s^16BWxm%ti@L>gLS(C*@Hr:?yYw<:#Z^dUtHuGe{LLp' );
define( 'SECURE_AUTH_KEY',   '@uJk5N= ;t,MFimY#~`Cs`@,Escteh[5A`i6:@!WY0 ly><d?M2qNS&zavLlv;ap' );
define( 'LOGGED_IN_KEY',     'w>}!~&i9UdJ35sD;m-5:%$WGb$8GdjAU?[h?H.90HmB(dlB^uu]+$QSOQD>sf[5*' );
define( 'NONCE_KEY',         'x?{A_DMuDxqup=XNLIZiKqPouO--/qtc<RGZ^=V?/Z>/un]BJ:Br%wt)BY(hAV,y' );
define( 'AUTH_SALT',         'zd@6ej2}qXHq{(}h$M#y*Pc1tTT=4$t}{A]Y9`FWsvwBBo@O,}_S0*wo2ab7s>pD' );
define( 'SECURE_AUTH_SALT',  '7ntcaD9leS|le//]d&-kaS2[:/pLPbA3nEk2Ift%6%xhZ}=va]z8g5MEc6JUjJ>:' );
define( 'LOGGED_IN_SALT',    'nia?Wzhk,<UpvC$`]9TSAs$*_q&HbT9EL7OCib!X.Q=QF0&mn>0{j/e<5EI&k^rL' );
define( 'NONCE_SALT',        'JXiM D1/vPGO$v*6q]x~Je1b?(G2];xAmAqdX%xX6*WJ+aB>DD5/}?hYd~~/?rH)' );
define( 'WP_CACHE_KEY_SALT', '4GrL[]2BL6EV|DrE;.tc?[Gy5hA+1U?Q4U.7XX]`f5^h7MS/E36Vj#UL+Orqbpo%' );

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
