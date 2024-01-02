<?php namespace Wp\WpThemeBoilerplate\Auth;


use Wp\WpThemeBoilerplate\Auth\Register;
use Wp\WpThemeBoilerplate\Auth\Login;

 
class Auth {
    public function __construct(){
        $this->init();
    }
    public function init(){
        new Register();
        new Login();
      
    }
}