<?php namespace Wp\WpThemeBoilerplate\Features;


use Wp\WpThemeBoilerplate\Features\Support;
use Wp\WpThemeBoilerplate\Features\Image;

 
class Feature {
    public function __construct(){
        $this->init();
    }
    public function init(){
        new Support();
        new Image();
      
    }
}