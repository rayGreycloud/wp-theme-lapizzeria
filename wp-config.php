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
define('DB_NAME', 'lapizzeria_wp');

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
define('AUTH_KEY',         'b>F/[bF79kpHmS-Z6[dx(?I-v2&_v%=qTQZ~A_.QaFdr13YBW{detSAIoC6dr0bP');
define('SECURE_AUTH_KEY',  '7h$=;#nPF3.fB5sdji% oI]9aGZ;W(G.lt2IMk{d8y0fzf#bj!MRWw0I<N)XBjj@');
define('LOGGED_IN_KEY',    'tdi&;]mAM,6/$3s>9lPe/iK=!7R<b50wzVIUsz:YQENR^}XLF!6uq%NN)Gu{Q((%');
define('NONCE_KEY',        '=/^hWK%h^mXZ;-_JF5tr)tFmI^:</JZ=7)%H:fJ+-xT7*uW1oWoa|DHx(,?4XAB=');
define('AUTH_SALT',        'Jk}H%p[9@{=gq_e(f,r?M>KjC+h{2GGGnGq!N{lKLN+O!5*ODf9ux ;s>(w#d]wQ');
define('SECURE_AUTH_SALT', 'PIg%6U4x;F7ZM)>GjCKE0RP?t#RS0Paq4HW6;SG5YuNuI/[axonQxQisxDlTzlY!');
define('LOGGED_IN_SALT',   'Pt u3aqGD.{~Dz5 (n..&,N%[<%fiBCN$&7Q+xFaHv84>AbQGu8&k*RUv)`)BKN4');
define('NONCE_SALT',       'ei+)8!~NIo;;{*vFM>r}|HDMuoWA$Y<v@q]8(9~7tM+t:mNEldKR&PqRB@TK/lgi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
