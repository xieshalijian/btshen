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
define( 'DB_NAME', 'word123_com' );

/** MySQL database username */
define( 'DB_USER', 'word123' );

/** MySQL database password */
define( 'DB_PASSWORD', 'word123' );

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
define( 'AUTH_KEY',         'lY4F6HoX^^Y3)+O[Vs(AvD(Vh! .s+1d=!<e+@u$yr/9pu:Y pK`!:z0x/3X=HEp' );
define( 'SECURE_AUTH_KEY',  ';zr DCAr#K3>ab(v^{:?3f.!B{U`/8(/v9:Cl*FdEJsnMaS|3ms,+fP#k)p]4AL}' );
define( 'LOGGED_IN_KEY',    'wR% %HQx#[>.E`Ob+:+CqL<?)gY>1;II=qSyt/U1^^I~5!uppg7N;95TC,dWk$u,' );
define( 'NONCE_KEY',        'b9a9E :ad] G;(p{|96H?JuWtWEn7Y&R7>)A;RAz}~xh:^g#LB^EBIAWt/E2{}K!' );
define( 'AUTH_SALT',        '/knO=l|GxW2te$l!Aa-j}M54vp<]Ky#Qq4UC|Z5._ilrASN($> N_6r1G0Dz9zSS' );
define( 'SECURE_AUTH_SALT', ']<)]sa@PmZ-UHiJ+zbb9TWX7[1i4eCaWerR%YLg?KA7q|)6U1|EK^yvyZZ9gTU<J' );
define( 'LOGGED_IN_SALT',   '(iK%wD9Boo*gT0aV17w`zijcE($jo]Pl>+Z)L$.u+}ll%GoYbec3z@5-J[wi~fup' );
define( 'NONCE_SALT',       ':V_Y-xr9{>`UIJ)/5zF46p]o:==,dbYkOc21SlP+(%h&lG 2,@56Ybdl&^Dq2~n]' );

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
