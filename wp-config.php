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
define('DB_NAME', 'antuong0110');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v,qdz4xL.90L)k55s#U,#bi-3Kj!^8VhGockyX7-Km)^]5[X#o>D~Y/_z|*A:<U&');
define('SECURE_AUTH_KEY',  'srGt],Y4=A@*i$g5c&oZy) VN_/=[Q]sn4+:*+<3e.-e&*n73dCu: :%$FmU7 1z');
define('LOGGED_IN_KEY',    ' :}d33W#}*wwM]zp`7_Wv,pjCf-wJREnPiQ0L]X03yrKF#.`hQ|$Ct1XBU1hiu$>');
define('NONCE_KEY',        '0BPK.x-}m((`ug[0h7XCjs_qjAZoUK)hj[QEG^77U )o=WV;!T~[]v%<h[BF[Ay=');
define('AUTH_SALT',        ']|swVxEb-3!!$c^@l;!O4UiR|c%jAfbA:}xFS U&kUa-Z+ iBwsY*mhCziIun@aB');
define('SECURE_AUTH_SALT', '2E(fpj<jKD8m{jsOX{7w`:;$,*nC_3&Z`S+4%mZ&t$%miql#E]z0lDHfV~:Mn}87');
define('LOGGED_IN_SALT',   'nV:T0#be_70992P$KF}(w6c8#O|,r6zKdr&)H!+[$ck- .b.0A{O=]B`cnD[)_A*');
define('NONCE_SALT',       'l3UPxWRr5,W.tS_O,ogJDjcMcvb+8D.pW$[tZ`7YXZgO!]>1[U&s?Qxvxj{f{M0[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
