<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3}s.BXRgxsx=k;k)3^eKxy$/&x!cY.;kksBEwE^m;c};SeDspqQ13rb@J-O0VfbR' );
define( 'SECURE_AUTH_KEY',  'qLmViF+vki8Z/r3VQIBNwP][3*g{zA)Dl-V^@G^xzhEDddhNfm$>xsSKsBn94{Uh' );
define( 'LOGGED_IN_KEY',    '_(wzLRKrR2Adl)6S~R<d48+*aO;6e;A<orJK7Qg^(v}GP~ENbDR#X@J;s~V:[BA+' );
define( 'NONCE_KEY',        'sH{xv@C,9q;<] U LLjO|rJ3G1WK;EkvrA6e+T.aajU=io7K~${2-}E~3dK1X)T-' );
define( 'AUTH_SALT',        '~=]5g9-OU6={hp>}1CA45JnXO6e91)]&YMDARK4Cv?s*:%yCM$mGSrP80,Q`KAQr' );
define( 'SECURE_AUTH_SALT', 'Xpv)1i|`0CK|#Tc-7DY~8kaom?g[}sI<z^j?WQ][)$b$!#VQEOOh9O;MA18>.SZ2' );
define( 'LOGGED_IN_SALT',   'f->nn)|HomI`#vIKB5]oXI})g2k*UWs[5E%6P,p?D/0|Oy<-3f<^/{:G}&!=VVfV' );
define( 'NONCE_SALT',       ';cmn7Y*`QE4u(%=v/sy#8M#*v7.pahL5ElT{*p/(S;wa(v;XmaH4)=8XAH|$}f66' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
