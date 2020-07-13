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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'Vaj9AmQCGHS5pAfAvXtb9mAAHBp7bxTSwUHDPVccHmUH0x0mhAxzp+/I3CNyQqY+68LpreV+w2ThyaRceMXKLA==');
define('SECURE_AUTH_KEY',  'PcAA+c+8IJFCZapZhkO/UJlZzvEkDG423PysiRIslV9wqPvGLKT04rh8sUqn+DkCtA6MFpxdRNi0yQQKP7OnXA==');
define('LOGGED_IN_KEY',    'g96PUjKC/z0vLFNt7s7LuFgUZyd/HrMCBoP64wWagSalUitWSyCSW0IlJ6w1Pk/1t6m1pwvsfHsLzQGvFzONRA==');
define('NONCE_KEY',        'uxuuXRdxQuPFSLzHOEYhIU5ijmWTreRUQcQjJH049a6ipOwbUXG+hwMzrhx++lFUOyxZsRDaya7e2bKGmCrkig==');
define('AUTH_SALT',        'PNnKEIVI4lwXTOavRnQpX9/pBXz5IEgnS5TQ82r5+3ShdX1zQUI/IBrTxlZrvpKfnL+bYY2BfyGw3i23EYYheQ==');
define('SECURE_AUTH_SALT', 'FmSslo3uUgV8ZG4aRTGaLv13endbusw9zZ109R+6eRwnj8jo/7GEVlEAHsMs2Sq+ePnOZ4se42AljyWVbHp/Sg==');
define('LOGGED_IN_SALT',   'W94tizDw9V+j24XBW8D5MyViN6yEFnkCtE+IvY5oS6m1Vc7Hbhm2njSmWNc0kuYbmzmf9FQDKELP/c2LX3Mgyw==');
define('NONCE_SALT',       'nMsF1y6xQ5Ay2kPPnU2S/Yetu3PLMDeKmsorbF2/nWE74bFmQRdIrRy/HoOihOrI8MZQPN7pn9zxiyeiSbjNjA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
