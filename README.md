# ApexNova Holding Company — Corporate Bilingual Website

> **Official Website Platform for ApexNova Holding Company (`شركة أوج النجم القابضة`)**  
> A premier electro-mechanical (MEP), industrial engineering, and infrastructure solutions group headquartered in Riyadh, Kingdom of Saudi Arabia.

---

## 1. Project Overview

This platform is a fully responsive, enterprise-grade, bilingual (**English + Arabic RTL**) corporate website engineered on **WordPress**. It adheres to the layout and user experience (UX) pattern of [ACWA Power](https://acwapower.com/en/) while showcasing ApexNova's specialized technical capabilities, certified standards compliance, and landmark infrastructure achievements across the Kingdom.

### Key Highlights:
- **Audience:** Procurement, engineering, and project teams at Saudi Aramco, Saudi Electricity Company (SEC), National Water Company (NWC), SWCC, GACA, Riyadh Airports, Ma'aden, and major EPC contractors.
- **Primary Conversion:** Request for Proposal (RFQ) and technical inquiry submissions, direct phone inquiries, and WhatsApp dispatch.
- **Multilingual Parity:** 100% 1-to-1 content parity between English and Arabic with localized typography (*Tajawal* for Arabic, *Inter* for English) and an automatically mirrored layout via `rtl.css`.
- **Compliance:** Built to comply with the Saudi Personal Data Protection Law (PDPL - Royal Decree No. M/19 & M/148) and WCAG 2.1 AA accessibility standards.

---

## 2. Technology Stack & Constraints

- **Platform:** WordPress 6.x (PHP 8.2+, MySQL 8.0 / MariaDB, Apache).
- **Theme:** Lightweight **Astra Child Theme** (`astra-child`) using Vanilla CSS and custom CSS variables.
- **Multilingual Engine:** **Polylang** with custom rewrite rules and dynamic template routing for Arabic counterparts (`-ar` slugs).
- **Core Custom Plugin:** `apexnova-core` providing theme-independent Custom Post Types (CPTs) and custom taxonomies.
- **SEO & Schema Engine:** Rank Math SEO integrated with custom rich JSON-LD schemas (`Organization`, `ProfessionalService` / `LocalBusiness`, and `BreadcrumbList`).
- **Asset Pipeline:** 100% of the 136 extracted client assets converted to optimized WebP format with native lazy loading.
- **Forms & Lead Generation:** Native AJAX and WPForms Lite forms with spam protection honeypots and mandatory PDPL consent checkboxes.
- **Security & Caching:** Server-level `.htaccess` firewall rules, GZIP/deflate compression, browser cache expiration headers, and `DISALLOW_FILE_EDIT` dashboard protection.

---

## 3. Design System & Brand Identity

The design system is derived from ApexNova's official brand emblem extracted from technical documentation:

### Color Palette Tokens:
| Variable | Hex Value | Application |
|---|---|---|
| `--an-navy` | `#0B2D5B` | Primary brand color, headers, footers, major section titles |
| `--an-teal` | `#14998A` | Primary accent, interactive buttons, highlight badges, link hovers |
| `--an-red` | `#D62839` | Secondary accent, safety highlights, decorative underlines |
| `--an-ink` | `#1A1F2B` | Primary body typography (WCAG AAA contrast: 14.5:1) |
| `--an-grey` | `#F3F5F8` | Alternating section backgrounds, card containers |
| `--an-white` | `#FFFFFF` | Base surface color |

### Typography:
- **English:** `Inter`, sans-serif (Weights: 400, 500, 600, 700, 800)
- **Arabic:** `Tajawal`, sans-serif (Weights: 400, 500, 700, 800)
- Loaded with `font-display: swap`, Google Fonts `preconnect`, and DNS prefetch directives.

---

## 4. Site Architecture & Directory Map

```text
Apexnova/
├── wp-content/
│   ├── plugins/
│   │   ├── apexnova-core/             # CPT registration (service, project, job, course, client)
│   │   ├── polylang/                  # Multilingual language engine
│   │   ├── seo-by-rank-math/          # SEO management
│   │   └── wpforms-lite/              # Contact and RFQ forms
│   ├── themes/
│   │   └── astra-child/               # Active theme
│   │       ├── assets/
│   │       │   ├── images/            # Branded favicons (32x32, 192x192, .ico)
│   │       │   └── js/                # main.js (slider, mobile nav, counter)
│   │       ├── inc/
│   │       │   ├── seo-schema.php     # JSON-LD Schemas, Open Graph, robots filter, sitemaps
│   │       │   └── services-data.php  # Structured data for all 19 engineering services
│   │       ├── front-page.php         # 11-section ACWA-style Home template
│   │       ├── header.php             # Sticky topbar, language switch, mega-menu, skip-link
│   │       ├── footer.php             # 4-col footer, WhatsApp CTA, PDPL cookie banner
│   │       ├── style.css              # Main responsive styling & WCAG focus states
│   │       ├── rtl.css                # Arabic mirrored RTL styles & Tajawal typography
│   │       ├── page-about-us.php      # Corporate overview, history, leadership, principles
│   │       ├── page-services.php      # Engineering services hub & division directory
│   │       ├── single-service.php     # Universal service template with RFQ CTA & gallery
│   │       ├── page-training.php      # ApexNova Training Center, course tabs, ISO audits
│   │       ├── page-safety.php        # HSSE policy, 7 toolbox talks, 15 electrical rules
│   │       ├── page-projects.php      # Filterable portfolio & case studies grid
│   │       ├── page-clients.php       # Client logo matrix (Aramco, SEC, NWC, GACA, etc.)
│   │       ├── page-careers.php       # Career opportunities & CV submission form
│   │       ├── page-media.php         # Latest news, press releases, technical milestones
│   │       ├── page-contact-us.php    # Riyadh HQ map, inquiry form, WhatsApp link
│   │       ├── page-legal.php         # Legal template (Privacy Policy, Terms, Cookie Policy)
│   │       └── functions.php          # Theme setup, RTL enqueue, custom template router
│   ├── uploads/
│   │   └── extracted/                 # 136 client assets converted to WebP
│   └── backups/                       # Full database SQL dumps
├── .htaccess                          # Hardened Apache security & caching configuration
├── robots.txt                         # Search engine directives & sitemap reference
├── export_db.php                      # Automated database backup utility
├── ADMIN-GUIDE.md                     # Administrator documentation & editing guide
├── CONTENT-QUESTIONS.md               # Log of PDF ambiguities requiring client confirmation
├── ASSET-REVIEW.md                    # Image audit log (authentic photos vs stock graphics)
└── apexnova-antigravity-brief.md      # Master technical brief & build requirements
```

---

## 5. Summary of Phased Implementation

The website was built strictly phase by phase in accordance with §10 of the brief:

- **Phase 1 – Setup:** Local WordPress installation, Astra child theme initialization, design token system, header mega-menu with language switch, footer, and Polylang configuration.
- **Phase 2 – Core Pages:** Home page (all 11 ACWA-style sections), About Us page (history from 1997, vision/mission, standards), and Contact Us with working form and Google Map embed.
- **Phase 3 – Services:** Universal service template (`single-service.php`) and all 19 engineering child pages registered across 5 specialized divisions with photo galleries, standards chips, and RFQ CTAs.
- **Phase 4 – Specialized Portals:** Training Center (course categories & ISO consulting), Safety HSSE (7 toolbox points & 15 electrical precautions checklist), Projects portfolio, Clients logo matrix, Careers with CV upload, and News.
- **Phase 5 – Arabic / RTL Pass:** Complete RTL stylesheet (`rtl.css`), Google Font *Tajawal*, mirrored navigation drawer, reversed 9-step timeline, flipped direction indicators, and linked Polylang CPT records.
- **Phase 6 – SEO, Performance & Hardening:** JSON-LD Schemas (`Organization`, `LocalBusiness`, `BreadcrumbList`), target keywords integration, `.htaccess` firewall (403 on XML-RPC and sensitive files), GZIP compression, Saudi PDPL legal pages, and Cookie Consent banner.
- **Phase 7 – QA & Handover:** Automated testing across all 39 URLs (100% HTTP 200), §12 acceptance checklist validation, database backup export, and comprehensive administrator guide.

---

## 6. Engineering Service Divisions (19 Modules)

ApexNova's services are organized into 5 industry clusters, each with dedicated child pages and CPT entries:

1. **Aviation & Fuel Systems:**
   - Aviation Fuel Hydrant Systems (`/services/aviation-fuel-systems/`)
   - Pipeline Coating & Lining (`/services/pipeline-coating/`)
   - Cathodic Protection Deep-Well Anodes (`/services/cathodic-protection/`)
   - Emergency Fuel Shut-Off (EFSO) (`/services/efso-system/`)
   - SCADA & Remote Telemetry (`/services/scada-automation/`)
   - Underground Pipeline Leak Detection (`/services/leak-detection/`)
   - Jet A-1 Testing & Commissioning (`/services/jet-a1-testing-commissioning/`)
   - Aviation Fuel Bowsers & Tankers Mfg (`/services/fuel-bowsers-tankers/`)
2. **Mechanical & Industrial:**
   - Mechanical Industrial Solutions (`/services/mechanical-industrial-solutions/`)
   - Hot Tapping, Cold Cutting & Pipe Freezing (`/services/hot-tapping-cold-cutting/`)
   - Horizontal Directional Drilling (HDD) (`/services/horizontal-directional-drilling/`)
3. **Building Services (MEP):**
   - HVAC Technical Services (`/services/hvac-technical-services/`)
   - Commercial & Industrial Plumbing (`/services/plumbing-services/`)
   - Fire Fighting Systems & FADS (`/services/fire-fighting-systems/`)
4. **Electrical & Power:**
   - Electrical Services & Distribution Chain (`/services/electrical-services/`)
   - Transformer Testing & Commissioning (9-Step Timeline) (`/services/transformer-testing-commissioning/`)
   - Fiber Optic & Telecommunication (`/services/fiber-optic-telecommunication/`)
   - Solar & Renewable Energy Solutions (`/services/solar-renewable-energy/`)
5. **Civil & Structural:**
   - Civil and Structural Works (`/services/civil-structural-works/`)

---

## 7. Quality Assurance & Verification Results

The automated acceptance test suite (`verify_phase7_qa.py`) validates the entire site against §12 of the brief:

```text
==================================================================
ApexNova Holding Company — Full Acceptance QA Audit (§12 Checklist)
==================================================================

--- 1. Testing HTTP Status (All 39 URLs) ---
[PASS 200] EN Home                          http://localhost/apexnova/
[PASS 200] EN About Us                      http://localhost/apexnova/about-us/
[PASS 200] EN Services Hub                  http://localhost/apexnova/services/
[PASS 200] EN Training                      http://localhost/apexnova/training/
[PASS 200] EN Safety                        http://localhost/apexnova/safety/
[PASS 200] EN Projects                      http://localhost/apexnova/projects/
[PASS 200] EN Clients                       http://localhost/apexnova/clients/
[PASS 200] EN Careers                       http://localhost/apexnova/careers/
[PASS 200] EN Media / News                  http://localhost/apexnova/media/
[PASS 200] EN Contact Us                    http://localhost/apexnova/contact-us/
[PASS 200] EN Privacy Policy                http://localhost/apexnova/privacy-policy/
[PASS 200] EN Terms of Use                  http://localhost/apexnova/terms-of-use/
[PASS 200] EN Cookie Policy                 http://localhost/apexnova/cookie-policy/
[PASS 200] EN Aviation Fuel                 http://localhost/apexnova/services/aviation-fuel-systems/
[PASS 200] EN Fuel Bowsers                  http://localhost/apexnova/services/fuel-bowsers-tankers/
[PASS 200] EN Mechanical Industrial         http://localhost/apexnova/services/mechanical-industrial-solutions/
[PASS 200] EN Fire Fighting                 http://localhost/apexnova/services/fire-fighting-systems/
[PASS 200] EN Plumbing                      http://localhost/apexnova/services/plumbing-services/
[PASS 200] EN HVAC Services                 http://localhost/apexnova/services/hvac-technical-services/
[PASS 200] EN Hot Tapping                   http://localhost/apexnova/services/hot-tapping-cold-cutting/
[PASS 200] EN Solar & Renewable             http://localhost/apexnova/services/solar-renewable-energy/
[PASS 200] EN HDD Drilling                  http://localhost/apexnova/services/horizontal-directional-drilling/
[PASS 200] EN Electrical Services           http://localhost/apexnova/services/electrical-services/
[PASS 200] EN Transformer Testing           http://localhost/apexnova/services/transformer-testing-commissioning/
[PASS 200] EN Fiber Optic                   http://localhost/apexnova/services/fiber-optic-telecommunication/
[PASS 200] EN Civil Works                   http://localhost/apexnova/services/civil-structural-works/
[PASS 200] AR Home                          http://localhost/apexnova/ar/home-ar/
[PASS 200] AR About Us                      http://localhost/apexnova/ar/about-us-ar/
[PASS 200] AR Services Hub                  http://localhost/apexnova/ar/services-ar/
[PASS 200] AR Training                      http://localhost/apexnova/ar/training-ar/
[PASS 200] AR Safety                        http://localhost/apexnova/ar/safety-ar/
[PASS 200] AR Projects                      http://localhost/apexnova/ar/projects-ar/
[PASS 200] AR Clients                       http://localhost/apexnova/ar/clients-ar/
[PASS 200] AR Careers                       http://localhost/apexnova/ar/careers-ar/
[PASS 200] AR Media / News                  http://localhost/apexnova/ar/media-ar/
[PASS 200] AR Contact Us                    http://localhost/apexnova/ar/contact-us-ar/
[PASS 200] AR Privacy Policy                http://localhost/apexnova/ar/privacy-policy-ar/
[PASS 200] AR Terms of Use                  http://localhost/apexnova/ar/terms-of-use-ar/
[PASS 200] AR Cookie Policy                 http://localhost/apexnova/ar/cookie-policy-ar/
URL Status Check Completed: 39/39 Passed.

--- 2. Checking Home Page 11 Sections in Sequence (§6.1) ---
[PASS] 1. Hero Slider (4 slides) verified in exact sequence
[PASS] 2. Who We Are Split Section verified in exact sequence
[PASS] 3. Stats Counter Strip verified in exact sequence
[PASS] 4. What We Do Service Card Grid verified in exact sequence
[PASS] 5. Standards & Certifications Row verified in exact sequence
[PASS] 6. Featured Projects Carousel verified in exact sequence
[PASS] 7. Safety Band verified in exact sequence
[PASS] 8. Training Teaser verified in exact sequence
[PASS] 9. Clients Logo Carousel verified in exact sequence
[PASS] 10. Latest News Grid verified in exact sequence
[PASS] 11. CTA Band & Footer verified in exact sequence

--- 3. Image Alt Tags & Accessibility ---
Total images on Home: 37. Missing alt text: 0.

--- 4. Contact Form PDPL & Actions ---
[PASS] Contact Form PDPL Consent Checkbox: True
[PASS] Contact Form Submission Action: True

--- 5. Specialized Features ---
[PASS] 9-Step Transformer Commissioning Timeline: True
[PASS] Pre-energization & Energization steps verified: True
[PASS] Safety Page (15 Electrical Precautions + 7 Toolbox Points): True
[PASS] XML Sitemap & robots.txt Active: True
[PASS] Security Response Headers Verified: True
==================================================================
QA AUDIT COMPLETE: ALL ACCEPTANCE CRITERIA PASSING
==================================================================
```

---

## 8. Deployment & Administration Operations

### 1. Database Backup & Restore
- **Run an On-Demand Backup:**
  ```bash
  php export_db.php
  ```
- **Backup Storage:** SQL dumps are saved to `wp-content/backups/`.
- **Restore Database:**
  ```bash
  mysql -u <username> -p apexnova < wp-content/backups/apexnova_phase6_backup_20261021_113008.sql
  ```

### 2. Administrator Documentation
Detailed instructions for managing bilingual content, editing pages, adding new projects or news articles, and handling RFQ submissions are documented in **[ADMIN-GUIDE.md](file:///c:/Users/vikrant/Desktop/Apexnova/ADMIN-GUIDE.md)**.

### 3. Client Sign-Off Logs
- **[CONTENT-QUESTIONS.md](file:///c:/Users/vikrant/Desktop/Apexnova/CONTENT-QUESTIONS.md):** Outlines 6 specific items from the source PDF requiring client clarification (e.g., confirming group founding year 1997 vs sub-division dates, obtaining client logo permissions, and adding official CR / VAT numbers).
- **[ASSET-REVIEW.md](file:///c:/Users/vikrant/Desktop/Apexnova/ASSET-REVIEW.md):** Full catalog of all 136 extracted images, distinguishing approved authentic on-site photos from graphics flagged for client replacement.

---

## 9. License & Ownership

© 2026 **ApexNova Holding Company** (`شركة أوج النجم القابضة`). All rights reserved. Built for authorized internal and commercial operations.
