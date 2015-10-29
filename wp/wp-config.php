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
define('DB_NAME', 'sandbox');

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
define('AUTH_KEY',         'AEOs.|H~y0R*W}nW@Jmzp,Q*@Vdk8m-s+]TW?c[=V7uw]r5/hK/rml}e?n@E!JOG');
define('SECURE_AUTH_KEY',  'S|/C eovORlp|hD|u.-nmIedK-L<[oh<s6k4D74JnW&<5bZApO%?-kA4RR2jxg-c');
define('LOGGED_IN_KEY',    '<aD)@jah}KS3Wfl< X3yIn`*,dFHDV>VpAG-`DM5{64FT5/EUqo.--~<do-I>~:)');
define('NONCE_KEY',        '|znWQE/JP0j$p?LAfS>B$4oh/5[1<DF+)AX/|v<i^W%[T=ktFM({uMaANfS%Z!IZ');
define('AUTH_SALT',        'O>Vvoc8*bI!Bd/-cgQ.|@}`^sP-HROXn@IP5RZQ|Yo^k&TG+$zKB+g>!f_<_Q:oB');
define('SECURE_AUTH_SALT', '|Fmxm_N.<.v/bA]1Br2E%otoZ(O5dEiHs-k&s)H[5|nZ]607?e-@iYHY)A5Qn=$8');
define('LOGGED_IN_SALT',   'Zzzs+33eu9Eb[VSj+#4u%l% T8_/DQd}[Ql1BI$,8JvwZD{deg>=|kN|j}(@1Zm&');
define('NONCE_SALT',       'b;]PqoBW##AidXt?eO@}|n]c]%KYgl!~@%atr]+0/n1Jp!Uf+ezav*IC4NSE@|ul');

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
