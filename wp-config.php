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
define( 'DB_NAME', 'EMS' );

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
define( 'AUTH_KEY',         'ii((F(Ve7`kFvgn1gnQKX(_i@!?MP6n9dG_c.xNtF?WIjHJxsWb]W02dqkILtBgD' );
define( 'SECURE_AUTH_KEY',  'e&M}Dz[#5v)1DPec]/a698w5,w8^(,AH9w`&S1QzIQ%3_30jD8i&y#QJbL*2wTFB' );
define( 'LOGGED_IN_KEY',    'lpoFyV1Ye~}(tYCshU]C*1l+(B4KFvk7bjdAWn|0Sg{{/2h5?$,`61R4)Kc!+[gY' );
define( 'NONCE_KEY',        'ugIL%jVb;8SpUm n&}9?NX9*p`S)of0ql=8W-gdW6f%pF?UE6/jGVmTO7h,(nF$A' );
define( 'AUTH_SALT',        '44]wzcVOAkoS7+{)$1M%4$[Yvw.DWxtX-U*qQL7dx-|U4DAJ=4vw8lH.:zKh,nfK' );
define( 'SECURE_AUTH_SALT', '?0.9F;<-Nq}Jr>m?Sn+qQF.A~AMsVe~!._72La,Fd7zvwjUoG`TpErPIyIB &|$:' );
define( 'LOGGED_IN_SALT',   '3{&j/eAjl%KGWm0B3*7yM80(h_]qe-XLEq*F_tfagSZM8=sguwF5NE`4Dz8|!4_)' );
define( 'NONCE_SALT',       'dt,Bz1_>f9`L5;;qf!h{YG&OI&aQh)$WKtguyw.<HK@7j N7h?S}rwrVlz5m-dHo' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
