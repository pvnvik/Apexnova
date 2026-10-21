<?php
/**
 * Setup Legal Pages and Translation Links
 */
require_once __DIR__ . '/wp-load.php';

$legal_pages = [
    'privacy-policy' => [
        'en' => [
            'title' => 'Privacy Policy & Data Protection (PDPL)',
            'slug'  => 'privacy-policy',
        ],
        'ar' => [
            'title' => 'سياسة الخصوصية وحماية البيانات الشخصية',
            'slug'  => 'privacy-policy-ar',
        ]
    ],
    'terms-of-use' => [
        'en' => [
            'title' => 'Terms of Use',
            'slug'  => 'terms-of-use',
        ],
        'ar' => [
            'title' => 'شروط وأحكام الاستخدام',
            'slug'  => 'terms-of-use-ar',
        ]
    ],
    'cookie-policy' => [
        'en' => [
            'title' => 'Cookie Policy',
            'slug'  => 'cookie-policy',
        ],
        'ar' => [
            'title' => 'سياسة ملفات تعريف الارتباط',
            'slug'  => 'cookie-policy-ar',
        ]
    ],
];

foreach ($legal_pages as $key => $data) {
    // English
    $en_id = 0;
    $existing_en = get_page_by_path($data['en']['slug']);
    if ($existing_en) {
        $en_id = $existing_en->ID;
        wp_update_post([
            'ID' => $en_id,
            'post_title' => $data['en']['title'],
            'post_status' => 'publish',
        ]);
        update_post_meta($en_id, '_wp_page_template', 'page-legal.php');
        echo "Updated EN legal page {$data['en']['slug']} (ID: {$en_id})\n";
    } else {
        $en_id = wp_insert_post([
            'post_title' => $data['en']['title'],
            'post_name' => $data['en']['slug'],
            'post_status' => 'publish',
            'post_type' => 'page',
        ]);
        update_post_meta($en_id, '_wp_page_template', 'page-legal.php');
        echo "Created EN legal page {$data['en']['slug']} (ID: {$en_id})\n";
    }

    // Arabic
    $ar_id = 0;
    $existing_ar = get_page_by_path($data['ar']['slug']);
    if ($existing_ar) {
        $ar_id = $existing_ar->ID;
        wp_update_post([
            'ID' => $ar_id,
            'post_title' => $data['ar']['title'],
            'post_status' => 'publish',
        ]);
        update_post_meta($ar_id, '_wp_page_template', 'page-legal.php');
        echo "Updated AR legal page {$data['ar']['slug']} (ID: {$ar_id})\n";
    } else {
        $ar_id = wp_insert_post([
            'post_title' => $data['ar']['title'],
            'post_name' => $data['ar']['slug'],
            'post_status' => 'publish',
            'post_type' => 'page',
        ]);
        update_post_meta($ar_id, '_wp_page_template', 'page-legal.php');
        echo "Created AR legal page {$data['ar']['slug']} (ID: {$ar_id})\n";
    }

    // Link in Polylang
    if (function_exists('pll_set_post_language') && function_exists('pll_save_post_translations')) {
        pll_set_post_language($en_id, 'en');
        pll_set_post_language($ar_id, 'ar');
        pll_save_post_translations([
            'en' => $en_id,
            'ar' => $ar_id,
        ]);
        echo "Linked Polylang translations for {$key}\n";
    }
}

echo "All legal pages created and linked successfully.\n";
