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
define( 'DB_NAME', 'wp_web-bite' );

/** MySQL database username */
define( 'DB_USER', 'wp_web-bite' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qwas' );

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
define( 'AUTH_KEY',         'p*]pIN0da]8k]N#oD,;E9s~f?EiU@8d=Yr$Hff{Q}oQkUfT)<?&/*z4Uz|lshW.S' );
define( 'SECURE_AUTH_KEY',  'os=eYEHaCOf4lC}?8+fUL9_EJt#4ZTxHZk(6yYUSx(jE]wy)o@S;[*j$w*hd-Rvg' );
define( 'LOGGED_IN_KEY',    '9EoSy$W/!UQCtN,0)DdTckq%LhTUw&lK14EA7ohLHb7%3O[we-_h+$`1>W5P9jd9' );
define( 'NONCE_KEY',        'dtmk}poAUS?].&w{zvmgQX!8yUAS>%PeWW0,80N/,Xs~AC1TjV2KG*u#O7#E&t:n' );
define( 'AUTH_SALT',        '4F?+XgGMYU7$K #:,],: *Ovw=Tcs72|3@JsT6uNqz%YjC^d&}<W&)dT#{-y}[5>' );
define( 'SECURE_AUTH_SALT', '0i4H/H-%CRB>.<6ylt[i$IvY!AS[8Q8;GLZ[hRsKUqe3FuTf~Q>Je)g*jD$aAm-`' );
define( 'LOGGED_IN_SALT',   'W).D9oE[q$-U#MvvF7q@<tQImd18dptRcA~mSI:+g$~9j+zbo.2l3<jX@fBXllzz' );
define( 'NONCE_SALT',       '7([d{%F)o>2_#3(k`q4>Q?i+jccW&C_>UQJAtR-O1|4@)3>tLB]t<x+|F#-Uvnk;' );

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
