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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'ZtV^PTy7hM:<@Dp3FPIA4@hT&QnU&Nl]/fp1_?-O-vapL=0%M^`Xu8qSRd-_Ga)o' );
define( 'SECURE_AUTH_KEY',  'FvC9<J6$u=6T~$Qn6!(2%Z5gbYHGV%bR|.H=/Qe;P!7G<9!>,$V|[1,[ uzEcs+<' );
define( 'LOGGED_IN_KEY',    '#v48pFW>5UvMc LEM>Ti{l#&7J+9;At4E9e~(MO|`C$VUvgcuV++T$LttZ`cPCl;' );
define( 'NONCE_KEY',        '8.%qaxDtl%=Arc!{YsJh.S#F^q[#MpnH~]xB6.2X6X+^){@y4E~5Z[21|MR]uG [' );
define( 'AUTH_SALT',        'xy07~:z,nf&Wb*l^]1*O4UK8,QF~9NhDDmKul&VS@JQI$fVPz{_+4(Wz<-9CS.(g' );
define( 'SECURE_AUTH_SALT', 'Dr~(@Q_$N*W.[pqd+7m^~[&S47#e}Cw!Q&>s=I^KZk7m3a1BPX5Ul.]BO!W*EmLZ' );
define( 'LOGGED_IN_SALT',   'YsUAWKDcA3Z(ClHlSLto?WXmUJh]$v$-[jYHpkI+gBU_8sr[?t/8Ab #30k`nqV[' );
define( 'NONCE_SALT',       'r<@bhn9Ix,3=g<nQk=8jEM%oHK=Nbuq2 T{r[$V6zU~h<;wiDP|C3zgQ.KIpK<p[' );

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
