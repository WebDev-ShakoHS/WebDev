<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '7,hIM(Y%hneO?^W9W|]!!f]W|bbxKT;(+K:2lK?x9lxPo]NzN@Qjl3!R&U~Y4Rcw' );
define( 'SECURE_AUTH_KEY',  'PMz0f$S|AoPwH$4^Gu#_`h@ ~q*:`9o<!JQ=eV]t3;wRL7</$oaQkq[rEwJt3alz' );
define( 'LOGGED_IN_KEY',    'Z>- gO(6_wA)%~.Y1.c_zj|#PK,tJ(ZQRTSX0mE&C~%/I1[Q~;*%A3WTLh/!7vOP' );
define( 'NONCE_KEY',        '0};./,7#0jEVB#fa20 >KXo0_`:s(S?jY2f./Y74Q8Ot9i[V~?FO_rABHmZP|=Z;' );
define( 'AUTH_SALT',        'm.k#cDYT{ytQotQHw>rLct|>glTacvOf:g@K#E+=>Ib,tM1Bp~0E,3v1Rc|%e>M!' );
define( 'SECURE_AUTH_SALT', ',Ka@};lUy1;X>99([>LT>;hPXy{%D9sg>;}:]^FTveZ, jFR#iT4hgz:tV^FUu/?' );
define( 'LOGGED_IN_SALT',   '|D h&8dxfrz?DO(<Ahju&JSZzq(Pu&1NB0DE3*jt6gr] KP=pK3P0kuIx9>`c*h/' );
define( 'NONCE_SALT',       'jPKu$Fr(CcRckN+mAZWT)MgA7ZLv$XGK~#&sBt!zb}C1pFqw=Ofub)(]97a^l`vw' );

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
