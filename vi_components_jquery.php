<?php
/*
Plugin Name: VI: Components jQuery 3
Plugin URI: http://neathawk.us
Description: Just include the jQuery Components, on the public facing side of the website, nothing more
Version: 9.2.200903
Author: Joseph Neathawk
Author URI: http://Neathawk.com
License: GNU General Public License v2 or later
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


/**
 * Add jQuery components
 * wp_enqueue_script( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
 *
 * @link https://developers.google.com/speed/libraries/#jquery
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @version 9.2.200903
 * @since 9.1.191212
 */
if ( ! function_exists( 'vi_load_jquery_components' ) ) :
function vi_load_jquery_components() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', false);
    //wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'vi_load_jquery_components' );
endif;