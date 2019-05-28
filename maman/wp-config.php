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
define( 'AUTH_KEY',          ';OmWsK{lC~.[t@}X0,>wXp|PWo~mIux?>psG $R0xh p[3 yrb2krFnbRAQyemwr' );
define( 'SECURE_AUTH_KEY',   'n.|ag$1^C~*j&!s%hjex_WZ}(ko%>ye|9[l3.D*rO2f[m+f< a%U$N=:hP*nw_Fc' );
define( 'LOGGED_IN_KEY',     'BawNCAa-XLtp~`yt~9Vk:Yblf]@l}0R1Xr|@o`Yg|%7B|6(-xk0S2f@G ptV[g,}' );
define( 'NONCE_KEY',         '9G(*{7mtvS#;e-Qtmi(=}BE0S-M+h{l*;9]HL*%7Gr`i]B<2k6Z4=3OWG6LlCv3$' );
define( 'AUTH_SALT',         'n%aF%`<Qbp::&Tk|07j2@/zR*vdUJ:6w3#2uEIMw:~@F)(s7m)^VAo+@OW5?OTP.' );
define( 'SECURE_AUTH_SALT',  'O(yA`%_kma3=bbE8ZVi;KtZ+.1nlV(XI-7^KD#^HLB*EWxmB-b! >|fK9tf[/oT_' );
define( 'LOGGED_IN_SALT',    '34mQL>r*Pxc/(i>p[H#Mak?mRbW5uOpL]~-`0_S~{G(aAv#v6b`x:in!|>}+*n3|' );
define( 'NONCE_SALT',        'v^8ac_xAf4VRgT^oMh,PbYAE{; s3wpC7hInl%eE~~yD3^7q#-.(IDw/7_68,$80' );
define( 'WP_CACHE_KEY_SALT', 'X*^CK|!O9u04isK@@!?CmBh6dZ,y ]Yw>tW QAujE^zXz*zPWprSVY}FPWul<gHT' );

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
