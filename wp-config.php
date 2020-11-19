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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bikes' );

/** MySQL database username */
define( 'DB_USER', 'bikeguy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gBgKX7vGSyF7u7FP' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')wQHj&:##j?0{`B1V_`wikB4~[(^_}OL},VFkf+C*B48$A` .+Xage>Dfa;E^oJk' );
define( 'SECURE_AUTH_KEY',  '#jp@- g%OGE_feCETtO+4e5[#s_Mabh{Dj7:[GkvMS0$0RaPCt)`${@nX+3a6cy;' );
define( 'LOGGED_IN_KEY',    'SApo{O=Jj[80V7VsqyMxL*9DyNe29)cK?jMpAa6?`x&oiAb Gz0riqQwHNKtpjm+' );
define( 'NONCE_KEY',        'L2dVo|qh&71NWo]+TOv6 rAC<_ 0:Qpy-HHMs_3l9rkh#O82%9,zUUb8%rd2;s1j' );
define( 'AUTH_SALT',        'W7)*)QaeYV2`&$~k!2YQhi%wJOeS.VM3hk3GOZC!2btk]<@}u_s2[e=0/d]ts2cG' );
define( 'SECURE_AUTH_SALT', ' oX)Y(P5(tF?q!M1UEP&t3gn7{Hlh+I2^~=iTamSTMBG}LwGtuXr?)?R8giDAX%@' );
define( 'LOGGED_IN_SALT',   'z4YkM8*)8K-M`4M8IN)ZaYRsGlcqu;>qEVbt~d[i:BQfrAjw N0sB,c6.X4m0[jU' );
define( 'NONCE_SALT',       'E1B(WM<~fH1{t{Q?J}3Ok?syXHO2@{:+-FQR0|(ACZ$*<Sg7>kzc%Q87b>8[S6ET' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bike_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
