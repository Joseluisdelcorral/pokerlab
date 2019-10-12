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
define( 'DB_NAME', 'Pokerlab' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BBogclwRcS0SgEyVkPQJka2F1DopqFh3A1c3HhE8kurLvy4UlqtlS7Bp9W7hD7f5' );
define( 'SECURE_AUTH_KEY',  'uTri8kaxslV80clQqktrrdjhjMuZpYttqnaKi1bi3wuVXELrRsusnPymbjU461AY' );
define( 'LOGGED_IN_KEY',    'aDwESJMdFSLKLrh4no57Z5fnhKVyazilyiqPS2oSEZKozFapKdRweNlRUgbNrqd2' );
define( 'NONCE_KEY',        'SLRjOtcQD4z2NTUQdRVYmKBIKe8fTR00kenXv4XrlfbHWVtkAZDgaIQ3JtTBsICM' );
define( 'AUTH_SALT',        'K4UlIsQwTwlhHrHLinxGsNTl4oePSblzaBmE7MuB4heRo2aQ72FnFrO1MQHnTCWH' );
define( 'SECURE_AUTH_SALT', 'ImUPB61z1XRnxEGw08xlHqNVdkEFJATnrXtpxnM1QPv2qSxzrNn86SRmqlcNmPMB' );
define( 'LOGGED_IN_SALT',   'KlAtg2Q3dI0GVj8xUGCKeNRdHxDFuoMEyh1dLQsED6PkigEwEfoNj2iqyIWNctpL' );
define( 'NONCE_SALT',       'lfqm8AQhphwHbTLMMzGNoUxUbcF7pQGX7lbi8eCsuMwVFpxDJ163XH8S7SP2p9Ze' );

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
