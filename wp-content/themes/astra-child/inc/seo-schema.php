<?php
/**
 * SEO, Schema Markup, Open Graph & Performance Hardening
 * ApexNova Holding Company
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * 1. Cleanup WordPress Head for Security & Clean HTML
 */
add_action('init', function() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    add_filter('the_generator', '__return_empty_string');
    add_filter('xmlrpc_enabled', '__return_false');
});
add_filter('the_generator', '__return_empty_string');

// Remove all generator tags via output buffer for complete obfuscation
add_action('template_redirect', function() {
    ob_start(function($html) {
        return preg_replace('/<meta name="generator"[^>]*>\s*/i', '', $html);
    });
}, 1);

/**
 * Remove script and style version strings for caching and obfuscation
 */
function apexnova_remove_ver_css_js($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'apexnova_remove_ver_css_js', 9999);
add_filter('script_loader_src', 'apexnova_remove_ver_css_js', 9999);

/**
 * 2. Dynamic SEO Metadata, Open Graph & Canonical Tags
 */
function apexnova_output_seo_meta() {
    global $post;

    $is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
    $site_name = $is_ar ? 'أوج النجم القابضة | ApexNova' : 'ApexNova Holding Company';
    $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $default_image = home_url('/wp-content/uploads/extracted/page_01_img_02.webp'); // Riyadh Skyline hero
    $logo_image = home_url('/wp-content/uploads/extracted/page_01_img_01.webp');

    $title = $site_name;
    $description = $is_ar 
        ? 'شركة أوج النجم القابضة: المقاول الرائد لحلول الكهروميكانيكية (MEP)، وقود الطيران، فحص واختبار المحولات، مكافحة الحريق، والثقب الحي في الرياض والمملكة العربية السعودية.'
        : 'ApexNova Holding Company: Premier MEP contractor, aviation fuel hydrant systems, transformer testing, fire safety, and industrial engineering in Riyadh, Saudi Arabia.';
    
    $keywords = $is_ar
        ? 'مقاول أنظمة الكهروميكانيكية السعودية, أنظمة هيدرانت وقود الطيران الرياض, فحص واختبار المحولات الكهربائية السعودية, أنظمة مكافحة الحريق السعودية, خدمات الثقب الحي للأنابيب السعودية, تدريب السلامة والصحة المهنية الرياض, أوج النجم القابضة'
        : 'MEP contractor Saudi Arabia, aviation fuel hydrant system Riyadh, transformer testing commissioning KSA, fire fighting systems Saudi Arabia, hot tapping services Saudi Arabia, HSE training Riyadh, ApexNova Holding Company';

    // Page-specific metadata
    if (is_front_page() || (is_page() && ($post->post_name === 'home' || $post->post_name === 'home-ar'))) {
        $title = $is_ar 
            ? 'أوج النجم القابضة | هندسة البنية التحتية للمملكة: أنظمة ميكانيكية وكهربائية وسلامة' 
            : 'ApexNova Holding Company | Engineering the Kingdom\'s Infrastructure';
    } elseif (is_page()) {
        $slug = $post->post_name;
        $clean_slug = str_replace('-ar', '', $slug);

        switch ($clean_slug) {
            case 'about-us':
                $title = $is_ar ? 'من نحن | شركة أوج النجم القابضة' : 'About Us | ApexNova Holding Company';
                $description = $is_ar 
                    ? 'تعرف على تاريخ أوج النجم القابضة منذ عام 1997، ورؤيتنا في قيادة قطاع المقاولات الكهروميكانيكية والصناعية في المملكة العربية السعودية.' 
                    : 'Founded in 1997, ApexNova Holding Company is a premier Saudi electro-mechanical and infrastructure solutions group headquartered in Riyadh.';
                break;
            case 'services':
                $title = $is_ar ? 'الخدمات الهندسية الشاملة | أوج النجم القابضة' : 'Engineering Services | ApexNova Holding Company';
                $description = $is_ar 
                    ? '19 تخصصاً هندسياً: وقود الطيران، فحص المحولات، التكييف، مكافحة الحريق، الحفر الموجه HDD، الثقب الحي، والأعمال المدنية.' 
                    : '19 specialized engineering divisions spanning aviation fuel, transformer commissioning, MEP, fire safety, HDD, and civil works.';
                break;
            case 'training':
                $title = $is_ar ? 'مركز أوج النجم للتدريب | HSE والاعتمادات الدولية' : 'ApexNova Training Center | HSE & International Certifications';
                $description = $is_ar 
                    ? 'برامج تدريبية معتمدة في السلامة والصحة المهنية (HSE): دورات H2S، أجهزة التنفس SCBA، OSHA، IOSH، NEBOSH، واستشارات الأيزو ISO.' 
                    : 'Accredited HSE training programs in Riyadh: H2S/SCBA, OSHA, IOSH, NEBOSH, Confined Space, First Aid, and ISO audit consulting.';
                break;
            case 'safety':
                $title = $is_ar ? 'السلامة والصحة والبيئة (HSSE) | أوج النجم القابضة' : 'Safety & HSSE Policy | ApexNova Holding Company';
                $description = $is_ar 
                    ? 'السلامة أولاً: سياسة السلامة الصارمة، محادثات صندوق السلامة اليومية، و15 بنداً لاحتياطات السلامة الكهربائية المتوافقة مع معايير أرامكو السعودية.' 
                    : 'Uncompromising corporate HSSE policy, daily toolbox talks, and 15 rigorous electrical safety precautions compliant with Saudi Aramco standards.';
                break;
            case 'projects':
                $title = $is_ar ? 'المشاريع وسجل الإنجازات | أوج النجم القابضة' : 'Projects Portfolio | ApexNova Holding Company';
                $description = $is_ar 
                    ? 'استعرض مشاريعنا المنفذة في وقود الطيران، محطات المحولات، شبكات الحريق، والأعمال الصناعية لكبرى الجهات في المملكة.' 
                    : 'Track record of landmark projects in aviation fuel, substation commissioning, fire protection, and industrial infrastructure.';
                break;
            case 'clients':
                $title = $is_ar ? 'عملاؤنا وشركاء النجاح | أوج النجم القابضة' : 'Our Clients | ApexNova Holding Company';
                $description = $is_ar 
                    ? 'فخورون بخدمة أرامكو السعودية، الشركة السعودية للكهرباء، شركة المياه الوطنية، مطارات الرياض، وهيئة الطيران المدني.' 
                    : 'Proudly serving Saudi Aramco, Saudi Electricity Company, National Water Company, Riyadh Airports, and Ma\'aden.';
                break;
            case 'careers':
                $title = $is_ar ? 'الوظائف والمسار المهني | انضم إلى أوج النجم' : 'Careers | Join ApexNova Holding Company';
                $description = $is_ar 
                    ? 'ابنِ مسيرتك المهنية مع شركة أوج النجم القابضة. استكشف الوظائف الهندسية والإدارية وقدّم سيرتك الذاتية اليوم.' 
                    : 'Build your career in the Kingdom\'s leading engineering group. Explore active job openings and submit your CV.';
                break;
            case 'contact-us':
                $title = $is_ar ? 'اتصل بنا وطلب عرض أسعار | أوج النجم القابضة' : 'Contact Us & Request a Proposal | ApexNova Holding Company';
                $description = $is_ar 
                    ? 'تواصل مع فريقنا الهندسي في الرياض، حي الملز، شارع جرير. اطلب عرض أسعار أو استشارة فنية لمشروعك القادم.' 
                    : 'Connect with our engineering headquarters in Al-Malaz, Jareer Street, Riyadh. Request a technical tender proposal or quotation.';
                break;
            case 'privacy-policy':
                $title = $is_ar ? 'سياسة الخصوصية وحماية البيانات (PDPL) | أوج النجم' : 'Privacy Policy & Data Protection (PDPL) | ApexNova';
                break;
            case 'terms-of-use':
                $title = $is_ar ? 'شروط وأحكام الاستخدام | أوج النجم القابضة' : 'Terms of Use | ApexNova Holding Company';
                break;
            case 'cookie-policy':
                $title = $is_ar ? 'سياسة ملفات تعريف الارتباط | أوج النجم القابضة' : 'Cookie Policy | ApexNova Holding Company';
                break;
            default:
                $title = get_the_title() . ' | ' . $site_name;
                break;
        }
    } elseif (is_singular('service')) {
        $title = get_the_title() . ' | ' . ($is_ar ? 'خدمات أوج النجم' : 'ApexNova Services');
        $description = wp_trim_words(get_the_excerpt(), 28, '...');
        if (empty($description)) {
            $description = $is_ar 
                ? 'تفاصيل الخدمة الهندسية والمواصفات الفنية المعتمدة من أوج النجم القابضة في المملكة العربية السعودية.' 
                : 'Technical specifications, standards compliance, and scope of engineering execution by ApexNova Holding Company.';
        }
    }

    // Output Open Graph & Standard Meta Tags
    ?>
    <meta name="description" content="<?php echo esc_attr($description); ?>">
    <meta name="keywords" content="<?php echo esc_attr($keywords); ?>">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url($current_url); ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?php echo is_front_page() ? 'website' : 'article'; ?>">
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>">
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:url" content="<?php echo esc_url($current_url); ?>">
    <meta property="og:image" content="<?php echo esc_url($default_image); ?>">
    <meta property="og:locale" content="<?php echo $is_ar ? 'ar_AR' : 'en_US'; ?>">
    <meta property="og:locale:alternate" content="<?php echo $is_ar ? 'en_US' : 'ar_AR'; ?>">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($description); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($default_image); ?>">
    <?php
}
add_action('wp_head', 'apexnova_output_seo_meta', 1);

/**
 * Filter Document Title Tag
 */
function apexnova_filter_wp_title($title_parts) {
    global $post;
    $is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();

    if (is_front_page() || (is_page() && !empty($post) && in_array($post->post_name, ['home', 'home-ar']))) {
        $title_parts['title'] = $is_ar ? 'أوج النجم القابضة' : 'ApexNova Holding Company';
        $title_parts['tagline'] = $is_ar ? 'هندسة البنية التحتية للمملكة' : 'Engineering the Kingdom\'s Infrastructure';
    }
    return $title_parts;
}
add_filter('document_title_parts', 'apexnova_filter_wp_title');

/**
 * 3. Rich JSON-LD Schemas (Organization, LocalBusiness, BreadcrumbList)
 */
function apexnova_output_structured_data() {
    $is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
    $home_url = home_url('/');
    $logo_url = home_url('/wp-content/uploads/extracted/page_01_img_01.webp');

    // 1. Organization Schema
    $org_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        '@id' => $home_url . '#organization',
        'name' => 'ApexNova Holding Company',
        'alternateName' => 'شركة أوج النجم القابضة',
        'url' => $home_url,
        'logo' => [
            '@type' => 'ImageObject',
            'url' => $logo_url,
            'width' => 174,
            'height' => 174,
        ],
        'foundingDate' => '1997',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Jareer Street, Al-Malaz',
            'addressLocality' => 'Riyadh',
            'addressRegion' => 'Riyadh Province',
            'postalCode' => '11451',
            'addressCountry' => 'SA',
        ],
        'contactPoint' => [
            [
                '@type' => 'ContactPoint',
                'telephone' => '+966-11-0000000',
                'contactType' => 'customer support',
                'areaServed' => 'SA',
                'availableLanguage' => ['English', 'Arabic'],
            ],
            [
                '@type' => 'ContactPoint',
                'telephone' => '+966-11-0000000',
                'contactType' => 'sales',
                'areaServed' => 'SA',
                'availableLanguage' => ['English', 'Arabic'],
            ]
        ],
        'sameAs' => [
            'https://wa.me/966110000000',
        ]
    ];

    // 2. LocalBusiness Schema
    $local_biz_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'ProfessionalService',
        '@id' => $home_url . '#localbusiness',
        'name' => $is_ar ? 'شركة أوج النجم القابضة' : 'ApexNova Holding Company',
        'image' => $logo_url,
        'telephone' => '+966 11 000 0000',
        'email' => 'info@apexnova.com.sa',
        'url' => $home_url,
        'priceRange' => '$$$',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Jareer Street, Al-Malaz',
            'addressLocality' => 'Riyadh',
            'addressRegion' => 'Riyadh Province',
            'postalCode' => '11451',
            'addressCountry' => 'SA',
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => 24.6657,
            'longitude' => 46.7383,
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday'],
                'opens' => '08:00',
                'closes' => '17:00',
            ]
        ]
    ];

    // 3. BreadcrumbList Schema (Subpages)
    $breadcrumb_schema = null;
    if (!is_front_page()) {
        $breadcrumbs = [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => $is_ar ? 'الرئيسية' : 'Home',
                'item' => $is_ar ? home_url('/ar/home-ar/') : home_url('/'),
            ]
        ];

        if (is_singular('service')) {
            $breadcrumbs[] = [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => $is_ar ? 'الخدمات' : 'Services',
                'item' => $is_ar ? home_url('/ar/services-ar/') : home_url('/services/'),
            ];
            $breadcrumbs[] = [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => get_the_title(),
                'item' => get_permalink(),
            ];
        } elseif (is_page()) {
            $breadcrumbs[] = [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => get_the_title(),
                'item' => get_permalink(),
            ];
        }

        $breadcrumb_schema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $breadcrumbs,
        ];
    }

    echo "\n<!-- ApexNova Structured Data Schema -->\n";
    echo '<script type="application/ld+json">' . json_encode($org_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . "</script>\n";
    echo '<script type="application/ld+json">' . json_encode($local_biz_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . "</script>\n";
    if ($breadcrumb_schema) {
        echo '<script type="application/ld+json">' . json_encode($breadcrumb_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . "</script>\n";
    }
}
add_action('wp_head', 'apexnova_output_structured_data', 2);

/**
 * 4. Robots.txt Configuration Filter
 */
function apexnova_custom_robots_txt($output, $public) {
    $sitemap_url = home_url('/sitemap_index.xml');
    $custom = "User-agent: *\n";
    $custom .= "Disallow: /wp-admin/\n";
    $custom .= "Allow: /wp-admin/admin-ajax.php\n";
    $custom .= "Disallow: /wp-includes/\n";
    $custom .= "Allow: /wp-includes/js/\n";
    $custom .= "Allow: /wp-includes/css/\n";
    $custom .= "Allow: /wp-content/uploads/\n";
    $custom .= "Allow: /wp-content/themes/\n";
    $custom .= "\nSitemap: {$sitemap_url}\n";

    return $custom;
}
add_filter('robots_txt', 'apexnova_custom_robots_txt', 99, 2);

/**
 * 5. Standalone XML Sitemap Route Handler (/sitemap_index.xml & /sitemap.xml)
 */
function apexnova_sitemap_rewrite() {
    add_rewrite_rule('^sitemap_index\.xml$', 'index.php?apexnova_sitemap=1', 'top');
    add_rewrite_rule('^sitemap\.xml$', 'index.php?apexnova_sitemap=1', 'top');
}
add_action('init', 'apexnova_sitemap_rewrite');

function apexnova_sitemap_query_vars($vars) {
    $vars[] = 'apexnova_sitemap';
    return $vars;
}
add_filter('query_vars', 'apexnova_sitemap_query_vars');

function apexnova_generate_sitemap() {
    if (get_query_var('apexnova_sitemap')) {
        header('Content-Type: application/xml; charset=utf-8');
        echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">' . "\n";

        // Query all published pages, services, and projects
        $posts = get_posts([
            'post_type' => ['page', 'service', 'project'],
            'post_status' => 'publish',
            'posts_per_page' => -1,
        ]);

        foreach ($posts as $p) {
            $url = get_permalink($p->ID);
            $mod_date = mysql2date('Y-m-d\TH:i:s+03:00', $p->post_modified);
            $priority = ($p->post_type === 'page' && in_array($p->post_name, ['home', 'home-ar'])) ? '1.0' : '0.8';

            echo "  <url>\n";
            echo "    <loc>" . esc_url($url) . "</loc>\n";
            echo "    <lastmod>{$mod_date}</lastmod>\n";
            echo "    <changefreq>weekly</changefreq>\n";
            echo "    <priority>{$priority}</priority>\n";
            echo "  </url>\n";
        }

        echo '</urlset>' . "\n";
        exit;
    }
}
add_action('template_redirect', 'apexnova_generate_sitemap');
