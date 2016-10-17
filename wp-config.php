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
define('DB_NAME', 'wp_centro');

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
define('AUTH_KEY',         '|6X*z[<-#-|rR>3cSdOCggISmnX!W/c(J&s7[[*HB?p8=mR|CPr_]=*I69%r2O!=');
define('SECURE_AUTH_KEY',  'J#+uU55Rw./Tur204!8^9X1MkGHqv,^x:&Cg|e!d35z^4Yx3!aRv<`zoY|Ght89=');
define('LOGGED_IN_KEY',    '!p0<vLVKs$>A2~?nq9tG$0;T8~eUDC$:4!Bu43Dtb<`YO{Z.PiMN{]EqWWBltIE2');
define('NONCE_KEY',        't9/r?8&xDF#I(p`[`OSvJ}jgdh_tV&SNdDIPkCN0P-Pm1!vzD</F3@,v<YaBebo;');
define('AUTH_SALT',        'uT{=#1kILAapu>&fwv+l*z8uE/w5l0NVt04:DAzSzdso%tM96,EMfar!O2iNM,qi');
define('SECURE_AUTH_SALT', 'oh41z0wZ>[OiJco3X:Tm540T#b!d/[c<.zelWJ=`^wpizrRq$K<lM(?/>{p^L|RJ');
define('LOGGED_IN_SALT',   'RNJ>+;E=+6X/W]g&+q,Yl.y$rgtK+~i9N=-pRrp(fzbx:?SU4.s@15Zd_v!D~ae*');
define('NONCE_SALT',       'I/RUT>pby22w$#;8Fb#y<K(]|Y>J,oIKf`wCnIwFP$Kpdg5kP0Y(/k8myQ)/3*BS');

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
