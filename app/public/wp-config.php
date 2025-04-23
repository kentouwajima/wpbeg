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
define( 'AUTH_KEY',          'H~T|EErmdH0r^|a*VKxc>Z|JHRBMz)=;Hw&u?ENKg7tA>;n|s}&6Cck~3;YF>%BU' );
define( 'SECURE_AUTH_KEY',   'oD7NO&H;nlr(ZyI4[t)FM96:Zz9T:O^S:DaG#Rr#DvP SjT3G<(hY{K)oQGlq~`i' );
define( 'LOGGED_IN_KEY',     'm{`$kYVqW1Ru[d~2A7,H4Cp2YcI[{h;/_a!~Ax3[2XS-&xq>P/GXJu#$k*:[jC 1' );
define( 'NONCE_KEY',         'BT)~g{u8HzY$&joe}VQc<_~{uw&lH,_57+X*|6gTbSV<gO&gKW)=e%{s~{3oxwX:' );
define( 'AUTH_SALT',         'C+XgaBj+A%Qt?,eaWiA^66AYG.;FfBK5y}4y:bAy q8Z|ZqSX{/=O^$,e_mkJWX]' );
define( 'SECURE_AUTH_SALT',  'g$^*?PI*^n2xKS7_kbN#3!WS=38(/g,6h%G ?]~7.ed:|%frG`rlBv:5T]`2e)xk' );
define( 'LOGGED_IN_SALT',    'Q{3X/a9!c1;nkvt7zVX>q%f&yzxO?7r]dB`K#$d&ub}}WSXJ*($n$dT=$b_v2%p<' );
define( 'NONCE_SALT',        'i_-eCF^[N;J~P#[]V$gsrON|Hkr`Wr8io{7yAP7a[Y+|nJZep/}aEgv4<mV7w?a-' );
define( 'WP_CACHE_KEY_SALT', 'L4oIe%oO0EA&3E~qVv~okZI_p$a%{A%JAic]ODDrDV1rO,?r$S%tq/fv)HSn~5#w' );


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
