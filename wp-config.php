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
define( 'DB_NAME', 'nhomj-wp-2023' );

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
define( 'AUTH_KEY',         'gjrhRYGxzW6e9;z7-cR P64*M8{gQ@-Tkm+wUOM{@g`&=Nas6(E9gp-NdUQrt&p8' );
define( 'SECURE_AUTH_KEY',  ']G4Rkk}~j=!rqY)E{j[W3QMDN2}|4,dYA(1S-968EluoccMc{jO,:480ZRoF> 5.' );
define( 'LOGGED_IN_KEY',    'ke(%#4LOT>yi5*+%`ZR1-S?/oT R&8oyCer# )6fPk8S]>?!b;^K<OQVn*iCy2mU' );
define( 'NONCE_KEY',        'ATN+a|%w`SLYW6DC253)fzUQqG2Pd;!$a<Iibvl)xxkC6=!b8-XMl?+A5eg*E#A_' );
define( 'AUTH_SALT',        'fniL7ar7=$a.[N.*h>&>JgB ru.I5txLcO c5r;<r*^:it,f{c7(ch6!en]|U!bI' );
define( 'SECURE_AUTH_SALT', 'z4(#~C^>)Eu@/:^ $(/ a[I/I$)/q/86;_9H6~DU-x&Ex[N4^a||[c74ran^wr70' );
define( 'LOGGED_IN_SALT',   '<(zm*[j@uwoBtxq~&Ax;pAB<%9$R`=YuNet>D18U^sq;#XV0;SjJ?]uOHGB,a:WV' );
define( 'NONCE_SALT',       '0|UqI98.}v1m]]l/)}|m<;SM>x)8)Qofi0@?ehco,i)%W{qoGzg,ZV4IL}=kMdcf' );

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
