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
define( 'DB_NAME', 'IAP2021' );

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
define( 'AUTH_KEY',         'kZpxqGh~I}wmLq_+_FC`VknaL42mb+CB>@P$T`x)|VE3yG.(}r?we_H/qJ8AoOI.' );
define( 'SECURE_AUTH_KEY',  'j1E0,&hHvcM ,jK!6W:9`i!0+_>&U1aF;lb?xFkZ_LhD=FZ#Q~=e6;|?.t3|~JX7' );
define( 'LOGGED_IN_KEY',    '[M%z;l?=-IhH_jZzB[t*arE;|tND2iCjBtG:I&Ch{|D<%DMc_i]>@Z0;^cANh8c ' );
define( 'NONCE_KEY',        'Wid:#Cb3uV#z)7V$9gQ`wgC*`G!5khJ, SGc&W6l6IE-u=uj%,HP)#zL))GmhK?7' );
define( 'AUTH_SALT',        'tdjHYRD4=;}EmQ!CA;Yzn`dJ]T&IRkNL!LnO)0P vR,6sdu}qxGoTz5o>yG!0.|n' );
define( 'SECURE_AUTH_SALT', 'o4=k(;W{UM6g)W V^547F?ha)`Q_Lsysee+KDC&Nu@&B#pPm)6)]kJvOZb{n-+gk' );
define( 'LOGGED_IN_SALT',   '$<qFEi;+$>{e%.RtVf9zVF2U(i&HIW4CVQEsB)fAOL|cOud*7&KsN;#K1FHsVAQ;' );
define( 'NONCE_SALT',       '_Qd=~_Ot12Bq-r)kCb.^r@|qK?r[SLfa = YiXI3A&a;&:i GJVE:r:6OkV864u}' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
