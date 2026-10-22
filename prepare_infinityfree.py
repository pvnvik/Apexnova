#!/usr/bin/env python3
"""
InfinityFree Deployment Preparation Utility for ApexNova
Prepares database dump, .htaccess, and wp-config tailored for InfinityFree hosting.
"""

import os
import re
import sys

BASE_DIR = r"c:\Users\vikrant\Desktop\Apexnova"
BACKUP_DIR = os.path.join(BASE_DIR, "wp-content", "backups")
DEPLOY_DIR = os.path.join(BASE_DIR, "infinityfree-deploy")
os.makedirs(DEPLOY_DIR, exist_ok=True)

# Find latest SQL backup
sql_files = [f for f in os.listdir(BACKUP_DIR) if f.endswith(".sql")]
if not sql_files:
    print("Error: No SQL backup found in wp-content/backups/")
    sys.exit(1)

sql_files.sort(reverse=True)
latest_sql = os.path.join(BACKUP_DIR, sql_files[0])
print(f"Using source database backup: {latest_sql}")

def prepare_for_domain(target_domain):
    # Normalize domain: strip trailing slash and ensure protocol
    target_domain = target_domain.strip().rstrip("/")
    if not target_domain.startswith("http://") and not target_domain.startswith("https://"):
        target_domain = "http://" + target_domain

    clean_host = target_domain.replace("http://", "").replace("https://", "")
    print(f"\nPreparing deployment files for domain: {target_domain} (Host: {clean_host})")

    # 1. Generate updated SQL with rewritten URLs
    with open(latest_sql, "r", encoding="utf-8", errors="replace") as f:
        sql_content = f.read()

    # Replace local URLs
    old_urls = [
        "http://localhost/apexnova",
        "http:\\/\\/localhost\\/apexnova",
        "http://127.0.0.1/apexnova",
        "http:\\/\\/127.0.0.1\\/apexnova",
    ]

    escaped_target = target_domain.replace("/", "\\/")

    modified_sql = sql_content
    modified_sql = modified_sql.replace("http://localhost/apexnova", target_domain)
    modified_sql = modified_sql.replace("http:\\/\\/localhost\\/apexnova", escaped_target)
    modified_sql = modified_sql.replace("http://127.0.0.1/apexnova", target_domain)
    modified_sql = modified_sql.replace("http:\\/\\/127.0.0.1\\/apexnova", escaped_target)

    out_sql = os.path.join(DEPLOY_DIR, "apexnova_infinityfree_database.sql")
    with open(out_sql, "w", encoding="utf-8") as f:
        f.write(modified_sql)
    print(f"[OK] Database dump ready: {out_sql} ({os.path.getsize(out_sql)/1024:.1f} KB)")

    # 2. Generate InfinityFree .htaccess (RewriteBase /)
    htaccess_content = f"""# ==============================================================================
# ApexNova Holding Company — InfinityFree .htaccess
# ==============================================================================

# 1. Security Headers
<IfModule mod_headers.c>
    Header always set X-Content-Type-Options "nosniff"
    Header always set X-Frame-Options "SAMEORIGIN"
    Header always set X-XSS-Protection "1; mode=block"
    Header always set Referrer-Policy "strict-origin-when-cross-origin"
</IfModule>

# 2. Block Directory Browsing
Options -Indexes

# 3. Block Sensitive Files and Extensions
<FilesMatch "^(wp-config\\.php|\\.htaccess|\\.htpasswd|\\.git|\\.env|php\\.ini|\\.user\\.ini)">
    Order allow,deny
    Deny from all
</FilesMatch>

<FilesMatch "\\.(sql|bak|log|tar|gz|zip|sh|ini)$">
    Order allow,deny
    Deny from all
</FilesMatch>

# 4. Disable XML-RPC (Brute-Force & DDoS mitigation)
<Files xmlrpc.php>
    Order allow,deny
    Deny from all
</Files>

# 5. GZIP / Deflate Compression
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/xml
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE text/javascript
    AddOutputFilterByType DEFLATE application/xml
    AddOutputFilterByType DEFLATE application/xhtml+xml
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE application/x-javascript
    AddOutputFilterByType DEFLATE application/json
    AddOutputFilterByType DEFLATE image/svg+xml
</IfModule>

# 6. Browser Caching
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresDefault "access plus 1 month"
    ExpiresByType image/webp "access plus 1 year"
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/svg+xml "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
</IfModule>

# 7. WordPress Core Rewrite Rules (Root domain)
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{{HTTP:Authorization}}]
RewriteBase /

# Block author scans
RewriteCond %{{REQUEST_URI}} !^/wp-admin [NC]
RewriteCond %{{QUERY_STRING}} ^author=([0-9]+) [NC]
RewriteRule .* - [F,L]

RewriteRule ^index\\.php$ - [L]
RewriteCond %{{REQUEST_FILENAME}} !-f
RewriteCond %{{REQUEST_FILENAME}} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress
"""
    out_htaccess = os.path.join(DEPLOY_DIR, ".htaccess")
    with open(out_htaccess, "w", encoding="utf-8") as f:
        f.write(htaccess_content)
    print(f"[OK] Production .htaccess ready: {out_htaccess}")

    # 3. Generate wp-config.php template
    wp_config_template = f"""<?php
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

// Dynamic Site URLs (supports both HTTP and HTTPS automatically)
$is_ssl = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] === 'on' || $_SERVER['HTTPS'] === 1)) 
       || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
$site_proto = $is_ssl ? 'https://' : 'http://';
$site_host = '{clean_host}';
define( 'WP_HOME', $site_proto . $site_host );
define( 'WP_SITEURL', $site_proto . $site_host );

// Performance & Limits
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'DISALLOW_FILE_EDIT', true );
define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {{
    define( 'ABSPATH', __DIR__ . '/' );
}}

require_once ABSPATH . 'wp-settings.php';
"""
    out_config = os.path.join(DEPLOY_DIR, "wp-config.php")
    with open(out_config, "w", encoding="utf-8") as f:
        f.write(wp_config_template)
    print(f"[OK] wp-config.php template ready: {out_config}")

if __name__ == "__main__":
    domain = sys.argv[1] if len(sys.argv) > 1 else "http://apexnova.infinityfreeapp.com"
    prepare_for_domain(domain)
    print("\nInfinityFree deployment package prepared in: " + DEPLOY_DIR)
