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
define( 'DB_NAME', 'beatrootsl_db' );

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
define( 'AUTH_KEY',         'N{^J(pVC}PL)J|WXzcSh)W}3oCd|nM9MX1IfvyM;14cg#31cc/}1[o#gQ$9sr%lR' );
define( 'SECURE_AUTH_KEY',  'v]$Sm#!?>VJzU{LT{S47vL:x$]Ao2L8i;NOwW$`W5$kzysZc564oWf3xno/dT3GB' );
define( 'LOGGED_IN_KEY',    '`tk;lq4w25_x2h 2-];WRg=u pPVIF6U/ZB!@]JbP Al;Cf[KM+RUh:Nre&9)596' );
define( 'NONCE_KEY',        '0_WXN?XBtldcMt$W5*W7FjN4iZN{BmZXs{h&V7ULy)Wvtc0=@V01})|j&{oDQ;a6' );
define( 'AUTH_SALT',        'b3NuePFxHkq3JTtV<+cJPBRG%MhiFYhyaqETovc-$bc/N/lA[AjC)/,}i6mL<A&h' );
define( 'SECURE_AUTH_SALT', '/ryH}GoB*E<*_7aU/J<X90Xxhl0PL1Q$B4k@zRoc*p7{[q^=Yf5+gfo?dJ$@fVx.' );
define( 'LOGGED_IN_SALT',   'D/lR<%7;kY`#A,LfTi^%OMrR&)`fwxUF*7kFS#_|JG<dU-[qCL|W(eU*APtSpoH5' );
define( 'NONCE_SALT',       'U%zp70JiWWJ*1iCz,r c5nkD5Fa4_xUB!c$3yBrRXTuj9]Oy*P(Eav]$_3*A`zO?' );

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
