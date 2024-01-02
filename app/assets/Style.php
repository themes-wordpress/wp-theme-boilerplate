<?php namespace Wp\Wpuniversity\Assets; 

class Style {
    public function __construct(){
        $this->init();
    }
    public function init(){
        add_action('wp_enqueue_scripts', [$this, 'wp_university_add_styles']);
    }

    public function wp_university_add_styles(){
        wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('wp_university_styles', get_theme_file_uri('/build/style-index.css'));
        wp_enqueue_style('wp_university_extra_styles', get_theme_file_uri('/build/index.css'));
    }

}