<?php namespace Wp\WpThemeBoilerplate\Apis;



use WP_REST_SERVER;
use Wp\WpThemeBoilerplate\Models\Apis\Route as RouteModel;
class Route {


    public RouteModel $route;
    public function __construct(){
        $this->init();
    }
    public function init(){
        $this->event = new RouteModel();
        $this->wp_university_add_custom_rest_api_route();
    }
    public function wp_university_add_custom_rest_api_route(){
       add_action('rest_api_init', [$this, 'wp_univeristy_register_search'] );
    }


    public function wp_univeristy_register_search(){
         register_rest_route( 'university/v1', 'search', [
            'methods' => WP_REST_SERVER::READABLE, // 'GET', 'POST', 'PUT', 'DELETE'
            'callback' => [$this, 'wp_university_search_results_callback']
         ]);
    }


    public function wp_university_search_results_callback(){
       
        $eventResults = array(); 

        $events = $this->event->upcomingEvents();
   

        while($events->have_posts()){
            $events->the_post();
            array_push($eventResults, [
                'title' => get_the_title(),
                'url' => get_the_permalink()
            ]);
        }

        return $eventResults;

    
    }


   
}