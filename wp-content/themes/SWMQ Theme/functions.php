<?php
 
	 // Add Woocommerce theme support
	function customtheme_add_woocommerce_support()	{
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );


	// Register Nav Bar Menu
	register_nav_menus( [
		'main-menu' => esc_html__( 'Main Menu', 'SWMQ Theme' ),
	]);

		
	// Add JQuery
	function theme_scripts() { 
		wp_enqueue_script('jquery'); 
	}
	add_action('wp_enqueue_scripts', 'theme_scripts');

	
	add_filter( 'woocommerce_defer_transactional_emails', '__return_false' );
	
	
?>