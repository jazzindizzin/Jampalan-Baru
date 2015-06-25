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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'L_^QZN+D-0Xkl|HVG{* 04uI*qYLTa[f)m/x={ve@Yexsfj,//Kd~l-F?2Go,JN(');
define('SECURE_AUTH_KEY',  'O#`m-PF}1Y(Fm2.{0/Kp(z3HY<fm/m:~`9g -bng^U1+<.Uoc-+?~Y]Zpowob[s6');
define('LOGGED_IN_KEY',    ':&D)!BoD5PtvKEc<R-,92lvy3igs/,B<qsr=?@XRTBO[?#,Ubj.rLvIlF0!;0K]t');
define('NONCE_KEY',        'umH-RDAe=P|D5 %%-uyX2_4v&DP9k4~w;YCe316JBWA&dl4zdz<wcSJ0-?55V#6u');
define('AUTH_SALT',        'qJ5^~w~+eLf0EQy|H^JM>uLY=lUw1@9s-e>bJ0+yM-j4F&q%:R|`YN8Fk:Kl5TN=');
define('SECURE_AUTH_SALT', '-,^cYd^Zjn<_0aIF+v/144v6gNu(Du|4=?mWwC A+&DIf[Kz%e#r<-,J+xumZw9)');
define('LOGGED_IN_SALT',   'c{ e--|>(4MI@q3#gFy2.&&?v;$?)cJt`cDNv|l]Btd@.vA(yB#Ek#zTu)U6igr/');
define('NONCE_SALT',       '8x05Oavj/>4EsW5ePrKf-!kbP3qMEV7Ez(tE%Hx%Jj$E/L$+vgPimBv4;L%[pQC!');

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

define('FS_METHOD', 'direct');