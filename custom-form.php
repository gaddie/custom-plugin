<?php
/**
 * @package customFormPlugin
 */
/*
Plugin Name: custom form plugin
Description: this is a custom plugin of a form
Version: 1.0.0
Plugin URI: https://example.com
Author: gadson
License: GPLv2 or Later
*/


if ( ! defined('ABSPATH') ) {
    die;
}

class CustomFormPlugin {

    function __construct() {
        add_action( 'init', array($this, 'custom_post_type'));
    }   

    function custom_post_type() {
        register_post_type( 'book', ['public' => true, 'label' => 'Books']);
    }
}

// check if the class exists then we initialise the class
if ( class_exists( 'CustomFormPlugin' )) {
    $customFormPlugin = new CustomFormPlugin();
}

// activation
require_once plugin_dir_path(__FILE__) . '/include/form-activate';
register_activation_hook(__FILE__, array( 'CustomFormPluginActivate', 'activate'));

// deactivate
require_once plugin_dir_path(__FILE__) . '/include/form-deactivate';
register_deactivation_hook(__FILE__, array( 'CustomFormPluginActivate', 'deactivate'));


