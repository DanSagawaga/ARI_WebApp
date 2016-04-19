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
define('DB_NAME', 'TestDB2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'y;7vR{ <S&%;|~]9};i/k+snhm+rkllguHGJJv-]2GR 6M4^lo+n3uxY&^]=?NbJ');
define('SECURE_AUTH_KEY',  '!-n*JhK:.G@1Tk#6zR ]<RP760D>>cfY-E&Z]?htF/(=`8;TsQ3.t?}l.ugHECa?');
define('LOGGED_IN_KEY',    '[|mnHYRm=2aw-=1Qc?w1R-Zr,{]5i_8yn.Vlda~2wraN9%-*@2}]s;7u?wK7z_^G');
define('NONCE_KEY',        '3DuBv[nJzD4Ev56bz@if3U9f.TiSF<jCR2Gp{+67SD`Z>?2]OudGCOK$4|%ltvjc');
define('AUTH_SALT',        '  ?D&)]:c<@=;(q,R{E%D4lId;/xmi*$z.eAIuZ)Dd26jfV)qiO6eb>D9Yb61|c?');
define('SECURE_AUTH_SALT', 'A_ 49csuQM9)e<v)=f )X^=6)GmD~dq!UvMc#p_QM?hwF3YXZbx~zNva/ kct&uC');
define('LOGGED_IN_SALT',   '<(m^vy_RiqFADA}ZsAb<bBafP1odZT=cVyOc&o/%05Fwb5kCXi5q3uiV3?kE!T*E');
define('NONCE_SALT',       '(@>3J!9=n_:tSug$rQ@+HmAO{0Nl<R=.oF%Wgop`Fp@>RFd4SV0,RFpC|C2U,%c5');

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
