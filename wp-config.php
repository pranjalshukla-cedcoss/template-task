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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vgQX/47Giz3T1fkdUgqGnYkX5UO/UiEVT4m6EqjIZmUWNl6YrcWe7ZO6o2uILrAGPP8Lkj5ICWGlgvQFKBh4tw==');
define('SECURE_AUTH_KEY',  'RzZ7mrZRNRdPIwkMArxrZN4ydlE5XqViI8/V7mzE5Tut5vz6GOjvoL1+Kt58XDgl/WNL+PvJh+6Y2ZNPdT++jg==');
define('LOGGED_IN_KEY',    'i6WtYRH8k6m4b2PacLCzEgmp4faOsl0Xppx8alm2dn5aWUzdWhVnN28RAm+uj3nSm/SCwYzaPqxeyGYTgD9y0Q==');
define('NONCE_KEY',        'yPhCC/dHZL52jWJKw89LYTFERVbc3HtjI4JXvlIPeE9UZqbbaqkcfht6w3XJR10pLMiVtd8hrZdxGm7OOS+H3Q==');
define('AUTH_SALT',        'Gmk0IFVup3bygjayDuu7/YmwpM07WPkoSrPrLfkYNgmLS/SDXkxwRN3jBEubzQrtcwl/KjokggUvuf+PXRmEAw==');
define('SECURE_AUTH_SALT', 'RdGSdP6gerNecnRSFKL7mhpxP81pGHDG0O9+IOKU/STCAQ0VGgHQCmbLETyFEavXxEkBs0T1LdmQlmW7M9wXmQ==');
define('LOGGED_IN_SALT',   'RSEF3GwK0djYkWp2TpKOpEJAl6S0P95LYirqYOdg8tiJgLlNqVgxf7ENYEKwBypY51+oAEWngto7H7uvQgztMQ==');
define('NONCE_SALT',       'UhCByt0CtzmqUuwdVO089YRJ1j8qR2pynThiR63i+HQTMmXAcP5MoCtJ2y5M/g3c7yXDfgvISG0PZyjksClgCg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
