<?php

function theme_enqueue(){

	wp_enqueue_style('main-style',get_stylesheet_uri());
	// wp_enqueue_style('blue-style',get_template_directory_uri().'');
	// wp_enqueue_script('blue-script',get_template_directory_uri().'',array(),'1.1',ture);
}
add_action("wp_enqueue_scripts","theme_enqueue");


?>