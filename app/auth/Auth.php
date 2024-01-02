<?php namespace Wp\Wpuniversity\Auth;


use Wp\Wpuniversity\Auth\Register;
use Wp\Wpuniversity\Auth\Login;

 
class Auth {
    public function __construct(){
        $this->init();
    }
    public function init(){
        new Register();
        new Login();
      
    }
}