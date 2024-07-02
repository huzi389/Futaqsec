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
define( 'DB_NAME', 'futaqsec' );

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
define( 'AUTH_KEY',         'FtQBc5kkJ}?7!DX /F#-4C*q3QJ]-lB8rbL=4@0*[W%d`_BdO?`T(JKi5*>J@rAQ' );
define( 'SECURE_AUTH_KEY',  '*)K;M&%WT J_ER7+Oju+KJ:7Ws`-guph5wItm3ps=6n|pfLCODr%<aG0Z~M~gLL_' );
define( 'LOGGED_IN_KEY',    'UQ8mrfXDKGU(@Yh,Z,#1>JDu v2WKeVcD4-E6s8[>26C d!o{x7W#qokB6NmM0%j' );
define( 'NONCE_KEY',        '+gvQRj  >}WnRjRi252{##YYK,x K%*I4QE#|n0&~ 4,*cY(f|G <B~KbBB,o~uN' );
define( 'AUTH_SALT',        'W>?Z05_p-pPx&M9W0bTwv?^e2<`T<HU+UVG(AKr>$3i;d#m`JC:@l]&4Ep^:M$XX' );
define( 'SECURE_AUTH_SALT', 'h[R|ZQ=4oTw+tjWV(,x]QY0 @a$b!bsXCXZ)T1qE{:KqDi|g-MP@^D#LJ!cb@bIM' );
define( 'LOGGED_IN_SALT',   ',hE*4hgUFAhW@_Js4E1X2vP*A6xqrbj6[$wQ;42-[4)?$>6EQppWNb3;yQX$8A-+' );
define( 'NONCE_SALT',       'Fe qvY@/&wQM1@]R4dEJ=d?IYIu4<E]B$Qk+VEs}f!`^x~OnLSx]RWj-&Ps3=b6F' );

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
