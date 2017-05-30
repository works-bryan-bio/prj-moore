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
define('DB_NAME', 'moore_brothers_db');

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
define('AUTH_KEY',         ']DY;R|,Z2=L86oG)^n[I==Fhft]ZCT!,=_RP2@$tBf04F(XifL!DsVXI:HS($<qb');
define('SECURE_AUTH_KEY',  '4TW>gKZ{98sW(tls9/FXQL;P|5k!QT_/I=k_p7JzRCW;QEgO3C(~tioDP3LL&iQj');
define('LOGGED_IN_KEY',    'Mj]$H:pJf:wl+c@o(W8,?5`~O%88eB@`i<g2)p9wQ`NW<Tc2OOhyi96X-l+!.u-R');
define('NONCE_KEY',        '^s-6 G6NR!cFy!oZ];MAw~.<9sWZ%Ra^|09qwF*s[!gn)r8*}~RI+ZI890)VKbCW');
define('AUTH_SALT',        'J$Yk9cB|imyX#(MP,XL#5{X:pI}&vIs)R7S(q6n)VZS=7.7DYo#fTbPtD8oD`#,J');
define('SECURE_AUTH_SALT', 'JSoBIaA)8Kc[:f`D#/U}@4$ dcwolxKwc1Uj~IU8a,754T)ciqD. N:AEP_%Oy<h');
define('LOGGED_IN_SALT',   'q2kU-uO(3Z;UL(cALdh:_BZZT=l#$.Tupyy?&PS.U<cJn 3nogl7VI=eY$g|O  m');
define('NONCE_SALT',       'bpwJS!e.}1w__j1`Ex%EzytH#)kx.<q9d7cxE58_}UlPq/Q0;c,tT|u#DUoa,d}1');

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
