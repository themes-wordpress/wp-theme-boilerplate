<?php namespace Wp\WpThemeBoilerplate\Queries;


use Wp\WpThemeBoilerplate\Queries\Adjust;

 
class Query {
    public function __construct(){
        $this->init();
    }
    public function init(){
        new Adjust();
    }
}