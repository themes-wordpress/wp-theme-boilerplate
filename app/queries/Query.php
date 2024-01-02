<?php namespace Wp\Wpuniversity\Queries;


use Wp\Wpuniversity\Queries\Adjust;

 
class Query {
    public function __construct(){
        $this->init();
    }
    public function init(){
        new Adjust();
    }
}