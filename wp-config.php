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
define( 'DB_NAME', 'rotatenav' );

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
define( 'AUTH_KEY',         'DdSbG%1sF@]kO]~dmr=<*FHzmL}kKHq>V:||mtoP|y[1_@pMO82f`[273YA&V*+u' );
define( 'SECURE_AUTH_KEY',  '[8!WK`SC4$~4_Cl$TL}rlUCr[U;O+A+y,wDJt?pEaD|)SWOf)O^2leBs=T*D6j@{' );
define( 'LOGGED_IN_KEY',    't[rl0HFd>o5g:7:+>@Fs hE+Ah7Rn^`P&=Qg_lzO>I2!QIO1g.%g8~3Y!:Y**g*T' );
define( 'NONCE_KEY',        '$U9;9(]iC4ZHGCf(;@1FX:AjW>x}PMti4$>@rP,TKa{l9]Cw|_Ifq}xNVVGvF=+=' );
define( 'AUTH_SALT',        '[uueaS,MBgk^)^fMK08ss-MR,S7oUB+;3g%rccuf3qx6@N[a k0(6?tecUe*IVO|' );
define( 'SECURE_AUTH_SALT', '|c@iOvR+rh@2qP%FI[+G n<1v7,< tSAM_QA P=QlbZ:$+A owNpa(j3QT)cw]Mh' );
define( 'LOGGED_IN_SALT',   ' ,6_wjSeP10-q< 1=J(`{~Q)GENnI-B(~-!8U5~_ZdFAFk5TY45m[EU)6.aD MSH' );
define( 'NONCE_SALT',       '`Jk>u+,s}^[iGL+m0[Y}R1]i-iqSJW7MihZQxL7,OQ%Dd.x7iI4fkKtD@`CZuvGT' );

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
