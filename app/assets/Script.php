<?php namespace Wp\WpThemeBoilerplate\Assets; 

class Script {
    public function __construct(){
        $this->init();
    }
    public function init(){
        add_action('wp_enqueue_scripts', [$this, 'wp_university_add_scripts']);
    }

    public function wp_university_add_scripts(){
        wp_enqueue_script('main-wp_university-js', get_theme_file_uri('/build/index.js'), array('jquery', 'wp-api'), '1.0' ,true);
        wp_enqueue_script('wp_university-google-mpa-js', 'https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.25/gmaps.min.js');
        wp_enqueue_script( 'wp-api' );
        

    }
}