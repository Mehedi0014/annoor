<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'annoor' );

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
define( 'AUTH_KEY',         '`$$NSe-|dq&QLcTrX%`Pts;7LW.}}fEf 9}iI,4J<g9sB0*wl0u3/?Q9xb|F&{.h' );
define( 'SECURE_AUTH_KEY',  'nv91m.d&RG$_n^_d0;*f !T~p8k~3qr;~a@e]0Ht?frY;93#eTExhPHqnsG3Drrk' );
define( 'LOGGED_IN_KEY',    '(>M8nhd4JE[:Y[tse%WN&dBTMqQEA3#Cn2T12&EX),cjC}0}1Bv#4(,r=E4[/1SE' );
define( 'NONCE_KEY',        '6c;u8Drvo>E2HXLUj+2~@[b&w;O6aWTXY!L*AsYLU]7`vsc0MzFp?+1s9Ii![pD*' );
define( 'AUTH_SALT',        'pG>y L_~O2ktP-hpn(f7Ue54#RYq>BqMwZY.3AI#;HZ8E)f#SH?vFk4SDr<%+7h7' );
define( 'SECURE_AUTH_SALT', '&R-:Kf2s6+#~2cTSQ}_r=rW-j-mN{|0IXS1CC7UK)Z{SXlT+zkWP1y%X@q1(K|d.' );
define( 'LOGGED_IN_SALT',   '7B&{E#.5~C)H8&>g*)rP_Wyq==O;_Q=@>PDt$0Xt:tQ}E@87IJR%u~C=ngY|H=;z' );
define( 'NONCE_SALT',       ',c4&a<D-_mA6<5/H&[ttx H 3y]^G{kM 6tK1b.UKs,o.JhM.T:}Te|kZ%j4|cbi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'anma_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('WP_MEMORY_LIMIT', '300M');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
set_time_limit(300);
