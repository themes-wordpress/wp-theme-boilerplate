<?php namespace Wp\Wpuniversity\Queries;


class Program {

    public $today;
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        $this->today = date('Ymd');
    }
 
    public function professor($count = -1)
    {
        return  [
            'posts_per_page' => $count,
            'post_type' => 'professor',
            'orderby' => 'title',
            'order' => 'ASC',
            'meta_query' => [
                [
                    'key' => 'related_programs',
                    'compare' => 'LIKE',
                    'value' => '"'.get_the_ID().'"'
                ],
            ],
        ];
    }
    public function event($count = -1)
    {
        return  [
            'posts_per_page' => $count,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => [
                [
                    'key' => 'related_programs',
                    'compare' => 'LIKE',
                    'value' => '"'.get_the_ID().'"'
                ],
            ],
        ];
    }
    public function advanced($count = -1)
    {
        return [
            'posts_per_page' => $count,
            'post_type' => 'program',
            'orderby' => 'title',
            'order' => 'ASC'
    
            // 'meta_key' => 'event_date',
            // 'orderby' => 'meta_value_num',
            // 'order' => 'ASC',
            // 'meta_query' => [
            //     [
            //         'key' => 'event_date',
            //         'compare' => '<',
            //         'value' => $this->today,
            //         'type' => 'numeric',
            //     ],
            // ],
        ];
    }

    public function basic($count = -1)
    {
        return [
            'posts_per_page' => $count,
            'post_type' => 'program',
            'orderby' => 'title',
            'order' => 'ASC'
    
            // 'meta_key' => 'event_date',
            // 'orderby' => 'meta_value_num',
            // 'order' => 'ASC',
            // 'meta_query' => [
            //     [
            //         'key' => 'event_date',
            //         'compare' => '<',
            //         'value' => $this->today,
            //         'type' => 'numeric',
            //     ],
            // ],
        ];
    }

}