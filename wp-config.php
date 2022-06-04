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
define( 'DB_NAME', '01' );

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
define( 'AUTH_KEY',         'z>UBL(<lpmjDfnaU0[G|I5AbNuyko#fTt8Ax<:Zrrh-.bGYc|.8$:*lp50,!Eg4{' );
define( 'SECURE_AUTH_KEY',  'iJ P%dVTbsDG~!EpjB::lpl&<F8;au`6lRhyvJ4[4V/E9R8Y$T,sh|j9a7;JF0Pp' );
define( 'LOGGED_IN_KEY',    '!c6CCo<.(u~h@Mx5`QD=~;zo?qnAIiuPR;e{qN_)<tmOY{,0Y,vIxuLVf~Q;FR5s' );
define( 'NONCE_KEY',        '[Vs<g3uVjM3jR)Gl?By;9Gys4XBpjmC=AM|ehn~c6XD@[cVJU_}kq#Q`K^,My9/q' );
define( 'AUTH_SALT',        '&.Rb? o5s]$?5}(f)AM0FJirb=G_{RZ6CC6 1i9Kd!=]!tSOS!7/dbiLNQ2;!3Y?' );
define( 'SECURE_AUTH_SALT', '2MS!:s@tT[{l_p+3dyqkYzymt8&`d]kM($tOk^9ulst6*6h5NqcOxv1,8}9E6mh$' );
define( 'LOGGED_IN_SALT',   '`[S12kx==&*})B2#dcX2&q!{H&|B]2aS@]][K!&[P}|WYW[R>-FvVw=v9ptVf_oH' );
define( 'NONCE_SALT',       'h~ZYM6~j+|a>/m}HuU7Zm-Xwkg,f0!i|uXY~$;H$ ozFu}GD|_$>&|5?~F%1ASNH' );

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
