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
define('DB_NAME', 'base');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' v[5VZD]Z?/coos0BQnQ:s>+u.oxildgy7PmN9nM+:`Zsq|tz!y;{_7qldQ$ZoNY');
define('SECURE_AUTH_KEY',  'jgx?&O!%JO+.LM%-@q:Gwb!T-O:2X&JQ+(z!Q,S|,oFV5T639l-;gok?3mK]5$3%');
define('LOGGED_IN_KEY',    '?h.pvbD[4fe_6]2L9dogqk}nT--7&;K2O8~(ZY=MA`]Z/%]#KA}~$=or4;Ae.Am!');
define('NONCE_KEY',        '(oF,9J}->J1pXWeXJ~HwP+V2i{voK9h7]{~&a6$0Ykzf^-VvCfb5}pdC$gmlr|68');
define('AUTH_SALT',        'Vxp.yf+@DA5<D#@s5p@e% (0GMuWo+8w9Q|m}Z )@XfvF@gkB-n65<e`sY7Tt14A');
define('SECURE_AUTH_SALT', 'KQEGMq,vCGM:n[,$B]!>jqz:OwljVoG>-y+;X}lpg-A(DWN9y~_L-SW|g khu@r#');
define('LOGGED_IN_SALT',   '`.Wj<%eBo8.g}1=D?|t4a<t-{gp+Id(I]J_=$pu@cbE?S]cJ$E>f~%O5khGHoxdW');
define('NONCE_SALT',       ']KxtP&5Y^n|=K~V#F<Gc@Qkl=XTDZkgX@u+D:]*Qx-QrUjXD,|[TLRwpX=(W;F6E');

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