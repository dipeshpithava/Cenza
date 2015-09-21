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
define('DB_NAME', 'cenza');

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
define('AUTH_KEY',         'lPGa#cx:t%$,DuWA|BL!+|m>*Mnl#<Ko%EHHX:>/r);66j{m:f?QtSVL+o(m>15p');
define('SECURE_AUTH_KEY',  'bh%Sh(ohR[K!M,41iH>%ijL AY^MNYo3 ~MaY-+[U9hn_|2S/4wg!2Pn83kT!eIE');
define('LOGGED_IN_KEY',    'B4Wg;ukq-/zz#6u/@e-;i;<4FcZl7W]23|qPH3dfzNC+|/J0yCRuZW2j:uKVZYW|');
define('NONCE_KEY',        '>;7FgJ!XDD.+kh-9wC_;Hiy&Hq+{D?[IGV<|vof-U-6|ujj($AbhO<(]AArD*A-y');
define('AUTH_SALT',        '3%1@3oK-eO|P{qL+IiJoK=(Vg$Wk:|!d@X6|-kiMQHJ!H_e+O1PaKK2?;S~W,ir(');
define('SECURE_AUTH_SALT', ';Kh!;+~W;[5B>%.qXnf6]H{dR0/182B+f|35_c~>U8 xWO}`~?0,-c(E5UuvtJtC');
define('LOGGED_IN_SALT',   'Y)(c_GPh&0,|-dZ~:ySqwkgI}kdW2>gdA|$H-BMQ^]--)sUpMpO(44~6fvu`flx*');
define('NONCE_SALT',       '>5q-UU$Su--/fc}.REe1Y.s.c`GR&Ojs#F!ex^KZB5qV/[ayi>I|w-4,Y(L-QpSO');

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
