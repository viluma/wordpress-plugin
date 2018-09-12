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
define('DB_NAME', 'myblog');

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
define('AUTH_KEY',         'lD0&&vEz];T=siLQm$Vd@,tq +{r9pIYFx!st/t2?^Za`(<3l/Cx!2zZRIb{w$5J');
define('SECURE_AUTH_KEY',  'NYEFab1]u(G;3iw FLVG<DaqW<jG&LxcGY^R1I s:VU4&*Ndka`.2zEAUTCLz[Y4');
define('LOGGED_IN_KEY',    'eVvXc(?z@<ATx~_/-EHwNIAo-&5]1Z_&K*[;QOdDV=#6AR- &KGCG%/A3;H=V6|v');
define('NONCE_KEY',        '0P!eWejfx^Vy_o2:Q2E9L[<5wDa<ILzp}1;!}+O><*EhV^T!rqldx(?nZIxb-Qd7');
define('AUTH_SALT',        'Hmv}uQ [@7#Yt BkNE[5R[K3` #]VZdl>Tc-cF&D+6%7r{x#8yfH4vnn75q[k)_E');
define('SECURE_AUTH_SALT', '{~=NqLv<EXx?xHf2MWe|c-`R,&2+1.<rTjWKF87saVGBiEm7`60$cKQp8:`oU3]}');
define('LOGGED_IN_SALT',   '}VK9s1Q_qVCAVV1_kn[G*QpR>~uT&QJ:|uZ|Kri^$S+_x{ByNrqFVY_Jb~f-H`B1');
define('NONCE_SALT',       'NZ?]=*if]pcz~#Yz6*FdkheMcGTh6pG&UJi/Aw#sqVa2(zD+9 o@kE9U2EYVct=c');

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
