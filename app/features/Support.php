<?php namespace Wp\Wpuniversity\Features;

class Support
{
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        add_action('after_setup_theme', [$this, 'wp_university_add_supports']);
    }

    public function features()
    {
        return [
            'admin-bar',
            'align-wide',
            'automatic-feed-links',
            'core-block-patterns',
            'custom-background',
            'custom-header',
            'custom-line-height',
            'custom-logo',
            'customize-selective-refresh-widgets',
            'custom-spacing',
            'custom-units',
            'dark-editor-style',
            'disable-custom-colors',
            'disable-custom-font-sizes',
            'editor-color-palette',
            'editor-gradient-presets',
            'editor-font-sizes',
            'editor-styles',
            'featured-content',
            'html5',
            'menus',
            'post-formats',
            'post-thumbnails',
            'responsive-embeds',
            'starter-content',
            'title-tag',
            'wp-block-styles',
            'widgets',
            'widgets-block-editor',
        ];
    }

    public function addDefaultFeatures(){
        foreach($this->features() as $feature) add_theme_support($feature);
    }

    public function customHeaderDefaultArgs()
    {
        return [
            'default-image' => '',
            'random-default' => false,
            'width' => 0,
            'height' => 0,
            'flex-height' => false,
            'flex-width' => false,
            'default-text-color' => '',
            'header-text' => true,
            'uploads' => true,
            'wp-head-callback' => '',
            'admin-head-callback' => '',
            'admin-preview-callback' => '',
            'video' => false,
            'video-active-callback' => 'is_front_page',
        ];
    }
    public function customLogoDefaultArgs()
    {
        return [
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => ['site-title', 'site-description'],
            'unlink-homepage-logo' => true,
        ];
    }

    public function html5DefaultArgs()
    {
        return ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'];
    }
    public function postThumbnailDefaultArgs()
    {
        return ['post', 'event', 'program', 'professor', 'campus'];
    }

    public function customBackgroundDefaultArgsCallback()
    {
    }
    public function customBackgroundDefaultArgs()
    {
        return [
            'default-image' => '',
            'default-preset' => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
            'default-position-x' => 'left', // 'left', 'center', 'right'
            'default-position-y' => 'top', // 'top', 'center', 'bottom'
            'default-size' => 'auto', // 'auto', 'contain', 'cover'
            'default-repeat' => 'repeat', // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
            'default-attachment' => 'scroll', // 'scroll', 'fixed'
            'default-color' => '',
            'wp-head-callback' => [$this, 'customBackgroundDefaultArgsCallback'],
            'admin-head-callback' => '',
            'admin-preview-callback' => '',
        ];
    }
    public function wp_university_add_supports()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails', $this->postThumbnailDefaultArgs());
        add_theme_support('html5', $this->html5DefaultArgs());
        add_theme_support('automatic-feed-links');
        add_theme_support('custom-logo', $this->customLogoDefaultArgs());
    }
}
