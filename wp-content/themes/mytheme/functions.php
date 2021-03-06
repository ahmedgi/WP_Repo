<?php

function learningWordPress_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));
//get top ancestor

function get_top_ancestor_id(){
	global $post;
	if($post->post_parent){
		return array_reverse(get_post_ancestors($post->ID))[0];
	}
	return $post->ID;
}