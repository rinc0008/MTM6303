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
define('AUTH_KEY',         'iiEC3lgXP+ONHdGBzhFKUhJqceVARsLYOoalRXdVsPGkQFioTM4jBNieTZ0OmUJMJRQ3WgwH0IT06OWkqTfb8Q==');
define('SECURE_AUTH_KEY',  '670wbP4ObTILitVAK+ZXMKcBKdetErA4Iqpo1XV3buL14TuVCjnsTtEP391W67v7+gpTTt10kNxMZ45sxmRUSQ==');
define('LOGGED_IN_KEY',    'z6m/ddrtO0ZCmj+j9evUC+md9JDZRUoiWw5SNLoCnOs+eCw9oKd6gFYM6C1mlJzuKczK+0AOh3ajhauHpGZKVQ==');
define('NONCE_KEY',        'agUF2D/G3VuWi8BXK33TpERGeTprAAMFD+3//HMo+2flE9nbPg8kBa6TOksfGj1fy0auqgciDI91aTyub8qscw==');
define('AUTH_SALT',        'mWxw8CLpy8g4Z+6AAE78QxK2cg/4vyG65ZJrBjiLwJfykCxhSduKeqBQGWzpLhV1dNVT4HJ2736R8k/265sQ0Q==');
define('SECURE_AUTH_SALT', 'igtC4CY71dvSgRZ0KuFrKue5rUVlIpGsouS7jJQQtk4wxVbOz7q/5SH2h/7V5Vypqvpjnh7QugUA78BViF0IoQ==');
define('LOGGED_IN_SALT',   '8eFFjKqSLhvhiWj3XV0rRjGZCFD0M46ig98ruRVy5l6RBSGSP0RI68mdDt068ZTKJ02iIgEETVuHMyZTIeqzHA==');
define('NONCE_SALT',       'O7IhNaQBh7xotD5022oMv3UCinuWX4SD9CWsVDyyloi3QvUP8wnFCbMk/8qyx0HnC1WpJhU7Ehq5E5Ry/InIPA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_HOME', 'http://rinc0008mtm6303inclass6.local' );
define( 'WP_SITEURL', 'http://rinc0008mtm6303inclass6.local' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
