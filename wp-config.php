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
define('DB_NAME', 'hristmi3_dataph');

/** MySQL database username */
define('DB_USER', 'hristmi3_dataph');

/** MySQL database password */
define('DB_PASSWORD', 'imadick30');

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
define('AUTH_KEY',         'qHhyTD:+}tnV{h/+hUmXt?ix5V}P*t93w9*VC|pt+jqJ(`k 5h;O46Vsr13FONtM');
define('SECURE_AUTH_KEY',  '~/rMyt-vn|tnp,JGX4uM/RtVA7^qA?C+-:NkTApXyb+X}oIs>J c5fgX8S&Yk3w+');
define('LOGGED_IN_KEY',    '$+kbclO|AzP9R8ZN-]DwS9ih}Y7cI^@Pq4~mHFGG1qBD3-p(C-[)=FYVT-P.@jM%');
define('NONCE_KEY',        'V,3Hfy->ug0@GzSG2 UH#:~qy3<*g-ThNP/CLRC0+Nyh>!>q>%cyjfP4P>Qvf7R9');
define('AUTH_SALT',        'XXwM$]GQfN`X(a[Gq@>[UQS1[!T~c-f5[|TZ&xs,qc-,g6$eBq-YE,S:=dU$*p*x');
define('SECURE_AUTH_SALT', ')6e)@U>Q><}kF@whv3}?[_{.$FgA~d8]?jorQ,7f%( t;[gNIS/c0O^f(Co5s^xt');
define('LOGGED_IN_SALT',   'aac=`x{zyf6+?&%s.`gyHMQ07(>s+SApqZ?<L~tom++EFqy4Ev~(7-sG/V.$V ?L');
define('NONCE_SALT',       '+b}A/.D:6T{}rT5.Wv-uoG5r#p%CiXxM*+tP,b$Cvg+6S(4fK5^i$}/ut[}u%7;+');

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
