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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'undanganviza' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '0lWaoWo3bBboV3fs2p1cNvo3AcomiijkJ1w1lF9SbpHli1cEGROlM83jYht1yG3b' );
define( 'SECURE_AUTH_KEY',  'vNBPaRzCRz74Q6Pqto5aSCrzSO20wStWJ5JVYipfMjK7KnQqb8HFvrWgfTxQ3TOW' );
define( 'LOGGED_IN_KEY',    'SGaxgNKxUaRMkkRh1F4RATmPDBAi0LqErlZgLosPK6XaWI4DCMdPKjfRVfDavJ4t' );
define( 'NONCE_KEY',        'L9Bco2hiaVJAghoLNPJZ85tfSlsJXAnuXkcQCpCAFvnGSA94YI1SjJe0W9rEEJvB' );
define( 'AUTH_SALT',        '5muLGFMM8cH9d5WnrgCVxBeNhRsIG51KPD40CDhVDzyCdpA2wFe7ISa30CipJ9YS' );
define( 'SECURE_AUTH_SALT', 'vsFSlBDQZ8O8UKUrjmpbfAa0HizxIQF8Ape2QFTCGuu8zKBjOdNqX5SGbGsCxymM' );
define( 'LOGGED_IN_SALT',   'or3Mew0lWSfZuHUTwxN0sJ7Yippw3aY0jWX9mJdfGlyTQ7HzbklFG7Tj3o6oEGa1' );
define( 'NONCE_SALT',       'm76PUKlg2Ws3C7nBCxiRXCeucMOEhTCDRq6gFGW8HUGPWYz4p8bRfRiEoYWK0gLu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
