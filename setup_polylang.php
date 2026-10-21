<?php
if (!defined('ABSPATH')) {
    exit;
}

if (function_exists('PLL')) {
    $model = PLL()->model;
    $languages = $model->get_languages_list();
    $slugs = wp_list_pluck($languages, 'slug');

    if (!in_array('en', $slugs)) {
        $model->add_language(array(
            'name'       => 'English',
            'slug'       => 'en',
            'locale'     => 'en_US',
            'rtl'        => 0,
            'term_group' => 1,
            'flag'       => 'us',
        ));
        echo "English language added.\n";
    } else {
        echo "English already exists.\n";
    }

    if (!in_array('ar', $slugs)) {
        $model->add_language(array(
            'name'       => 'العربية',
            'slug'       => 'ar',
            'locale'     => 'ar',
            'rtl'        => 1,
            'term_group' => 2,
            'flag'       => 'sa',
        ));
        echo "Arabic language added.\n";
    } else {
        echo "Arabic already exists.\n";
    }

    $options = get_option('polylang', array());
    $options['default_lang'] = 'en';
    $options['hide_default'] = 0;
    $options['force_lang']   = 1;
    $options['media_support'] = 1;
    $options['post_types'] = array('service', 'project', 'course', 'job', 'client', 'post', 'page');
    update_option('polylang', $options);
    echo "Polylang options updated: English default, Arabic RTL configured.\n";
} else {
    echo "PLL function not available.\n";
}
