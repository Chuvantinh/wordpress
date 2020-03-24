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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define( 'DB_NAME', 'tinhcv' );
////
/////** MySQL database username */
//define( 'DB_USER', 'root' );
//
///** MySQL database password */
//define( 'DB_PASSWORD', 'root' );
//
///** MySQL hostname */
//define( 'DB_HOST', 'localhost' );
//
//define( 'DB_CHARSET', 'utf8mb4' );
//
///** The Database Collate type. Don't change this if in doubt. */
//define( 'DB_COLLATE', '' );

//// for server
define( 'DB_NAME', 'web74_db7' );

/** MySQL database username */
define( 'DB_USER', 'web74_7' );

/** MySQL database password */
define( 'DB_PASSWORD', 'web74_db7' );

/** MySQL hostname */
define( 'DB_HOST', 's159.goserver.host:3307' );

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
define( 'AUTH_KEY',         'lMy<yK*8 3pJ+:mBnXH((IHHpFf|#*A@CR&6mec.Oz}|/6[_qy2w_Z}4vYNn`?&U' );
define( 'SECURE_AUTH_KEY',  'EaK3/*_AN.8=lY$i!U+ta^^)5E!F{-Vv1@Q-KpS{~ ?+X{I<yyY$;`4Nn@s/?>Xr' );
define( 'LOGGED_IN_KEY',    'R$==:a17n8.B{Y6n`@zh7.Lv[&Lcq{r)}zlk 1VVi-R.^P3Ab5IMymyF<;rffcY;' );
define( 'NONCE_KEY',        'WcQ[_pI$L$1xO%NCDb+nx~TxX%? }9k5Z?~gvmUfE)X~QcLwDM6MD>CISy2Ktr,z' );
define( 'AUTH_SALT',        'RIB#z^;9AMn%Vm=xN.`hS<rc]yX`a&7{j.HGg%v=D,?Q-]7@I>Le~i{Cin.eTzxM' );
define( 'SECURE_AUTH_SALT', 'iw 1`e}en3u-{L1;2La[L*0BT%fi;7k&a4V6S@tUpczV-4]{PL)~vB*5pPeODA<!' );
define( 'LOGGED_IN_SALT',   '?5P9V%rg[4-{8PHewwL0ZiB0Oo6Kq^xI5uV<|<i QR).;2m2Hxaq_5U[%De,DV8@' );
define( 'NONCE_SALT',       '+|xsPM1I|.}}G-BX=L|5BJCJ(?w._UwH&j#FA$V81XE4W_6RO(qw!r&0$R<LI[vy' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
