<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('MOCLOUD_DATABASE_NAME'));

/** MySQL database username */
define('DB_USER', getenv('MOCLOUD_DATABASE_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', getenv('MOCLOUD_DATABASE_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('MOCLOUD_DATABASE_ADDRESS') . ':' . getenv('MOCLOUD_DATABASE_PORT'));

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
define('AUTH_KEY',         'qLGjo2w/:2!{IKFN)VQVNGw1bNH&S)b|)+{4>CKyM&$+CVrC@dN)inK+&fjbHFs]');
define('SECURE_AUTH_KEY',  'U2ZuqC!EWmd2m-!R.|UQ0%df.n6f`|fu^;-% i7W(J@4$[{Y+Wmx0dF<L3]^QHzy');
define('LOGGED_IN_KEY',    '*A{2]sJ1_A+bgF:rDPO,(DD$_=>FZ-lg;R2kNnt7^!^qc|Z.Jb}yZNBog769DxVk');
define('NONCE_KEY',        'H11RaBUO;=oTL%6@%xT+C,xs|IJy3B}sCLV,n(f.Dp[P*-MM-2$vf }-z =#-a_5');
define('AUTH_SALT',        'F5,|O+)HhK/clq*O?e>rjB+iN]sQ6/LgWKOrhvV7Cw_seG)X<LRSU4M?/>xt.+lO');
define('SECURE_AUTH_SALT', 'dF>Ta_+A{*jj7lYlB;%3-pkj.G1j-;QGY32DGg|F7M8]xZ_Fk@<Xh2! W3QX6{%D');
define('LOGGED_IN_SALT',   'n+9HV@20*2/0urutfJE/cXCCdJzqZ}[HP*zBD+EF/#l>y+kT??of|$4Y5M:~t%H+');
define('NONCE_SALT',       'C%v%mP1Y),|{;Q99qEVuKlQ07^T_u(&-cdmorsxAP#|W}f|ASDg;f3YF-TkNacc9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>