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
define('DB_NAME', 'lanni');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'pY??p6OoGrR~A(Bu3MAawgyH[i-}C{wOs{7<VN[v9oP+w|eJ1]7ZDPjb|FJkU&7<');
define('SECURE_AUTH_KEY',  'l9^hjkdQ^B^>O,ffB)b-=Ud1#0]IBZBV5Vv <%]e<ffN$.qzGV~UT?>?}SYEA|O>');
define('LOGGED_IN_KEY',    'K?t<C:Ht++G[ymZ.{D;wnu*J ho`vmbn|-bs2obZ@pTYkcjy=>{E`QO|cA:R|K!s');
define('NONCE_KEY',        'Rjff7tNZA`E+Hzd)|[^H#NOl?+{)uHr.].rQ(5Nlhi(1Si]Cd>~^oU?h_WU|xz,u');
define('AUTH_SALT',        'vm(eCc& >>8PJ 3*2stlx}7Z:}MI3DZ_EBEu[:5rQDqVV6n.-)dFQK`nJL<cq4V?');
define('SECURE_AUTH_SALT', '_p|;H+$_XM*L{@QY:}Q|<+I:b8*2(0E-At;-M]4#^+a0lnXG vPQZO6v(XID/sVX');
define('LOGGED_IN_SALT',   'QqQi8ThQ-xw*4B=nmr/d(EciqATPD:2]%kBAIwrtlb@[_U^H>0_g|+3P08qL;G5_');
define('NONCE_SALT',       'FXD^OiTWsD-,D4_IzQTDjpJ=G.Mx]{|k_ Usk4LMe3CF:>9-(G0%rt)#^|6XlqVT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
