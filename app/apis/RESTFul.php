<?php namespace Wp\Wpuniversity\Apis;


class RESTFul {
    public function __construct(){
        $this->init();
    }
    public function init(){
        $this->university_add_custom_rest();
    }
    public function university_add_custom_rest(){
       add_action('rest_api_init', [$this, 'wp_univeristy_custom_post_rest'] );
    }


    public function wp_univeristy_custom_post_rest(){
         register_rest_field('post', 'authorName', array(
            'get_callback' =>  function(){
                return get_the_author();
            }
         ));
         register_rest_field('event', 'hostName', array(
            'get_callback' =>  function(){
                return get_the_author();
            }
         ));
    }


   
}