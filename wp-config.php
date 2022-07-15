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
define( 'DB_NAME', 'harun' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'dl -x]@4({kj^Yr>&=2a.I0#pot>YJjx0K(Z!{Fy9;r9y! 5?K5h6v;/fjnA5zRo' );
define( 'SECURE_AUTH_KEY',  ':vQ`r|3Y _,%Vj4GZ*HO$9M]FZGZ54sdyq4gmAql=Q7-0aUI-!RcR(zM$T31x|JS' );
define( 'LOGGED_IN_KEY',    'xy(CU,htoIddHotpV?O^zCLj9& 1$5`Il0p(/i@k[3Z4$VNc]*+OTqAv=+TeTk~y' );
define( 'NONCE_KEY',        'ti]kISR?h}[e6!I3]6H@*ZmUSk)wgb^h/r#jCCYDuvsXY}}FS/1]#>rT3AuIIlB8' );
define( 'AUTH_SALT',        '`jyk<v*DV>ZEU}tU0jlPC_;=c*zi7Y+3)$0d-4v_1(p5;Ux]J`&<23OgM:av;I<)' );
define( 'SECURE_AUTH_SALT', '[+7zwz|iqw^O?`deA| zk)F~&Nh0=.:GdqK7hcj_B9LGh]83YoP-#JW5F3hiz|[I' );
define( 'LOGGED_IN_SALT',   'tf8)v4t(LpIW|:^Xig]=GY0G.q 73=sYi o-Ug~d,U@NFDs9)%}uzmGlL`g_YHT-' );
define( 'NONCE_SALT',       'k9j`qoFBn`>J|zz=J.Y5JSkLRYKB5dJ&k2FM5h50uOgeA>z[J,p)JRRA`fOvBjzL' );

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
define('FS_METHOD', 'direct');
