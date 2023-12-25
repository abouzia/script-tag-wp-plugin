<?php

add_action('admin_menu', 'abz_script_tag_admin_menu');

function abz_script_tag_admin_menu()
{

    add_options_page(
        'ABZ Script Tag',
        'Script Tag',
        'manage_options',
        'abz-script-tag',
        'abz_script_tag_options_page'
    );
}

function abz_script_tag_options_page()
{

    $options = abz_script_tag_get_options();
?>
    <div class="wrap">
        <h1>ABZ Script Tag Options</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('abz_script_tag_options');
            do_settings_sections('abz-script-tag');
            submit_button();
            ?>
        </form>
    </div>
<?php
}
