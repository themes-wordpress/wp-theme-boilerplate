<?php namespace Wp\Wpuniversity\Auth;

 
class Login {

    public $user;
    public function __construct(){
        $this->init();
    }
    public function init(){
        $this->user = wp_get_current_user();
        $this->wp_university_login_actions();
        $this->wp_university_login_filters();
       

    }


    public function wp_university_login_actions(){
        add_action('admin_init', [$this, 'wp_university_account_redirect_on_login']);
        add_action('wp_loaded', [$this, 'wp_university_admin_bar_on_login']);
        add_action('login_enqueue_scripts', [$this, 'wp_university_custom_login_css']);
    }
    public function wp_university_login_filters(){
        add_filter('login_headerurl', [$this, 'wp_university_custom_login']);
        add_filter('login_headertitle', [$this, 'wp_university_custom_login_title']);
    }


    public function wp_university_custom_login(){
        $this->wp_university_custom_login_header_url();
    }

    public function wp_university_custom_login_header_url(){
        return esc_url( home_url( '/' ) );
    }

    public function wp_university_account_redirect_on_login(){
        $this->wp_university_subscriber_redirect_on_login();
    }

    public function wp_university_admin_bar_on_login(){
        $this->wp_university_no_admin_bar_for_subscriber();
    }




    public function userIsSubscriberOnly(){
        return count($this->user->roles) == 1 && $this->user->roles[0] == 'subscriber';  
    }

    public function redirecTo($route = '/'){
        wp_redirect(site_url($route));
        exit;
    }
    public function wp_university_subscriber_redirect_on_login(){
        if($this->userIsSubscriberOnly()) return $this->redirecTo('/');
    }

  
    public function wp_university_no_admin_bar_for_subscriber(){
        return show_admin_bar( false );
    }


    public function wp_university_custom_login_css(){
        wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('wp_university_styles', get_theme_file_uri('/build/style-index.css'));
        wp_enqueue_style('wp_university_extra_styles', get_theme_file_uri('/build/index.css'));
    }


    public function wp_university_custom_login_title(){
        return get_bloginfo('name');
    }

    
}


