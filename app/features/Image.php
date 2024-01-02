<?php namespace Wp\Wpuniversity\Features;

class Image {
    public function __construct(){
        $this->init();
    }
    public function init(){
        add_action('after_setup_theme', [$this, 'wp_university_add_supports']);
    }

    public function wp_university_add_supports(){
        add_image_size('professorLandscape', 400, 260, true );
        add_image_size('professorPortrait', 480, 650, true );
        add_image_size('pageBanner', 1500, 350, true );
    }
}