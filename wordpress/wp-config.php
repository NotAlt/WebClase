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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'xTiT^~VN5[M}yCN+a$,Ch?h6},P7q]lV(I%)Dj97K#~H+umP=e!jz5%.ei<SeXi*' );
define( 'SECURE_AUTH_KEY',  '0q_G|{mGe*gIJB;Z/zK,~gVtnV>weq#ZNK:p3W6J?=&bhEx4U](w>2b.MJDg{k6n' );
define( 'LOGGED_IN_KEY',    '7-w[]|2M,)8v.+!`};=hXQtLBfE_O`lQA3|-&5VUxP4q5L}AV5)gJH@Catf}B~Z3' );
define( 'NONCE_KEY',        'k5$}: 4NmZ=AW41@},7.^~+Cz._yw7lHXT>1}l)T0$%?X1#7Q]TE{KL~^ {wu}3I' );
define( 'AUTH_SALT',        'M&SHE),`/p^6b<=2=K+|%X0y(uXx}T0u#Op)/(_upR6xkx-Y 9p|h/&*1^o<j]F#' );
define( 'SECURE_AUTH_SALT', '3Jn2^9:gDE,:z:NSnH6`.y]cw[pJ0=HX%o{XXL)4@=0O`Y<~0n8bgaM(8.RG)@rW' );
define( 'LOGGED_IN_SALT',   'Dc1eaB+a8}$ab&i(0rIV a6W#0*`g=uZ5G>|^JQ<{MrGJ.H4_{`0MAg^%+dTYXLE' );
define( 'NONCE_SALT',       'YhSZOy]11W+|(g[QCR#%bA>eshT.iG ~FsD:J(lX{$d1_f4v7R$;tCRu3<DP>HSP' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
