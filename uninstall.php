<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit();
}
// The code to run when the user clicks on the uninstall button.
delete_option('abz_script_tag_options');
