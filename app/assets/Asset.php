<?php namespace Wp\WpThemeBoilerplate\Assets;


use Wp\WpThemeBoilerplate\Assets\Script;
use Wp\WpThemeBoilerplate\Assets\Style;

class Asset {
    public function __construct(){
        $this->init();
    }
    public function init(){
        new Script();
        new Style();
    }
}