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
define( 'DB_NAME', 'CariUstazDB' );

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
define( 'AUTH_KEY',         '+cf*|3rz#GlZvEvQg#]~6a^Ws^JSJl3u.86eB<dX8h$HxEGaZjHKe|RiC,jG;N^b' );
define( 'SECURE_AUTH_KEY',  '5}Nmt;v9_*k9h@Ey@#1ft XTfYVQ,.!J mY{fq dohyn[2{(Pv*5/40$,,T[y&/l' );
define( 'LOGGED_IN_KEY',    '4;Wp>^U5-(^WxK$:zQP~kQdG,z}jRZ/lc)pdL]F}V_%A6y>+ICU>Y`S3%V5FY*0|' );
define( 'NONCE_KEY',        'VBrZy;_a.):o*|[qc3D_&Sfa8]uUz},f/?EowK=@QxCUUq=}ij]a1|;+Y 7h5>g>' );
define( 'AUTH_SALT',        'p/f#)*j:8!Z&iy(V_.~#QDV:nW|J2g=4t+^|}J-,$i8;sdjrdo2OMjXTM3sfiT>V' );
define( 'SECURE_AUTH_SALT', 'KC8fNgOj;9.Y5kuX.mYCQ+Uh?AUoj2lD1rR`R~Yo$ZZ1{GKo`ts?~ezR8:2^v*pm' );
define( 'LOGGED_IN_SALT',   'wMGX!9u!e~1Q@V.cSgjgymIyz$,Y{@%,=|-y_6m|M$4[{V4~zrAf~+RK)|I<_=nq' );
define( 'NONCE_SALT',       'Vi?t]jHt7=:S{i/<`[lHQ-;L1( C48/bQ%q%S*X.D5Z?:[t[B _W*xYBrdd[e~By' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
