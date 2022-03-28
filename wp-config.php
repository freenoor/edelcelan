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
define( 'DB_NAME', 'edel-clean' );

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
define( 'AUTH_KEY',         'hyTxnwWreD7MYyT60nVpLoxGNcIdYFfReAs64bdLtMKHDiv65okvaooPqfOytoWq' );
define( 'SECURE_AUTH_KEY',  'CAXvawgdkdS5VLBaKwYgFWCcapqE39H9q86PgS2iTwiOtjsssNAga2s40K9TaiDe' );
define( 'LOGGED_IN_KEY',    'xQzxL7DgIfxBR9h9voQkF93AmQZydXuZgk5QllkfgC5uTo2hF0pQjXzGGDoXWNiR' );
define( 'NONCE_KEY',        'rhQwY3063DOx2hItNQ01wrR8o9LSWAB8G5Qm3Sr6EmkBUHHYWEzXywZXX63e2AzS' );
define( 'AUTH_SALT',        'qc0HnVdyx1ggu5QGrw8NOnsdVQTW2PJplfepUe9i3a0raj222IGuwbtiZPxRax2M' );
define( 'SECURE_AUTH_SALT', 'B6vjaGkhmi6zAboDNDpNZyAssnHuPhQ4umQy0eYdr86HUvANJRHSX16KtbLfqOMr' );
define( 'LOGGED_IN_SALT',   'StS80oXDky5F1XDtvYlVBmugujQLZkYTRU5gz3pvR0AFV1MVfzEG9VMhHOQ1KhGZ' );
define( 'NONCE_SALT',       'j1Yi9kO3A72JgP3qsl5SWwklmVTVqprkjTjxYxNohXHu2jmFsvQRSEUzaC2HvlxG' );

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
