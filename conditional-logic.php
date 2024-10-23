<?php
/*
Plugin Name: Conditional Logic Fields
Description: Adds a form with conditional logic for country/city dropdowns and yes/no radio buttons.
Version: 1.0
Author: Shams Khan
*/


 // If this file is called directly, abort.
 if ( ! defined( 'WPINC' ) ) {
	die;
}

//plugin Versions
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

//Define path and Enqueues files-bootstrap-js
define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
include( MY_PLUGIN_PATH . 'includes/enqueue_scripts/enque_files.php');
include( MY_PLUGIN_PATH . 'includes/shortcodes/shortcode.php');
//
