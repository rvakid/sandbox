<?php

add_action("wp_print_scripts", function() {
	if ( ! is_admin() ) {
		// enqueue front-end scripts and styles here
		wp_enqueue_style("main", THEME_URL . "/assets/css/main.css");
		wp_enqueue_script("main", THEME_URL . "/assets/js/dist/main.min.js", array("jquery"), "1.0.0", true);

	} else {
		// enqueue backend scripts and styles here

	}
});