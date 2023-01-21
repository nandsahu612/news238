<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u969147136_TYbiD' );

/** Database username */
define( 'DB_USER', 'u969147136_qyMAX' );

/** Database password */
define( 'DB_PASSWORD', 'buvXTaFJJi' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'Q*|Lsi`QJsS6TBMtW;UG{!sy`4}Udfj(?a3f~HkH%%&qSP!&J{Y-&8R6nJuf:fwu' );
define( 'SECURE_AUTH_KEY',   'FGS#_/sUi,y%_xbCz?`rP23=}7|ci4~q!%cn~`49J}yQ}N?oe,<L2nsY{Z@{,psR' );
define( 'LOGGED_IN_KEY',     '1nCTvR@CM1qsqS/jJAdQA)8k*AJe}SX$NfK5sC7<PE3ob/KY*pKSRUgYdVQ!(tpg' );
define( 'NONCE_KEY',         'OBq|ai-Kw~fg,pNF*F@P8;i`T7@q3:VhYRvhfl[E<K^^oMowK$&4WcgKi+qh+q^/' );
define( 'AUTH_SALT',         '<dM{!H:z@R/3%K7Q-Eemq7$7hX)Wic{|jM|Z]iB[<RCaf`MJ,8p-Z>/7SAAmxQoQ' );
define( 'SECURE_AUTH_SALT',  'T6~}[f>cT[,YT}v_!s@[lx?SQpPc)437b<,ZxIrIU$Zqt~vYsfnk-{HF y[O{9Uh' );
define( 'LOGGED_IN_SALT',    's>CF4;P>7^F?Umon-.}Gg<o3dx~wbg=%U_6(9lg*g+GafRkmj6?|[$YekPhy2efV' );
define( 'NONCE_SALT',        'g_s*&8m3:jSgde^zZhLr!K7Ckw#ol<<O6=C,+E`O2Tm= fgUGUzkW#B?.tX[}3u9' );
define( 'WP_CACHE_KEY_SALT', 'vhbgSFv4.3tZGl+@Uhu,},@SY?/?Vc@/Q)Z_aL|cE|zM&0~:8y+M=lF3j]E|v6!.' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
