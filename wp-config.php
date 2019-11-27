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
define( 'DB_NAME', 'portfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'bilal.portfolio' );

/** MySQL database password */
define( 'DB_PASSWORD', 'U8cceJ4Z$fQ%zP+' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nS`kDp}tJ%5d<Yw&@c-_OG,H{)Dth-ynB|FTu~`_:qH}(w0`>MN}!z>mbRslRpMN' );
define( 'SECURE_AUTH_KEY',  '_2AU(/@A5$7+DO<[OW<arO){S8+iV;II==PmTg#bgSOB2Df:cn,OvLSrieET0E6x' );
define( 'LOGGED_IN_KEY',    'Si^G#y:(Qw[+&tF^c{k;PH]W9x-D|cJB,|Om3jzdHIE[*v8IT$#jVhYgF-O$og(O' );
define( 'NONCE_KEY',        '{xq$PpffsLCyFb9yL&(M]VNeHbPx]-&Rf=dAn1+JPd?psU5R3vE06Iy,{0NnI@(4' );
define( 'AUTH_SALT',        '=Af+CyMwsI|U~wl.OC_&0D7j[OoPItXCZWd^3oV&Gu%@DgdlifS_8ntX2-TxYSoY' );
define( 'SECURE_AUTH_SALT', '`Us~XY0jsPg<N3(^6@+W:Ng*=/Kps=8?df<ScWhu$LC5!Vx+ZHU(#W~M:g,qnl(#' );
define( 'LOGGED_IN_SALT',   '1`?}G(Y}1yBCCx=)96cVp;&jBn+RH/pH~sX?:m&w11$vlui,<(1[Owk kMej~f)N' );
define( 'NONCE_SALT',       ']au-rvXN|Fxh<!sOLaUpk|EbnrB7+t#d`E-ZB/J>t?kh^ysFGAW-oUfwa)nT@L[+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
