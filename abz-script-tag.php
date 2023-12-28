<?php

/**
 * Plugin Name: ABZ Script Tag
 * Description: Add script tag to your website
 * Version: 1.0.0
 * Author: Yassine Abouzia
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/** Upon activation */
register_activation_hook(__FILE__, 'abz_script_tag_activation');

function abz_script_tag_activation()
{
    abz_script_tag_get_options();
}

// Define plugin path
define('ABZ_SCRIPT_TAG_PLUGIN_PATH', plugin_dir_path(__FILE__));

// Includes
require_once(ABZ_SCRIPT_TAG_PLUGIN_PATH . 'includes/setup-options.php');
require_once(ABZ_SCRIPT_TAG_PLUGIN_PATH . 'includes/display-script.php');
require_once(ABZ_SCRIPT_TAG_PLUGIN_PATH . 'includes/admin-menus.php');
require_once(ABZ_SCRIPT_TAG_PLUGIN_PATH . 'includes/enqueue-scripts.php');
require_once(ABZ_SCRIPT_TAG_PLUGIN_PATH . 'includes/settings-api.php');

/** Upon deactivation */
register_deactivation_hook(__FILE__, 'abz_script_tag_deactivation');

function abz_script_tag_deactivation()
{
}
