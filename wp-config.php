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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'apexnova' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'AHOgzV<B}A7K6>jbrCjPrLK!H_EQw%A!ZJd8BRsEr<-Mrl&RvBGs,%Scj*@w8gAZ' );
define( 'SECURE_AUTH_KEY',   'T;xN$f<]td/B^F+LIM7N xAg3XbYX>itZ05~!oJ5#6(Qb EJoqbK;I>4iZAOw[t ' );
define( 'LOGGED_IN_KEY',     '}11  6!HFQWK1jZohxm53T{dw{}U`>xq*Bh8G*^{V,l$FD?T!3)N~4}/PKOPj}z{' );
define( 'NONCE_KEY',         '&gX39Da Xc4XR~@y#6hVc`+AVnj-Fe@j<7QAL}U+$$6@2<1v1E*vV_8{3V2t^t/~' );
define( 'AUTH_SALT',         ' Hs,Ju:|ePm>2+C/$uIU/jRc8<1wtC;=C8Ik-`xOTb;`H]#9b$v6!ShH-U[l;K>s' );
define( 'SECURE_AUTH_SALT',  'MhC6v4cCn)pc/td;b]4L^[(`98K/2tFX?s_ |ZklqbSqd}PqPxU8@n|*p,~qRYz}' );
define( 'LOGGED_IN_SALT',    'O]oMS<ynh&%+{3Ne20*/~C^-TWZ1ZlCjc~CPcVfS XkY:s=~w_&Yf_R$EWqXfV=J' );
define( 'NONCE_SALT',        'I:PpPyZ)}x3qk`>pKzA):wG.HFrrOv$*Z8M568A3Ti6*|~4q4/I ahy}EN~T`|.o' );
define( 'WP_CACHE_KEY_SALT', 'oHy|ZY>rOd}3VJMl1O}L*FKEGhNDQ$2hI.RN NwAie?;& WI1@DG5rkq4jEg([7b' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
define( 'DISALLOW_FILE_EDIT', true );



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
