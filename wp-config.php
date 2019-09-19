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
define( 'DB_NAME', 'emilieseegert_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'emilieseegert_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Efhs1301' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql89.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'E-:kx-~2hRL9rrvkzozfyGg+#TW.|LtPogXvx`-M@JoM%Z)>35!3?K#2r=,j{OL@');
define('SECURE_AUTH_KEY',  'to)c0A!JfE+T3|n*wzn[Np5@3Wkf8:ab^TrwH(}S^Y+nxYH)4z{1r(:#&-,oYV`(');
define('LOGGED_IN_KEY',    'T)![8*DXLyG[v>6XFwG;Ngs88<Ypk,Yl8!!$H95ptD#X>E:Lg{4 8mZUhIb?~kSA');
define('NONCE_KEY',        'mcjtx8tZDd8O0O<eo0 AVJ&YJhXKFJ3#MGrVir[k>yN{NJKQ|*^oyG7`&FF|D7&)');
define('AUTH_SALT',        'wVf5D|mX?Put^y&u&k|6}!S~RlBVXM)z<+yM,rZ-m!`0Vf}lMdwu%rdhF%|r-.CX');
define('SECURE_AUTH_SALT', 'woDy;#JP|3!^Lknr~{4;/l j762-+|]H}e@ n|so^zFn#H2~bPotcA(t.uAxW|4}');
define('LOGGED_IN_SALT',   'r|HiFJs-Y;n|iRA,2wm8M 6rB0X-MO#MEg6O)PmTC+6F!Vp%-&1-{R]gx,_|%wef');
define('NONCE_SALT',       'z8iztCjX<P(j=7=A+,]9kJ!/GC,zf=SM`!9z,_gz96.pS_Les4E@g*vow[?@kKJq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */

// Always remember to change prefix

$table_prefix = 'basicwordpress_';

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
