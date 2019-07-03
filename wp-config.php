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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assign1' );

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
define( 'AUTH_KEY',         'KLhuB.rl^X])Ci.rXSX%$ae3 B1VkIEUC|*y[Iz4*e,Cb/1R?D@&gqk!$K0vd7P=' );
define( 'SECURE_AUTH_KEY',  '=Ho*H,^?eMS!sgJal~:ch#(>U hQn3uZQ]Us+f>q<WczmU2o19-%+]_[IS9ixl$:' );
define( 'LOGGED_IN_KEY',    'MP~(n)VKl7D?T(VBtuY/[r+h+0=l ]CFc=aVXY..y5M=Z3}fg%<5w<ad~Sc:u:M1' );
define( 'NONCE_KEY',        'wmtrCoi|o77@ s^A/f14%H`Zpgh%Tp[e<V0d#pC$3yklC3|caDb?o_uu^$7Q&}D$' );
define( 'AUTH_SALT',        '!9e%thGb?OxGNo<LN n_T+%B/Pz[7adQ}<Qw{?4,0#a706}[@Fz^jl!fqYl]~B5i' );
define( 'SECURE_AUTH_SALT', 'k]y1x}{l[K};i$1IU|5CNsx7_gp)OGMD$kC}>N9HWS5cF531E3&08q>hnY6~hzKJ' );
define( 'LOGGED_IN_SALT',   '^wZk/C|vBfWNbA4iYI;#8V$GSzj8cL60W3+m9w{i@Ce_Pz7Z;:KNcIo!NYabp[yD' );
define( 'NONCE_SALT',       'JV.OMs%p`O|Gte+Q#7~yZ0Q$v4`^_2RY97RDgQ3kd$yh>aRS&vNpaq3f97.:98,:' );

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
