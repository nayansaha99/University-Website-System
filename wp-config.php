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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'university' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/R/m/h3x$2=RUgu+S7f6=(!=rG./!])M[~%?2e5uj#cMaf)1tr:(~$BB(CK=jiKx' );
define( 'SECURE_AUTH_KEY',  'Si~y|!Hoa+0Q[ob{  gtbf+U{F*z^pux71:!>6hsX9#h]>d7e_&ty.=.8o?K(K;d' );
define( 'LOGGED_IN_KEY',    'E<k6qhD~bk&qZH4.X5BgH=v#%yh|>M0~k)]/k}iutOe7SbHh7,P#_.|on$*<Aa9v' );
define( 'NONCE_KEY',        '9}YGb[tR!l[ aLs|aLU[N/Q#^BaqOM:PF,56|<A uU{X[784x&(eH.@o[>[KBrO>' );
define( 'AUTH_SALT',        'bAV%Ba+U/s1m%2R~q?g dDf9S5^KmE4$sN*EBSCWMQP<`l&QIPsAg(P^%?C3bI4p' );
define( 'SECURE_AUTH_SALT', 'bk/xI$ov^j~w2 ms|_F~oAGs}:E(e{CyTuR2fFx_Gb`6:uM;GI<0!]n+)^cXH.7h' );
define( 'LOGGED_IN_SALT',   'C/659@fEY2sRJ{D1l1;Go9A1mMk+IKF{2A%uzxdh]tEoy.F9()%(qF(a/caHV@Sx' );
define( 'NONCE_SALT',       'NZy6/JxezG8q@Idu?nwkMxBI|A:H=srwJ5MCx9PRcpxxGe$NocIqW(VoYVk!=qnW' );

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
