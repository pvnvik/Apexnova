<?php
if (!defined('ABSPATH')) {
    exit;
}

$pages = array(
    'home' => array(
        'title' => 'Home',
        'content' => 'ApexNova Holding Company — Engineering the Kingdom’s Infrastructure.',
        'slug' => 'home',
    ),
    'about-us' => array(
        'title' => 'About Us',
        'content' => 'ApexNova Holding Company was founded in 1997 as a Saudi-based provider of MEP and electro-mechanical services.',
        'slug' => 'about-us',
    ),
    'contact-us' => array(
        'title' => 'Contact Us',
        'content' => 'Get in touch with ApexNova Holding Company for proposals, RFQs, and engineering consultations.',
        'slug' => 'contact-us',
    ),
    'services' => array(
        'title' => 'Services',
        'content' => 'ApexNova provides comprehensive MEP, mechanical, electrical, aviation fuel, and civil contracting services.',
        'slug' => 'services',
    ),
    'training' => array(
        'title' => 'Training',
        'content' => 'ApexNova Training Center — QHSE, OSHA, IOSH, NEBOSH, and ISO Management certifications.',
        'slug' => 'training',
    ),
    'safety' => array(
        'title' => 'Safety',
        'content' => 'ApexNova HSSE & Safety Policy — Every day starts with a toolbox meeting.',
        'slug' => 'safety',
    ),
    'projects' => array(
        'title' => 'Projects',
        'content' => 'Featured infrastructure and engineering projects executed across Saudi Arabia.',
        'slug' => 'projects',
    ),
    'clients' => array(
        'title' => 'Clients',
        'content' => 'Trusted by Saudi Arabia’s leading energy, aviation, utility, and infrastructure organizations.',
        'slug' => 'clients',
    ),
    'media' => array(
        'title' => 'Media',
        'content' => 'Latest news, project milestones, and engineering insights from ApexNova.',
        'slug' => 'media',
    ),
    'careers' => array(
        'title' => 'Careers',
        'content' => 'Build your career with ApexNova — Join our multidisciplinary engineering team.',
        'slug' => 'careers',
    ),
    'privacy-policy' => array(
        'title' => 'Privacy Policy',
        'content' => 'ApexNova Holding Company Privacy Policy in compliance with Saudi PDPL regulations.',
        'slug' => 'privacy-policy',
    ),
    'terms-of-use' => array(
        'title' => 'Terms of Use',
        'content' => 'ApexNova Holding Company Website Terms of Use.',
        'slug' => 'terms-of-use',
    ),
    'cookie-policy' => array(
        'title' => 'Cookie Policy',
        'content' => 'ApexNova Cookie Policy.',
        'slug' => 'cookie-policy',
    ),
);

$home_id = 0;
$media_id = 0;

foreach ($pages as $key => $page_data) {
    $existing = get_page_by_path($page_data['slug']);
    if (!$existing) {
        $id = wp_insert_post(array(
            'post_title'   => $page_data['title'],
            'post_name'    => $page_data['slug'],
            'post_content' => $page_data['content'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ));
        echo "Created page: {$page_data['title']} (ID: $id)\n";
    } else {
        $id = $existing->ID;
        wp_update_post(array(
            'ID'          => $id,
            'post_status' => 'publish',
        ));
        echo "Page exists: {$page_data['title']} (ID: $id)\n";
    }

    if ($key === 'home') {
        $home_id = $id;
    }
    if ($key === 'media') {
        $media_id = $id;
    }
}

if ($home_id) {
    update_option('show_on_front', 'page');
    update_option('page_on_front', $home_id);
    echo "Set Home (ID: $home_id) as front page.\n";
}

if ($media_id) {
    update_option('page_for_posts', $media_id);
    echo "Set Media (ID: $media_id) as blog posts page.\n";
}

// Remove sample page if present
$sample = get_page_by_path('sample-page');
if ($sample) {
    wp_delete_post($sample->ID, true);
    echo "Removed Sample Page.\n";
}
