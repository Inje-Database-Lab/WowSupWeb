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
define('DB_NAME', 'wowsupweb');

/** MySQL database username */
define('DB_USER', 'wowsupweb');

/** MySQL database password */
define('DB_PASSWORD', 'wowsupwebroot');

/** MySQL hostname */
define('DB_HOST', 'wowsupwebinstance.cnxu58fgnxla.ap-northeast-2.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zGsC tJ0_UZj Ghs!_ODN>^3RBK SRe}3}l||lB~Gmbt.D/ iuA%&w,S-0bqPR/j');
define('SECURE_AUTH_KEY',  'P~Q#>4fb:}zW^9e~8SyAdVB.0[e(s%%F^(mH]-%he%|vt>{i+r}m//B>>F3*:Z#<');
define('LOGGED_IN_KEY',    '-$~#71RGg!Tf~jyj;=R[w%BnD[Np:|j[POII ibpQ--b5EML)S1 #SCt=r#uhw6h');
define('NONCE_KEY',        'R%`VR( 1|>!|-Or-3v 2`R?}o#HPnl&AA]Zt:|<MQ-OB#[qOD=z6#|b+aJd&o>`7');
define('AUTH_SALT',        'Ja9Um7f_V_/Uc)AJGV1lQ)TC|8KHoj^K-U*eGK]e|KYvaU|uxShLrjv$ArR=@osj');
define('SECURE_AUTH_SALT', '~2WLL&4Xq`-nT[>e3GOCxC@|r;ownP<,fl$aaqrxyjSVroYFon#yP<Z/-0Q$xN9O');
define('LOGGED_IN_SALT',   ' |+,I__T%IrnX?(7/+H:`@L$KAS;6&@@Eb#iMRl~;]r8uriNfe^{C0Q?8y8k|IeW');
define('NONCE_SALT',       'W]V*r}YS-*~:**pp{yyNbfQlq0N,P+D-JdJF2@l^rGSy7lr)?W5Lv&A@0!M.PI}a');

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

