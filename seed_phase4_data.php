<?php
if (!defined('ABSPATH')) {
    exit;
}

// 1. Seed Projects
$projects = array(
    array('title' => 'International Airport Fuel Hydrant Network Expansion', 'sector' => 'Aviation', 'client' => 'Civil Aviation Authority', 'year' => '2025'),
    array('title' => 'Deep-Well Impressed Current Cathodic Protection Drilling', 'sector' => 'Oil & Gas', 'client' => 'Petrochemical Corporation', 'year' => '2024'),
    array('title' => 'Emergency Fuel Shut-Off (EFSO) & Redundant RIO Integration', 'sector' => 'Aviation', 'client' => 'Airport Operating Company', 'year' => '2025'),
    array('title' => '380kV Substation Power Transformer Commissioning', 'sector' => 'Power & Utilities', 'client' => 'National Power Grid', 'year' => '2025'),
    array('title' => 'Mobile High-Vacuum Transformer Oil Filtration & Dielectric Restoration', 'sector' => 'Power & Utilities', 'client' => 'Industrial Utility Provider', 'year' => '2026'),
    array('title' => 'High-Pressure Refinery Pipeline Hot Tapping & Branch Tie-In', 'sector' => 'Industrial Oil & Gas', 'client' => 'Refinery Complex', 'year' => '2024'),
    array('title' => 'Jet A-1 Fuel Testing Manifold Assembly & Airfield Commissioning', 'sector' => 'Aviation', 'client' => 'Aviation Fuel Consortium', 'year' => '2026'),
    array('title' => 'Heavy Logistics Hub Foundations & Pre-Engineered Steel Structures', 'sector' => 'Civil & Structural', 'client' => 'Logistics Park Developer', 'year' => '2025')
);

foreach ($projects as $p) {
    $existing = get_page_by_path(sanitize_title($p['title']), OBJECT, 'project');
    if (!$existing) {
        $id = wp_insert_post(array(
            'post_title'   => $p['title'],
            'post_name'    => sanitize_title($p['title']),
            'post_status'  => 'publish',
            'post_type'    => 'project',
            'post_content' => "Project executed by ApexNova for {$p['client']} in {$p['year']}.",
        ));
        update_post_meta($id, '_client', $p['client']);
        update_post_meta($id, '_sector', $p['sector']);
        update_post_meta($id, '_year', $p['year']);
        echo "Created CPT project: {$p['title']} (ID: $id)\n";
    }
}

// 2. Seed News Posts
$posts = array(
    array(
        'title' => 'ApexNova Successfully Hands Over Jet A-1 Hydrant Testing Manifold at International Airfield',
        'content' => 'ApexNova aviation fuel division has completed the fabrication, installation, and rigorous testing of an apron fuel testing manifold for a major international airport project in Saudi Arabia, passing all ASTM and Civil Aviation cleanliness criteria.',
        'category' => 'Aviation & Fuel Systems'
    ),
    array(
        'title' => 'Deploying Mobile High-Vacuum Transformer Oil Filtration Units Across Saudi Substation Network',
        'content' => 'To support grid stability and prevent costly asset replacements, ApexNova has deployed custom mobile oil regeneration trailers capable of on-site degassing, vacuum dehydration, and dielectric restoration exceeding 65kV.',
        'category' => 'Electrical & Power'
    ),
    array(
        'title' => 'Zero-Downtime Maintenance: Cold Cutting and Cryogenic Pipe Freezing in Hydrocarbon Facilities',
        'content' => 'ApexNova demonstrated its specialized pipeline intervention capability at a major petrochemical complex, successfully isolating and replacing isolation valves under pressure using cryogenic freeze jackets.',
        'category' => 'Industrial Maintenance'
    )
);

foreach ($posts as $post_data) {
    $existing = get_page_by_path(sanitize_title($post_data['title']), OBJECT, 'post');
    if (!$existing) {
        $id = wp_insert_post(array(
            'post_title'   => $post_data['title'],
            'post_name'    => sanitize_title($post_data['title']),
            'post_content' => $post_data['content'],
            'post_status'  => 'publish',
            'post_type'    => 'post',
        ));
        echo "Created blog post: {$post_data['title']} (ID: $id)\n";
    }
}

echo "Phase 4 CPTs and posts successfully seeded.\n";
