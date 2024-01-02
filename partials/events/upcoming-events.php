<?php 
 $today = date('Ymd');
 $upcomingEventquery = [
     'paged' => get_query_var( 'paged', 1 ),
     'post_type' => 'event',
     'meta_key' => 'event_date',
     'orderby' =>'meta_value_num',
     'order' =>'ASC',
     'meta_query' => [
         [
             'key' => 'event_date',
             'compare' => '>=',
             'value' => $today,
             'type' => 'numeric'
         ]
     ]
     ];
