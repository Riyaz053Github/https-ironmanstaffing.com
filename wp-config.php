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
define('DB_NAME', 'swdemo_ironman');

/** MySQL database username */
define('DB_USER', 'swdemo_default');

/** MySQL database password */
define('DB_PASSWORD', 'default@123');

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
define('AUTH_KEY',         'u<L;A4(*gAfCwC*x!(~H_vF%C}bq(ITq$WEAfAs#kKFy<38ssJm&li?ry99NGxJk');
define('SECURE_AUTH_KEY',  'hN8J$E{:(_%eh f>9|vA}yng?`ak)|CY}s%}sR-d}@=qvDmP #?Wh_V^Xx&MXUY(');
define('LOGGED_IN_KEY',    'F_de!TR cb7y/S Z#s*z3]m(G;MflklZfYZFZ}7JgY`H+,R:,ELBp8?1>l5dWd@4');
define('NONCE_KEY',        'J-F<kQ{Kg6LHy*N.mY5t~v3Bm)0fWgw|A7%/Dt*7<y??Wh8PR,6>tw]#O0),y*&I');
define('AUTH_SALT',        'V$Y{PkaT9|yAJ<Bl[uh={~Qyfh;5=VI0[a:M4XBD?{-I_:!P9|i6+|`z{Nt+iz2R');
define('SECURE_AUTH_SALT', 'Q{ehtdw;^}V~rd6]~rNI=CB0j&Z4|ZKWG6VRGm~yr6TL<gU-|`ip)1Fnf<HoTP.}');
define('LOGGED_IN_SALT',   'ScA)}*kzfg$Vu_=ae,cl$-L=rt*q~`L.%oO f+~l$#FYgL7b]U tT12LEF5BV9SS');
define('NONCE_SALT',       '`T%S}<8T9CWNpxSC{XO,g[8 .uirI84BoNukd}(`>e_-GDWtJ,=jJu1KR*ecs~00');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ims_';

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
