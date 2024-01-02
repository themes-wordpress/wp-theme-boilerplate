<?php namespace Wp\Wpuniversity\Apis;



use Wp\Wpuniversity\Apis\Filter;
use Wp\Wpuniversity\Apis\RESTFul;
use Wp\Wpuniversity\Apis\Route;

 
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