<?php namespace Wp\Wpuniversity\Files;


use Wp\Wpuniversity\Files\Image;

 
class File {
    public function __construct(){
        $this->init();
    }
    public function init(){
        new Image();
      
    }
}