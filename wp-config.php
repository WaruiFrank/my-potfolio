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
define( 'AUTH_KEY',          '_su^x[g9>:BKr)R6TE8/ot(LqU0}:!dJY;=I#4aljAR,J25KMe.}1j]uk.|`VHvU' );
define( 'SECURE_AUTH_KEY',   '+rE]K`4AI9tG[18d{w[zOJ?#W<&BO4`cS~Mg6b{EPEVtk+!y@j B^m[ejfd== lJ' );
define( 'LOGGED_IN_KEY',     '(eW@EmF2iEaZ+Ungli|(ulssyp7mb+~JBL$jq]`H_ASRtt/B_.AAR]YO+c[GU`}[' );
define( 'NONCE_KEY',         'eK8}`*NF-T2Hj[2TWY )>QyiaY8-=>> ,`8F;B;@UXHtjwQzp;dS~UqxZ({e7:pd' );
define( 'AUTH_SALT',         'ACBoRq!/{RA:h^d`Z7MFg1uH10wHEC/-nSej:S;w<ib<,*DlZ!]gFlcT=g!@F45%' );
define( 'SECURE_AUTH_SALT',  'u`g./9Qu.DQ(YL+8QPF~)EJKboO&Y]%m*;SA5&{8D@JhWfs- |^ers&psT!k85(o' );
define( 'LOGGED_IN_SALT',    'owxYh.-xJ3!zD++[IkT^8{w~-}s}}RWZ.|L`o x2bC$]iL@Yj]nB7tM (?ro p,0' );
define( 'NONCE_SALT',        'NRtcVBzuWx/m3lJ[TTg@zw3mt)xF-lHg$/031K$&{8s]l`nECb=9#}v)B[$;457J' );
define( 'WP_CACHE_KEY_SALT', 'w?]HPR&:3?8ewZ|9ACqZw#sFaE3kr+([[;W2><To/*NDR*~J!ev|zKO&x0hsBH33' );


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
