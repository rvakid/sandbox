<?php 
/**
* Instead of dumping all our theme configuration into one long file, 
* we use this file to load our configurations from the config directory.
*/ 

// set some constants
define("THEME_DIR", __DIR__);
define("THEME_URL", get_template_directory_uri());

// require some base library files
require_once("lib/CPT.php");  // custom post type class
require_once("lib/BootstrapNavWalker.php");  // wordpress nav walker for bootstrap navbar menus

// prevent the front end from loading all that annoying script that supports
// embedding emojis in comments and post.
require_once("config/remove-emoji.php");

// theme support
require_once("config/theme-support.php");

// register menus
require_once("config/menus.php");

// register sidebars
require_once("config/sidebars.php");

// enqueue scripts and styles
require_once("config/enqueue-scripts.php");

// register custom post types
require_once("config/custom-post-types.php");

