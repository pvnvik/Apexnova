<?php
/**
 * ApexNova Astra Child Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

function apexnova_child_enqueue_scripts() {
    // Parent theme styles
    wp_enqueue_style('astra-theme-css', get_template_directory_uri() . '/style.css');

    // Child theme styles
    wp_enqueue_style(
        'apexnova-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-theme-css'),
        '1.0.0'
    );

    // Enqueue RTL stylesheet when in RTL mode
    if (is_rtl()) {
        wp_enqueue_style(
            'apexnova-child-rtl',
            get_stylesheet_directory_uri() . '/rtl.css',
            array('apexnova-child-style'),
            '1.0.0'
        );
    }

    // Main JavaScript
    wp_enqueue_script(
        'apexnova-child-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'apexnova_child_enqueue_scripts', 15);

// Add theme features
function apexnova_child_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
    
    // Register custom menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Mega Menu', 'astra-child'),
        'footer-menu'  => __('Footer Menu', 'astra-child'),
        'utility-menu' => __('Utility Bar Menu', 'astra-child'),
    ));
}
add_action('after_setup_theme', 'apexnova_child_setup');

// Filter body classes for RTL and custom styling
function apexnova_body_classes($classes) {
    if (is_rtl()) {
        $classes[] = 'rtl';
    }
    return $classes;
}
add_filter('body_class', 'apexnova_body_classes');

// Custom Template Routing for Services & Arabic Page Counterparts
function apexnova_template_include($template) {
    global $post;

    // Route Arabic counterpart pages (-ar) to their parent template
    if (is_page() && !empty($post)) {
        $slug = $post->post_name;
        if (substr($slug, -3) === '-ar') {
            $base_slug = substr($slug, 0, -3);
            if ($base_slug === 'home') {
                $front_page = get_stylesheet_directory() . '/front-page.php';
                if (file_exists($front_page)) {
                    return $front_page;
                }
            }
            $target = get_stylesheet_directory() . "/page-{$base_slug}.php";
            if (file_exists($target)) {
                return $target;
            }
        }
    }

    $request_uri = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
    $parts = explode('/', $request_uri);

    $services_pos = array_search('services', $parts);
    if ($services_pos === false) {
        $services_pos = array_search('services-ar', $parts);
    }
    if ($services_pos !== false) {
        if (isset($parts[$services_pos + 1]) && !empty($parts[$services_pos + 1])) {
            $single_service = get_stylesheet_directory() . '/single-service.php';
            if (file_exists($single_service)) {
                return $single_service;
            }
        } else {
            $services_hub = get_stylesheet_directory() . '/page-services.php';
            if (file_exists($services_hub)) {
                return $services_hub;
            }
        }
    }

    if (is_singular('service')) {
        $single_service = get_stylesheet_directory() . '/single-service.php';
        if (file_exists($single_service)) {
            return $single_service;
        }
    }

    return $template;
}
add_filter('template_include', 'apexnova_template_include', 99);

// Include SEO, Schema Markup, Open Graph & Hardening
require_once get_stylesheet_directory() . '/inc/seo-schema.php';

