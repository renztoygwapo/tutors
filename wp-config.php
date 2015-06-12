<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tutors');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '5z-Ec(0}*c.P.X|}CN2&{}*.u$H}Kcz9xE$`i+;rG<GR|agAM6x4AS5X#|,C#a7^');
define('SECURE_AUTH_KEY',  '.OLoWG/`+S*2Du=v-*3!-f,8IHuar*1`gKc#?c-`6mlSC*=rl6>fHJsa`V%8]gK-');
define('LOGGED_IN_KEY',    '9ov71;ekxCRTL Bar6a7ia-sgK^g;61]l+[%bt7xs_D(nzJv]1EOHKz9|y/p}j?*');
define('NONCE_KEY',        'fo1Sf4 }]@AML3cf=]6.z6^l&gpGt/QbxHgo:@4raBvNKIs3uUm-x2X>pTA?In~{');
define('AUTH_SALT',        '4+7c{A3P[utTF=8dv,NSoU2+F5YkJx3JwtzI]!/+8Uar(ZmzOdz=3p&|XX)/QX{G');
define('SECURE_AUTH_SALT', '~28=k=(9L--r4wXtruSls;.rM||0Oup#;~Y+R$igVfcWkB-B/ZeVroN,&gpQ^Wdu');
define('LOGGED_IN_SALT',   'N2LTn)tWg?r -rX}x3OIyqdAWL>)[Hd:[~|-[|H*fWQ[8Sb~*[[6bE&d<SjY@ 7|');
define('NONCE_SALT',       '6Yw[wY&rm?~j0Ii&mL+w8:x#;__A%)]M~)LW$~c9 zGC^kikJClTeCAN[KY+h7MJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
