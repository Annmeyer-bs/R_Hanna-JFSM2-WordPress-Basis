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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '.2,Fc#M#2|g]KaQ;%;2(l6DsAjhdDy^E,|quA,Pp6 I/-XpT&e)K16.P?v,mzCa%' );
define( 'SECURE_AUTH_KEY',  '4ig.Oy9t+Gk^qL$lDmc4}WAv/%SvC]?*<eJN27yV}gb).#azD6K3`@&:gb**t0J%' );
define( 'LOGGED_IN_KEY',    '3W{Oa+$G3+It$9[h]=?qN9bnGn R^lf&B9CW>E3S8G@*D}jk.4<R^^EPrA+]J:c!' );
define( 'NONCE_KEY',        'O@];i,0gnZMl*dF|M4}:birEJ<-^@<Ua LvI )1i_:{jiC#iX?p~KhO*K!i>%bT;' );
define( 'AUTH_SALT',        'h%~EEt %!|(]7okFQZ~<G;GkEU&p{ n#QW4F/1J]HEU6C?K: aWS`/]]jHFVV>.a' );
define( 'SECURE_AUTH_SALT', '^:.rxmnD+++#)Attp9w`-FM3Z_P)r@nnu!quwrpv70i5 2s-S]8)Yp!qZWE_azj.' );
define( 'LOGGED_IN_SALT',   'eu&jJ4-:24T^tf$G4jt3#e5,tCBd5i:mK!S{{kY*MEEwxQJIjk^zrAzxAu&ib|v!' );
define( 'NONCE_SALT',       '8Ht5|Pzb94wmUY+taTVI%3muV=uZCsEn$K4)b;<+NuBIF6eAlos^ZI=xlq1iGk[u' );

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
