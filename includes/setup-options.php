<?php

function abz_script_tag_get_options() {

    $options = get_option( 'abz_script_tag_options', array() );
    $defult_options = array(
        'script_content' => 'console.log("Hello World");',
        'script_location' => 'head',
    );
    
    if ( empty( $options ) ) {
        update_option( 'abz_script_tag_options', $defult_options );
    }

    return $options;
}