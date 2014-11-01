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
define('AUTH_KEY',         '2|Iz,1!(h$11|)neg:h@TFTBr+S%5A?%!v_2P})8@khmg{,{|#+>Dz^r5G@m{P<$');
define('SECURE_AUTH_KEY',  'iz-h`Z&Xy^4@=VU-o~`AHu0~>xthc-?:)x.X{I1F+p*#^&+JcnFXr%R4K+pJ2b*x');
define('LOGGED_IN_KEY',    'f|v ;w}qTFO>f,K317z#3]?.C03r]YnCU)0I+x-+bv!-{{fk*#^K#R9KdepS$V4m');
define('NONCE_KEY',        '?kI%ocSMroJ}O=.xI+|g51?y1(Z%LEr4c$u+GO1+M[iBtV[7~k+.wW+0=]F&.QYT');
define('AUTH_SALT',        '{TBH[4qE$*#;Dr9))b-|Y`a/:Q>oqQ)gz(x5Ndu9.Mk^*ATb7<PZ&3kp#>F/FuAB');
define('SECURE_AUTH_SALT', 'z=r9113Mc0*8%+Q_@I9qClC^[FP-qv[mO?FI_||FM5^1xo]$WSul%Z0c^[!/.|LE');
define('LOGGED_IN_SALT',   '.<uAs4O8.e Ck(2xDae`b~&9-Ud-e>/L#ym1x:!_-YC C@h%+f{|#B|P0!PLfkt|');
define('NONCE_SALT',       'KKd+~A/>Q(z.zIhiDj*`/Z1]*za!ZDJSMArTBVHnKloOXHCG+~g<P([|zZ1IVDxh');

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
