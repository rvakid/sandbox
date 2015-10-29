<?php
	
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( array(
		'name'          => 'Main Sidebar',
		'id'            => 'main-sidebar',
		'before_widget' => '<div class="side-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title cap"><strong>',
		'after_title'   => '</strong></p>'
	) );
}