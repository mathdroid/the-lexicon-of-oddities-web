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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'mustadi');

/** MySQL database password */
define('DB_PASSWORD', 'chrysanthemum');

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
define('AUTH_KEY',         '>)NGdMyxmL0y72|C</Qlh(@?-!H:xw]lqTg,JK7klANXI}/s!A=9r){JN7k+U;DM');
define('SECURE_AUTH_KEY',  '@C|wZK(B]AW:-x`y.n=%9,BR$I[1mCRt7p5Fcmk3$|nev3h|I/a$/oQsG+2QNW4G');
define('LOGGED_IN_KEY',    'eMLhW;&VSY>wU=i@Amhm<1{z5kS< -~GC)-_z`==b>iWj+,fxDaDuzb3Awj5ydD{');
define('NONCE_KEY',        '/(<SfT~`>Vm=()C|B/NF%q]69DxDT:6AO2Gz;pOQ>4=bkbWC94d2EAVEg!MOQfCC');
define('AUTH_SALT',        'r:F0GoYlxci|JOgDF8L9p6E!=QX`Kz.pFN%q*|M EOf:4C>@P{h;V@N}.fF?qXGL');
define('SECURE_AUTH_SALT', '?Q}WS5of,Vg&-@Jl-94eG|Kpc_gJDFd|qV0P{yU|0yN}G_h:<L1Mll&<`lb<z,8Y');
define('LOGGED_IN_SALT',   '+r:3 l_sKZmXw.hVlKbu=`P2UYcn6yl-9*+(zoNS+{l2EZuU-~z(xx@QKmIGK2O[');
define('NONCE_SALT',       'nqQ->!H61<o]l_SZjXt[ E-lRmM~1@]W.WZhep{n)5+9gZx}hN#v.|$ |2$vU+pv');

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
