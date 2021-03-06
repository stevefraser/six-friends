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

$server_name = $_SERVER['SERVER_NAME'];

if($server_name == 'localhost') {
  define('DB_NAME', 'sixfriendsDB');  // edit here
  define('DB_USER', 'root');
  define('DB_PASSWORD', 'root');
  define('DB_HOST', 'localhost');
  define('WP_DEBUG', true);
} else {
  define('DB_NAME', 'db199542_sixfriendsDB');  // edit here
  define('DB_USER', 'db199542');
  define('DB_PASSWORD', '>z,ux8V4{B4hkV');
  define('DB_HOST', 'internal-db.s199542.gridserver.com');
  define('WP_DEBUG', false);
}

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
define('AUTH_KEY',         '-NN56-,CGY-ZfX=*zRiGEWO[w+NmzV@>edlV(/U_9uta#`3}{seh?T]e,SdcdoL|');
define('SECURE_AUTH_KEY',  'N!g$bOK!NHY|{+sbXusJgNwNOK;~5JOtps<aRM5&#*YL54z2B1OjGZ;|~|e*BHr@');
define('LOGGED_IN_KEY',    '0Ax@u6LPP#$`<syQdM)i[NQ ~&Er0n}<4+!:ZDx#*FT&+ WK|{^eq|<8-p[}1pUd');
define('NONCE_KEY',        'MQ!G+i{HU:p=>9NCcYt|ew[|WJk,WWk%4r8(s}B=_@c0YhL8Nv&CsXAn+/O5i.-x');
define('AUTH_SALT',        '|s@T8LY=^2R#M+09K<~kX*:t9|!6waM+`|r_VNvOdxti`Jp`tQ+hT^]Yyn^bi}%D');
define('SECURE_AUTH_SALT', 'uY/RvGI<8;Nex<n$2I#VGQ/~|&KC=qEPE5QYg+-9S|Fr@6iE#kyg.ATXMv-l*10%');
define('LOGGED_IN_SALT',   '+%^.U#=c?8|Wz7~oC[KQ[}q>;+1%Snw4v$~|(i$vAMR- }8k62sJ.I{Y-p>sV0!_');
define('NONCE_SALT',       '|^4c[dQAaXetXtM/Xt1tk?`C+39d#jJcW0aDd6kIaW9h|2AEYfVl2UG$*H-paBK-');

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
