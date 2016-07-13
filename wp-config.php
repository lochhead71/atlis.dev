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
define('DB_NAME', 'atlis_db');

/** MySQL database username */
define('DB_USER', 'trey_atlis');

/** MySQL database password */
define('DB_PASSWORD', 'm0b1leC@r3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '~v+!*!.x(/kQ&g9-XDM;`OZH=^J,_jp=^ $/VRZh4lcoJi{mg]-?f v9?Nu<U60h');
define('SECURE_AUTH_KEY',  '@vZuhM}u`^w8r95vwp|Oyx%s#mgAM+{s;?9=/_W89+nCzD/Bi:F!JsrD1s^-w0/m');
define('LOGGED_IN_KEY',    'Gv{Y78;16?&;sqHMz{?^e,x}+|9$,-ed*1}0SX6yjy;?$0r<`Wp{pV>ZX/~0aYn.');
define('NONCE_KEY',        'tZOR;I3%L9#c/Qp{x)~dd*t+5D%]O#C~+1CP&w0}4jePFEXx|fnscXFL}]U+5hgx');
define('AUTH_SALT',        'NO]nZw~!XKJqF!XT*YFWrFYl*d a c}1=cxK!@J+peX9[MmcO5P!vt+K+L=1qDj+');
define('SECURE_AUTH_SALT', 'q-3nVLBB/Nz=% 9kiyFc.ioCCW-9t@]].ttQN-}Bo|J$:2l)fLx)t=J.fL|Wx Hh');
define('LOGGED_IN_SALT',   '|an)p8C*$)4cVU Hb2+Ws 1>JA}ji:<LYCn_%}oq#mrTVD+Fx8bTVX~,dTy80g2 ');
define('NONCE_SALT',       '^S/Yha-?,.6t`4?ncMx`e3?-|I{K~@*DZna8!-F4Ga6~W<hK Fo#fi_iJa){-)+|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
