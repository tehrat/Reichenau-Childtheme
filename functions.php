<?php
/**
 * vantage functions and definitions
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */

add_filter('upload_mimes', 'custom_upload_mimes');
 
function custom_upload_mimes ( $existing_mimes=array() ) {
 
    // add the file extension to the array
 
    $existing_mimes['svg'] = 'mime/type';
 
        // call the modified list of extensions
 
    return $existing_mimes;
 
}

function tooltipster_scripts_enqueue(){
        wp_enqueue_style('tooltipstercss',get_stylesheet_directory_uri().'/js/tooltipster/tooltipster.css');
        wp_enqueue_style('tooltipster-shadow',get_stylesheet_directory_uri().'/js/tooltipster/tooltipster-shadow.css');
        wp_enqueue_script('tooltipster',get_stylesheet_directory_uri().'/js/tooltipster/jquery.tooltipster.min.js',array('jquery'),'3.2.6');
wp_enqueue_script('tooltipster-scripts',get_stylesheet_directory_uri().'/js/tooltipster/tooltipster-scripts.js',array('jquery','tooltipster'),'1.0.1');
}
add_action('wp_enqueue_scripts','tooltipster_scripts_enqueue');