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
define( 'DB_NAME', 'wp_ajax_form' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ',acAw6]HR1<wM~II2|}K|1?;f^7Q35*)hYO9qMa=FTfwM/Il5t?0?i~^npP}SA_<' );
define( 'SECURE_AUTH_KEY',  '?m-H^9a:ay ^9(qjO2^ytr6.&B-.lq>!|:0sHPk]vr`Ja2W9g[AI!ehxYv2G^MKn' );
define( 'LOGGED_IN_KEY',    '%<CZbA~,C6NgWmB]?&bECQ-lv*5P)dN{A/sT]rDHK/~2cy>CK ?b{Bp=Hw9%sCv+' );
define( 'NONCE_KEY',        '!USg&4zY#Ca;2XY`OXH?&AW+inkY<s&mQA,AoB/7s2w YenocH .kZwhDIPd(4b#' );
define( 'AUTH_SALT',        'wro}e?1HT!Nqc/B}q=_P!H.4-,k?vlffz[Akbctj!Z ;q<6*kf :M8L j_=63u1I' );
define( 'SECURE_AUTH_SALT', 'O`!YCF&k>KN]>:`:U[}m;%g3ibryx@:1usKZa?v6e9hx%[tGG=aXwEF57S&YUr7(' );
define( 'LOGGED_IN_SALT',   'Wsz[t9)?`u(iiQ`LJlQJr~sB>#LqG]Nd^5%!Q-6oX/{]yju1ErF5(`UWJTtnAgr,' );
define( 'NONCE_SALT',       ']39ibpERmMxzu5?[{tXw_f#MY;U!4Eg~1} E?v@^fE9rx*WLH?7]`Tys~|Qweq5h' );

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
