<?php namespace Wp\Wpuniversity\Posts\Events;

use WP_Query;
class Archive {
    public $today;
    public function __construct()
    {
        $this->init();
    }
    
    public function init()
    {
        $this->today = date('Ymd');
    }

    public function query($query){
        return new WP_Query($query);
    }
    public function upcomingEventQuery()
    {
        return  [
            'posts_per_page' => 2,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => [
                [
                    'key' => 'event_date',
                    'compare' => '>=',
                    'value' => $this->today,
                    'type' => 'numeric',
                ],
            ],
        ];
    }
    public function pastEventQuery()
    {
        return [
            'posts_per_page' => 2,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => [
                [
                    'key' => 'event_date',
                    'compare' => '<',
                    'value' => $this->today,
                    'type' => 'numeric',
                ],
            ],
        ];

    }

    public function upcomingEvents(){
        $query = $this->upcomingEventQuery();
        return new WP_Query($query);
    }
    public function pastEvents(){
        $query = $this->pastEventQuery();
        return new WP_Query($query);
    }
}