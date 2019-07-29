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
define( 'DB_NAME', 'cohmedical' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Z|P*!:#^rm]f:]Gy9uoIMSw(dVK.~}5>#+&l1K81(Q:G|~02ve{+,SV@e=kI!/d?' );
define( 'SECURE_AUTH_KEY',  'ULD#`F#(3z&J}`xgz3hOHj]_8|61S=_Z@KR0]IxQmeQQdYA~]O`:snhQxiPdwDc1' );
define( 'LOGGED_IN_KEY',    '6c4u)wk+|Gq6(!cI&BfP&F`OMG~nU^Ch]LjM<@@e<@lLA08Jm6Zhu4Q>V/|2:}r<' );
define( 'NONCE_KEY',        '1tiW@2f[bu,e?A>_LL1QOr?(_cxo 1J/:wsLJ)[Ej}TY2cU9hvr9~kRvH4T|[h27' );
define( 'AUTH_SALT',        '6w=0JQV!w^}DI.g/+!ZyQ;+Yh%ZASC(j*rionB NKLmB;ATq]8U9B7 |Cz}?m=,N' );
define( 'SECURE_AUTH_SALT', 'GMS+yz|k@C5O2Nm5}%a3N~r6tq%U`SR#zuK%kTjN7ie+/AVg,zJs1Dsj6KQ;|WdF' );
define( 'LOGGED_IN_SALT',   ' svL7CQ#c-Qy>b8O:nF0p7*jI4yX](m!wS3|xKTXu+G2EWMvDie_.aS@Y$;V1+c=' );
define( 'NONCE_SALT',       '<1A)AdXIG2n*X0Fom5u?:ikaw7a(Jh/+Ccq.Pn:{V);/SJO*=D+Y0`yH/33*ga_G' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'coh_';

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
