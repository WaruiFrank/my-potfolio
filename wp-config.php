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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '|nYo=vjwKDv`j5N?yInj3fCNmX4`Bl8[fo4MXlBc[:UgC<o4_Q.aZ6seKV#9g1.V' );
define( 'SECURE_AUTH_KEY',   '`8Q4nP|[v?>6m6Q iT6;=JGXU]_o!hrBw(;<p;5h7hm}g@LOWu?u>Q3c?h:F6K?-' );
define( 'LOGGED_IN_KEY',     'HAF~,vJAK%Y57Q,!QOa7u;*Vr*>qpC=o1RF3Pl$yKQM7+f,1[(_%0dI;mw|5H*e_' );
define( 'NONCE_KEY',         '2yuBb+aZ(9-Yb+b|^;roQ<e,cC%`Tnz-9l#_Q`:77@YXX%.:!o=6V[nQr 2.u]Ip' );
define( 'AUTH_SALT',         '1O}CJFy1SeV+*Z?/`VBDXEbkTkfQPP%tAT}BW&S#a-vR=_V{^irYak<iNMg9T_L|' );
define( 'SECURE_AUTH_SALT',  '~yLh6GK{t`EXUgpq^t+f7m}*x(a9AR?#!*A`;PF^!UH&NY8o[>zVHxM7w1@8HJsC' );
define( 'LOGGED_IN_SALT',    'Q,-B:_JNX0vhtCw*,L[*%e@}W>!=h7D}qb5,U0dH<(K7ciW-P[PaM[E%#%m7*]Q@' );
define( 'NONCE_SALT',        '-NP4Lv_@%o@||=*)m,8Q,CJtR$,/+}zht*VN>9bqLW_-KuC=~rtt]v:Mx2G:I|3u' );
define( 'WP_CACHE_KEY_SALT', 'KN:,uV6Tu.wr#kF8Ud=f`*-S~wEk.0NKNf=YOy]Ldo~400=fR(2 2_he@Fi+qjQ0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
