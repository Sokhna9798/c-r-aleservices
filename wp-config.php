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
define( 'DB_NAME', 'céréaleservices' );

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
define( 'AUTH_KEY',         'eU}~6mn`FvF_:5KNM>/7Sq6)pJU$A%+Uk&^sRwk ^+$qS(f?)uOiW0v49Z[,|:oM' );
define( 'SECURE_AUTH_KEY',  'QZ)wd[t4tS^hRQ6;~`e~Q=8Vx[vSBFZ&Cn/USgq=)1C3k,uL pn#oe<},r_xRnA6' );
define( 'LOGGED_IN_KEY',    't%,RR6kB)nTf@wCjp[yVakD4FW/(Y9t$[x{kL??+JYUJooo!Kg,=tH.e%gYJ_R6M' );
define( 'NONCE_KEY',        'YG`0 lvW-qR>9;q@3NfAxO[^pKCh(*z>5_LY^WN$#Xw$6i]Vjy^<5ro-~~O$[$/4' );
define( 'AUTH_SALT',        '{WiL /Yc<v7SsB?3&8rM!H3IhC5W@pI8t=8]|2Qy`?%(e{kY0!S=J_u/Ka94{e4F' );
define( 'SECURE_AUTH_SALT', 'DK2SSCN?M@])gS<F7 og.?)+.B#M(zj5&.+`)1Jdlj#[c{Ny,~4zaE[vM,K-(a~j' );
define( 'LOGGED_IN_SALT',   'zd@6{<IaZGQ]Xy1u+zGr`Ml.mMLd9Pe-K,_$z>[>@i)wSQ3~fWUrMTA:sAo#0oW0' );
define( 'NONCE_SALT',       '*9`ifnr?2X5fQ18 Eq17%XeQnWk:|ChRV-XvLWCF;xm rMv-csfxjYNYv#aI/BXR' );

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
