<?php

add_action('admin_enqueue_scripts', 'abz_script_tag_admin_enqueue_scripts');

function abz_script_tag_admin_enqueue_scripts()
{
    wp_enqueue_style(
        'admin-style',
        plugins_url(
            'admin/css/style.css',
            dirname(__FILE__, 1)
        ),
    );
}
