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
define('DB_NAME', 'abc');

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
define('AUTH_KEY',         '|1(Pu!.4> z8/XrqF:4@Ov3B849f:X(&Ba5T4Ud<b-U~R)/_qVO&9:N.~<7RGOg8');
define('SECURE_AUTH_KEY',  'sM9dF`zk0{wJ,!;5:tM8/>Oie>%EEPZuIl!*c~;O@U3ZFRB]EIRf@e<s4:?L?odG');
define('LOGGED_IN_KEY',    'Db`gg/1X$:Y`;`&i/Tn_zdH/w+alIvUvs+62frJLzU2w p,)DqfFkJqB4{;-CbWM');
define('NONCE_KEY',        '6;@w|jg)V_^@n)S&fd;*w[3#*rJ{ALQ$SD#*@srtmOEgd.k2%kzUpZ*A2N^*WvSb');
define('AUTH_SALT',        '%f*e!;EtbE.Ak!m_M=:eNQ+$hTo[GO$`TEJBeKP2CMOroM~a4HO t:)dRImx4[-u');
define('SECURE_AUTH_SALT', 'a@G,m-uS:m.*D ,QAfUZ&ot#|xTiC<6pa&/q9[D+UK7}:{;YMwJ6Y1NL3&Q!uIDu');
define('LOGGED_IN_SALT',   '3gYJT$c:h$H?3t5uQV`G3j,-!9DPn07b#O9uJ8;&)Q{:m+,Dkd$XGLs)Z3]<ydEw');
define('NONCE_SALT',       'Nx6k<RMR]PZ,SGSo|B=f*}04I{l8#/4c0JYAvT;lKFkn0J^vf(aa1?7*`J*+gv~D');

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
