<?php
/**
* Register custom post types here.
* For more info see: https://github.com/jjgrainger/wp-custom-post-type-class 
*/

// example post type
$books = new CPT('book', array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments')
));

// example custom taxonomy for books
$books->register_taxonomy('genres');

