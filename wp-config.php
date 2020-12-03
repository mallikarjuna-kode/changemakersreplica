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
define( 'DB_NAME', 'erdb' );

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
define( 'AUTH_KEY',         'tp%LZI}8*W_nqG4lEjWo_bL2/g%Qwuh#j<P=Kb$UBD3uJy1~We/(NIytdAW]BOi:' );
define( 'SECURE_AUTH_KEY',  'gdYpV(Q~S[-wYn<Sa;G1W!.u^FLzg%^y|4|_sf7O(Pp8Iz&lz1hb#kQ,Ox7Q;mH1' );
define( 'LOGGED_IN_KEY',    '?Gu!xWUI&L0B[/# O}2W;hjnm`/FFU/#Y9@FPZBQPlxy>-JNl2r.P6@3[Bm:&<QY' );
define( 'NONCE_KEY',        'zm1v/+iH4.LE! 7BNm$.hj,,S?e%U1<`{60;Jxn3^l^P~tA_O(.^jM8T]&M{hLlo' );
define( 'AUTH_SALT',        '2s<&AwPR*Pr]lC(*XLzECHm;/Ad=?dQ%h^7FC`=m@wX<dVnn#>Jv2#r{{;G589qq' );
define( 'SECURE_AUTH_SALT', 'dT|[t8HbE$rdMlgW0YoQ/F:B{8Q:OwI&+Nx! =^%)n9}!zH9bFIlGx26);LvZ@J-' );
define( 'LOGGED_IN_SALT',   '2dY0+r4Aw<cv{3RgVT$clX!ob3YKjc3A0>TnyDxOsb7P;jNhMi<y_|v.4keMCuPn' );
define( 'NONCE_SALT',       'i5DTr85W;_m6e(Oia3cfpgs?#4?=<4S(NicO}P6hj1-f,i~9IN+8rHc:1<bCo?f{' );

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
