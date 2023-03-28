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
define( 'DB_NAME', 'WP' );

/** Database username */
define( 'DB_USER', 'Root' );

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
define( 'AUTH_KEY',         '&cu!FZ,01$FA/.6)kW;C!90<ZbmLZM.l:p1P5TNMFpKqZ@Gm2Cv/6]_y[TrGqfRw' );
define( 'SECURE_AUTH_KEY',  '/[c21C_Z^`kdlTc.Rmsc8# q+Rf:yS<Z:0vw{Pac9A<]rf,a4cXA*[?dyJR!h13{' );
define( 'LOGGED_IN_KEY',    'j^CVfvN(clSIY.|b7a?sU&xh)v`)Jude,8Vz9jN>vSQFR{#&vOPxHh`:%81vvr,-' );
define( 'NONCE_KEY',        'A4a05;`+m#~Y%W#,|L7p7<XpvFgh25t.e%<4t71se_b[:h!7F9Zy%Fyi,a5EekE ' );
define( 'AUTH_SALT',        ')VG,8.)}]Lt$.1fa_x7q0j8+k/~rLw4CNR?CnhTY4~RYjepw3}%QRImxz@QX^f^(' );
define( 'SECURE_AUTH_SALT', '4`V3(HH:}Zg&n&>4{y.Le&sAC(h{jj-=)Pi!{by[Rpq~U?.ZlA(~Nol,pB0E*],c' );
define( 'LOGGED_IN_SALT',   'bsVY$i7$+YeUrC1.>Xg13Ak_3pTTj?#mowdk|gq?7#hw{Gp~V/PTP]yT41E9(l&G' );
define( 'NONCE_SALT',       '2gx!`2GDY)0&h!A[Wm;.wh^PKJs4cVasC(S2oI&$=|/9$=cFG!uIiUeT(6s@CH%Z' );

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
