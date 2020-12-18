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
define( 'DB_NAME', 'grafimprex' );

/** MySQL database username */
define( 'DB_USER', 'mygrafimpr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ctNoIqMs' );

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
define( 'AUTH_KEY',         'Oy7<;&_6r `4$/OqB9r~e[oO*{,jk{bM[h%bK*A%B|~WW:_RdSx`<*y=H?m>i*Gr' );
define( 'SECURE_AUTH_KEY',  'N{[-:vx[TNv:Nl<Vw[gW1U$<dym)Wvv(Z1RD+@PR+g];8lrI=<]}Vf=mz*bQhxp3' );
define( 'LOGGED_IN_KEY',    'gOjW.]vV%^3HlL.vqWj3/EBQj/u^H5Rt6Gt_NXL+*M7$+-yik:/C.9J;s5dGP3N>' );
define( 'NONCE_KEY',        'g_`s#cEj7k]Ocpw>m5w1YN.R*T-K#0+Ds>RfS^Fa@@c~u>5w`3+v7TdykzZT|9NZ' );
define( 'AUTH_SALT',        'Pj#8ALnA_H.)#nY5Mot8Ywu;xd*X|UShJB0y$1cK0zGZmO#?PGn?i;I!Ck>=g2Kr' );
define( 'SECURE_AUTH_SALT', 't=frfw:w,$@ttb7a <,zD>?Og!qu4`zJxJ.sRMl.APOZ-R,ymKzRSh]GpZ[(?YxZ' );
define( 'LOGGED_IN_SALT',   'jQ@=ifg7nPk0q1rGCnaft sG1/tIA8-2jkc|H5,f5V!.Ial4S5so*/aiE5U_5D;l' );
define( 'NONCE_SALT',       '(*L+>qm*C:@XMQn0EURv;@;dFClBnfP3+2pza,I?V,E;J,@ -3VSV:+b]2Ftf4J9' );

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
