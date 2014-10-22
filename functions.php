<?php
/* functions file for garfunkel child theme*/

function mychildtheme_setup() {

    register_sidebar(array(
	  'name' => __( 'Front A', 'garfunkel' ),
	  'id' => 'front-a',
	  'description' => __( 'Widgets in this area will be shown in the left column in the footer of front page.', 'garfunkel' ),
	  'before_title' => '<h3 class="widget-title">',
	  'after_title' => '</h3>',
	  'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
	  'after_widget' => '</div><div class="clear"></div></div>'
	));	
	register_sidebar(array(
	  'name' => __( 'Front B', 'garfunkel' ),
	  'id' => 'front-b',
	  'description' => __( 'Widgets in this area will be shown in the middle column in the footer  of front page.', 'garfunkel' ),
	  'before_title' => '<h3 class="widget-title">',
	  'after_title' => '</h3>',
	  'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
	  'after_widget' => '</div><div class="clear"></div></div>'
	));
	register_sidebar(array(
	  'name' => __( 'Front C', 'garfunkel' ),
	  'id' => 'front-c',
	  'description' => __( 'Widgets in this area will be shown in the right column in the footer of front page.', 'garfunkel' ),
	  'before_title' => '<h3 class="widget-title">',
	  'after_title' => '</h3>',
	  'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
	  'after_widget' => '</div><div class="clear"></div></div>'
	));

}

add_action( 'widgets_init', 'mychildtheme_setup' );


function garfunkel_child_fonts() {

    wp_enqueue_style( 'Open Sans' , 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400' );

}

add_action( 'wp_enqueue_scripts', 'garfunkel_child_fonts');


?>