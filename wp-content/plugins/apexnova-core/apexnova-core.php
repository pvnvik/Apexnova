<?php
/**
 * Plugin Name: ApexNova Core
 * Plugin URI: http://localhost/apexnova
 * Description: Core custom post types, fields, and taxonomies for ApexNova Holding Company.
 * Version: 1.0.0
 * Author: ApexNova
 * Text Domain: apexnova-core
 */

if (!defined('ABSPATH')) {
    exit;
}

// Register Custom Post Types
function apexnova_register_post_types() {
    // 1. Service
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services', 'apexnova-core'),
            'singular_name' => __('Service', 'apexnova-core'),
            'add_new' => __('Add New Service', 'apexnova-core'),
            'add_new_item' => __('Add New Service', 'apexnova-core'),
            'edit_item' => __('Edit Service', 'apexnova-core'),
            'all_items' => __('All Services', 'apexnova-core'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes'),
        'menu_icon' => 'dashicons-hammer',
        'show_in_rest' => true,
    ));

    // Service Category
    register_taxonomy('service_category', 'service', array(
        'labels' => array(
            'name' => __('Service Categories', 'apexnova-core'),
            'singular_name' => __('Service Category', 'apexnova-core'),
        ),
        'hierarchical' => true,
        'public' => true,
        'rewrite' => array('slug' => 'service-category'),
        'show_in_rest' => true,
    ));

    // 2. Project
    register_post_type('project', array(
        'labels' => array(
            'name' => __('Projects', 'apexnova-core'),
            'singular_name' => __('Project', 'apexnova-core'),
            'add_new' => __('Add New Project', 'apexnova-core'),
            'edit_item' => __('Edit Project', 'apexnova-core'),
            'all_items' => __('All Projects', 'apexnova-core'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projects'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon' => 'dashicons-portfolio',
        'show_in_rest' => true,
    ));

    // Project Sector taxonomy
    register_taxonomy('project_sector', 'project', array(
        'labels' => array(
            'name' => __('Project Sectors', 'apexnova-core'),
            'singular_name' => __('Project Sector', 'apexnova-core'),
        ),
        'hierarchical' => true,
        'public' => true,
        'rewrite' => array('slug' => 'project-sector'),
        'show_in_rest' => true,
    ));

    // 3. Course (Training)
    register_post_type('course', array(
        'labels' => array(
            'name' => __('Courses', 'apexnova-core'),
            'singular_name' => __('Course', 'apexnova-core'),
            'add_new' => __('Add New Course', 'apexnova-core'),
            'edit_item' => __('Edit Course', 'apexnova-core'),
            'all_items' => __('All Courses', 'apexnova-core'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'courses'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon' => 'dashicons-welcome-learn-more',
        'show_in_rest' => true,
    ));

    // Course Category
    register_taxonomy('course_category', 'course', array(
        'labels' => array(
            'name' => __('Course Categories', 'apexnova-core'),
            'singular_name' => __('Course Category', 'apexnova-core'),
        ),
        'hierarchical' => true,
        'public' => true,
        'rewrite' => array('slug' => 'course-category'),
        'show_in_rest' => true,
    ));

    // 4. Job (Careers)
    register_post_type('job', array(
        'labels' => array(
            'name' => __('Jobs', 'apexnova-core'),
            'singular_name' => __('Job', 'apexnova-core'),
            'add_new' => __('Add New Job', 'apexnova-core'),
            'edit_item' => __('Edit Job', 'apexnova-core'),
            'all_items' => __('All Careers', 'apexnova-core'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'careers-list'),
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
        'menu_icon' => 'dashicons-id-alt',
        'show_in_rest' => true,
    ));

    // 5. Client
    register_post_type('client', array(
        'labels' => array(
            'name' => __('Clients', 'apexnova-core'),
            'singular_name' => __('Client', 'apexnova-core'),
            'add_new' => __('Add New Client', 'apexnova-core'),
            'edit_item' => __('Edit Client', 'apexnova-core'),
            'all_items' => __('All Clients', 'apexnova-core'),
        ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'clients-list'),
        'supports' => array('title', 'thumbnail', 'custom-fields'),
        'menu_icon' => 'dashicons-building',
        'show_in_rest' => true,
    ));

    // Client Category
    register_taxonomy('client_category', 'client', array(
        'labels' => array(
            'name' => __('Client Categories', 'apexnova-core'),
            'singular_name' => __('Client Category', 'apexnova-core'),
        ),
        'hierarchical' => true,
        'public' => true,
        'rewrite' => array('slug' => 'client-category'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'apexnova_register_post_types');

// Make CPTs translatable with Polylang
function apexnova_polylang_cpts($post_types, $is_settings) {
    if ($is_settings) {
        unset($post_types['service'], $post_types['project'], $post_types['course'], $post_types['job'], $post_types['client']);
    } else {
        $post_types['service'] = 'service';
        $post_types['project'] = 'project';
        $post_types['course'] = 'course';
        $post_types['job'] = 'job';
        $post_types['client'] = 'client';
    }
    return $post_types;
}
add_filter('pll_get_post_types', 'apexnova_polylang_cpts', 10, 2);
