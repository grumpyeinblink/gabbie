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
define('DB_NAME', 'gabbie');

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
define('AUTH_KEY',         'o%I@_4PR]0![zSrzpMOGR;97:4H&nRNG;.aq@>5S`%3uI=6%mK^q2k%Z|3~,/CFc');
define('SECURE_AUTH_KEY',  'qCLr 0^.ncWpA$3EawUF2IX,Z@;*-~:m0LIaAl:em*r$8=pspCXB7V]pVuIYMJYZ');
define('LOGGED_IN_KEY',    'NdgEDWJz$mv!vh!5~KIF[$2{f|+XM14DI })-5%Vv.jvC]O6,t,j:S)d[*1,.+mW');
define('NONCE_KEY',        'b,&2kT<dtIyIBOazxc[~,~B7 ex+<8?w}cH0X&(>mK-h,Blda[r1;B=$WD(1<RlZ');
define('AUTH_SALT',        '{aR/+U_C8@%}}@L7URKB,T6F:m4kTezGT+@[H-2LDr MLeo<V.vHPU;t+1+qL]H!');
define('SECURE_AUTH_SALT', 'nDihL@<}gK/_td#YY=3s$_fUWl81.F:(JbMWC8?-?1((P]w0Bb:wr_!D>mgLCO(;');
define('LOGGED_IN_SALT',   '1!-6XISsO>F0(hb%5b^&x[H2-pJd:fJ%T`h@)hJ8S_DrJ%I4GWF(rP{lDbImbE]u');
define('NONCE_SALT',       'z^>o~snMK*u_2,[P4PT8.w3Un=NT?bFE]tK!Pd`/ws`ghJ_@`!sdhorKQJF?,!}5');

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
