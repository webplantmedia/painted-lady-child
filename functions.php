<?php
function crimson_rose_child_theme_child_enqueue_parent_theme_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'crimson_rose_child_theme_child_enqueue_parent_theme_style' );
