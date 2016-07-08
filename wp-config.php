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

$env	=   getenv('APP_ENV');

/** MySQL database name */
define('DB_NAME', 'dbname');

/** MySQL database username */
define('DB_USER', 'dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'dbpass');

 /** MySQL hostname */
define('DB_HOST', 'dbhost');


/** MySQL database name */
//define('DB_NAME', getenv('DB_NAME')); //krds config

/** MySQL database username */
//define('DB_USER', getenv('DB_USER')); //krds config

/** MySQL database password */
//define('DB_PASSWORD', getenv('DB_PASSWD')); //krds config

 /** MySQL hostname */
//define('DB_HOST', getenv('DB_SERVER')); //krds config


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

 /** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

//Default Theme
define( 'WP_DEFAULT_THEME', 'krds' );

/* config based on env */
switch( $env ) 
{
	case 'production':

		define('WP_DEBUG', false);
		define( 'WP_HOME', 'project url');         
		define( 'WP_SITEURL', WP_HOME);
		define('WP_ENV', 'PROD');
		define( 'WP_CACHE', false );
		define( 'VERSION', 1 );

	break;

	case 'staging':

		define('WP_DEBUG', false);
		define( 'WP_HOME', 'project url');			
		define( 'WP_SITEURL', WP_HOME);
		define('WP_ENV', 'STAG');
		define( 'WP_CACHE', true );
		define( 'VERSION', 1 );

	break;

	case 'testing':	

		define('WP_DEBUG', true);
		define( 'WP_HOME', 'project url');			
		define( 'WP_SITEURL', WP_HOME);
		define('WP_ENV', 'TESTING');
		define( 'WP_CACHE', false );
		define( 'VERSION', 1 );

	break;

	default:  

		define('WP_DEBUG', true);
		define( 'WP_HOME', 'project url');			
		define( 'WP_SITEURL', WP_HOME);
		define('WP_ENV', 'DEV');
		define( 'WP_CACHE', false );
		define( 'VERSION', time() );

	break;
}


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/* change salt keys don't use default  */

define('AUTH_KEY',         '-+9^$P}5os`KORvhc$C9(!AzrQo4r+Zh~gM[IA_chcgTn[d4~Y-:j!GI5Z`KmSd|');
define('SECURE_AUTH_KEY',  'jkP)szVjQsBz)#i7/UYg,?|uT_!wCz<QBM=;Va;i3W|CO[es$Y g0Q9{i^ma<qfy');
define('LOGGED_IN_KEY',    '3[Oo>Uz+{A0b<H7eZ]!|k)2;Q<`X+m6pB>BID?<r50KPnf}1%a}-YM{t2M.!S:Q2');
define('NONCE_KEY',        '|2fF|]tIYRHF5_q4827LmlL-5!-{:W74K>Kj]+HM#g]D2C0:4x9j7m=1rk/C6PS;');
define('AUTH_SALT',        'kDS:-tj1nRtt%s3D9c&dv+{4St%@%aEft8+E@}Y(<J|gol&hXa[i-E[cbSBy=e&[');
define('SECURE_AUTH_SALT', '14JkpN]~S/#kxCz|ARZTWQeLS1-kHWp(TR|:/I-RCS^aZ {+wJBCt(?X5NPGnBt{');
define('LOGGED_IN_SALT',   'i6nl5TSTtj3:e!#DJr)q-Yl>qKPR0gVw/R9tW6-`2uuR6/?z|Z<P?IV?HM|^_PT&');
define('NONCE_SALT',       'e nz rjtVN++^fY,spY)Jb/- :Qy&u?S/~BgQ`Yg1G%Q!Z<9`R0tMs~ye#pjp!^f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ks_';

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


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
