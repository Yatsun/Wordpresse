<?php
/*
Plugin Name:JVlight
Description:Light box pour image 
Version:0.1
*/

// Security check => if no on WP --> block
// ~~~~~~~~~~~~~~

include_once("fonction/wp-config.php");
include_once("fonction/ini_script.php");

add_action( 'ini', 'custom_post_type' );
add_action( 'wp_enqueue_scripts', 'init_script' );
add_action( ' malightbox', '')

