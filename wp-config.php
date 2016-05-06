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
define('DB_NAME', 'BT-creative');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gS|a`UJP8d?Q(mZW{U3~[g_-YW{pP#67]A-M d.@@A}Y!YrwKJZgcM+Q41[MH 9+');
define('SECURE_AUTH_KEY',  'ZV-7OTYT;9y^|+j5=-<,`*w^Kos/NYYv`PLaL?4 JD6D@NXR~65?Faz4Grx1jWgz');
define('LOGGED_IN_KEY',    '[V!UiDwRP(o,[}_J);hnlK+JqtT>J[WP_bmGl,kbLH9(OC*x2BK(ZsN ${W`ZuW>');
define('NONCE_KEY',        '9eu-$-=6fX|vbuoP|5n+(6y$6OU|&>.W=ke0a)B?Za/q+TgsdXO!]*znPv(TF(27');
define('AUTH_SALT',        '^lh]FWs+(2|h&7y062/.%frB2XK6ZHU+/q!G-Phk-<Hk?pM6j)YnN~Wg5s%&aGRg');
define('SECURE_AUTH_SALT', 'x}@6I1)Cf/2X|CpREgi^B8jpx Flw>w7Fvr+9F1r6mL+Kemzh.3|z~?:ky]_Hd||');
define('LOGGED_IN_SALT',   'nMJ;4[iN2x8F%~b7aytGj=%?|BM&*<n=@V`oCRB]a3TD?<pWz5W%/|rkCC6ux~>J');
define('NONCE_SALT',       '~E<?#89_v@DFuS-}c9caoj;42]Fj a+<J-nb@X/vE*K]Q1I-XV8r|NX{j*QQ^lj@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wbt_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
