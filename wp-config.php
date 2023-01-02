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
define( 'DB_NAME', 'finance' );

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
define( 'AUTH_KEY',         ',A^%WR7e<wyI<lM,~A~Kz4{A-Hi@TO$,,nWy~_~^;{MQKi#~<u@X6{D qtyTZ[&+' );
define( 'SECURE_AUTH_KEY',  ';`miFVYxjq2FhW[o*!N[B[J#F?8KV,-[b=XgkBpx4y|O_;|9doXX}N~Nnd==RIMO' );
define( 'LOGGED_IN_KEY',    'SyDb N5=DWPX^N?^<gEDo<{^*xxXmI$rj35.9y,:4zjRluYs~{3Rk>/P>s[X7S]J' );
define( 'NONCE_KEY',        '~HK,X)8,XYuCReFbhi^idN1x4ygk_f,/PF$<uY7[=c%3B!jy7[u:wD-BzM=Le%7B' );
define( 'AUTH_SALT',        'VyXc41;57=}T;youTeZP{-yfvQp%S9gLoA6;$FtpC;c4g$GjA-RTW/<?;vL@@FWH' );
define( 'SECURE_AUTH_SALT', '5<hYuW.{6Yb@x$Ts?>/X/:6sVv->uDRa?3BV$F`=/1Wk~LCj0s;6+H0Gay>Vj-WY' );
define( 'LOGGED_IN_SALT',   '8Y-z!6Y^( M?O`F/g02%J)l7yFu}Z_dfX<Z=3$ N17s6R?um2^e CP&!l7m]WidJ' );
define( 'NONCE_SALT',       'iS`@4PUM2C1gJ3$_Py/~p]enBr40X^<+wVpg Vju0,4?3rd}#{n#jJ<Z {R.Hs^c' );

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
