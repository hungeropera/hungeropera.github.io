<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'homegrow_hungeropera');

/** MySQL database username */
define('DB_USER', 'homegrow_hngrope');

/** MySQL database password */
define('DB_PASSWORD', 'hNg3r0p3r86');

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
define('AUTH_KEY',         'Hw=*5s@(Vgg.L(G`%Tx%VN)1dM?q -KKxT^p$>#K5~P[8n=WsJ$PxJ=+Ng|V5o*N');
define('SECURE_AUTH_KEY',  ']EO^/U]P1cz,+rfqF;0I6c]_7@vx<*uZRM;| =]w;-MSLr|jlx15}OS~pYfxv0hU');
define('LOGGED_IN_KEY',    '!wW(I=[o-LY2yH~6X9NYACQA>^+.t }.?{-#y+YN~!Ie0MA$]L~+6e}I}/;`j.Xi');
define('NONCE_KEY',        'eICrq& U8XCBEf62r9VQm#cl.V+&Q.$`HD9#Sr2+9ygWaJ*+,N&[+O]{T&;<n)_p');
define('AUTH_SALT',        'vg-o>#+jjfMgS8z6-G(h}AcKYuk2{QW>mA%J1f*hn9KaOAn_{pd[QJSxf-!U@pnc');
define('SECURE_AUTH_SALT', '%|8=/EBAbXl)0PtdPZe^Srt2Ko:mZo-tJ-#|h+VFv~4{`4v/p9L92_SWa&cuW)/5');
define('LOGGED_IN_SALT',   'UX p<XFJ]./-nYh9>pQe_1Os^&CWWC}!G1Y/fyL|[O+Xcmj#VkS:ha=}!]-HF@cJ');
define('NONCE_SALT',       '?8-d|OyT%ZOk`V(`Dt?WN-Y;-65qP1vrue~_nn!yA-&s-Z&#qNb~ J(#33RW.HD&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp2_';
define('DISABLE_WP_CRON', true);


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
