<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '10.0.0.218:3306' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'T@haluf2023' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(h^0@tU]L6qs(N[$^z5>UiF9J3;5@C>C~1,Rytf)uSymqJ:lN#r)O0iDtHDr>oHa' );
define( 'SECURE_AUTH_KEY',  '~?6U&Kifk~Z|1E)5]{vLDn/#F&}+Sk_f3#e4s}<suq*f/m6$#~O~Y<`NueI=fzfa' );
define( 'LOGGED_IN_KEY',    '0A8??+o@yLhO]|v 4Jg:(|&WW i$E(z~#r:u*/O4QCiP7p]}0o:hg%F6rmrm$f5y' );
define( 'NONCE_KEY',        '-#;h;SotEu--g1dyZ!}fpZ[*~lpqy8V$jd-C*Y]r%<bQ.;pU>z06Fkw& dy=0Rtc' );
define( 'AUTH_SALT',        '_PY-RIS9P1.@s*V]Y20]D26fC<e!Y%$P9[Y0ySEdBF20&vc}2t?8L?0uEqp)h.rU' );
define( 'SECURE_AUTH_SALT', '6!@yllI9Ew8@+3:Z$@R|N<rrv2o6[dAJGs4+R>$*~igSOQ]:g(Z3##;ycL``&Y.L' );
define( 'LOGGED_IN_SALT',   'Pd]o:WEM@Mtk<|sm`)cGhAQapS!>Ug=!74pF3O76Ve2m6</IU98piABxXDBEi><v' );
define( 'NONCE_SALT',       '%62#L_UJ3>^te?@9j*@Bu%c]}R&:4*qgD~Gt<;S@fX1VGYW+D?Qt?<|Q@B}@,e{A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
