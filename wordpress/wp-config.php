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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog' );

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
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '{G:HuX U<_ogQA741BLg)|]iu{:JYHQf@A^#oc13WF7L8o[d=a<`BXc$!Pl<5aO`' );
define( 'SECURE_AUTH_KEY',  '>KUb&!r_6}6P9[MFs@At=&7W$UB)` dfI[7-vkr0w<?3S-VDoClI}Dx)}tr8= >p' );
define( 'LOGGED_IN_KEY',    'S_8%AZIjgb}5%#R?v}cjA7:f#l{u6@HCZ(k.;TF.@E~v_Mg5&HamXDO}w;Tqcsf2' );
define( 'NONCE_KEY',        '!3K8t;XTNFp>oXMG*Zyv2p}6-} clfAO&voE4$VbTiR1IC.Q6tC{|5ZP[1U{.ydT' );
define( 'AUTH_SALT',        'V[Qe.Rtu0p~;L@fYpNei&l~e1Z*X~&8p;iCl(5R:64%VlC@9ivE*&Ak`Ij<~TcTR' );
define( 'SECURE_AUTH_SALT', 'DP+2viv:!G6^kvS+qQc}S-,g8AI`R&}Uo7Tt)XL+()[0U].GrBjFt?H.O>,;yvw>' );
define( 'LOGGED_IN_SALT',   '5zLC:<L:I&X4oX(~,^? |:V*YJDT;GAQl]WKkt+d:=o|K}aszH#vHB6)Gp,zd$ne' );
define( 'NONCE_SALT',       '?xZjpe,]@j;_@KI_Vh$_z]O{xsB$O|+r}ioA% O|,)mBaJxSvB|%]K$[p3W;gf9-' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
