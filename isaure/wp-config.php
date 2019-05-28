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
define( 'AUTH_KEY',          '$[2:#~0OuvU5i?IYE$;.xfAXen%nWy%&7zl(%4<?I*:W@H<4hKT`m)wI.!Z[9>@m' );
define( 'SECURE_AUTH_KEY',   'HXBmLu03v@uwc5iOxfse7_I@-muT(/7~n!GHjf%6^wg6DRNlZ&GLPE2RfY{v[ZW<' );
define( 'LOGGED_IN_KEY',     '1_<G.xPJF+rhtYdZF:dw0xOVBgvRQiLFJB,-bakZ;C/tLfRDMIJ)UtK=n@6pm+Q$' );
define( 'NONCE_KEY',         '3,lx&Q+j;fmb5C#QUn{wA51V7|63qD8Gyid9#vdLhjQ&z#`Ky^/QLLT`Dt}!(Rx ' );
define( 'AUTH_SALT',         'Uo2=X8+^9B>o-P/IeVszx]Il#2A+:3&:M5eXt<vCu-C)he@6v{jIX|m[dw^0^U)t' );
define( 'SECURE_AUTH_SALT',  'o$&jKBa1jWulWx G#Bnv^0VF =(o^FF_pd$;YLH%0W-xIjI-@{qm%6S;Zo5Ivx;;' );
define( 'LOGGED_IN_SALT',    '@H}.xm~UhQiU E3sH0wt4|d/m$i1*k[=yfuV><*qu5afC?c[Ht3_JRNEz~19{2}t' );
define( 'NONCE_SALT',        'Q>%<k$s[Saip^;2+1W#YNTs,TbR+sjxHQCwCb+_8JEhCX|#BvY L#Q07v_tjcU=,' );
define( 'WP_CACHE_KEY_SALT', ':c4C*qQn3]ykbb}v; i^ >Z$,=xI!#>M59sR`cjPcb1R>:AB%yORI`}~8mh[Uuw~' );

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
