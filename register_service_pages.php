<?php
if (!defined('ABSPATH')) {
    exit;
}

require_once get_stylesheet_directory() . '/inc/services-data.php';
$services_data = apexnova_get_services_data();

// Find parent services page ID
$services_page = get_page_by_path('services');
$parent_id = $services_page ? $services_page->ID : 0;

echo "Parent Services Page ID: $parent_id\n";

foreach ($services_data as $slug => $data) {
    // 1. Create/Update Child Page
    $existing_page = get_posts(array(
        'name'        => $slug,
        'post_type'   => 'page',
        'post_status' => 'any',
        'numberposts' => 1,
    ));

    if (empty($existing_page)) {
        $page_id = wp_insert_post(array(
            'post_title'   => $data['title'],
            'post_name'    => $slug,
            'post_content' => $data['intro'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent_id,
        ));
        echo "Created page: {$data['title']} (ID: $page_id)\n";
    } else {
        $p = $existing_page[0];
        wp_update_post(array(
            'ID'          => $p->ID,
            'post_parent' => $parent_id,
            'post_status' => 'publish',
        ));
        echo "Updated page: {$data['title']} (ID: {$p->ID})\n";
    }

    // 2. Create/Update CPT Service Post
    $existing_cpt = get_posts(array(
        'name'        => $slug,
        'post_type'   => 'service',
        'post_status' => 'any',
        'numberposts' => 1,
    ));

    if (empty($existing_cpt)) {
        $cpt_id = wp_insert_post(array(
            'post_title'   => $data['title'],
            'post_name'    => $slug,
            'post_content' => $data['intro'],
            'post_status'  => 'publish',
            'post_type'    => 'service',
        ));
        // Add meta
        update_post_meta($cpt_id, '_category', $data['category']);
        update_post_meta($cpt_id, '_tagline', $data['tagline']);
        update_post_meta($cpt_id, '_standards', $data['standards']);
        echo "Created CPT service: {$data['title']} (ID: $cpt_id)\n";
    } else {
        $c = $existing_cpt[0];
        update_post_meta($c->ID, '_category', $data['category']);
        update_post_meta($c->ID, '_tagline', $data['tagline']);
        update_post_meta($c->ID, '_standards', $data['standards']);
        echo "Updated CPT service: {$data['title']} (ID: {$c->ID})\n";
    }
}

echo "All service pages and CPT entries processed successfully.\n";
