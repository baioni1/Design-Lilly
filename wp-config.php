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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         ')K-{cjzA HsOb[)*zRML;L=ZBNih9.Nr1vqQO#}w/=:%uvDToG;v1QIt/b!v1H;y');
define('SECURE_AUTH_KEY',  'gPn!XQo<:8V)$a~cr]s[FabZEv>mJ4-.{(tr[3swT]Pe*j`Qg,Xbcx-7D_0V9MXf');
define('LOGGED_IN_KEY',    '1l!BQtaX!{17tquMQQVBpKB{b^H+6+0;&:N6k;5.9 ^]DG%8@]>Fd@qjVCjQc:C>');
define('NONCE_KEY',        'Gmq@Y>4w,|Ob`jC0>6MavIwl(CQOZ|8+q`/:Nio^uOVQ(nB2mn]?h!kqIbGwk.Ks');
define('AUTH_SALT',        '0kf%MyIy9x8~$e`u{N$g2#iaz:H#jGip(egp<PGH LhB4dk~.o#>q}!A.qYyU*Dr');
define('SECURE_AUTH_SALT', ')kDRFl@D.a0bEGla6l]03 )#gqyQvBrxO!nOlR/eyOOg,)]`p G)Jl:_YOml993R');
define('LOGGED_IN_SALT',   ',NN.|3)~0.RiUuDI,w+@&JyKp8m$%S,mUU{h%q|HNT5g$&Cg{27T$[zerqUN8lnZ');
define('NONCE_SALT',       'n2L#Xt6}g1ND/?fhh{_co&:Tof>%AO&K|sA4ua:-CWgzp(`tlrElhpdh3=])^*pz');

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
