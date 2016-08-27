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
define('DB_NAME', 'wesslerlaw');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '#:@h4B&m$ys)5qDSd|aOEF |rggOQaFVtiDYX:qE*cb_ Ro%ZAx#SC46YtOp]]-;');
define('SECURE_AUTH_KEY',  'KEcv;+h)0S<EtT8>07-JNi?)_AJ%%n30$TloE@>zk]?cmS)(zx{KC~3iHsXFJu`D');
define('LOGGED_IN_KEY',    'N>>v.aO3g*Jm%Eq<t,t<_kKW_EV<TqyTuBifvKXOwjB*!p{s7K.=7aKnXjQ?SE>u');
define('NONCE_KEY',        '%*rV9BQIu6DHm=k9/$^GwW%-:.Duubhr>*e5A@A@e]%SR~j{YFJs)HcAC-yWoP/p');
define('AUTH_SALT',        'G1.IZrj;._g5&x+RmibH1F|gMA*xZy$y)AB-_6QnfK:)$Rf[VUAUwiJIV/j%29h%');
define('SECURE_AUTH_SALT', '?ImCOu.DkK9Qx#KH^~=!;[;:9=GR=:?DoLDA&I)N!1~T2>h1]kShc9==Y?s=5XJ@');
define('LOGGED_IN_SALT',   '%%ypJknX5(H$G9bmr;g6~/&P<8%$~n;j,>#N7X+s[o2Q>=v~[lYbo.Ti|xg$X4A8');
define('NONCE_SALT',       '{OZiitnEY1BpV**l#4uUOufb26F@9k?N%PqBD9AnQ2%Z@&Gd-sP/1?Q}I-# *9+0');

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
