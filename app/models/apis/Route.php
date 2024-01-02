<?php namespace Wp\WpThemeBoilerplate\Models\Apis;

use WP_Query;
use Wp\WpThemeBoilerplate\Queries\Apis\Route as RouteQuery;
class Route
{
    public RouteQuery $query;
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {

        $this->query = new RouteQuery();
    }

    public function search($data, $count = - 1){
        $query = $this->query->search($data);
        return new WP_Query($query);
    }
    
}
