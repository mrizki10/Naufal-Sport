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
define( 'DB_NAME', 'NaufalSport' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '}n}quoOf-f`+?!kc?Idm*1!C;Aj[}*rFHecFTKyACv,VMfZS!3<+rKjHIz~iH$pn' );
define( 'SECURE_AUTH_KEY',  'O*dCiN1%76`Cp04}Wry wn[93+ 1}zdPK?3kjfh,P)~Dtj#:},.j^oEeXscZ QT=' );
define( 'LOGGED_IN_KEY',    '+Og%>JPsc!2w:Ii%FtlMF?9~(.dBDRUxhz: w^lU)Vm9_c?15uf7$yaM>VNKb^*n' );
define( 'NONCE_KEY',        'h?h2XX!aHR@m%3;9D/5t]U3.Zgtv#ywM e2e=|g%kJ))&PnE}dX8JiZbcqSM)xKR' );
define( 'AUTH_SALT',        'n1k8]xqv/^f`)~g}I^HpC6*p{q@`E:?yh2Q6L.FyGCGY1f@Q2y2+:nn?&}yAW$%D' );
define( 'SECURE_AUTH_SALT', ',VF<[7CZZ4IcST;DB[Zgs:[` -R~%l-j6[w7e<Tm{:$]73v}B*sXW(TCOk*1g6.0' );
define( 'LOGGED_IN_SALT',   'aOD,T5DJ]P.|-xz&>f4as+=A#keX2~}MF~k.[7cD}vqnK(t)5.Mw*XotMIAB2-7%' );
define( 'NONCE_SALT',       '/L<7W!wOIX]m=EV#Lv*6CtPMrz4T!$+L{Z(S]tw?W%y^N#f,<DpZ70gj#ULlX$;Z' );

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
