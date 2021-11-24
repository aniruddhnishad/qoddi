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
define( 'DB_NAME', 'aniruddh-database' );

/** MySQL database username */
define( 'DB_USER', 'aniruddh-user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'KyXmUpQ1Lx4J' );

/** MySQL hostname */
define( 'DB_HOST', 'srv-captain--tkcbewvhdi-mysql-80x' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'CK}<fw,{}&Cd0^f])d%=@p1V_KW}(cAJpwk?}A/VB!sN1Xst@+nWBO4yGAdbusA3');
define('SECURE_AUTH_KEY',  'C3e5K}KB3k46|GPi9l,y_nQaCku@C7|bwEBz_-O8o&+$qC7cteR;DBvx$&Glh>QU');
define('LOGGED_IN_KEY',    'RC0b*(pSf.yF7-`zXnf5i!oo-t|*2>aaf[h40hNv6EoB7Ty4zD +HUL|k}m3]R#F');
define('NONCE_KEY',        '#`qdLwwkHTzX$I=,_&n-{JE(W!$=UvFt-U2}w }JcmXc<EW^Ryp,]cF,y9OO(|^U');
define('AUTH_SALT',        'Bpi_j~*zI|Y7L-;G^<3SMm<Y{/(;-NN7`{e0ywZQ;`D^+UoFBYrb$(Hu$:XcAg@D');
define('SECURE_AUTH_SALT', '7FBqH~>Lzgw|veh}R65fa~{LdnT$gv=EFJe_eCTzcdyG8-J$n#w`A`~|B;&o@3;=');
define('LOGGED_IN_SALT',   'Z}kLC)K^a+.1^$e*&y}h.0Lic#e)z+=4ot?A]#CU*y--U@@=d6|]g^%8fM!S7]L ');
define('NONCE_SALT',       'tGfZ]=hl4::$O<>gB+#ng{+>S}yMe]&S:^g7/!zfMf|kc&D:}8ln$v%T(P`hMfa@');

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
