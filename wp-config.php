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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':R l^CU_sKS([OlhZPYMBCXrUzyMsHE{75Dx.k[vrh)P6TP;9Xx|~p*lhvjI}[19');
define('SECURE_AUTH_KEY',  ']p|%$XP-B[eTc0(}o~[P#d]EPOlgd*4D8OI,~*A^bN(U+?[%4#iNH*Zs0QidG-x9');
define('LOGGED_IN_KEY',    'Z/XHo1]+JLOz>35sm5VKdiyqK5djGl i/kd+Dce[K>-@w`3UgweIf9IAwd7&nj=Y');
define('NONCE_KEY',        'e5Q7Z/g d$:XT++O`H}ZQ;@|:P=E&}fOd9Tln!:Kb0oD]=J;4Y E(Od7NN%+gKs:');
define('AUTH_SALT',        'Lp@[MEW@!$4KV5bq0j 0TA_Arg#;ZEW|.n:$W Q/m+0%^1HFt}Ko<nX}Y[vZ0IgE');
define('SECURE_AUTH_SALT', '7`q5=AFuCdP{>j$dC2IPC5K<6jY8SSqb=EPww/WHH-gd|XB.RC4^ZU-rRO>dOnlo');
define('LOGGED_IN_SALT',   'QrZ:meInnG}=MG6tCXP_+~MJH~GaL&7`&OnJeS.[9C0p,H4Uwpo7X)FZ$p^=Rm-G');
define('NONCE_SALT',       'a_I18leI!uW,^^zR#H&O~lW9@H^Q<Se[Dd4-:LMQ;nFA;#bl4R`uOY{von:cs%Lr');

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
