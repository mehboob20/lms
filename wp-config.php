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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vs-company' );

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
define( 'AUTH_KEY',         'Q.1wA*<[P9D@!#s}@5>74*lu~<R1K1cX3g$+:kmV(x%a=6~2MSxe_8B)Qa57j{Wl' );
define( 'SECURE_AUTH_KEY',  '4KY1/&_&N.-&a$}sd^<IK9SGhZIuo7wL5*~G9#_?|E!V!!m^XnCFDOc$Ao#rTG&F' );
define( 'LOGGED_IN_KEY',    'ZgF_P8lha]u//m_-&lX&p{,s:v$ADf8#5>K?x%[BN(8(!7OYM[-8FlqjX}{%wCN5' );
define( 'NONCE_KEY',        'vu?0@<s@<keN[8.m1<_;Y]`(Koc HwBKIH]7IpSa4kI{wZyR#L@7|w!rSnsLoA&|' );
define( 'AUTH_SALT',        '-;=oc PC W(,kG85X1KlJ(INidHh_Ca7`NH<`H2flnd+/zceAOEI/>ztC=R#>u^~' );
define( 'SECURE_AUTH_SALT', '7.&||S0dPS#V- Y;VVDlCf?_%^ktY?HB{J8_^T,u!XVFr{ftFb)dS<8>9sgtA2 h' );
define( 'LOGGED_IN_SALT',   'O;{Wd7>cB,(n<a(A-E&($R0fgLj +@,{d;&Q ~CZ5oHj%_Hv^rzIPQbNP%rG+t+W' );
define( 'NONCE_SALT',       '.+,)k/06uZ@]m.iG0u 1|zy%tBrrzuH{C`or^Gz+)P)bL~jgR)J}HO_tH/op&zhu' );

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
