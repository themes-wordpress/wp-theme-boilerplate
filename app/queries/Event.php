<?php namespace Wp\Wpuniversity\Queries;


class Event {

    public $today;
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        $this->today = date('Ymd');
    }
 
    public function upcoming($count = 2)
    {
        return  [
            'posts_per_page' => $count,
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
    public function past($count = 2)
    {
        return [
            'posts_per_page' => $count,
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
    public function search($data, $count = 2)
    {
        return [
            'posts_per_page' => $count,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            's' => sanitize_term_field($data['term']),
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

}