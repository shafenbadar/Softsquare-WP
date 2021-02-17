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
define( 'DB_NAME', 'softsquare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '2d<_!#*E_o.h]jI,B2BXlnY`q3HvHq!iIW&j|}-.&g15niC/K2NRh4);*/.B@?d]' );
define( 'SECURE_AUTH_KEY',  '_AMA4x@3$3GSX!`DM9H?LjW jAtuYOl&I51(@Zd*Zk.s_qIWL$*{stjDf#$OpJRm' );
define( 'LOGGED_IN_KEY',    'ox}*tU `KT@}M26mEo-D~6l9A@`rEKAuXFOhy`SA9H?}cV%rMp}oH`F#o{Z_i4GQ' );
define( 'NONCE_KEY',        'N#}&FH?*=ley_^2-Um{}1|*F-2#0}<]2A$8}]dGA.P$2R*MtN,[6KXFS&_>tf#*=' );
define( 'AUTH_SALT',        '8Gt2K7}r7hb_i>LZ<enZ|J2jL=).Z(ZCv: &`==Bwdd][n_6pWu3(<ALBu&{kB#b' );
define( 'SECURE_AUTH_SALT', '1IHwZMR1E~sm1h01.OMTs|]fpU*Fsu5)R?=>fb_u6QOLK^LJ [B`u;,&0mq*Kav(' );
define( 'LOGGED_IN_SALT',   'zlnd-lNAP`m{&M&nhHh4ZKqS[R ;P]yS@##tCsHo&F/4Eb2b#qFp!XQ|{YD78&jv' );
define( 'NONCE_SALT',       '$}O@pZ_%4i7%b_2/eZIp>P)<M,c6OVl7{5)kPKN<mUSOn)Y)mjgj2Y[w`|UPfq$|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
