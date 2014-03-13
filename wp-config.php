<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'carnegie_cycling');

/** MySQL database username */
define('DB_USER', 'carnegie_cycling');

/** MySQL database password */
define('DB_PASSWORD', 'c9urple');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'nqNZkxDw8+nIQz;RlBx_-ag22+1X3ab/.C$@e4[XMRyqZhf_3dbz#_sg]|%F?J_^');
define('SECURE_AUTH_KEY',  '72sjLeh`}FPljWy|.s|Q7*E?s.`*<FOxuBrBi&v6Tg&98/-J-4(mQ2wK{xmnVQ<n');
define('LOGGED_IN_KEY',    'nuOP<qC<4|10P qT9nCvq7QfpE5+G/t-QZ%M[.N0$ndI>)f[|N<5dvsJmha!(}j}');
define('NONCE_KEY',        '`Gk$N8S[/8e,[ bJ!3z$9w/B|hSU&-xwC8f(,@Ci-6d/WTB&lc!;.d7d#%U,m;-[');
define('AUTH_SALT',        '5Dv(e@eyoCJ<BH7#$xuN^WTN)+,v^-[gM8`3|eM8G8Wq<bmx*f1hOO^M}q%-s!xh');
define('SECURE_AUTH_SALT', 'Ux)IB,zR$qxx0 ?|#vU l`|9UfEfNk+~iKI++WSO3W,3 [~0k-wD#P0>a:CT4,a?');
define('LOGGED_IN_SALT',   '@c:<kj^|eVgft`TaxVV$j(J[Za#%LY&M:2CH?&VIRk[wE)in+C`6t;&Z+7Uu#Gpo');
define('NONCE_SALT',       'g} *eH?HawA6h;d1+[L|$N0! `FU@El|e:o1e,q0+8e;a&S-/2|effRv66Z0nbMR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
