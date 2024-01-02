<?php namespace Wp\WpThemeBoilerplate\Views\Extensions;

class Extension {
    public function __construct(){
        $this->init();
    }   

    public  function init(){
        add_filter('timber/twig', [$this, 'addCustomFunction']);
    }

    public function addCustomFunction($twig) {
        $twig->addFunction(new \Twig\TwigFunction('working', [$this, 'working_function']));
        $twig->addFunction(new \Twig\TwigFunction('wp_trim_words', [$this, 'custom_trim_words']));
        $twig->addFunction(new \Twig\TwigFunction('get_permalink', [$this, 'custom_get_permalink']));
        $twig->addFunction(new \Twig\TwigFunction('site_url', [$this, 'custom_get_site_url']));
        return $twig;
    }
    public function working_function(){
        echo "I am a working function in this class!";
    }
    function custom_trim_words($text, $num_words, $more = null) {
        return wp_trim_words($text, $num_words, $more);
    }
    function custom_get_permalink($post) {
        return get_permalink($post->ID);
    }

    function custom_get_site_url($path =  '') {
        return site_url($path);
    }
    

 
}