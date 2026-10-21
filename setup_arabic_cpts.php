<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('pll_set_post_language') || !function_exists('pll_save_post_translations')) {
    die("Polylang not active.\n");
}

$cpts = array('service', 'project', 'course', 'job', 'client');

foreach ($cpts as $cpt) {
    $posts = get_posts(array(
        'post_type' => $cpt,
        'post_status' => 'any',
        'numberposts' => -1,
        'lang' => 'en'
    ));

    echo "Found " . count($posts) . " English posts for CPT: $cpt\n";

    foreach ($posts as $p) {
        pll_set_post_language($p->ID, 'en');

        // Check if translation already exists
        $translations = pll_get_post_translations($p->ID);
        if (isset($translations['ar'])) {
            echo "Translation already exists for {$p->post_title}\n";
            continue;
        }

        // Create Arabic translation
        $ar_title = $p->post_title . ' [AR TRANSLATION PENDING]';
        $ar_slug  = $p->post_name . '-ar';

        $ar_id = wp_insert_post(array(
            'post_title'   => $ar_title,
            'post_name'    => $ar_slug,
            'post_content' => $p->post_content . "\n\n[AR TRANSLATION PENDING - نص قيد المراجعة والاعتماد النهائي]",
            'post_status'  => 'publish',
            'post_type'    => $cpt,
        ));

        if ($ar_id && !is_wp_error($ar_id)) {
            pll_set_post_language($ar_id, 'ar');
            pll_save_post_translations(array(
                'en' => $p->ID,
                'ar' => $ar_id
            ));
            echo "Created and linked Arabic translation for {$p->post_title} (AR ID: $ar_id)\n";
        }
    }
}

echo "All CPT translations processed.\n";
