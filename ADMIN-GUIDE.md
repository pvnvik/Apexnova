# ApexNova Holding Company — Website Administration & Operations Guide

> **System Overview:** Corporate Bilingual (English + Arabic RTL) WordPress platform for **ApexNova Holding Company** (`شركة أوج النجم القابضة`), built with Astra Child Theme, Polylang multilingual engine, custom CPT architectures, and hardened security protocols.

---

## 1. Accessing the Administration Panel

- **Admin Login URL:** `http://localhost/apexnova/wp-admin/` (or your production domain `/wp-admin/`)
- **Default Superadmin:** `admin` (or configured deployment administrator)
- **Security Notice:** Direct access to `wp-config.php`, `.htaccess`, and `xmlrpc.php` is blocked by server-level rules. Do not disable or circumvent `.htaccess` firewall directives.

---

## 2. Managing Bilingual Content (Polylang Workflow)

The website maintains a strict 1-to-1 parity between English and Arabic (`rtl.css` with Google Font *Tajawal*).

### Editing an Existing Page in English or Arabic
1. Navigate to **Pages → All Pages**.
2. To edit the English version, click **Edit** under the English title (e.g., *About Us*).
3. In the right-hand **Languages** sidebar:
   - The pencil icon ✏ indicates an existing linked Arabic translation (*About Us - Arabic*).
   - The plus icon ➕ allows you to instantiate a new translation pair if one does not exist.
4. Always verify that both language versions have the exact same parent page hierarchy.

### Language Switcher Operation
- The top-bar language switcher (`English | عربي`) automatically toggles between linked translations using `pll_the_languages()`.
- If an Arabic counterpart page ends with `-ar` (e.g., `/ar/contact-us-ar/`), custom template routing in `functions.php` automatically binds it to the specialized template while loading the RTL mirrored layout.

---

## 3. Editing Core Corporate Pages

The website features 10 core pages designed according to the ACWA Power UX rhythm:

| Page | English URL | Arabic URL | Template File |
|---|---|---|---|
| **Home** | `/` | `/ar/home-ar/` | `front-page.php` |
| **About Us** | `/about-us/` | `/ar/about-us-ar/` | `page-about-us.php` |
| **Services Hub** | `/services/` | `/ar/services-ar/` | `page-services.php` |
| **Training Center** | `/training/` | `/ar/training-ar/` | `page-training.php` |
| **Safety (HSSE)** | `/safety/` | `/ar/safety-ar/` | `page-safety.php` |
| **Projects** | `/projects/` | `/ar/projects-ar/` | `page-projects.php` |
| **Clients** | `/clients/` | `/ar/clients-ar/` | `page-clients.php` |
| **Careers** | `/careers/` | `/ar/careers-ar/` | `page-careers.php` |
| **Media / News** | `/media/` | `/ar/media-ar/` | `page-media.php` |
| **Contact Us** | `/contact-us/` | `/ar/contact-us-ar/` | `page-contact-us.php` |
| **Privacy Policy** | `/privacy-policy/` | `/ar/privacy-policy-ar/` | `page-legal.php` |
| **Terms of Use** | `/terms-of-use/` | `/ar/terms-of-use-ar/` | `page-legal.php` |
| **Cookie Policy** | `/cookie-policy/` | `/ar/cookie-policy-ar/` | `page-legal.php` |

### Modifying the Home Page
- **Hero Slider:** Configured with 4 slides in `front-page.php`. Autoplays with 6-second intervals, pauses on hover, and adapts for desktop and touch screens.
- **Stats Strip:** Edit the numbers and data-target values in `front-page.php` (`500+` engineers, `1997` founding year, `19+` service divisions).
- **Standards Badge Row:** Lists ASME, API 570/653, NFPA, ISO 9001/14001/45001, IEC, SASO, and Saudi Aramco specifications.

---

## 4. Managing Engineering Services (CPT: `service`)

ApexNova features 19 specialized engineering divisions across 5 strategic industry clusters.

### Service Categories & Registered Slugs:
1. **Aviation & Fuel Systems:**
   - `aviation-fuel-systems` (Turnkey Hydrant Systems)
   - `pipeline-coating` (3LPE & Internal Lining)
   - `cathodic-protection` (Deep-Well Anode Beds)
   - `efso-system` (Emergency Fuel Shut-Off)
   - `scada-automation` (Redundant RIO & Monitoring)
   - `leak-detection` (Acoustic, Fiber & Electromagnetic)
   - `jet-a1-testing-commissioning` (Fuel Circulation & Sampling)
   - `fuel-bowsers-tankers` (Aviation Refueler Manufacturing)
2. **Mechanical & Industrial:**
   - `mechanical-industrial-solutions` (Static/Rotating Equipment, Tanks)
   - `hot-tapping-cold-cutting` (Under-Pressure Line Modifications)
   - `horizontal-directional-drilling` (Trenchless HDD)
3. **Building Services (MEP):**
   - `hvac-technical-services` (Heating, Ventilation & District Cooling)
   - `plumbing-services` (Commercial & Industrial Water/Drainage)
   - `fire-fighting-systems` (FADS, Sprinklers & Extinguishers)
4. **Electrical & Power:**
   - `electrical-services` (Generation to LV Distribution Chain)
   - `transformer-testing-commissioning` (9-Step Process Timeline)
   - `fiber-optic-telecommunication` (Duct Blowing & Splicing)
   - `solar-renewable-energy` (Solar PV & Supplier Transition)
5. **Civil & Structural:**
   - `civil-structural-works` (Earthworks, Foundations & Industrial Buildings)

### Adding or Updating a Service:
1. In the admin menu, go to **Services → Add New Service**.
2. **Title:** Enter the technical name of the service.
3. **Featured Image:** Upload a high-resolution project photo (converted to WebP).
4. **Content / Description:** Add technical capabilities, code citations (ASME, API, NFPA), and scope of work.
5. In the **Languages** meta-box, click ➕ to create the corresponding Arabic service entry.

---

## 5. Managing Projects & Portfolio (CPT: `project`)

The portfolio showcase enables prospective clients (Aramco, SEC, EPC contractors) to review completed work filterable by industry sector.

### Creating a Project Entry:
1. Navigate to **Projects → Add New Project**.
2. **Title:** E.g., *King Khalid International Airport Jet A-1 Hydrant Expansion*.
3. **Sector Taxonomy:** Assign to *Aviation*, *Power & Utilities*, *Oil & Gas*, *MEP*, or *Civil Infrastructure*.
4. **Custom Meta Fields:**
   - **Client:** E.g., *General Authority of Civil Aviation (GACA)*
   - **Location:** E.g., *Riyadh, Kingdom of Saudi Arabia*
   - **Year:** E.g., *2026*
   - **Scope:** Technical summary of engineering deliverables.
5. **Featured Image & Gallery:** Upload real on-site operational photos.
6. Click **Publish**, then create the Arabic translation pair.

---

## 6. Managing Career Opportunities (CPT: `job`)

1. Go to **Careers → Add New Job**.
2. Provide Job Title (e.g., *Senior MEP Commissioning Engineer*).
3. Specify Employment Type (*Full-time*, *Contract*), Location (*Riyadh / Site-based*), and Minimum Experience.
4. Candidates apply directly via the Careers application form with automated PDF/DOC CV upload handling.

---

## 7. Reviewing Inquiries & Request for Proposal (RFQ) Submissions

Inquiries submitted through the Contact Us and Request a Proposal forms are delivered instantly to the corporate mailbox:
- **Primary Recipient:** `info@apexnova.com.sa`
- **Privacy Notice:** In accordance with the Saudi Personal Data Protection Law (PDPL), all contact forms include an explicit consent acknowledgment checkbox. Do not alter or remove the PDPL consent clause.
- Form submissions include Name, Corporate Entity, Email, Telephone, Selected Engineering Division, and Project Message.

---

## 8. Backup & Maintenance Workflow

### Running an On-Demand Database Backup
An automated, standalone PHP database export utility is integrated in the project root:
```bash
php export_db.php
```
- Backups are stored with timestamps in: `wp-content/backups/apexnova_phase6_backup_YYYYMMDD_HHMMSS.sql`.
- **Scheduled Backups:** Recommend weekly database snapshots and monthly full file-system exports.
- **Restoring from Backup:** Use standard MySQL CLI or phpMyAdmin:
  ```bash
  mysql -u root -p apexnova < wp-content/backups/apexnova_phase6_backup_YYYYMMDD_HHMMSS.sql
  ```

---

## 9. Security & Governance Policies

1. **Dashboard Code Editing is Disabled:** `DISALLOW_FILE_EDIT` is active in `wp-config.php`. All theme updates should be performed via Git or SFTP.
2. **Server Firewall Rules:** `.htaccess` blocks XML-RPC, user enumeration scans (`?author=1`), and unauthorized access to hidden files (`.env`, `.git`).
3. **HTTPS / SSL:** Ensure your web hosting enforces TLS 1.3 encryption with a valid certificate (Let's Encrypt / DigiCert) before public traffic routing.
4. **Legal Compliance:** Review the live Privacy Policy, Terms of Use, and Cookie Policy regularly to align with updates from the Saudi Data & AI Authority (SDAIA).

---

## 10. Handover Reference Documents

- [apexnova-antigravity-brief.md](file:///c:/Users/vikrant/Desktop/Apexnova/apexnova-antigravity-brief.md): Master technical brief and requirements specification.
- [CONTENT-QUESTIONS.md](file:///c:/Users/vikrant/Desktop/Apexnova/CONTENT-QUESTIONS.md): Unresolved source PDF ambiguities requiring client sign-off (CR number, founding date reconciliation, client logo permissions).
- [ASSET-REVIEW.md](file:///c:/Users/vikrant/Desktop/Apexnova/ASSET-REVIEW.md): Audit catalog of all 136 extracted imagery assets, distinguishing authentic on-site photos from items needing client licensing.
