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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Invent' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '!rq8Z^gO_zeBUu!8xkz8l(>!v3NC!Txwp^Icnk^~!((b,+dmw$y}4#0b`~S+cvX(' );
define( 'SECURE_AUTH_KEY',  'r)Dd%,BZTFs0pL)Id)G/Yp6,5sF{v?rGgGpUU@uZpy2xoSA UHZ`a+eHHk>Fs7%.' );
define( 'LOGGED_IN_KEY',    ';`M6X#;Hg%sLO8,|iHFd +JD3x]{`.r:0Yg~*5S]au/GrWshhL G1qoWVR~M4}4}' );
define( 'NONCE_KEY',        '8Kv$M}+DZ_rWTKxN)O;{GEvXOkH[CatQe:LK%S|%F;noLu74)*i&A}@cP+*iV^h+' );
define( 'AUTH_SALT',        '{f1h6;r]!;]s#FpfEEj;*h%I0{V>uX*(|vEbW#8lovRNJU;F}+`xx#U#E|Mlf^HU' );
define( 'SECURE_AUTH_SALT', '%}rL kW|psr4>__+Im4dA*@`Ms ES LzJ1_oM6S4kBM0Lu,cu*p)nfAZ?u(6D:U>' );
define( 'LOGGED_IN_SALT',   '#Z:[ZaEKFc[)lpy+y,*U_I{AH5Fh?RfMo$89YeYZu,N@<,mh[*FinW~]g+kS`}Ep' );
define( 'NONCE_SALT',       '1O.M/0ARfhE)eLj_DBgnE(+wEK:+ACT5@Fz%f)Q8>7ky~v5b .6d#S(rUa-p~BQ/' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
