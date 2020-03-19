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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'xo8C^r-#I{y-CdzW$@$D9A|XNn41;[C3r<~U~!)W{YEsAEj?l32d6ht336u$:Dp`');
define('SECURE_AUTH_KEY',  'c?At(nJla|Ufs}p1$`gjxR]a&eJ~+JsACR#I-K)p~]SG. ;w^sO]Z}#kW,IjzL`b');
define('LOGGED_IN_KEY',    '#CY &/To/SIo6${YQ%,:|3W+Pzxwq9St);6+ya/83p0NB8ZuS=f(9eQ@)kbJ )9m');
define('NONCE_KEY',        'GMS?*,7T?biH=n~t=;@+whQQ/*8>aJ*.uam~keW2a{6xc4/}$t.6&&g*7pXKp-*_');
define('AUTH_SALT',        '6X[$N0Ywy)Y(:P}weE+rRJlZ2xj@l<h?QAW?1G-lj9Fw/ (0wuk1P`cl1li>6q/G');
define('SECURE_AUTH_SALT', '^=5il(:6yu}kZXazcLQCq89_)*3UK?A__L<.c`.#B){c!6Y-m3;;#9g)F$0H^Jlc');
define('LOGGED_IN_SALT',   '0V]v`tR|QLF6jU*j]!V[x3uXmY;/Qu!PU({VHcCm[09U^Z@C9-Cw R.8<YL0bNNv');
define('NONCE_SALT',       't VM5ZqeS`GYZqeU:9|GtlJ.^Tk*$E`jkL<6BM&2*vN4:itSIA&QiyNl7dy?M2TK');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
