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
define( 'DB_NAME', 'my_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '98mwVcRpu9O_SN =-p=$SpgqewV<8^Ls@<k>8O(+p04yl-Jx?P*t:],aBw@A-~t%');
define('SECURE_AUTH_KEY',  'RG 5`O+5n-WM%smjWhUbpj4tNPDTSIWvYuPDf=qfEzE@e->Vky`M5B/BemGz</w_');
define('LOGGED_IN_KEY',    '}-DW(4]u_RW-8-z_[5{xR; -)gn+y*zxFE#YX61}rTn&!ES0nv]]h:ePUg`m-u?_');
define('NONCE_KEY',        '7tC{1/X/yj~+|$XV0=0X0Yr<d/8% 1$iLcr,}Ak=)&L8u]+,@8jn4x&#S^O^g4lz');
define('AUTH_SALT',        'Ds3~|78D@3X6zCzAT#$mF,`~i+(j->VAFmsu=ZxDd@M+dx|hX2}M%l2AK$|Jd&=*');
define('SECURE_AUTH_SALT', 's3v9d`0CHWXvI}TiVpT|p1-UQ^s)9~&o*3 y#N3!p7G7Q]y.%6c7rVm]I`Q+V%B,');
define('LOGGED_IN_SALT',   'X}?U}jPb, ,$x[M-.hSxxhcfK%@{n;nfx|%3IabL:qep (K+?[pJmq?@e;6F4F]`');
define('NONCE_SALT',       'hfsMmob]R<u70bqj3*)p*x/V:UySnL.#D7uh5Z..O;c*chzXk*m-A@eT%YCU!5C5');

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
