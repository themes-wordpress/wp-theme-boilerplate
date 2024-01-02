<?php namespace Wp\Wpuniversity\Features;


use Wp\Wpuniversity\Features\Support;
use Wp\Wpuniversity\Features\Image;

 
class Feature {
    public function __construct(){
        $this->init();
    }
    public function init(){
        new Support();
        new Image();
      
    }
}