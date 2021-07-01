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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'wendy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P@ssword12345' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY','h,-6/_W./g<@^S:bw4Eg N]TI}{M1&Gyf|.yFTcVw~{)QF~92DkTAaS8OobT|QAL');
define('SECURE_AUTH_KEY', 'pqaA_cyO^{`jT?2&-r9MZS}q-h_N*W<O_z;#^`B29R64f:VGs?D)x_qN:ZnC?r%J');
define('LOGGED_IN_KEY',  'GYr69;ZwB2FFp]o(G|-]1Zb.~U^HqzL68~-e<@2~hzW9_Yg-3d>5*!Z+ai{<%?Fk');
define('NONCE_KEY','K#p:AtC(S@xX`iZUwJ`a<j2yZ/C[vxe-UW]*jg]}sbSDS+6Nre-Aoi$Is{y0.O{+');
define('AUTH_SALT','<;+t*lxk~vy59/V%!_cUNfzcdwmzh*2*f[v^*roDpHGQgqOp|+=-p-=g |a@[w^d');
define('SECURE_AUTH_SALT', 'jKI.CSA( B5) [}ifQb3r;J[JxnR`]$NX;PdIK3Nl>-~^vP7BYgW:1`p5.xcP;aN');
define('LOGGED_IN_SALT','$kk1W)W=|u{VL<MCAIJ,Z0|?$.)V8-!+U{-Pd]/?n}V>|RM*qzah3=rhT]Xf]q8e');
define('NONCE_SALT','@L;@{|NC3E~mo^lqa=[|bGDhWGsMfCEHi>4mMeG8Kv}k3[}S<Sa(+v(2 =WRw@lH');



/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
