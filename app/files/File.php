<?php namespace Wp\WpThemeBoilerplate\Files;


use Wp\WpThemeBoilerplate\Files\Image;

 
class File {
    public function __construct(){
        $this->init();
    }
    public function init(){
        new Image();
      
    }
}