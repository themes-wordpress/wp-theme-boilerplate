<?php namespace Wp\WpThemeBoilerplate\Queries;

class Adjust {
    public function __construct(){
        $this->init();
    }
    public function init(){
        add_action('pre_get_posts', [$this, 'wp_university_add_adjust_queries']);
    }

    public function wp_university_add_adjust_queries($query){

        if(!is_admin() && is_post_type_archive('program') && $query->is_main_query()){
            $query->set('orderby', 'title');
            $query->set('order', 'ASC');
            $query->set('posts_per_page', -1);
        
          }
        if(!is_admin() && is_post_type_archive('event') && $query->is_main_query()){

            $today = date('Ymd');
            $query->set('meta_key', 'event_date');
            $query->set('orderby', 'meta_value_num');
            $query->set('order', 'ASC');
            $query->set('meta_query', ['key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric']);
          } 

    }
}