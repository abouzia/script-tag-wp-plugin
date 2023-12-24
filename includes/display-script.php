<?php
add_action('wp_footer', 'abz_script_tag_display_in_footer');

function abz_script_tag_display_in_footer()
{

    $options = abz_script_tag_get_options();
    $script_location = $options['script_location'];
    $script_content = $options['script_content'];

    if ($script_location == 'footer') {

        echo '<script>';
        echo $script_content;
        echo '</script>';
    } else {
        return;
    }
}

add_action('wp_head', 'abz_script_tag_display_in_head');

function abz_script_tag_display_in_head()
{

    $options = abz_script_tag_get_options();
    $script_location = $options['script_location'];
    $script_content = $options['script_content'];

    if ($script_location == 'head') {

        echo '<script>';
        echo $script_content;
        echo '</script>';
    } else {
        return;
    }
}
