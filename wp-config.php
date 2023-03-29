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
define( 'DB_NAME', 'woocomerce' );

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
define( 'AUTH_KEY',         '@3RH%B^N~GbL32#ea9)x}FQ24n3o-9{{Fi8S]T<FHx1[t.2eEt6KJijJ3^j$[<b(' );
define( 'SECURE_AUTH_KEY',  '?a(I{NaoL{M`DEc|GW:0HYtXM|v)!LgrAetrI>-Vq](1&7E$7M,5KWI+1QGbSQ$-' );
define( 'LOGGED_IN_KEY',    '**$T;6nhM.;|kV[|$?zO~<rw^rE6T3][H48&.~^_>#3WtmT[2WsYQexHW,GyL!5|' );
define( 'NONCE_KEY',        'tYP;C0t:(nK*jcl9G79_ohzVH=h *7`$#8sl/JxhZ8K7%jL]m{Y4X-G6~hAU+{jB' );
define( 'AUTH_SALT',        '-^CxQsjY<7zM1 dHfMjn-477JFEF-GFStS=/i2w#USIcxyW)+*o#.Y@Sg#Fz(kX:' );
define( 'SECURE_AUTH_SALT', '@COQZO__2wn/>pNRP@TSw)C9kw)6nl_m`f23aR.E2RrSX>ehc[wZ w=C)%lgG  H' );
define( 'LOGGED_IN_SALT',   '+z;+~;eNAPeLZAu.C99Hh+DIg,)kpE-6IaQ*9]%>Gnjn }6/?)R8@i3yPDE?A{x,' );
define( 'NONCE_SALT',       'ZZV$ZsXtrjoj$h`nCc5oiV]iAGP&E+e3|N|XNQ5roPO%^ktJgmeX &-:7xGD`q?$' );

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
