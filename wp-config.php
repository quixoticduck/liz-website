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
define('DB_NAME', 'liz-website');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ', EV Vp0DvWL#Cp/Ib6-#dz~bkA-N~FLj%Vn8r;WJXgovdg*@o]L|}yOU3:.I~T0');
define('SECURE_AUTH_KEY',  'rlp1FS-?A?RnA4(A[-Jb72r=7&uci(@]%F)FlE#%-28W-+g3F?fR9zzDs*dmt,Z7');
define('LOGGED_IN_KEY',    'YwpF_--w^=0XY^k90ALOel9fhB)Ed X)=TLV,)Si.!#9=p]afW,L!`v+X-A0A7B<');
define('NONCE_KEY',        'eMkV=p(&Fll{y(l&yMEL-|ECe(m7|ZaZ&t`pCxy-7(IzldZB[X8?|=~/Ab1fMi?o');
define('AUTH_SALT',        '|LQn07RUCdc#G3Fe6-O^gU%,#*^JKCdW>f^/U-F_G,}Am$b+_-W&5Oaq!cUeSekp');
define('SECURE_AUTH_SALT', '7Q`-mF<+LLJc:>T(Uh0Ou]%=w -8_6AywAO6T+W%*`q^hmrj(9+mT5(Z>>u}^p}=');
define('LOGGED_IN_SALT',   'e-~8fE{-l!&_>PmN=47Sxw*)v}Fc`=V{ZN*=I^~/|.t Lpl-7n%>E|9`rM$|FB58');
define('NONCE_SALT',       '-53nJI8Mw-U^1YT^B#NMhod *Dv4*^iKl+TLw$u,tq|DSAjEATMS|D%=kjuR #/P');

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
