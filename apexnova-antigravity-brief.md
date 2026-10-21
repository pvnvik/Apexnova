# ApexNova Holding Company: WordPress Website Build Brief (for Antigravity)

> **How to use this file:** Place it in the project root (or in the Antigravity workspace as `AGENTS.md` / project brief). Ask the agent to "Read `apexnova-antigravity-brief.md` and build the website exactly as specified, phase by phase. Stop for review at the end of each phase."

---

## 1. Goal

Build a professional, bilingual (English + Arabic RTL) corporate website on **WordPress** for **ApexNova Holding Company**, a Riyadh-based MEP and industrial services group.

The site must follow the **layout and UX pattern** of https://acwapower.com/en/ (mega-menu header, full-width hero slider, stats counters, split "who we are / what we do" sections, news cards, rich footer). It must **not** copy ACWA's text, logo, imagery, colours or code. Only the structure and interaction patterns are borrowed.

**Primary audience:** procurement and project teams at Saudi Aramco, SEC, NWC, SWCC, GACA, Riyadh Airports, Maaden, EPC contractors.
**Primary conversion:** "Request a Proposal / Contact Us" form and phone/WhatsApp click.

---

## 2. Company Facts (source of truth)

| Item | Value |
|---|---|
| Name | ApexNova Holding Company (also written "Apex Nova") |
| Subsidiary names used in source | ApexNova MEP Ltd.; ApexNova Training Center |
| Tagline (suggested) | "Engineering the Kingdom's Infrastructure: Mechanical, Electrical, Safety." |
| Founded | 1997 (per source) |
| HQ | Al Riyadh, Kingdom of Saudi Arabia |
| Address | Al-Malaz, Jareer Street, Kingdom of Saudi Arabia |
| Focus | MEP and Electro-Mechanical services, Oil & Gas, Aviation fuel, Power, Fire safety, Training |
| Standards cited | ASME, API 570/653, API, NFPA, ISO, IEC, IEEE, ADR, SASO, Saudi Civil Defense, OSHA, Saudi Aramco specifications |
| Clients | Saudi Aramco, Saudi Electricity (SE), National Water Company, SWCC, Maaden, Hitachi, CACC, PowerChina, Sinopec, Almabani, Riyadh Airports, GACA, Dar, Johnson Controls, Qiddiya |

Logo: teal/green peak mark with "ApexNova / Holding Company" wordmark and red underline (supplied in the PDF; request a vector/PNG original).

---

## 3. Tech Stack and Constraints

- **WordPress** latest stable, PHP 8.2+, MySQL/MariaDB.
- **Theme:** child theme of **Astra Pro** or **GeneratePress Pro** (lightweight). Page building with **Elementor** (free is acceptable) or native Gutenberg blocks. Pick one and keep it consistent.
- **Multilingual:** Polylang (free) or WPML. English default, Arabic with full **RTL** support. Language switcher in header (`English | عربي`).
- **Plugins (keep minimal):**
  - Elementor (+ Elementor-compatible mega menu: Max Mega Menu or theme's built-in)
  - Polylang
  - Rank Math SEO
  - WPForms Lite or Fluent Forms (contact + RFQ forms)
  - Custom Post Type UI + Advanced Custom Fields (or register CPTs in code)
  - WP Rocket or LiteSpeed Cache + ShortPixel/Imagify (WebP)
  - Wordfence or Solid Security
  - UpdraftPlus (backups)
  - Complianz (cookie/privacy)
- **Performance targets:** LCP < 2.5s, CLS < 0.1, Lighthouse mobile ≥ 85. All images WebP, lazy-loaded, with alt text.
- **Accessibility:** WCAG 2.1 AA, keyboard-navigable menus, visible focus, sufficient contrast.
- **Responsive:** desktop, tablet, mobile. Mobile menu is an accordion drawer.
- **Do not** hard-code secrets, install nulled/pirated plugins, or hot-link images from other sites.

---

## 4. Design System

**Style:** Clean, corporate, engineering-grade. Large photography, generous white space, strong section headings, subtle motion.

**Colour tokens** (derived from the logo; adjust once final brand guide is supplied):

| Token | Hex | Use |
|---|---|---|
| `--an-navy` | `#0B2D5B` | Headings, header, footer background |
| `--an-teal` | `#14998A` | Primary buttons, links, highlights |
| `--an-red` | `#D62839` | Accent (underlines, safety callouts, hover) |
| `--an-ink` | `#1A1F2B` | Body text |
| `--an-grey` | `#F3F5F8` | Section backgrounds |
| `--an-white` | `#FFFFFF` | Base |

**Typography:** English: *Inter* or *Poppins* (headings 600–700, body 400). Arabic: *IBM Plex Sans Arabic* or *Tajawal*. Self-host fonts. Scale: H1 48–56px, H2 36px, H3 24px, body 16–18px.

**Components to build as reusable blocks/templates:**
1. Sticky header with logo, mega-menu, language switch, "Contact us" button
2. Hero slider (4 slides, autoplay 6s, pause on hover, dots + arrows)
3. Stats counter strip (animated count-up on scroll)
4. Split section (image + text, alternating)
5. Service card grid (icon, title, 2-line blurb, "Learn more")
6. Image gallery / lightbox for project photos
7. Process timeline (for testing and commissioning steps)
8. Standards/certifications badge row
9. Client logo carousel (greyscale, colour on hover)
10. News/Insights card grid
11. CTA band ("Need a proposal for your project?")
12. Footer: logo + tagline, 4 link columns, newsletter, socials, legal links

---

## 5. Sitemap and Navigation

### Header mega-menu
1. **Who we are** → About us · Our history · Leadership · Our principles · Quality & certifications
2. **What we do** (mega-menu with service groups, see §6)
   - **Aviation & Fuel Systems:** Aviation fuel hydrant systems · Pipeline coating · Cathodic protection · EFSO · SCADA · Leak detection · Jet A-1 testing & commissioning · Fuel bowsers & tankers
   - **Mechanical & Industrial:** Mechanical industrial solutions · Hot tapping, cold cutting & pipe freezing · Horizontal Directional Drilling (HDD)
   - **Building Services (MEP):** HVAC · Plumbing · Fire fighting systems
   - **Electrical & Power:** Electrical services · Transformer testing & commissioning · Fiber optic & telecom · Solar / renewable energy
   - **Civil & Construction:** Civil & structural works · Residential, commercial, hospitality, industrial
3. **Training** → HSE training · Certifications (OSHA, IOSH, NEBOSH) · ISO consultation
4. **Safety (HSSE)** → Safety policy · Electrical safety precautions · Toolbox talks
5. **Projects** → project gallery (filterable by sector)
6. **Clients**
7. **Media** → News & insights
8. **Careers**
9. **Contact us** (also a button)

Utility bar (top, thin): phone · email · `English | عربي`.

### Footer
Columns: Company · Services · Training & HSSE · Contact. Plus newsletter field, social icons, legal links (Privacy Policy, Terms, Cookie Policy), © ApexNova Holding Company.

---

## 6. Page-by-Page Specification

### 6.1 Home
Mirror the ACWA home flow:

1. **Hero slider (4 slides)**, full-width, dark overlay, headline + one-line subtext + CTA:
   - Slide 1: *"Engineering the Kingdom's infrastructure."*: MEP, electrical and industrial services since 1997. CTA: Our services.
   - Slide 2: *"Powering aviation, oil & gas and industry."*: Aviation fuel systems, pipelines, power substations. CTA: What we do.
   - Slide 3: *"Safety is how we work."*: Compliant with Saudi law, ASME, API, NFPA, ISO, IEC. CTA: Our safety policy.
   - Slide 4: *"Build your career with ApexNova."* CTA: Careers.
   - Hero images: skyline (Riyadh tower), aviation fuel hydrant work, substation, safety toolbox meeting (from the PDF).
2. **Who we are** split section: intro paragraph + "Learn more" → About.
3. **Stats counter strip** (placeholders, **client must confirm real numbers**): Founded 1997 · Years of operation · Service divisions (12+) · Major clients (14+) · Employees · Projects.
4. **What we do** service-card grid (8–12 cards linking to service pages).
5. **Standards & certifications** badge row: ASME, API, NFPA, ISO 9001/14001/45001, IEC, SASO.
6. **Featured projects** (3-up carousel from the Projects CPT).
7. **Safety band:** full-width image (toolbox meeting) with "Every day starts with a toolbox meeting." CTA → Safety.
8. **Training teaser:** ApexNova Training Center, with course categories.
9. **Clients logo carousel.**
10. **Latest news** (3 cards).
11. **CTA band + footer.**

### 6.2 About Us
Use this copy as base (clean up grammar):
> ApexNova Holding Company was founded in 1997 as a Saudi-based provider of MEP services, including aviation fuel systems, static and rotating equipment installation, fabrication, on-plot and off-plot piping, steel structures, HVAC, fire-fighting systems, storage tanks, hot and cold tapping, heat exchangers and pressure vessels.
> Our electrical division specialises in the installation, testing and commissioning of transformers, power plant systems and substations for the industrial, commercial and residential sectors at low, medium and high voltage.
> Today ApexNova provides inspection services across the Kingdom's oil and gas industry. Client satisfaction is our benchmark of success. Headquartered in Riyadh, we aim to be one of the most admired electro-mechanical service organisations in the Middle East.

Sections: Overview · Vision/Mission (placeholder, client to supply) · Why ApexNova (5 bullets) · Standards we follow · Leadership (placeholder) · CTA.

### 6.3 Service pages (one template, 12 pages)
**Template layout:** page hero (image + title + breadcrumb) → intro → sub-service blocks (image + text, alternating) → photo gallery (lightbox) → "Standards & compliance" chips → related services → RFQ CTA.

Create these pages using the PDF's content (rewrite for clarity, keep technical meaning):

1. **Aviation Fuel Systems** (parent page with sub-sections or child pages)
   - Fuel pipeline design, installation, hydrant pit placement (apron level alignment, compaction/level/elevation checks), valves and assemblies, high/low points for flushing
   - **Pipeline Coating:** internal coating (850/950 microns), external 3LPE (three-layer polyethylene), EX4413-L300(S) epoxy powder primer, Aramco-spec compliance, holiday testing
   - **Cathodic Protection:** sacrificial anode and impressed-current explanation, **deep-well CP** (benefits list)
   - **EFSO:** Emergency Fuel Shut-Off for hydrant systems connected to MOVs, two redundant RIO panels integrated with PLC
   - **SCADA:** real-time monitoring of tank levels, pressures, flow; pump/valve control; alarms, ESD, leak detection
   - **Valve chambers:** construction and valve arrangement
   - **Leak detection:** acoustic, fibre-optic, electromagnetic, resistivity surveys
   - **Jet A-1 line testing and commissioning:** testing manifold, flush/dry/circulate/sample process, acceptance criteria
2. **Fuel Bowsers and Tankers Manufacturing:** in-house manufacturing unit, single/multi-compartment tanks, ASME and API 570/653, Saudi transport regulations. Photo gallery of bowsers.
3. **Mechanical Industrial Solutions:** design, execution, installation, O&M; list of capabilities (static/rotating equipment, piping, steel structures, storage tanks, heat exchangers, pressure vessels).
4. **Fire Fighting Systems:** FADS (detectors, panels, call points, sounders, gas/H2S/LPG detection, water leak detection, passive protection), portable extinguishers (CO₂, dry powder, water, foam, clean agent, wet chemical; fire class chart), fire hydrant systems (courtyard and wet riser), sprinkler systems. Objectives list: life safety, property protection, statutory compliance, minimal disruption.
5. **Plumbing Services:** scope (cold/hot water, drainage, sewerage, pumps and tanks, sanitary ware, testing and commissioning), annual/term contracts, 5 benefits (cost-efficient, cross-sector, code-compliant, integrated, end-to-end).
6. **HVAC Technical Services:** heating, ventilation, air conditioning; residential/commercial/industrial; district cooling, smart metering, utilities.
7. **Hot Tapping, Cold Cutting and Pipe Freezing:** definitions, process diagram, 4 benefits (cost savings, operational flexibility, time efficiency, safety).
8. **Solar and Renewable Energy:** five renewable sources overview (solar, wind, hydro, geothermal, biomass), supplier-transition consulting, solar solutions, benefits.
9. **Horizontal Directional Drilling (HDD):** pilot hole, hole openers/reamers, hard-rock formations, trenchless pipeline projects.
10. **Electrical Services:** end-to-end power chain diagram (Generation → HV Transmission → Substation → MV Distribution → Distribution Transformer → LV → Consumers), cable laying/glanding/termination (3-step graphic), lighting, earthing and lightning protection, MDB/SMDB/DB panels, industrial electrical scope list, UPS/generators, automation panels.
11. **Transformer Testing and Commissioning:** as a **9-step process timeline** (Electrical testing → Oil testing and filtration → Protection and control testing → Tap changer testing → Functional/system tests → Pre-energization checklist → Energization and commissioning → Documentation and handover). Test lists (IR, winding resistance, TTR, vector group, tan delta, BDV, DGA etc.). Standards: IEC, IEEE.
12. **Fiber Optic and Telecommunication:** installation, splicing, testing; planning-first approach; sectors served.
13. **Civil and Structural Works:** full bullet list from PDF (earthworks, PCC/RCC, foundations, roads, drainage, tanks/bund walls, masonry, waterproofing, precast, QA/QC and as-builts) plus sub-pages for Residential and Commercial, Hospitality, Industrial and Warehouse.

### 6.4 Training Centre ("ApexNova Training Center")
- Intro and "Why choose us" (Expertise · Affordability · Continued support).
- **Course categories** as an accordion or tabbed card grid: H2S / SCBA / Gas tester · Fire fighting · First aid and BLS (Saudi Heart Association) · Confined space · Rigging and lifting · Scaffolding · General safety and awareness · Electrical and equipment safety (LOTO) · Working at heights · Driving and vehicle safety · Specialised high-risk operations · Workplace environment safety.
- **Certifications and consultation:** OSHA, IOSH, NEBOSH, ISO lead auditor, ISO 9001/14001/45001/22000, HACCP, food safety, TVTC-approved basic HSE.
- Statement: "All programs comply with Saudi Aramco safety standards, OSHA requirements and international safety protocols." (client to confirm accreditation claims)
- CTA: "Enquire about a course" → form with course dropdown.

### 6.5 Safety (HSSE)
Safety policy text, daily toolbox-meeting purposes (7 bullets), PPE graphic, standards list (ADR, NFPA, API, ISO, IEC, SASO/Civil Defense), **Electrical Safety Precautions** as a styled checklist (15 items from the PDF).

### 6.6 Projects
Custom post type `project` with fields: client, location, sector, service, year, summary, gallery. Archive page with filter chips (Aviation, Power, Fire Safety, Civil, etc.) and grid cards. **Seed with 6–8 projects built from the PDF photos** (hydrant pit installation, deep-well CP drilling, EFSO, valve chamber, Jet A-1 commissioning, hot tapping, transformer commissioning); client to confirm names and dates before publishing.

### 6.7 Clients
Logo grid by category (Energy and Utilities, Aviation, Mining, Contractors, Giga-projects). Requires written permission to display logos.

### 6.8 Media / News
Standard blog (`post`) with category filter, card grid like ACWA's "Latest news". Seed with 2–3 placeholder posts.

### 6.9 Careers
Intro, "Life at ApexNova", open-roles list (CPT `job`), application form with CV upload (PDF/DOC, 5MB limit).

### 6.10 Contact Us
Form (name, company, email, phone, service interested in, message, file upload optional), Google Map embed for Al-Malaz, Jareer Street, Riyadh, phone, email, working hours, WhatsApp button. Form sends to a client mailbox with spam protection (reCAPTCHA v3 or Turnstile).

### 6.11 Legal
Privacy Policy, Terms of Use, Cookie Policy, Compliance/Whistleblower (optional).

---

## 7. Custom Content Types

| CPT | Fields |
|---|---|
| `service` | icon, short description, hero image, standards (repeater), gallery, related services |
| `project` | client, location, sector, year, scope, gallery |
| `course` | category, duration, accreditation, description |
| `job` | location, type, description, apply link |
| `client` | logo, category, URL |

Register in a small custom plugin (`apexnova-core`) so content survives theme changes.

---

## 8. Bilingual / RTL Requirements

- Every page, menu, form label and CPT must have an Arabic counterpart. **Arabic text must be professionally translated** (do not ship machine translation unreviewed). Initially create Arabic pages with placeholder copy flagged `[AR TRANSLATION PENDING]`.
- Test RTL: mirrored layout, icons that imply direction (arrows) flipped, sliders reversed, correct number formatting.
- `hreflang` tags and language-specific slugs.

---

## 9. SEO and Tracking

- Rank Math: titles and meta descriptions per page, Organization schema, LocalBusiness schema (Riyadh), BreadcrumbList, XML sitemap, robots.txt.
- Open Graph images, favicon, sitemap submission to Google Search Console.
- Google Analytics 4 or GTM container (ID to be supplied), cookie consent integration.
- Target keywords: MEP contractor Saudi Arabia, aviation fuel hydrant system Riyadh, transformer testing commissioning KSA, fire fighting systems Saudi Arabia, hot tapping services Saudi Arabia, HSE training Riyadh.

---

## 10. Build Phases (Antigravity workflow)

Do these in order and **stop for review after each phase**.

1. **Phase 1 – Setup:** local WP install (or staging), theme + child theme, plugins, global colours/fonts, header, footer, language setup.
2. **Phase 2 – Core pages:** Home, About, Contact with working forms.
3. **Phase 3 – Services:** service template, then all 13 service pages with the PDF content and images.
4. **Phase 4 – Training, Safety, Projects, Clients, Careers, News.**
5. **Phase 5 – Arabic/RTL pass.**
6. **Phase 6 – SEO, performance, accessibility, security hardening, backups.**
7. **Phase 7 – QA and handover:** acceptance checklist (§12), admin guide (how to edit pages, add projects/news), export of site backup.

---

## 11. Assets and Content Rules

- Reuse photos from the client PDF where they are the client's own (project photos, team, equipment, ApexNova bowsers). Extract at original quality; compress to WebP.
- **Do not publish** images that appear to be stock/AI/watermarked (e.g. images with visible "Unsplash+" watermarks, generic illustrations, third-party diagrams) without replacing or licensing them. Flag each one in a `ASSET-REVIEW.md` file.
- Do not publish client/partner logos until the client confirms permission.
- Rewrite all copy for grammar and consistency while preserving technical meaning. Keep brand spelling **ApexNova**.
- Never invent statistics, certifications, project names or testimonials. Use clearly marked placeholders instead.

---

## 12. Acceptance Checklist

- [ ] Header mega-menu, sticky behaviour, language switch working on desktop and mobile
- [ ] Home page contains all 11 sections in the specified order
- [ ] All 13 service pages live with imagery and RFQ CTA
- [ ] Training, Safety, Projects, Clients, Careers, News, Contact pages live
- [ ] Forms deliver email and have spam protection and GDPR/PDPL-style consent text
- [ ] Arabic site mirrors English with correct RTL
- [ ] Lighthouse mobile ≥ 85 (performance), ≥ 90 (accessibility, SEO)
- [ ] No console errors, no broken links, all images have alt text
- [ ] SSL, security plugin, backups, and update schedule configured
- [ ] `ASSET-REVIEW.md` and `CONTENT-QUESTIONS.md` delivered

---

## 13. Open Questions for the Client (generate `CONTENT-QUESTIONS.md` from these)

These inconsistencies exist in the source document and **must be resolved before launch**:

1. **Operating history:** the PDF says founded in **1997** but also "operating for more than **10 years**", and plumbing "since **8 years**". Which is correct?
2. **Copy that appears to belong to other companies:** "**FSA SpA** supports suppliers…" (Solar section), "**Meclead** horizontal hole openers" (HDD section), "**ANHC**, Middle East Fiber Cable installation Co." (Fiber section: is this a separate legal entity or subsidiary?), "These solutions are located across **India & KSA**" (HVAC). Confirm or remove.
3. **Claims needing evidence:** sprinkler "97% success rate"; "highest quality accreditation"; training accreditations (TVTC, Saudi Heart Association, NEBOSH/IOSH/OSHA provider status, SFDA HACCP). Supply certificates or remove.
4. **Sections written as a proposal/report** ("The objective of this report is…", "This proposal outlines…" in EFSO and fire-fighting). Confirm they should become marketing copy.
5. **ISO certificates:** the PDF shows ISO 9001/14001/OHSAS 18001 badges. OHSAS 18001 is withdrawn (replaced by ISO 45001). Which certificates does ApexNova actually hold?
6. **Contact details:** phone, email, WhatsApp, CR number, VAT number, working hours, exact street address and map pin.
7. **Leadership/team:** names, titles, photos (optional).
8. **Statistics** for the counter strip (employees, projects, years, countries).
9. **Domain, hosting, and email** details; preferred language of default admin.
10. **Photo rights:** confirm ownership of the project photos and which stock images to replace.
11. **Client logos:** permission to display each (Saudi Aramco, SE, NWC, SWCC, Maaden, Hitachi, CACC, PowerChina, Sinopec, Almabani, Riyadh Airports, GACA, Dar, Johnson Controls, Qiddiya).
12. **Brand assets:** vector logo, brand colours, preferred fonts.

---

## 14. Reference: ACWA Home Structure (pattern only)

Header with grouped dropdowns (Who we are / What we do / Sustainability / Investors / Media center / Life at / Contact) and language toggle → 4-slide hero with headline, short text and CTA → "Who we are" intro with stats grid (countries, offices, employees, assets, etc.) → "What we do" statement with report download → Sustainability banner → Investors announcement block → Life at company block with employee count → Latest news cards → Footer with logo, tagline, newsletter, link columns, legal links, social icons. Replicate this *rhythm* (alternating light/dark full-width sections, large imagery, concise copy, prominent CTAs) with ApexNova's own content and branding.
