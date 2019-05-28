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
define( 'AUTH_KEY',          ';qv!^KA_#!rZa/Et}LXL(hL_QT}J^Tj,p9V];rl-m/BFUnv{#/IAMapH?#F.90|~' );
define( 'SECURE_AUTH_KEY',   '/mZ1D/S-M:0x)Y,{r)vsP+M89wkgXJ42;EEFC>~jC(z%(j0i2vq-HOL9MJ^j-bF)' );
define( 'LOGGED_IN_KEY',     '/MW8:Xy?ZJ*#Gaa wwA_Qk}.!,}W1yJ-k@MJdB&$sRHBrzx$v4xg`9z?)+H=/8*q' );
define( 'NONCE_KEY',         '^!s +D !kp[VRpQ!;=HD(Q.GT@teZkYzwy7kfew)U9InH`{|*r,ZB38C:cTy-=S<' );
define( 'AUTH_SALT',         'kI|sY`u&[;L,plI1~`P|KC0d[A#A7BTHV<eOAfj@<9=6=8G8d|<e#|XJT=MbQ`ux' );
define( 'SECURE_AUTH_SALT',  'xY_|wNiC4Nu~~Cr1nX(CGHF`xjJF .ocB/FhwYjPGnM=L{h!mDcB0~RV-/xl.LX)' );
define( 'LOGGED_IN_SALT',    '.uVU-!:byJqh>DMrczx4q&D9j~TueA4&:1|c`YB+zI!g6ade=}Ikv<E$(`-O%M/~' );
define( 'NONCE_SALT',        'Uv;Q5ksjbZ:yi>fci7Mpz29-[XMClX3%vbR6IPQAY{zRdS@&GF%&LVM.~#?LELsJ' );
define( 'WP_CACHE_KEY_SALT', '(WRguyE`Ms.Q=K*SqAKvjtv#bvaR>ca^=`.zDq#l>yo}Fie_WgmfbvZa.Z?!?fr$' );

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
