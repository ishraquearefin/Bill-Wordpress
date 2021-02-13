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
define( 'DB_NAME', 'bill' );

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
define( 'AUTH_KEY',         'hL3kAK./_R!o^*pnJxUpFrO_/i)rl.Z+Gx-_*/062qsw-?/@k1W_BSx}4u;Jj2*)' );
define( 'SECURE_AUTH_KEY',  'x-=e*@d%=TNrE3H,^.D_~>ABocx.Frwq/:<*^(`np4 sl5I=jP:3~|:]&6lYFZPB' );
define( 'LOGGED_IN_KEY',    '^T?PHQBvi#<yfDxt(ecQ&#9`rK3[U4ulVr6nnRU~[De[}WtKOgl8AQRaC^sf8WIT' );
define( 'NONCE_KEY',        '^5?cMgn|^/^QC-{YCUdOdb,3}XDI1]:`}#NqU0G&1Q.i1|99A?ET23Q~JskGP*9A' );
define( 'AUTH_SALT',        'gV{HcFxu0)-39rtZ9PI$T#2dFyI8anYiDqRwXziO[a;|R!O(y@,Q}8Gt3*U,BG{4' );
define( 'SECURE_AUTH_SALT', '1%VAz56( [F?_zx2|R;l.LE^dbB D/Fs,yykl.$GY$dXfvJ|7/5|X~@Wrul/d_ce' );
define( 'LOGGED_IN_SALT',   '36d rF#0K4w90bIjCf3jQ)B{gMGWnNM{5gW5ydI4#v9$sp[aS4ChXPaaWWuevwVT' );
define( 'NONCE_SALT',       'C#8ZN/nO=ssP{w!7s+#L:ZQFFMWbiNWC/lY#{BVelB$1B}LNaKTERT:uc):}*`j(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bill';

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
