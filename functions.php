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