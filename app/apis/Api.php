<?php namespace Wp\WpThemeBoilerplate\Apis;



use Wp\WpThemeBoilerplate\Apis\Filter;
use Wp\WpThemeBoilerplate\Apis\RESTFul;
use Wp\WpThemeBoilerplate\Apis\Route;

 
class Api {
    public function __construct(){
        $this->init();
    }
    public function init(){
        new Filter();
        new RESTFul();
        new Route();
    }
}