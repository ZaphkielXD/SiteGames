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
define( 'DB_NAME', 'id11436740_wp_1e5e174e3c96b106fe2cca122d44871b' );

/** MySQL database username */
define( 'DB_USER', 'id11436740_wp_1e5e174e3c96b106fe2cca122d44871b' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c4a76f9906e1086584186776b4d9e9c13fc3b5d0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Z~8GC-Rh2n1IK-Ajjz&GPhT5J-sMO:.%q/7IC2mX:Hr0Z.gsAv)X!6F5MyL-yn#|' );
define( 'SECURE_AUTH_KEY',   't;!-@pW,FFJI:%[OXIy2PdpJQMS%TE$9+&P+Y7Ay:6.<y-R,9H1ZL=4zaAve 4|A' );
define( 'LOGGED_IN_KEY',     '!^^Ba-DK33q/_&l(pH~R{t} Vs>h+&G`-U:HNos*p=q1C`SGn<epYXp{rrOwc 6`' );
define( 'NONCE_KEY',         '{oB_WExmQuXj9dl@~3J$Lt*vB^LiAZI*(0IU Z[Hv3.}*EmcC+T&LN(#g?b2x7&{' );
define( 'AUTH_SALT',         '$V.*x %n}$>?yg#/PXB.[6&<^7#r>;>CJZkOpYzc/u@>Zm_c:zi*;jo@CewVJ&do' );
define( 'SECURE_AUTH_SALT',  '{;d`sU3]r?r$t&Yjt0ReP hb<GC|ORMmi_.vi~#F6mT>:XaL+`:GR}k2R_Kl>^*b' );
define( 'LOGGED_IN_SALT',    '-llT}?k5Jd>=m$9N@WOK#xKhEbjN8z{QTpvpjm-OC(=/#Ra!5E4PBXd&_MLE,u`4' );
define( 'NONCE_SALT',        'bX@9MCF;3v;doeiA#GT0PE5FYhQQYs58wL?CH6)8Jp4sx:L(ZHZvNHZlcH;LOh`:' );
define( 'WP_CACHE_KEY_SALT', '&jv1dM/$Pe6k`uKtop~4qy!!:~5vYZzv8=uq:4*h*i+z45VlrYyWx.|&Fshr_SG!' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
