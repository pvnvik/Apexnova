import urllib.request
import sys

endpoints = [
    # English pages
    ('EN Home', 'http://localhost/apexnova/'),
    ('EN About Us', 'http://localhost/apexnova/about-us/'),
    ('EN Services Hub', 'http://localhost/apexnova/services/'),
    ('EN Training', 'http://localhost/apexnova/training/'),
    ('EN Safety', 'http://localhost/apexnova/safety/'),
    ('EN Projects', 'http://localhost/apexnova/projects/'),
    ('EN Clients', 'http://localhost/apexnova/clients/'),
    ('EN Media', 'http://localhost/apexnova/media/'),
    ('EN Careers', 'http://localhost/apexnova/careers/'),
    ('EN Contact Us', 'http://localhost/apexnova/contact-us/'),
    ('EN Aviation Fuel', 'http://localhost/apexnova/services/aviation-fuel-systems/'),
    ('EN Transformer Testing', 'http://localhost/apexnova/services/transformer-testing-commissioning/'),
    
    # Arabic pages
    ('AR Home', 'http://localhost/apexnova/ar/home-ar/'),
    ('AR About Us', 'http://localhost/apexnova/ar/about-us-ar/'),
    ('AR Services Hub', 'http://localhost/apexnova/ar/services-ar/'),
    ('AR Training', 'http://localhost/apexnova/ar/training-ar/'),
    ('AR Safety', 'http://localhost/apexnova/ar/safety-ar/'),
    ('AR Projects', 'http://localhost/apexnova/ar/projects-ar/'),
    ('AR Clients', 'http://localhost/apexnova/ar/clients-ar/'),
    ('AR Media', 'http://localhost/apexnova/ar/media-ar/'),
    ('AR Careers', 'http://localhost/apexnova/ar/careers-ar/'),
    ('AR Contact Us', 'http://localhost/apexnova/ar/contact-us-ar/'),
]

print("=== VERIFYING PHASE 5 (BILINGUAL & RTL) ===", flush=True)

for label, url in endpoints:
    try:
        req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
        res = urllib.request.urlopen(req, timeout=8)
        html = res.read().decode('utf-8', errors='replace')
        status = res.status
        is_ar_url = '/ar/' in url
        
        has_rtl_class = 'rtl' in html
        has_tajawal = 'Tajawal' in html
        
        print(f"[{status}] {label} | RTL: {has_rtl_class} | Tajawal: {has_tajawal}", flush=True)
    except Exception as e:
        print(f"[FAIL] {label} -> {e}", flush=True)

print("Verification complete.", flush=True)
