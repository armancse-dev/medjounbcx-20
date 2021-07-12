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
define( 'DB_NAME', 'medjounbcx_wp68cb' );

/** MySQL database username */
define( 'DB_USER', 'medjounbcx_711' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Aq3w6MfyrUxikr7VDO1W' );

/** MySQL hostname */
define( 'DB_HOST', 'sql10.jnb2.host-h.net' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '?XrqX!F$s^5nxq7W]6tX!QZwdJzRP04>D3DtC:&Oi6O#D#nCOU+Oo%W;;;rbdsX;4B6[I)-VwR%c!+@>' );
define( 'SECURE_AUTH_KEY',  't,2t@W8kJ;yw,tMPYMQ/mzk7;GX#Hf!;MIe:y[Z41idir[3<W_a!-!rCU8Hb[c9@doO>`c~UHhq0Y(X*' );
define( 'LOGGED_IN_KEY',    ',!=,?9|Vb2I%ad@]JzH;?s*1rNUJ2&rwO%(dvk/0-yh*lW][6V`|!}Q8V^gnsB|z_#;/_$=pa!#,L!>F' );
define( 'NONCE_KEY',        '7)G;)rE4;_j^xUoef0N3:l{u;TUKwq8qpF)HFi!J<r/jN9]+d4z[6p>[9~57f:r;+3/8UAk.x}/abm5T' );
define( 'AUTH_SALT',        '|!nI3|!eJ%QxjKM_1H(]gu4.ref$}l~D<Z03jIGqN^zV{^!5P7g+,K!d!Voq6^TR.!<}H%[sa8G%Kn~|' );
define( 'SECURE_AUTH_SALT', 'F:`/!CpY[-X(m[trd%!op6Uy(*6!56_neZKr*DCq!#V9@/qat@ccpI%tRE|xFhDM:MNZbS`b.ae1_!j,' );
define( 'LOGGED_IN_SALT',   'P>0_Cy6{1^m8,<Z]$m`^Hveo}$w!x3kedW01Qp6Q3o}&v3`RaA_2Pd&5)J8^b)eBD/D3<=#&aR%+).OW' );
define( 'NONCE_SALT',       'b7Oq9!1!DF$`V~zz{;kDi6>]56e3H<3scSE8:ri!i.RF5`Uwz+`Lk^[yNte54ZUNxa.yM9c)*}V(?+{x' );

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
