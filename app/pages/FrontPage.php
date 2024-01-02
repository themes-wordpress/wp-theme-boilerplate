<?php namespace Wp\WpThemeBoilerplate\Pages;

use Wp\WpThemeBoilerplate\Views\View;
use \WP_Query;
class FrontPage
{
    public View $view;
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        $this->view = new View();
        $this->wp_university_frontpage_banner();
    }

    public function upcomingEventQuery()
    {
        $today = date('Ymd');
        $query = [
            'posts_per_page' => 3,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => [
                [
                    'key' => 'event_date',
                    'compare' => '>=',
                    'value' => $today,
                    'type' => 'numeric',
                ],
            ],
        ];
        return new WP_Query($query);
    }

    public function  blogPostQuery(){
        $query = [
            'posts_per_page' => 3,
            'post_type' => 'event',
        ];
        return new WP_Query($query);
    }

    public function wp_university_frontpage_banner()
    {
        echo $this->view::render('pages/front-page', [
            'events' => $this->upcomingEventQuery()->posts,
            'posts' => $this->blogPostQuery()->posts,
            'eventLink' => get_post_type_archive_link('event'),
            'image' => get_theme_file_uri('/images/library-hero.jpg'),
            'bus' => get_theme_file_uri('/images/bus.jpg'),
            'apples' => get_theme_file_uri('/images/apples.jpg'),
            'bread' => get_theme_file_uri('/images/bread.jpg'),
        ]);
    }
}
