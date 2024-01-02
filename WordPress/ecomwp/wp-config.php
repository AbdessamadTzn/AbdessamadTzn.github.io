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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecomwp' );

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
define( 'AUTH_KEY',         'wp-k:?G(decDG5q VrFoLXC2/ScKR61M.S!yTE%j5CTikJDbJ?^V#6lCw .oOwxS' );
define( 'SECURE_AUTH_KEY',  '83QD<6q-!Pa4w!mMQI8K:JYRki~|p}IMn43s@n?rNeCT{kHG$c-!y]X!mt.2iFYv' );
define( 'LOGGED_IN_KEY',    'YqY0@djE{>cId9isUFrnB0@1fuBZ&|!K^e>9]4A}T8=X3GA]=KWJ,.EhX7D1Sz{V' );
define( 'NONCE_KEY',        'IeTb8d|pHx[ee.}@EIdoVe0Q?vgc8^UJ`C$:)O16Z]t2E(?Kav5gs^[YE!9.fY9>' );
define( 'AUTH_SALT',        'k)bd0]/rr+e8[)cX5d6B,)HU0(|YbiNF*y[KD*i{)Y90or@.p`Egp7@Ac.>|%kt&' );
define( 'SECURE_AUTH_SALT', '2l/q#=s;Q;zYY*/G.Xh#;XO:^9x]ZvwX_]zaX `7Y/JbK08:koID)^o-iU%iI7q-' );
define( 'LOGGED_IN_SALT',   '7xk`~mu}D/f3@lpRQ1*:uF:~}T-SdpOk0.!YBRF7163#Os7N5#!vd9XU*:e8NFl5' );
define( 'NONCE_SALT',       'x^_COJB|{K%,U_~mOQ%29z]Uo*E]uPk%?h0Zjm4BDHefjcqV/rl<9tJrm1sBGfK(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
