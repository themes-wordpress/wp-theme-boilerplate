<?php namespace Wp\WpThemeBoilerplate;

/**
 * This class represents a WordPress plugin.
 * It initializes various plugin functionalities and hooks.
 */

 use Wp\WpThemeBoilerplate\Assets\Asset;
 use Wp\WpThemeBoilerplate\Features\Feature;
 use Wp\WpThemeBoilerplate\Queries\Query;
 use Wp\WpThemeBoilerplate\Auth\Auth;
 use Wp\WpThemeBoilerplate\Apis\Api;
 use Wp\WpThemeBoilerplate\Views\Extensions\Extension;

class Theme
{
    /**
     * Constructor method for the Plugin class.
     * Initializes the plugin by calling various initialization methods.
     */
    public function __construct()
    {
        $this->wp_them_boilerplate_initialize();
    }

    /**
     * Register plugin hooks upon initialization.
     */
    protected function wp_them_boilerplate_hooks(){}


    /**
     * Define plugin menus.
     */
    protected function wp_them_boilerplate_auth()
    {
         // Define and configure plugin menus here, if applicable.
        new Auth();
        
    }

    /**
     * Define plugin menus.
     */
    protected function wp_them_boilerplate_menus()
    {
         // Define and configure plugin menus here, if applicable.
         //new Menu();
        // new SubLevelMenus();
    }

    /**
     * Define plugin settings.
     */
    protected function wp_them_boilerplate_settings()
    {
        // Define and configure plugin settings here, if applicable.
        //new Setting();
        
    }

    /**
     * Define custom post types for the plugin.
     */
    protected function wp_them_boilerplate_custom_post_types()
    {
        // Define and configure custom post types here, if applicable.
        //new Post();
    }

    /**
     * Define taxonomies for the plugin.
     */
    protected function wp_them_boilerplate_taxonomies()
    {
        // Define and configure taxonomies here, if applicable.
        //new Taxonomy();
    }

      /**
     * Define options for the plugin.
     */
    protected function wp_them_boilerplate_options()
    {
        // Define and configure options here, if applicable.
        //new Option();
    }


   /**
     * Define metadata for the plugin.
     */
    protected function wp_them_boilerplate_metadata()
    {
        // Define and configure metadata here, if applicable.
        //new Metadatum();
    }
    /**
     * Define widgets for the plugin.
     */
    protected function wp_them_boilerplate_widgets()
    {
        // Define and configure widgets here, if applicable.
       //new Widget();
    }

    /**
     * Define view extensions for the plugin.
     */
    protected function wp_them_boilerplate_view_extensions()
    {
       
        // Define and configure view extensions here, if applicable.
        new Extension();
    }


    /**
     * Define assets for the plugin.
     */
    protected function wp_them_boilerplate_assets()
    {
       
        // Define and configure assets here, if applicable.
        new Asset();
    }

       /**
     * Define assets for the plugin.
     */
    protected function wp_them_boilerplate_features()
    {
       
        // Define and configure assets here, if applicable.
        new Feature;
    }


    /**
     * Define assets for the plugin.
     */
    protected function wp_them_boilerplate_queries()
    {
       
        // Define and configure assets here, if applicable.
        new Query();
    }

    /**
     * Define assets for the plugin.
     */
    protected function wp_them_boilerplate_apis()
    {
       
        // Define and configure apis here, if applicable.
        new Api();
    }


    /**
     * Define assets for the plugin.
     */
    protected function wp_them_boilerplate_routes()
    {
       
        // Define and configure apis here, if applicable.
        //new Api();

       // new Route();
    }

    /**
     * Initialize the plugin by calling various initialization methods.
     */
    protected function wp_them_boilerplate_initialize()
    {
        $this->wp_them_boilerplate_hooks();
        $this->wp_them_boilerplate_auth();
        $this->wp_them_boilerplate_menus();
        $this->wp_them_boilerplate_settings();
        $this->wp_them_boilerplate_custom_post_types();
        $this->wp_them_boilerplate_taxonomies();
        $this->wp_them_boilerplate_options();
        $this->wp_them_boilerplate_metadata();
        $this->wp_them_boilerplate_widgets();
        $this->wp_them_boilerplate_view_extensions();
        $this->wp_them_boilerplate_assets();
        $this->wp_them_boilerplate_apis();
        $this->wp_them_boilerplate_routes();
        $this->wp_them_boilerplate_features();
        $this->wp_them_boilerplate_queries();
    }

    /**
     * Activation hook callback when the plugin is activated.
     */
    protected function wp_them_boilerplate_activate()
    {
        // Code to execute when the plugin is activated.
    }

    /**
     * Deactivation hook callback when the plugin is deactivated.
     */
    protected function wp_them_boilerplate_deactivate()
    {
        // Code to execute when the plugin is deactivated.
    }

    /**
     * Uninstall hook callback when the plugin is uninstalled.
     */
    protected function wp_them_boilerplate_uninstall()
    {
        // Code to execute when the plugin is uninstalled.
    }
}
