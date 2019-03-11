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
define( 'DB_NAME', 'wp_portofolio' );

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
define( 'AUTH_KEY',         'npGxuHjz@GS4D- +81;DW9_iV(&Ke+g+}.}?i wOhA]@ZrHy5;KYaz#G>Esu Mj4' );
define( 'SECURE_AUTH_KEY',  'IGOh<V3K%d)}<DTPukU/5E(1j~r{kB|tpw|#,E5jnWE)C:y!5(GdN-A:h9eChgaZ' );
define( 'LOGGED_IN_KEY',    'R3YEch31uF1TJU6~fag6RId[*rD]4J6+Y$h!BTD.A+uy|1h9h!5~Y!2J/|Y<p$QS' );
define( 'NONCE_KEY',        'ldkNa{!q?gw1?[s;<9iR~U{V8``CQz?Z;X4ns=6??3uI/}zWyS<v3H>mNxy]vyl|' );
define( 'AUTH_SALT',        'IWj9hMk _OA&D{q9Cm-Dn?iP<#o{0>lp0K8)V~i7$f,^GTM<Fcd0VcV,+dNaRryd' );
define( 'SECURE_AUTH_SALT', 'z$8|I=YJr2.D?I<tI;SNdonkv^h7pX4}R]Z}$Y`qQrf|1QOZ=aAAfTd9*a3pxcOw' );
define( 'LOGGED_IN_SALT',   'V<yxa!W}MrR$k@qt/y9V]UMqhXa3@sd>;xCj/Y evWx-h)/^63[SV|d?,9S@baF$' );
define( 'NONCE_SALT',       '/YmL/:|)BinFF_/hhZ<O>n]5r_eWR;k1OZI=aeZAgm9~c4S H#M*f]#M[%N,i/Tf' );

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
