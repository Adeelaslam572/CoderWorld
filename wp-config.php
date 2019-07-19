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
define( 'DB_NAME', 'coderworld' );

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
define( 'AUTH_KEY',         '|Qdq~4z1D.tfmqN|M|W~}!&6?  mn{odcE6oQ[a18i#HlMRYf+jA,(R;t0ob~guD' );
define( 'SECURE_AUTH_KEY',  ')+;l3/+8v3g14ziOI|n{Gw^E?^JA$q@X.>1TJepnDr0S SMSSd}{xr$.bPvRekjh' );
define( 'LOGGED_IN_KEY',    'b1ki.90@j<X [.&x@v5T+b*8-v$@HL0q|b,WD+ uDE+XfAueHZWA4F0?YvH2-MFr' );
define( 'NONCE_KEY',        '#ZcCrFiFN848sZF_9k@{N1**^Ny2doSRuvXU~U=0_OJ*!2Z+5%kE#Hxp#v:`jyvX' );
define( 'AUTH_SALT',        'WJr8pHBHK;r;H:?=3yG<52.vfbO:5NHwu.|-%A)VrCg7~MLwaM?;*83uSC=xmxmW' );
define( 'SECURE_AUTH_SALT', 'bS#N*I98b$M]`CoRonu*e]q%=eZ9(0sgI(c)h3XkKP@ymFw4Z97NN7?5+l-+{t#L' );
define( 'LOGGED_IN_SALT',   'f#/Ql^DBwHYm_!dkWkgiVGD9EW_&6]rI@rjLmLTtWF?`y)OE(UH.}=OXj2q[,%7I' );
define( 'NONCE_SALT',       '|yN<;JnHVOvXb^f;<9hch(AGGqkQX1p:vdNd`|OMqJ!JQXnT4Yv/<|w=A^RE`n@C' );

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
