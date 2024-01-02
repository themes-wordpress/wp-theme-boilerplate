<?php namespace Wp\WpThemeBoilerplate\Queries\Apis;


class Route {

    public $today;
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        $this->today = date('Ymd');
    }
 
 
    public function search($data, $count = -1)
    {
        return [
            'posts_per_page' => $count,
            'post_type' => ['post', 'event', 'program', 'professor'],
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            's' => sanitize_term_field($data['term']),
            
        ];
    }

}