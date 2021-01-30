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
define( 'DB_NAME', 'website1' );

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
define( 'AUTH_KEY',         'lSu22sZK!)qFG%Y:cl{1X@}K&]1[Jv-,^G5N;O!u{kBH^Q.o(Aj^,F2R1%u5A4e}' );
define( 'SECURE_AUTH_KEY',  '?H,1RsIbgfku%r:j,pUMp#?Lg^DQ>W};n6{w%qQE{nJznIR?Nn+@|gVdpY_Z#vLN' );
define( 'LOGGED_IN_KEY',    '55l25JxG6VxwB.mTZ}IY3s1n[]%]J7xe^qs3 .@@hukZ~JW8%HHHLuE(11([Wfz}' );
define( 'NONCE_KEY',        ':7tv0~>+Pi/yUb9pWz)J(,93 $;@J Qj=rj?~MWQkbII+h$Rp;&m07*}U5#2IuAm' );
define( 'AUTH_SALT',        'c=={Aq=DloKy>+2{[OUi7 WzS!C2!/D!)0pW+lu}PXPY_20]Jnnzfa2=`sgXDk>t' );
define( 'SECURE_AUTH_SALT', 'N$HrzvuaAo5T6k9 x,B(#_yoN}^!l28;Di<1|AOo$mm?PD0:dq<T FM!TD.8}:Ua' );
define( 'LOGGED_IN_SALT',   '|yt)w6!bY+5.7I`,.q6#9?n@t[u!T%IRz^yLIG9(EDSu2sM;B?Tu}#/pBu06!wS}' );
define( 'NONCE_SALT',       '=$Pb73a{c:NiPHM>@=80S5ti|KLoQ,!|ivo7-KjvBFtfUp^qMVkN?9h,d}JuB5OO' );

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
