<?php


if ( ! function_exists( 'conditional_logic_form' ) ){
    function conditional_logic_form() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('conditional-logic', plugins_url('../../public/js/conditional-logic.js', __FILE__), array('jquery'), null, true);
        wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
        wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    }
}
add_action('wp_enqueue_scripts', 'conditional_logic_form');

