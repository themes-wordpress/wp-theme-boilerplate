<?php namespace Wp\WpThemeBoilerplate\Apis;



class Filter {
    public function __construct(){
        $this->init();
    }
    public function init(){
        $this->university_add_filter();
        $this->university_add_action();
    }
    public function unversity_google_map_key($api){
        $api['key'] = 'AIzaSyDCGCvXAyf3e5xEL_UIPd_An5yIe7Fi6RE';// $_ENV['GOOGLE_MAP_API_KEY'];
        return $api;
    }

    public function university_add_filter(){
        add_filter('acf/fields/google_map/api', [$this, 'unversity_google_map_key']);
    }

    public function university_add_action(){
        add_action('acf/init', [$this, 'university_update_setting_filter']);

    }

    public function university_update_setting_filter(){
        acf_update_setting('google_api_key', 'AIzaSyDCGCvXAyf3e5xEL_UIPd_An5yIe7Fi6RE');
    }

   
}