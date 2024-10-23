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

//Define
define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
include( MY_PLUGIN_PATH . 'includes/enqueue_scripts/enque_files.php');


//
if ( ! function_exists( 'conditional_logic_form' ) ){
    function clf_enqueue_scripts() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('clf-conditional-logic', plugins_url('/js/conditional-logic.js', __FILE__), array('jquery'), null, true);
    }
}