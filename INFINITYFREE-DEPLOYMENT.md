# ApexNova Holding Company — Complete InfinityFree Hosting Deployment Guide

> **Target Platform:** [InfinityFree](https://www.infinityfree.com/) (Free Tier)  
> **Destination Path:** `htdocs/` (Web Root)  
> **Prepared Deployment Files:** Located in `c:\Users\vikrant\Desktop\Apexnova\infinityfree-deploy\`

---

## Quick Reference: 5-Step Deployment Map

```
1. Create Account & Domain on InfinityFree
         ↓
2. Create MySQL Database & Import `apexnova_infinityfree_database.sql` via phpMyAdmin
         ↓
3. Configure `wp-config.php` with your InfinityFree SQL Credentials
         ↓
4. Upload all files to the `htdocs/` folder via FileZilla (FTP)
         ↓
5. Enable Free SSL & Test English & Arabic Pages
```

---

## Preparation: Generate Customized Files for Your Domain

If your InfinityFree subdomain is, for example, `https://apexnova.infinityfreeapp.com` (or whatever subdomain you chose), run this single command in PowerShell to automatically rewrite all database URLs and configs:

```bash
python prepare_infinityfree.py "https://YOUR-SUBDOMAIN.infinityfreeapp.com"
```

This immediately creates 3 customized files inside `infinityfree-deploy/`:
- `apexnova_infinityfree_database.sql`: Pre-configured database dump with all links converted from `localhost` to your live domain.
- `wp-config.php`: Pre-configured configuration file with memory limits and security settings.
- `.htaccess`: Production rewrite rules configured for the root directory (`RewriteBase /`).

---

## Step 1: Create an Account & Domain on InfinityFree

1. Go to **[InfinityFree](https://www.infinityfree.com/)** and sign up for a free account.
2. In the Client Area, click **+ Create Account**.
3. Choose a domain name:
   - **Free Subdomain:** Choose an extension like `.infinityfreeapp.com`, `.epizy.com`, or `.rf.gd` (e.g. `apexnova.infinityfreeapp.com`).
   - **Custom Domain:** If you own a custom domain (e.g., `apexnova.com.sa`), set your domain registrar's nameservers to `ns1.epizy.com` and `ns2.epizy.com`.
4. Click **Create Account**. Your account details (Username e.g., `if0_12345678`, FTP details, and Control Panel access) will be displayed.

---

## Step 2: Create Database & Import SQL Dump

1. Open your InfinityFree **Control Panel (VistaPanel)**.
2. Under the **Databases** section, click **MySQL Databases**.
3. In **Create New Database**, enter `apexnova` (or `db`) and click **Create Database**.
4. Note your credentials shown on this page:
   - **MySQL Database Name:** E.g., `if0_12345678_apexnova`
   - **MySQL Username:** E.g., `if0_12345678`
   - **MySQL Password:** Your InfinityFree hosting account password
   - **MySQL Hostname:** E.g., `sql123.infinityfree.com` or `sql123.epizy.com` *(⚠️ NOT localhost!)*
5. Next to your new database, click **phpMyAdmin**.
6. In phpMyAdmin, click the **Import** tab at the top.
7. Click **Choose File** and select:
   `c:\Users\vikrant\Desktop\Apexnova\infinityfree-deploy\apexnova_infinityfree_database.sql`
8. Click **Import / Go** at the bottom.
   > **Status:** All tables (`wp_posts`, `wp_options`, `wp_postmeta`, `wp_terms`, etc.) will import in ~5 seconds (file is ~395 KB, well below phpMyAdmin's 10MB limit).

---

## Step 3: Configure `wp-config.php`

Open `c:\Users\vikrant\Desktop\Apexnova\infinityfree-deploy\wp-config.php` and fill in the 4 database parameters from Step 2:

```php
// ** Database settings from InfinityFree VistaPanel -> MySQL Databases ** //
define( 'DB_NAME', 'if0_12345678_apexnova' );        // Replace with your actual DB Name
define( 'DB_USER', 'if0_12345678' );                 // Replace with your actual DB User
define( 'DB_PASSWORD', 'YourAccountPasswordHere' );  // Your InfinityFree account password
define( 'DB_HOST', 'sql123.infinityfree.com' );      // Replace with your actual MySQL Hostname (NOT localhost!)
```

Save the file.

---

## Step 4: Upload Files to InfinityFree via FileZilla (FTP)

> **⚠️ CRITICAL RULE:** Do NOT use the web browser file manager for the full upload because it times out on large folders. Use **FileZilla** (Free FTP Client).

### 1. Connect via FileZilla:
- **Host:** `ftpupload.net`
- **Username:** Your InfinityFree account username (e.g., `if0_12345678`)
- **Password:** Your InfinityFree account password
- **Port:** `21`
- Click **Quickconnect**.

### 2. Destination Directory:
- In the right-hand (Remote) window, double-click to open **`htdocs/`**.
  *(If you have multiple domains, open `yourdomain/htdocs/`)*.
- **Ensure you are inside `htdocs/`. Never upload files outside of `htdocs/`!**

### 3. Upload Local Files:
- In the left-hand (Local) window, navigate to:
  `c:\Users\vikrant\Desktop\Apexnova\`
- Select all files and folders:
  - `wp-admin/`
  - `wp-includes/`
  - `wp-content/` (contains theme, plugins, and 136 WebP extracted images)
  - All `.php` files (`index.php`, `wp-login.php`, etc.)
  - `robots.txt`
- Replace `wp-config.php` and `.htaccess` with the prepared versions from `infinityfree-deploy/`:
  - Upload `infinityfree-deploy/wp-config.php` → `htdocs/wp-config.php`
  - Upload `infinityfree-deploy/.htaccess` → `htdocs/.htaccess`
- In FileZilla, right-click and choose **Upload**. Wait for all files to transfer.

---

## Step 5: Enable Free SSL Certificate (HTTPS)

1. In the InfinityFree Client Area, click the **Free SSL Certificates** tab.
2. Click **New SSL Certificate**.
3. Select your domain.
4. Choose **Let's Encrypt** or **ZeroSSL** (Recommended) and click **Create Order**.
5. Click **Setup CNAME Records Automatically** (takes 2–5 minutes to verify DNS).
6. Once verified, click **Install SSL Certificate Automatically**.
7. Your site is now accessible via `https://yourdomain...`!

---

## Step 6: Verification & Post-Deployment Checklist

Test your live site using this checklist:

- [ ] **Home Page:** Opens with ACWA-style 4-slide hero slider, stats strip, 12 service cards, and client logos.
- [ ] **Language Toggle:** Click `عربي` in the topbar to verify the Arabic mirror (`/ar/home-ar/`), right-to-left layout, and Google Font *Tajawal*.
- [ ] **Engineering Services:** Open `/services/aviation-fuel-systems/` and `/services/transformer-testing-commissioning/` to verify the 9-step timeline and WebP image gallery.
- [ ] **Contact & RFQ Forms:** Submit a test message on `/contact-us/` to verify form fields and the Saudi PDPL consent checkbox.
- [ ] **Legal Pages:** Verify `/privacy-policy/`, `/terms-of-use/`, and `/cookie-policy/`.
- [ ] **Sitemap:** Visit `/sitemap_index.xml` to verify search engine indexation.

---

## InfinityFree Troubleshooting & FAQ

| Issue | Root Cause | Solution |
|---|---|---|
| **"Error establishing a database connection"** | `DB_HOST` is set to `localhost` or password is incorrect. | On InfinityFree, `DB_HOST` is always a remote host like `sql123.infinityfree.com` (found in VistaPanel → MySQL Databases). Never use `localhost`. |
| **"404 Not Found" on subpages** | `.htaccess` is missing or has local `/apexnova/` rewrite rules. | Ensure `.htaccess` from `infinityfree-deploy/` is uploaded to `htdocs/` with `RewriteBase /` and `RewriteRule . /index.php [L]`. |
| **"Directory Listing Denied" (403)** | Files uploaded to root `/` instead of `htdocs/`. | Move all WordPress files inside the `htdocs/` directory. |
| **Images not loading** | URLs in database still point to `localhost`. | Run `python prepare_infinityfree.py "https://yourdomain..."` and re-import the generated `.sql` file in phpMyAdmin. |
| **Admin login loop** | `siteurl` or `home` mismatch in `wp_options`. | `wp-config.php` has `WP_HOME` and `WP_SITEURL` explicitly defined, preventing login redirects. |

---

## Need to Re-run or Update Later?
If you ever change your domain or make local edits, run:
```bash
php export_db.php
python prepare_infinityfree.py "https://new-domain.com"
```
and re-upload the updated files via FileZilla.
