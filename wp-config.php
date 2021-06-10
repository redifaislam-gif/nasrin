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
define( 'DB_NAME', 'nasrin' );

/** MySQL database username */
define( 'DB_USER', 'redifa' );

/** MySQL database password */
define( 'DB_PASSWORD', '6XWDUT5Lh39PLJKY' );

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
define( 'AUTH_KEY',         '1;xZ[I,q$G|9A4&$t+~tk~]XN2noG4JfLRGcShYw1I{}<K@z;YZHp2JAZc:[Lwri' );
define( 'SECURE_AUTH_KEY',  ';[b6h?<U %*.txKTW$tF:piO`R!A6SC5fC!<eJby|TQ#TW<&67|}3G*l&KIweS=i' );
define( 'LOGGED_IN_KEY',    ')W+uzv#.;qF9=A-;ET2^5|;Kd? w08_@/R1azO 9+T9|r$C{dP5s6oL;+q)( =J2' );
define( 'NONCE_KEY',        'c?k!Ir5sWGc!?/,_nv/T0d(r}2}Ln?h06@@Uq$n,;2o5P}{8f3=KguMoZ9G=jq!v' );
define( 'AUTH_SALT',        ' /*}}Y5O>k+7+M/=5lr-yZ@ig,So{i #;j?x<JB7%$|[wO6>.#5s46Alx&G>2oXZ' );
define( 'SECURE_AUTH_SALT', 'E (D%g<~t4:ThIrJTx&*? EqdJ#>-#&:gOPE0<dW_0k!Id@=z#rG8rQC C/1M5!:' );
define( 'LOGGED_IN_SALT',   '?(W8d!ewGr)D1DGAphjF=LchYYyM,Sauh~$2o9E6t9iMv}E9Co)QKex< A(CCQT*' );
define( 'NONCE_SALT',       '+o#yFhIjE|T|9,GgpC{3|_RyZBIH{=@lPULj9L6QeOI!w>~6Y@z6K-uO.p}~~X%V' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mh_';

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
