<?php
/**
 * WordPress configuration for InfinityFree hosting
 * ApexNova Holding Company
 */

// ** Database settings - Obtain these from InfinityFree VistaPanel -> MySQL Databases ** //
define( 'DB_NAME', 'YOUR_INFINITYFREE_DB_NAME' );     // e.g. if0_12345678_apexnova
define( 'DB_USER', 'YOUR_INFINITYFREE_DB_USER' );     // e.g. if0_12345678
define( 'DB_PASSWORD', 'YOUR_INFINITYFREE_ACCOUNT_PASSWORD' ); // Your account password
define( 'DB_HOST', 'YOUR_INFINITYFREE_SQL_HOST' );     // e.g. sql123.infinityfree.com (NOT localhost!)
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 */
define( 'AUTH_KEY',         'bJ-a(E!k`m4x`9!P^WjXq,L@b%Z#*Y_tS~1(F3?e-0$o+8=w>zC7]v&K5/r<u21)' );
define( 'SECURE_AUTH_KEY',  'T8*w+6_m$!kZq(E-bJa(F3?e-0@o+L#x`9!P^Wj9Xq,L@%Y~1C7]v&K5/r<u21b)' );
define( 'LOGGED_IN_KEY',    'x`9!P^WjXq,L@b%Z#*Y_tS~1(F3?e-0$o+8=w>zC7]v&K5/r<u21)bJ-a(E!k`m4' );
define( 'NONCE_KEY',        '*Y_tS~1(F3?e-0$o+8=w>zC7]v&K5/r<u21)bJ-a(E!k`m4x`9!P^WjXq,L@b%Z#' );
define( 'AUTH_SALT',        'e-0$o+8=w>zC7]v&K5/r<u21)bJ-a(E!k`m4x`9!P^WjXq,L@b%Z#*Y_tS~1(F3?' );
define( 'SECURE_AUTH_SALT', 'C7]v&K5/r<u21)bJ-a(E!k`m4x`9!P^WjXq,L@b%Z#*Y_tS~1(F3?e-0$o+8=w>z' );
define( 'LOGGED_IN_SALT',   'k`m4x`9!P^WjXq,L@b%Z#*Y_tS~1(F3?e-0$o+8=w>zC7]v&K5/r<u21)bJ-a(E!' );
define( 'NONCE_SALT',       'WjXq,L@b%Z#*Y_tS~1(F3?e-0$o+8=w>zC7]v&K5/r<u21)bJ-a(E!k`m4x`9!P^' );

$table_prefix = 'wp_';

// Site URLs
define( 'WP_HOME', 'http://apexnova.infinityfreeapp.com' );
define( 'WP_SITEURL', 'http://apexnova.infinityfreeapp.com' );

// Performance & Limits
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'DISALLOW_FILE_EDIT', true );
define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
