<?php

//enqueue CSS file for front page
function lander_scripts(){
	if (is_front_page()){
		wp_enqueue_style('lander-style',get_stylesheet_directory_uri().'/lander-style.css');	
		wp_enqueue_script( 'lander-scripts', get_stylesheet_directory_uri() . '/js/jampalanscript.js', array('jquery'), '20150120');       
	}
	else {
		wp_enqueue_script( 'regular_scripts', get_stylesheet_directory_uri() . '/js/regularscript.js', array('jquery'), '20150120');  
	}
}

add_action('wp_enqueue_scripts','lander_scripts');

//image for the front page
add_image_size('front-mug',240,240,true);

?>