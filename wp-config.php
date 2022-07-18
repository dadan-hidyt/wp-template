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
define( 'DB_NAME', 'dadan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(w.C/r${;}Qtf^Lj2`[h{2aeMF.~dFf*bN&^O{4b)Gy{i<76NJ[Uam0)^Hm]G_d3' );
define( 'SECURE_AUTH_KEY',  'N-:-g^((fL{OYS!4g(c2]qxUmAHUM$|woIJQ~<#DZvt#v0`ZaN_kgL]~P_p#AJSo' );
define( 'LOGGED_IN_KEY',    '>yB`!p?#4We.B7d%iF$F;Vj|$Y`Dqn6CJi4L1$zZ=De_lTIlkJS[$8Bp{>kNN+rU' );
define( 'NONCE_KEY',        '(]G`Gp;%1V$`jS+nFb:n8B~+C9C^#{#Y wIEH[HJCP NLv$WbnU7Ez%+:,2%pb.>' );
define( 'AUTH_SALT',        '?{irodAmjTcWhLS3Jz5eS>jahYAqD7Ek_J{>A dsB3#>GH@^G5x0.B,`B%@VJR`g' );
define( 'SECURE_AUTH_SALT', '%o&/yTtUEYTNa{pB)kaA?SP{$PG$7v?`3%/`!FQ:=>qzQQ^xQ,^}t-fb``UORs_`' );
define( 'LOGGED_IN_SALT',   '31{4)noboe?Wz?NB90-+SW(69~du{exz5^M|& @qD!vaUEX9I-Xq&-Mj3A/Wwiu:' );
define( 'NONCE_SALT',       '[Xo7Cb[Y{i84ji|r/?#D <,G}U3OFu-r^X7z(:;rDys:HrxwHt<u E*=Vbfw%g`R' );

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
