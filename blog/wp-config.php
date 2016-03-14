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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'evan');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'Ak-nh-L+?[<p/HTa[Vg!9m,-cC0`2dM%d,5BH-wJ|-C$z9ZnUQ|Ipk-$fiBIt7<s');
define('SECURE_AUTH_KEY',  'MT&Wjw.8R(K|5UL%]XX9B;Si@/x&C|+V.lYgp^l/-:b+1K|9;`2!GFh8|5!4AP$D');
define('LOGGED_IN_KEY',    'o(A?zis:&sJ9G~&}xd5IS+?G65w;R;SYV_n*SS2R_6Z6T0N}eW#sJddJnzs<z$Z~');
define('NONCE_KEY',        '0u~)(#2(wx2NjHhS|CJ.<!5`+M.+s&BO!/UvW%+.!JN|!MCm.B%EC-EJFSV8jtU^');
define('AUTH_SALT',        'f=]D>OXwq8|p![!o.s 8-Od g|`,JCIf]X_QR+Xv.&{@8wo7![}0%{cXWmVU#-uc');
define('SECURE_AUTH_SALT', '-ReN9c=)j66tY;MgNe_t+:]Ef-[D)s]xY23c?I4F+|-$2hKhL5,Q@)|^JM4~B=D{');
define('LOGGED_IN_SALT',   'N#4SA]p-Vl}#/+.z.-[Og$>|K5:DYq?!ry<GD$T$qW~t.]5z*%,g-K76$9_&cCIY');
define('NONCE_SALT',       '1;7f4bE7Hm$bETV|ky<qOXtVN2KkR1RYA;--*y:_6+/GzEnK!d-<M#w6o)=EJHeb');

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
