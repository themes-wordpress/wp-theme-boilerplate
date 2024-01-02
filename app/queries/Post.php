<?php namespace Wp\WpThemeBoilerplate\Queries;


class Post {

    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
    }
 
    public function current($count = 2)
    {
        return  [
            'posts_per_page' => $count,
            'post_type' => 'post',
        ];
    }
   

}