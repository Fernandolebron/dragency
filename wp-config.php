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
define('DB_NAME', 'dragency');

/** MySQL database username */
define('DB_USER', 'lebron');

/** MySQL database password */
define('DB_PASSWORD', 'Falp@20!7');

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
define('AUTH_KEY',         'e_9zZ<5`%y2G7}6VL|4k3xzjFaszb1|*5)6I{$_J&PTa=Co~-epB.Hg+|D)~KRGj');
define('SECURE_AUTH_KEY',  'gL]#LUZQ<+{_<bIzNy3WNIbe+AO5},hUd<Q@s+pNAMS)]ni)&P40->E 2qz|&a2$');
define('LOGGED_IN_KEY',    'Zd;+<mt& PNwe*r$m~yENw_ojK]c@Fd8H#h4UNXeA3zG8_TA+KokDEVUTk&_EOeo');
define('NONCE_KEY',        'qH0l1&@s(uO(EKu~TdcOKcF4K/9K>~TV0wWQ$uoxWUM`ldZjR/Z(^,8j DOXa|76');
define('AUTH_SALT',        'R0kyA,,7#Vq:5J_5DnY@#~$rSb,2K>aT)9@WHBFLPxHPPBjtf?!<rPMnVnbeb]Of');
define('SECURE_AUTH_SALT', '/})bD:(p b&_h0gOP3>4Lv>rr>jArj+}Bqu;9y!$j?u&@7mw4/y-<]`)q!|x(vxx');
define('LOGGED_IN_SALT',   'b2dJ!5V^)q.m/)y$~JNs%aiIXq%5^Ql?RWzC`iK-h)W0`U_#.~t4S-FTaGEQ<G=<');
define('NONCE_SALT',       '0>_-[B#RA0eSgOj(yE6.c=L(}4ua.3y)$R1SnH#R.i;2^0[Oe_>osO;c)$#iVN@,');

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
