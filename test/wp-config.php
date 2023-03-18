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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u969147136_ahGVA' );

/** Database username */
define( 'DB_USER', 'u969147136_TFWFX' );

/** Database password */
define( 'DB_PASSWORD', 'i4R51heuuZ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '.&E>kD[On~ig3wRIi+=bdHbth;s6XCj&?XgcwD4)_CDEEBG><Pr;z:kGAqun <7`' );
define( 'SECURE_AUTH_KEY',   'sf#mU0jUh_>c.k:.d~jrY[tK65Al}RTIt=`-X+&t6;J&z?t{=K-vM=}MW+Z98H!]' );
define( 'LOGGED_IN_KEY',     ':w%8PFWeZ$&#8nbr(Z`9ihOpAe)a->=DG,b8%:?oSRVvIEZKU3[ld?<IHSOk3TiQ' );
define( 'NONCE_KEY',         'JDK#{4f>I]Qn^`P5:@4Oj07tO}#nRSOo.McwL+l&`$-UXl(JqF[n:FO#_Ift=U8G' );
define( 'AUTH_SALT',         'Q#tbk<ApWH}CI?iRzMj[drjnf)=F0zB_*7#4.&[oRvkd95;-RN |0d9uIWjv$+*S' );
define( 'SECURE_AUTH_SALT',  'RBtNnR|a r2QBpk6.?)-cwqQ<T>]..SA1]v98oiQ8hQ7?BD fdjQz4TTC2_xg3-W' );
define( 'LOGGED_IN_SALT',    '<eBz]vG H)8.6rnp*!ay]ZYco_GED|ULmcT8S|6qNn/otIeXay+v*eoE4N+/)P-X' );
define( 'NONCE_SALT',        '(^$l)_L;7+M)dY.zuA(QY@sFL~$/U~_bugE&cY2CNtpNd]:.?f:qc]he]v[93$wS' );
define( 'WP_CACHE_KEY_SALT', 'a#r.PZ^|XtTRVJ,V^$SG -zB[m:=ac*AXsm4cm{NLy4Wqw=oU%WBD%g}x#>4|gCe' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
