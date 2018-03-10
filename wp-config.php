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
define('DB_NAME', 'nyjes_db');

/** MySQL database username */
define('DB_USER', 'nyjes_user');

/** MySQL database password */
define('DB_PASSWORD', 'Jb1fx75eDggfbbepWrjK');

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
define('AUTH_KEY',         'i^Lt~[I3`CK;0.9A|!4O~rnPiXmCrCWb]9K)1A-Hd9#ip(L5&giM-)c:<:`!@=^W');
define('SECURE_AUTH_KEY',  'n b3P[Au%<xP)m!ejN>-Mw1Ry,rxk<IbIL;Y>mOfie1}+HJ>o!D&5Wmksl:7{!0~');
define('LOGGED_IN_KEY',    'a#45CVU]B1M90Fx,L=C}gpD# gK@#`f]Zz/qMG#vz{(<G3A(p_y1Tj_wZ5CfcBr}');
define('NONCE_KEY',        'fgXeFr~_Ta|8Q]l 8mZ51vmyPAUb[s{~v9aC?So jf$b7C/+B~[$DEwzKN4Z![(3');
define('AUTH_SALT',        'a!^}R~.dmP<9OCB1zznz,E|jC>da[~*B;$[yB|ym8hJ(]F*E3SK/;!CLS`&> 1Zd');
define('SECURE_AUTH_SALT', '@N:M74Fj[OK%F9obiu(<xI|$ rk$ZJY6_1mT+}{sMa=ebNfiydxjLiTfu=?pDO9H');
define('LOGGED_IN_SALT',   'Kg%Te@Uh2vq3]y:|TYhxaNIbW b?#A^^TyKYGiJ%/%Ux(x9v/<~p%M)VaoT#pM+K');
define('NONCE_SALT',       '0e~5-3AkDPl0]TK^8I_I4A:c;=cJK8Hk D5zs3(jzu_x5$4?*1P=lVU3?ej9YJF3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nyj_';

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
