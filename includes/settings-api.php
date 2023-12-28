<?php

add_action('admin_init', 'abz_script_tag_settings_api');

function abz_script_tag_settings_api()
{
    $args = array(
        'sanitize_callback' => 'abz_script_tag_sanitize_input',
    );

    register_setting(
        'abz_script_tag_settings',
        'abz_script_tag_options',
        $args
    );

    add_settings_section(
        'abz_script_tag_main_section',
        'Main Section',
        'abz_script_tag_main_section_callback',
        'abz-script-tag'
    );

    add_settings_field(
        'script_location',
        'Script Location',
        'abz_script_tag_script_location_callback',
        'abz-script-tag',
        'abz_script_tag_main_section',
        array(
            'name' => 'script_location',
            'locations' => array('head', 'footer')
        )
    );

    add_settings_field(
        'script_content',
        'Script Content',
        'abz_script_tag_script_content_callback',
        'abz-script-tag',
        'abz_script_tag_main_section',
        array(
            'name' => 'script_content',
        )
    );
}

function abz_script_tag_main_section_callback() {
    echo '<p>Main Section</p>';
}

function abz_script_tag_script_location_callback($args) {
    print_r($args);
}

function abz_script_tag_script_content_callback($args) {
    print_r($args);
}