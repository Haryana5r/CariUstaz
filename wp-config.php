<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**/#@+
 /* Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
<<<<<<< HEAD
define( 'AUTH_KEY',         'put your unique phrase here' );
=======
//<<<<<<< HEAD
/*define( 'AUTH_KEY',         'put your unique phrase here' );
>>>>>>> de30025c00f77ec883a068b263201eee3b536067
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
<<<<<<< HEAD
define( 'NONCE_SALT',       'put your unique phrase here' );
=======
define( 'NONCE_SALT',       'put your unique phrase here' );*/
//=======
define( 'AUTH_KEY',         ';X[R&#1_=WH/A#ThwQ1OVq<,3[zl@>pG%V)`wKu(uM&]I1 4l<^.Pw-)Pz=F8AS)' );
define( 'SECURE_AUTH_KEY',  't6rs[4#l,Bkf76,?6iwfADR!}T1G@.r?1-3EYO$tysZ.H9-g.&m`2)+t*3,:w(TH' );
define( 'LOGGED_IN_KEY',    '[Drmu^hj7sSR ,fjxq]<o,`_=S,M>Za;%_V^=6yy566B%/9@MrW@dI.tL<rEb&~{' );
define( 'NONCE_KEY',        'ZIJk@uj> i@j}3CIJ_?_( 7 jb|IM*vp~}<})Otxd&ujt5,nD]m[=W_4S<QFN}' );
define( 'AUTH_SALT',        'VnmC.g5KQT,-|X@Bx+ejC}[;o[5f6lvFkcSv9m!(rH0[qk^?cc6TslZc7~dfclxn' );
define( 'SECURE_AUTH_SALT', 'se.~*tScaX8jT9-qPwd*cH<[hlg4tKKl-sBaS{q*M.]>.uA7M3*u8.r{r.O~UD9p' );
define( 'LOGGED_IN_SALT',   'v`mV!BN|1Lv?Qd?z%:fBv&=}hmE0nF{VzY_xph|7EvJkag>OGQdPxIwdt~8f&ugP' );
define( 'NONCE_SALT',       '.ApX^B*o)^(+A0^#Pb`Czb-*]EKuRc y3lyF~SN68Dwp(BOm=i7L_rlZ40?vnOo4' );
//>>>>>>> 35a9772c7314fc1504b858431ca67853abf2c5be
>>>>>>> de30025c00f77ec883a068b263201eee3b536067

//#@-*/

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', _DIR_ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';