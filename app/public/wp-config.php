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
define('AUTH_KEY',         'NdJrYYVAkrhtCH4McfzKlYdUMhAB/xxpW9KGrUJX5IaA4gHU2V31o/Kc9PyMQcX0NHovLIt3qMAGVoQM37/tYA==');
define('SECURE_AUTH_KEY',  'DRp3zVYBYQC11HmLPSsHhihEBMayimwo7SuoraEsboBgITXIYLEwBA5tw62ScdxfdTFFFQW7ZiJrwNlVAlJqyw==');
define('LOGGED_IN_KEY',    'Er3qPhN+BHHPe0vlgoZdHvv1xrdmnHqM4WR7GfJCwfMrV1TuP58NrhK36UB1DnvVfEkIfzdDLm1ceRXIANmgCw==');
define('NONCE_KEY',        'FPqN3uVPamuPO9rv1pZpPbyo/VOIWO1Z6+3hl2Q6G/lw9CJMUEVSYLgcRWEqFNYagWVxgUmjs8I/5hBNBVUm/g==');
define('AUTH_SALT',        'A4tZwhrLnHKdnFNc4vQFvqRwen1q+Vyr7XmMPVXo0R+T1i4imJqn/hu5dtILaBg3sGi35UPfhGzM3mBfmUKMNA==');
define('SECURE_AUTH_SALT', 'LEZ3gYw7y4EazZwp548oaNkuy231wDNnCalaNETr29O/V0b8P2eYMuQ0msHk3oE8BTrhp3/2A1bzMnMextgU5Q==');
define('LOGGED_IN_SALT',   'UDaffYJMVQyvhg2ihYtlEXu2KPVpM21Hu+iq9JpPXrjAnt3hMqSSZrC+hnfxmsWNiwLfz+SwGLJUZnpzmNDqCw==');
define('NONCE_SALT',       'yDaSZrt8NIvuR76kvsu5h79yjPtZX3OGUZyFBb5FXLu+Wtqk/4lCV10XE5WkHONTDMB96wgUryqwW6lLhoRctg==');

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
