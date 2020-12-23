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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?O:j%Ym]j_y.ERNq!V1fAn&hzLHh=tP<C];NX/j4?1<>483oaQAn;u..f29f#E{&' );
define( 'SECURE_AUTH_KEY',  ' Q%+%YKUjC/qb+{GN%mn#SoX}]TOhU@Py*:!FR}<wM-HfHJwj(gxiq[zRZq84#LS' );
define( 'LOGGED_IN_KEY',    '6:<Vp2uAe9zLQ=djSaUk<ysl0y4qpZV0DjWDPx/:!WF/*zY}RZ>^&,w+ALUBIi-M' );
define( 'NONCE_KEY',        'KgZX_x%]CfRAFu(/(.3496*:8b{v3+`bl*9V+3ycBP/DT0sA93 Z?/8=`#<]$&ax' );
define( 'AUTH_SALT',        'h+!X{>!#`F]|VBbzD|:!K=Slp_YEyG3pg^95;R~LKTYQ5|rlPO>{zMx`lXa7Q>|F' );
define( 'SECURE_AUTH_SALT', '#Hu[!JZ!^RvzKB77<t^E;4E~n]_mk8Fs2YSCN=|g}LcOw$AEOYR9O_F.h.8P;`b{' );
define( 'LOGGED_IN_SALT',   'K#BHK.r7PIEB[kFn%z)*=tZ&{n|+HFLKy10*)I}x>F25^`O -Bt%z2[V|3IVMVy-' );
define( 'NONCE_SALT',       '*-/fkJ-f`$`iL;%#u4m.)snYE8hi3YD2I+t)_[ju{6G 9sj?pbHoGKr]Ml[I{(uK' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
