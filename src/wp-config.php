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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         'HpkqyU(Zt-|lyOv!t*JwI1M!arV:!*YIaTZMEIacRed|8YuYQ_WF}$iR[9=N,m<X' );
define( 'SECURE_AUTH_KEY',  '/(rNv(+t-=76D`j={ib6p,6%Fu7.@vXan#R-9D62<Xc:SoDEa+v E8=4g.70)c_1' );
define( 'LOGGED_IN_KEY',    '-/]6p^(|W$h&6NXcxGreR-f5[b1f>Cmzd.DR.O<aa:uY?wayn+vx}S/#4:`B(+hq' );
define( 'NONCE_KEY',        'DM@OI39%6[h}x|wa[l?NJuMUzIn7bJ@RVAdwu}YE]^};k}Q1Wgz*yX_}$O}BFiwl' );
define( 'AUTH_SALT',        'oY9oH-9T(biLXedewcA*g$%d5J~M^,}L#Iicfu6xtJY#kkVW-:%r+Mt!_NJ#f`X_' );
define( 'SECURE_AUTH_SALT', '1n-LnN}U;UF )H*Hvp)5F8D,6[QBZDh|J366_z7eyn(`Y:pr33VNh7;M4D2rfr{P' );
define( 'LOGGED_IN_SALT',   'W#C.rVrk*}4eC/cGLa>!_?Iv[ b_U6MofN[mJnVQve)[E]Z4t]eO|Z.m 8<)yXy*' );
define( 'NONCE_SALT',       'RppzS~r*,^,5KD-1gS4{0)l##PoENBXkoTcxP}tQ@[Z[#l 0IsN:MEoW*7s{[ms_' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
