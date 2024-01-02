<?php namespace Wp\Wpuniversity;

/**
 * This class represents a WordPress plugin.
 * It initializes various plugin functionalities and hooks.
 */

 use Wp\Wpuniversity\Assets\Asset;
 use Wp\Wpuniversity\Features\Feature;
 use Wp\Wpuniversity\Queries\Query;
 use Wp\Wpuniversity\Auth\Auth;
 use Wp\Wpuniversity\Apis\Api;
 use Wp\Wpuniversity\Views\Extensions\Extension;

class Theme
{
    /**
     * Constructor method for the Plugin class.
     * Initializes the plugin by calling various initialization methods.
     */
    public function __construct()
    {
        $this->wp_university_initialize();
    }

    /**
     * Register plugin hooks upon initialization.
     */
    protected function wp_university_hooks(){}


    /**
     * Define plugin menus.
     */
    protected function wp_university_auth()
    {
         // Define and configure plugin menus here, if applicable.
        new Auth();
        
    }

    /**
     * Define plugin menus.
     */
    protected function wp_university_menus()
    {
         // Define and configure plugin menus here, if applicable.
         //new Menu();
        // new SubLevelMenus();
    }

    /**
     * Define plugin settings.
     */
    protected function wp_university_settings()
    {
        // Define and configure plugin settings here, if applicable.
        //new Setting();
        
    }

    /**
     * Define custom post types for the plugin.
     */
    protected function wp_university_custom_post_types()
    {
        // Define and configure custom post types here, if applicable.
        //new Post();
    }

    /**
     * Define taxonomies for the plugin.
     */
    protected function wp_university_taxonomies()
    {
        // Define and configure taxonomies here, if applicable.
        //new Taxonomy();
    }

      /**
     * Define options for the plugin.
     */
    protected function wp_university_options()
    {
        // Define and configure options here, if applicable.
        //new Option();
    }


   /**
     * Define metadata for the plugin.
     */
    protected function wp_university_metadata()
    {
        // Define and configure metadata here, if applicable.
        //new Metadatum();
    }
    /**
     * Define widgets for the plugin.
     */
    protected function wp_university_widgets()
    {
        // Define and configure widgets here, if applicable.
       //new Widget();
    }

    /**
     * Define view extensions for the plugin.
     */
    protected function wp_university_view_extensions()
    {
       
        // Define and configure view extensions here, if applicable.
        new Extension();
    }


    /**
     * Define assets for the plugin.
     */
    protected function wp_university_assets()
    {
       
        // Define and configure assets here, if applicable.
        new Asset();
    }

       /**
     * Define assets for the plugin.
     */
    protected function wp_university_features()
    {
       
        // Define and configure assets here, if applicable.
        new Feature;
    }


    /**
     * Define assets for the plugin.
     */
    protected function wp_university_queries()
    {
       
        // Define and configure assets here, if applicable.
        new Query();
    }

    /**
     * Define assets for the plugin.
     */
    protected function wp_university_apis()
    {
       
        // Define and configure apis here, if applicable.
        new Api();
    }


    /**
     * Define assets for the plugin.
     */
    protected function wp_university_routes()
    {
       
        // Define and configure apis here, if applicable.
        //new Api();

       // new Route();
    }

    /**
     * Initialize the plugin by calling various initialization methods.
     */
    protected function wp_university_initialize()
    {
        $this->wp_university_hooks();
        $this->wp_university_auth();
        $this->wp_university_menus();
        $this->wp_university_settings();
        $this->wp_university_custom_post_types();
        $this->wp_university_taxonomies();
        $this->wp_university_options();
        $this->wp_university_metadata();
        $this->wp_university_widgets();
        $this->wp_university_view_extensions();
        $this->wp_university_assets();
        $this->wp_university_apis();
        $this->wp_university_routes();
        $this->wp_university_features();
        $this->wp_university_queries();
    }

    /**
     * Activation hook callback when the plugin is activated.
     */
    protected function wp_university_activate()
    {
        // Code to execute when the plugin is activated.
    }

    /**
     * Deactivation hook callback when the plugin is deactivated.
     */
    protected function wp_university_deactivate()
    {
        // Code to execute when the plugin is deactivated.
    }

    /**
     * Uninstall hook callback when the plugin is uninstalled.
     */
    protected function wp_university_uninstall()
    {
        // Code to execute when the plugin is uninstalled.
    }
}
