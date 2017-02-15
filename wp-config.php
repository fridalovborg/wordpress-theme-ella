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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Applications/XAMPP/xamppfiles/htdocs/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
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
define('AUTH_KEY',         'zADdhoRE?gpUmRP_>8YbX7xYzKhCqa2lIS?lZ^+VSpLtp 0X15EC Eu*NJuqfAD7');
define('SECURE_AUTH_KEY',  'Qm]P12H40S]VXMBf&szbn|tP^Y4BazP7wwyl*4?uO/O8-?HW,bS5v?}qromrCy*_');
define('LOGGED_IN_KEY',    'Ncq~*xlOO%/=#>/NFDMiAG2=?[+<PiudaD6}x2Ws?1b&]%mTQbo+hAm^F$zK!#S`');
define('NONCE_KEY',        '6+X2H6BL2_-Z!Nt_V(YHL2Vm,?qUQ(fke&whY+<uybFqvs7.S~JU%H)bv_bQx-_3');
define('AUTH_SALT',        '6|(XCN-aX@Q~EJ]aGK7~7zjkP)]W3Aeu|GKdi<9HH-k@Rstj{@rZ*b`fY=hp}K$f');
define('SECURE_AUTH_SALT', '=^gN)BmmkV%N/ib*qdDac5Ljt*k{+`g(W3Oxx>XIeEi+IXI?V7(qLZ:c+x-l=1!_');
define('LOGGED_IN_SALT',   '_EAjOxQ^c48 Mv%Us)R7u-m@ALW!U=9uF]sn/MkRSl?[q~oaSHSus73:7J90g@3n');
define('NONCE_SALT',       '8g2-;ru|]s25s}trL?+0sndrI0G>J:nGE^F (9==(ik5ad/xxe<vfOA]AVzr~>!p');

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
