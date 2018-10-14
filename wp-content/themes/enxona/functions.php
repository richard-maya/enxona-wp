<?php 
    if(!isset($content_width)){
		$content_width = 660;
    }
    
    function enxonawp_setup(){
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'THEMENAME' ),
		) );
    }

    add_action('after_setup_theme', 'enxonawp_setup');

    function xona_scripts(){
		wp_enqueue_style('xona-stylesheet', get_template_directory_uri() . '/style.css');
		wp_enqueue_script('xona-scripts', get_template_directory_uri() . '/assets/js/enxona.js');
	}

	add_action('wp_enqueue_scripts', 'xona_scripts');
?>