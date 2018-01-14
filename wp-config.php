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
define('DB_NAME', 'rose_db');

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
define('AUTH_KEY',         '=i!xd?u]7:s?aQXt0$72`143hUXg;Oc5u_5X!W!H~mXC9;4iQjgj$Ekz_F,KQW#W');
define('SECURE_AUTH_KEY',  'HB5E^@,>=zmh20fombWcX}}yS> )!Gj3V14%r{Zp;q`8y03&I}lGPgunh541ksP,');
define('LOGGED_IN_KEY',    'h-jQVm0^2~,Q7Ry?S=FPx)9kDMZaJnq6KAlvsaKPEzD6:2u#[ZaguG@D7R7bZR8a');
define('NONCE_KEY',        '1#:Z8g/(L<Ou+{r{~Id;bqeJyeC!OvkGyv-R~-%K+OI._5NT2enH774Vy/x:d6]=');
define('AUTH_SALT',        'E`KvN6==%VTS/O-oxF=.A4r1m?r94)S3@xJx@E$hE{:hzaP%=h>8%:?B1RW:fe{3');
define('SECURE_AUTH_SALT', 'SPPOHJD).-b8KqBRH/P ;VyOqQubglM=Kx[APNk?8nU#*]&$4L`{i&44)4R|?)5{');
define('LOGGED_IN_SALT',   'UC8xW|zUAb[+j{+0p_aB57@-BFb0@B666f|,Lfb0uey,IKDUR4qVZFC)4L~Ry6+7');
define('NONCE_SALT',       '-.^DDAuD;[p(6lv+2_ya7yB]=p0q:Dxw&3D?JMLB4l`iU730R[awQ+qJuO2_ 4?~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'roseIndienne_';

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
