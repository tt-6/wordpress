<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u305758700_YXdcE' );

/** Database username */
define( 'DB_USER', 'u305758700_FymSn' );

/** Database password */
define( 'DB_PASSWORD', '8S51iwD8IK' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '|$L&WN^ou2V!Zo(:vV+vmsiqJdpqgV!uX@mm@k!uDbG6M(KG-ZD]RNxkaY{L#nhy' );
define( 'SECURE_AUTH_KEY',   '<` V9wr[8EtmWz|2echnB&X#h9R-yQ*<Wl8Dny+]X!f`N`wcx3d6g7D3W|#X~D~-' );
define( 'LOGGED_IN_KEY',     '>1BxG(UCc^fYrzYXA{P{A:HoSFc(P:40j*CzHt^jXT@WTZp:bhr!-)teERIXStU}' );
define( 'NONCE_KEY',         'eqRfXCS3?F7 d]z>`fRFk04y:Oj~S}d@OqEmWh>h:R|wUGCJwOcAbAuB2G,/~XKG' );
define( 'AUTH_SALT',         '3`@;v0SKY6Zd*w?!1>l@KylgLT?PyWDGRSK.ppXewuML0kOj[=<NWJfX>2Yx%?GI' );
define( 'SECURE_AUTH_SALT',  'P$s1QWRW+-(MDFljkwHgr#EoOKTnU-Tjap0YYx4bB=Rf/Zrz-c/XhEhEqi]|Wc c' );
define( 'LOGGED_IN_SALT',    'RNcy4/v56n6<9b+8J0T)d^vtO&=6Z2<zia4ao-2_eLON,^wxg#`*c%#_|L1>34Fd' );
define( 'NONCE_SALT',        '>Rf9e65,0DWK3|F^1TSM}^]>-N9Ab2U~x]M~[B&0c>tV:mNi0-k6_!_d3MG<4inK' );
define( 'WP_CACHE_KEY_SALT', 'Z1-!!2|0qUF72BiNW jFnEk>2qj_gMn+j.|dy{DP>Mk|D>Kth=iQG$1&u~?[,Z_j' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
