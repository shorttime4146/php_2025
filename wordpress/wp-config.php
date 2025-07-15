<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '94146' );

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
define( 'AUTH_KEY',         'Z:^H?aq<5C%z1,}{i-/VO/!v{]Qtl=Gtr V!GbKc#t[qV!c/OMrX8jmwEtLTv44V' );
define( 'SECURE_AUTH_KEY',  '|EVBeLlKL@]K77tPNvj)Y=3=[FeifTHrjB(h;8ya<nAq7,S;#Ns]fij(O997V5vx' );
define( 'LOGGED_IN_KEY',    'I>IG>%.+zZG;>4$0tO|B1sA79,3r |G&y6PvoD{kcf4%7g6~^1x/#=fL1m#~FHhg' );
define( 'NONCE_KEY',        'p@p;4r>qlc<qU[KM6pl^X-T-mHuwhRP}GqZ;q3W8`0<#V>2.92qUd67Q?JV:DT#H' );
define( 'AUTH_SALT',        'xNWfXZXeMhZ4OC0^|9$R3Untd2rl%pR.v clj<{=L>/](XuRBQqxw9e4.CNU3ShA' );
define( 'SECURE_AUTH_SALT', '8@;y(FDUOr=6dbt?!^?tS$8k1hN8sr&*w{OC:i)p)6_i:Hj,= GO>GB+q+B<=&ah' );
define( 'LOGGED_IN_SALT',   'ckiB1no!PM#Yd1.}btpvpuLd@}3NFHXU-M90G4 9I+,<?;!v8Zm&bX#:d)Sr.&rZ' );
define( 'NONCE_SALT',       's:(nH]Ay>ID>^>6rG>2}%D;1vnOc^|&)I1M^gg{9G{NYb]Blw{Y3)6DM[6!b_Pnq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
