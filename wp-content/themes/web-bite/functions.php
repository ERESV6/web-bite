<?php
	function custom_styles() {
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');		
		wp_enqueue_style('simplebar', get_template_directory_uri() . '/assets/css/simplebar.css');		
		wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/main.css');				
	}	
	add_action( 'wp_enqueue_scripts', 'custom_styles');	

	function custom_scripts() {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js');
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js');
		wp_enqueue_script('simplebar', get_template_directory_uri() . '/assets/js/simplebar.min.js');
		wp_enqueue_script('functions', get_template_directory_uri() . '/assets/js/functions.js');
	}	
	add_action( 'wp_enqueue_scripts', 'custom_scripts');
 ?>