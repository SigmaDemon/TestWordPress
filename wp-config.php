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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'm2xH27xHnwO)hrf{$`DR`}/QX!)7[4>cKaT6jq)B2 D*eEX`?lqsZn0F4yE`Ys,.' );
define( 'SECURE_AUTH_KEY',  'Ovun!FWqwgX;N/4 a09mOb4U^>tC2st7#mzXNDRqu*1zRY71VB|%S GfMdOV-QGS' );
define( 'LOGGED_IN_KEY',    'z6y{2Xvzi/dLRXM%pb}HjT<)R:1,rsVfbjF,(*0IJoq{<]hnvO(i|Rq%mQKc2$y4' );
define( 'NONCE_KEY',        'Da)4-6d.{vzrG<iPx[`2XaS7:yE4DjXnYp_E-0CJ`NX(Pp*Y|DL/7*or>Q/5i .<' );
define( 'AUTH_SALT',        'N(0]U|H>Bk:nmJ7uFKhr0n7]w!_9|`WJ3(b891ChfQki3aBDx.1D~bu)~AHE$d;q' );
define( 'SECURE_AUTH_SALT', '4.nX l#0QHo`4I}4n8/{o{|.b->fSX=k%dsRmM}s2/Dha[SOn/_!:8kS~!Q<*D2n' );
define( 'LOGGED_IN_SALT',   'U -N,3: <A<-lc##VD(p6HVD29Y[7tNJ+Y<|emdJ5]hP:_9oYnn~.1`slMM~;MNk' );
define( 'NONCE_SALT',       'M}7c%7GY@VP9yV X5U4u-4I~YJi~(Dfg->,h6wc2J6kamHi@[M0hotFBahBo/S4i' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
