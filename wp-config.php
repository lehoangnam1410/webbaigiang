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
define( 'DB_NAME', 'webbaigiang' );

/** Database username */
define( 'DB_USER', 'admin@gmail.com' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '<_3%Hwyb&KI kf@(v09kf<9`Q`%R2^ u_mZog,g>?4~~F@.kd1{qKG7&9IZhoJ<u' );
define( 'SECURE_AUTH_KEY',  '8F,TU>NHa^%%9bUj}7|q42{f+->OW?GN<e2!gi-H$oS^1K}sT.MUg13fSJWUSMHl' );
define( 'LOGGED_IN_KEY',    'x_}@5@zK+a2}@:4_LKtC$rSH~K9+OQ/&CipEZZIvcCuHB`9fqIqq OWgEho[:k_/' );
define( 'NONCE_KEY',        'Z-Y&.Vg(*&7fY%11Z]_[ :ys(QC+/Q?KbK=a)S(7f2No~jn=WH7tx+*d=CDU&{GZ' );
define( 'AUTH_SALT',        'IaR(c.qPG:VQKm-mS,HnJp))X?J@9HXcF<x$!eDIfEcuJighNZHhXaP8k|&<+6hW' );
define( 'SECURE_AUTH_SALT', '2^{0Wk<;zF638OV[.I*!zT_=WS!5|B2#d:{Iw@k?$hu4FGIH1vos6Tw2VM254LXJ' );
define( 'LOGGED_IN_SALT',   'X+xJZq9-Ru#$lK]JFr+8*i[v?*(cT=bW.-tfL@F3z5#?;zOM*GbW6e7pc|W@QkYO' );
define( 'NONCE_SALT',       '?7^,ew6=@Vh]a$$a)c5o@{e)/E$ 2k;}{GTVaY^M8=:l00JLL/eF/UT3!yv$lZAs' );

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
