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
define( 'DB_NAME', 'Organization' );

/** Database username */
define( 'DB_USER', 'mamun' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         '!GI4Lff0vI*)?)x~D19%|&tpt)>.}|oert}{4)ik65rNZoPo/,nYGu/&r3uz8jHv' );
define( 'SECURE_AUTH_KEY',  '($S}&sYH.li F{%G{XHTP(ZZsZN${V_=Z^-H|n+E#!tEwgdb}Ldhn?3L.]~zkU}`' );
define( 'LOGGED_IN_KEY',    'v,>~7`X|?~DZRO_6Arbx+|g0^EB;nGQ%_!c3s[-S5Z{l.9aq`S]a@|#v7+u TCnD' );
define( 'NONCE_KEY',        ',*gYzk:S$S2Y1m3Nc~HF$M-8fWc-dXAy@Z^R2^rZ1IQQWi|0O>~-,PH]2ph}LZ=Q' );
define( 'AUTH_SALT',        'SBi?s`_darj]DfD|$y,:j{SW: Cso(qV=7@3598u_A]P{Nf#RctTthrqsu$&~0;4' );
define( 'SECURE_AUTH_SALT', 'f-7P)Vl&GX$V[snLar5` @&!hjKJDR* 6`uHAWmu4$:]j: .2;WHLb`uhz3QY(Nw' );
define( 'LOGGED_IN_SALT',   'jnv_:oT3C=)lW#6`Mpjd.^p.dAD9qg3Ji;q<-0A*4>^hBqJJ#dJ$H?WPlV3Y q0c' );
define( 'NONCE_SALT',       '~m ^i:i0KxO6UiX5@24I1ku-h?utpsONb`b9vC8cq7eA%`yI1JO9=!(bc%eu`[f0' );

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
