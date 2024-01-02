<?php namespace Wp\Wpuniversity\Models\Posts;

use WP_Query;
use Wp\Wpuniversity\Queries\Program as ProgramQuery;
class Program
{
    public $today;
    public ProgramQuery $query;
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        $this->today = date('Ymd');
        $this->query = new ProgramQuery();
    }

    public function events($count = -1){
        $query = $this->query->event($count);
        return new WP_Query($query);
    }
    public function professors($count = -1){
        $query = $this->query->professor($count);
        return new WP_Query($query);
    }
    public function basicPrograms($count = -1){
        $query = $this->query->basic($count);
        return new WP_Query($query);
    }
    public function advancedPrograms($count =  -1){
        $query = $this->query->advanced($count);
        return new WP_Query($query);
    }
}
