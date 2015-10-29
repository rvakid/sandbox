<?php 

add_action('init', function() {
	// register menus 
	register_nav_menus( array(
			'primary' 	  => __( 'Primary Navigation' ),
			'footer-menu' => __( 'Footer Menu' )
		)
	);
});