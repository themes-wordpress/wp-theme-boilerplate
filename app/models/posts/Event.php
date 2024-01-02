<?php namespace Wp\Wpuniversity\Models\Posts;

use WP_Query;
use Wp\Wpuniversity\Queries\Event as EventQuery;
class Event
{
    public $today;
    public EventQuery $query;
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        $this->today = date('Ymd');
        $this->query = new EventQuery();
    }

    public function search($data){
        $query = $this->query->search($data);
        return new WP_Query($query);
    }
    public function upcomingEvents(){
        $query = $this->query->upcoming();
        return new WP_Query($query);
    }
    public function pastEvents(){
        $query = $this->query->past();
        return new WP_Query($query);
    }
}
