<?php require_once __DIR__ . '/config.php';

use Wp\WpThemeBoilerplate\Theme;
use Wp\WpThemeBoilerplate\Theme\Partials\Header;

new Theme();

$header = new Header();

// Add the following code to your theme's functions.php file or in a custom plugin.

// function custom_register_post_status() {
//     register_post_status('custom_status', array(
//         'label'                     => _x('Custom Status', 'post'),
//         'public'                    => true,
//         'exclude_from_search'       => false,
//         'show_in_admin_all_list'    => true,
//         'show_in_admin_status_list' => true,
//         'label_count'               => _n_noop('Custom Status (%s)', 'Custom Status (%s)'),
//     ));
// }

// // Hook into the init action and call custom_register_post_status function
// add_action('init', 'custom_register_post_status');

function my_new_custom_register_post_status() {
    register_post_status('ready_for_review', array(
        'label'                     => _x('Ready For Review', 'post'),
        'public'                    => true,
        'exclude_from_search'       => false,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true,
        'label_count'               => _n_noop('Ready For Review (%s)', 'Ready For Review (%s)'),
    ));
}

// Hook into the admin_init action and call custom_register_post_status function
add_action('admin_init', 'my_new_custom_register_post_status');


