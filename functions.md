<?php require_once __DIR__ . '/config.php';

use Wp\Wpuniversity\Assets\Asset;
$assets = new Asset();


function wp_university_features(){
  // register_nav_menu( 'HeaderMenuLocation', 'Header Menu Location' );
  // register_nav_menu( 'HeaderAuthRightMenuLocation', 'Header Auth Right Menu Location' );
  // register_nav_menu( 'FooterExploreMenuLocation', 'Footer Explore Menu Location' );
  // register_nav_menu( 'FooterLearnMenuLocation', 'Footer Learn Menu Location' );
  add_theme_support( 'title-tag');
  add_theme_support( 'title-tag');
}
add_action('after_setup_theme', 'wp_university_features');



function wp_university_adjust_queries($query){
  if(!is_admin() && is_post_type_archive('event') && $query->is_main_query()){

    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', ['key' => 'event_date',
    'compare' => '>=',
    'value' => $today,
    'type' => 'numeric']);
  } 
}

add_action('pre_get_posts', 'wp_university_adjust_queries');


function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDCGCvXAyf3e5xEL_UIPd_An5yIe7Fi6RE');
}
add_action('acf/init', 'my_acf_init');
?>