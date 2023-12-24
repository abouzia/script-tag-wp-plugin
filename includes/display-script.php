<?php
add_action('wp_footer', 'abz_script_tag_display_in_footer');

function abz_script_tag_display_in_footer()
{

    $options = abz_script_tag_get_options();
    $sctipt_location = $options['sctipt_location'];
    $sctipt_content = $options['sctipt_content'];

    if ($sctipt_location == 'footer') {

        echo '<script>';
        echo $sctipt_content;
        echo '</script>';
    } else {
        return;
    }
}

add_action('wp_head', 'abz_script_tag_display_in_head');

function abz_script_tag_display_in_head()
{

    $options = abz_script_tag_get_options();
    $sctipt_location = $options['sctipt_location'];
    $sctipt_content = $options['sctipt_content'];

    if ($sctipt_location == 'header') {

        echo '<script>';
        echo $sctipt_content;
        echo '</script>';
    } else {
        return;
    }
}
