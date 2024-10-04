<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'T~Z]CC1]0c5Qmc?|VdW<a6cE$j>IBo)?Bp#jQ;![Z1=>fim:*Id(D(dN}dRf|O {' );
define( 'SECURE_AUTH_KEY',   'J.>yA%^vBsTfQ w&_3BdV0J,4C#5&+n-)W#Z,<4~;1kE%sSL%O3=1nb?gIx6^O>I' );
define( 'LOGGED_IN_KEY',     'l@uYqMH4(){#=6sC,;Np}uJnq!7[)3,jl+l/qrtw@Zy<Kpzh:`_B96}>99*j]2;Q' );
define( 'NONCE_KEY',         '.N!V`VBs)C[!I<@D.UDE@&x|9KDu|%;?87Aw)LDfY!|eLUy#0,`(,`AoUBfVL<p;' );
define( 'AUTH_SALT',         'CzPk>OgC(uHR }-^@#[qq`QY,G0j?t2HJV|KMRhhpB|.&*R%Vz(ZrbjfII+PMwH^' );
define( 'SECURE_AUTH_SALT',  'IwY7fL!K&{Ap9?D<@y[ I={sRy/~E0rH4fu19w9W`HRT*0]468{A,JQ8FW[#?W-e' );
define( 'LOGGED_IN_SALT',    'LsqIDglJ5 z%6+*-*cF#dJ0;;~^t!)rV6[B,nFq`7e`;Ju[#vDZt=0CQ:KhsWi~W' );
define( 'NONCE_SALT',        '&iX6s^wPH0B-RpfwC?j1Mp%Hi?B&t}iHujL9zjfYrp)*;l}e*]48SC{>VKSe &`8' );
define( 'WP_CACHE_KEY_SALT', 'L:M`!A+qGC=:e;Ihjns*,0I&b,##;m,N0J[ qFoS]m?6F6jCF}A`Jn#@Y36@wPAk' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
