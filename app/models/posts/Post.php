<?php namespace Wp\WpThemeBoilerplate\Models\Posts;

use WP_Query;
use Wp\WpThemeBoilerplate\Queries\Post as PostQuery;
class Post
{
    public PostQuery $query;
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        $this->query = new PostQuery();
    }

    public function currentPosts(){
        $query = $this->query->current(2);
        return new WP_Query($query);
    }
   
}
