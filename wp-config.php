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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '`SniLm.7fdBoG0En~t?p3>yx~%I}[>pwD}/YPxqMvW iFJ8IFD$>Fa5_fpB*Y,[4');
define('SECURE_AUTH_KEY',  'q5g6jhnUScm;5O,s.RDW@!V+._X)lUe.gq.QjG<)(HL} o@++|!GKvf]Pb#B%+>*');
define('LOGGED_IN_KEY',    '9:S$q9p,6 &>xB6tX>9m$!~.H+q,&E}lMBB.@iZ6A5h{Mw=#,h7{@@+gq;M*LN<v');
define('NONCE_KEY',        ',2P{rBsVPfi^g+>]i18J+$I^*JNX0n&@$={/-Ixj?Yamb<zcQKfwsW+2B~ohqL)W');
define('AUTH_SALT',        'hLImgDEs9]CV5U]g(Bp>Dt0l f #mIbz.1x18%Ezpks/yNP;1FS$GBSbFnNGCK~m');
define('SECURE_AUTH_SALT', 'z_,=LIYYY;%FVkH+O<h)VI7lL+(K$C&v(w=uHS0BTu=%q@JQhk6#:J<ohAL(5mjF');
define('LOGGED_IN_SALT',   'T[hh<QR`J-;0vE#Fv+5z4T&qH&3|l|+E%IBb 73gr1YU{et%}f9SSHr/tueM{L8>');
define('NONCE_SALT',       'g6>L|QHJ6>dD9t4ALmC7s!N8M0:K+@rR{k&!?g5LLU,|UQ@7r2ew+sPz7w&9}J!]');

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
