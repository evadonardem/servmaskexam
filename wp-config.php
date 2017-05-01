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
define('DB_NAME', 'servmaskexam_db');

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
define('AUTH_KEY',         'y&9`Mdh%l18W 6ATB3!^N^_5d}30TsIG oxaSU/cjXvV~A7V0pXjKzj{(,-SzXAG');
define('SECURE_AUTH_KEY',  'V/2VuV[tF5%L]8l3T^ ju%37[;Lb`s[B#e}f@99/;Jbb=UP3`BZl,B(ewAPd(3 j');
define('LOGGED_IN_KEY',    'r<KX?U`2Z-j~]}T=nq)C~=J1o&7hnw_t{+@$N1SP650kbsfbi3HvYPi8mA;7E#tv');
define('NONCE_KEY',        'noZ}Y1r3(i+eK`t~{`kG[c9RC_n~C[$]O-UFar,Q8=&fyImAstz(Mdd4>Q7SrAm}');
define('AUTH_SALT',        'BiC 4[(3FHZ75WkH$DH$HngfBu7tMSg5X`?5_eRq%*f TmCK%O6xFpOI]5nv~L*o');
define('SECURE_AUTH_SALT', 'Uj(*A0dS1/1Ypf5 N4]Ocn&;^z6E{tR/nGfdzN;L$4/A}6O;`?]mms:7^~a}^GoU');
define('LOGGED_IN_SALT',   '2z#02yV(^Q[{BzJ]9~^IVU<lOnlb[K~4?uduh5Wr%lC*_r^mtpUbLq$Ol=vuQfKs');
define('NONCE_SALT',       '#aX|M2fD3:_k;YtHf3vcM;%O]$4f&rb;u0Fce(zc|V}*HJ?~&HM@r+xoXrXgAU1M');

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
