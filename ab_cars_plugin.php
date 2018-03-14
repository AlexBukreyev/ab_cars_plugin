<?php
/*
Plugin Name: ab_cars_plugin
Description: Plugin maked vidget cars
Author: Alex Boo
*/


function ab_scripts_with_the_lot()
{
    // Register the script like this for a plugin:
    wp_register_script( 'script', plugins_url( '/script.js', __FILE__ ), array( 'jquery', 'jquery-ui-core' ), '20120208', true );
    // or
    // Register the script like this for a theme:
    wp_register_script( 'script', get_template_directory_uri() . '/script.js', array( 'jquery', 'jquery-ui-core' ), '20120208', true );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'script' );
}
add_action( 'wp_enqueue_scripts', 'ab_scripts_with_the_lot' );

require_once 'AB_cars.php';
require_once 'functions.php';
