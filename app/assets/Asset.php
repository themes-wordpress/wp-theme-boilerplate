<?php namespace Wp\Wpuniversity\Assets;


use Wp\Wpuniversity\Assets\Script;
use Wp\Wpuniversity\Assets\Style;

class Asset {
    public function __construct(){
        $this->init();
    }
    public function init(){
        new Script();
        new Style();
    }
}