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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wonkey' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'pKCxu9T%`,{r/q},cz:-Vz)Smtuci040~|sYCeil4?S>WQm-^PGvHh7aSr1U9OU.' );
define( 'SECURE_AUTH_KEY',  '8V1K=tk|4@E!^K/KW+bU+I VE_BTmLfz^Pij1]tCWplY9wf`qc84GsNI04i);D*s' );
define( 'LOGGED_IN_KEY',    '4v[>`r[1+^43Q9.C@~ KVSUbQ4ZJ>M?+o#o7PXL$sAyU5qRNxSH _AQ-6;mXP&[:' );
define( 'NONCE_KEY',        '~-!<>Kwn8Q)?^a}D)e2&66M&a#~e#= erg R`^stTZGe2XzCKNp`8 UJYj5VL5Pl' );
define( 'AUTH_SALT',        'bCK)W7!{Vmd(V:*]^JQwkpN%>Z1; nh&EE)c-P-XVjC:Mjix5o61P/6o[3gUIq^3' );
define( 'SECURE_AUTH_SALT', ':GnT#=`D5)(+nbTtpJ4z//DqykFrGViOx2R}%BSr78X^I%i[&-cWu.NM;FTA:OV2' );
define( 'LOGGED_IN_SALT',   '$XV6@@1Sq[X1[A!X_L$l=H2Sq0AggZD_>!E4Gh=1*AgI/l^3.*`Gjw1z%Vyc8}PB' );
define( 'NONCE_SALT',       '1Fj:CVEyp5<VK<YT~f3U2r$!v_ >s_}/a,1a8w3gB&xW`+RlC8+$fAZmZqD31|@:' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
