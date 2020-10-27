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
define( 'DB_NAME', 'freakcroak' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12341234' );

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
define( 'AUTH_KEY',         '*GK`Pda<etuck)`:?H&` qh@,7Es[[GCZ(=/2_--77jJ}/P|*]V>LNfTP@mn^q{^' );
define( 'SECURE_AUTH_KEY',  'SP>be2I[k[@ 3u&cjE5l,j-*H~?J!QA1b&x HeZ`.@,ff(h7}R9L}!<r)dRh+BF3' );
define( 'LOGGED_IN_KEY',    'E_#r]PFp:!{Id0+BO2:=!bs,%uJEb.k-Cssj:hf935k_e]d&KHtt+ng?5w&0?VOx' );
define( 'NONCE_KEY',        'z.@qI26K!Yon#7R]Mw!M7Min8z|9{2gZ_L<Qcmzq;T5;eIYlMG.:w#L-D_%2yyz&' );
define( 'AUTH_SALT',        'exk1XijSD#u.J|XgK*Y10)bh4lU} w!7/jQH;V= Dk]`269n2ysdhisbviH6Zi?C' );
define( 'SECURE_AUTH_SALT', 'I7;4UjQTv!&!i,7cd*ONWhCcdz&sm_KD.Ss]4!8hqaHCJg2Hr-)|l>%DTJmz{U@H' );
define( 'LOGGED_IN_SALT',   '3^!MP9D&#wJVQ]m8xKtQO_v~trOY 1>-t!Mv-Fp|oRfVz,~-S7yWlD:e8SoTh3*!' );
define( 'NONCE_SALT',       'C$M@@d-!+yKAga)Q?W7|lv3BJ!e}g7D[biDy(1H9mv{:;V~4@S5rv{p>J)F/rb|l' );

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
define( 'SAVEQUERIES', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
