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
define( 'DB_NAME', 'antarikshaportfolio_db' );

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
define( 'AUTH_KEY',         'dg(@S0wj~N0CblL#a.?$7:t~Kq2~* &j6{3+aP8)pQi)H.T(}wc[z3!V~)#,S0G_' );
define( 'SECURE_AUTH_KEY',  '^J@s_L1*oIHtQplW*1;H8)L,z|G@$tcem&$oq*+?FiWqW`dL$-AH~P(DT`c]3_1/' );
define( 'LOGGED_IN_KEY',    'yhQYc9fjS(7D[q*Jv[F%;XVq02/}I=oEwR(h>gdm(e;(Gu;sySBE7}V/_lx#u@F4' );
define( 'NONCE_KEY',        'yLjl>#iB}{r1EeO3c{5r6O0c[9%NHc{,VKr?U-]q:qxVlWQ~AFo.pGN[/6UH%yv(' );
define( 'AUTH_SALT',        '=&<nH-,Z}<DgO*wJd>?5q7s=KqQ16x8qS_PZz?JVGJlAbE1C)&&&0EAEq]cEu=A%' );
define( 'SECURE_AUTH_SALT', 'i7jy%KaCPV9iFO>w&otvJJhBOD*j{@R(GhT0a)F5D*M6%BvH(6DOAv:E%mX~H5Nm' );
define( 'LOGGED_IN_SALT',   '09|>M^!LM</l.(hXFT*8B0u33>u~]tf_Xwmfq`p#OWyt!#b=|{$;jJ7/({iiXG?i' );
define( 'NONCE_SALT',       '[P8u6c)R9AN2PbH2[iz/X%wM{`ln[vFy8ON3/vk+s]9FL5r:3Z9)HM94^nxInv?K' );

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
