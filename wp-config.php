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
define( 'DB_NAME', 'travelblog' );

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
define( 'AUTH_KEY',         'hb2gqzuMU&-8z1,F8 V2Q5M)i_~rI,0RQH-*I+7Ll!pM2W7g/:`+yn1e89E!Jy0L' );
define( 'SECURE_AUTH_KEY',  'Bp7+:>;FF2SQLPPaATpPfVMGAX<65W05X(!`0K>]B$Ewnw0aMtnJLu+dEmLV(_t!' );
define( 'LOGGED_IN_KEY',    '?q^ @a3#y&Yzi~Zlx_8}>;OKRKII~{.`UNll(j} `qDefz`=Fj/Fp&-OAHDuHuxK' );
define( 'NONCE_KEY',        '|;`dS8m|iYM6^Dgnt7P5Mg*X0-yM,U~.;=nm[z=j[t-yvPqcDnjc44L{zWP@_YZJ' );
define( 'AUTH_SALT',        'C:%irZ0){~ {YyoCr)gTy3j&*;fn & 5CnbFpS!_0YXn3ge2+aj{l<CLqE,E ^t!' );
define( 'SECURE_AUTH_SALT', '?+|^Q1;{/aHa^uuX%Hymte,{uL_n3sg @Yr:hvKrI^v_B,dtQz<I@xSZd,QBEZS7' );
define( 'LOGGED_IN_SALT',   'Ja,tAyx4Nj#-}-aTTjX$v4|3o5D3(06D*Ao+a~!RoZaYy >pDOXx@lf2|)EG*Aq.' );
define( 'NONCE_SALT',       'wU +H&%/0*?0.v(p<,vAl((Kfm!c=n2.nR_#W) {,n+aw3@F&!rNbL*?c/y&/[TA' );

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
