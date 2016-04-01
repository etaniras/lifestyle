<?php

/*------------------------Enable Widgets-------------------------*/

function blank_widgets_init() {
	register_sidebar( array(
		'name' => ('First Widget'),
		'id' => 'first-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar widget-footer catborder">',
		'after_widget' => '</div>',
		'before_title' => '<div class="row grey"> <p class="cattitle">',
		'after_title' => '</p></div>'
	));
	
	register_sidebar( array(
		'name' => ('Second Widget'),
		'id' => 'second-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar widget-footer catborder marginsidebar">',
		'after_widget' => '</div>',
		'before_title' => '<div class="row grey"> <p class="cattitle">',
		'after_title' => '</p></div>'
	));
	
	register_sidebar( array(
		'name' => ('Third Widget'),
		'id' => 'third-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar widget-footer catborder">',
		'after_widget' => '</div>',
		'before_title' => '<div class="row grey"> <p class="cattitle">',
		'after_title' => '</p></div>'
	));
	
	register_sidebar( array(
		'name' => ('Fourth Widget'),
		'id' => 'fourth-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar widget-footer catborder">',
		'after_widget' => '</div>',
		'before_title' => '<div class="row grey"> <p class="cattitle">',
		'after_title' => '</p></div>'
	));
	
	register_sidebar( array(
		'name' => ('Fifth Widget'),
		'id' => 'fifth-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar widget-footer catborder">',
		'after_widget' => '</div>',
		'before_title' => '<div class="row grey"> <p class="cattitle">',
		'after_title' => '</p></div>'
	));
	
		register_sidebar( array(
		'name' => ('Footer left'),
		'id' => 'footer-left',
		'description' => 'Widget for the left side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
	register_sidebar( array(
		'name' => ('Footer Middle'),
		'id' => 'footer-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
		register_sidebar( array(
		'name' => ('Footer right'),
		'id' => 'footer-right',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
	register_sidebar( array(
		'name' => ('Content Left'),
		'id' => 'content-left',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
		register_sidebar( array(
		'name' => ('Author one'),
		'id' => 'author-one',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
		register_sidebar( array(
		'name' => ('Author two'),
		'id' => 'author-two',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
		register_sidebar( array(
		'name' => ('Author three'),
		'id' => 'author-three',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
		register_sidebar( array(
		'name' => ('Author four'),
		'id' => 'author-four',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
		register_sidebar( array(
		'name' => ('Author five'),
		'id' => 'author-five',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
		register_sidebar( array(
		'name' => ('Author six'),
		'id' => 'author-six',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
		register_sidebar( array(
		'name' => ('Author seven'),
		'id' => 'author-seven',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
		register_sidebar( array(
		'name' => ('Author eight'),
		'id' => 'author-eight',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
			register_sidebar( array(
		'name' => ('Page one'),
		'id' => 'page-one',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer catborder">',
		'after_widget' => '</div>',
		'before_title' => '<div class="row grey"> <p class="cattitle">',
		'after_title' => '</p></div>'
	));
	
	
	
		register_sidebar( array(
		'name' => ('Author eight'),
		'id' => 'page-two',
		'description' => 'Widget for the right side of our footer',
		'before_widget' => '<div class="widget-sidebar widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
	
}
add_action('widgets_init', 'blank_widgets_init'); /* add_action('widgets_init', 'blank_widgets_init'); */


add_theme_support( 'post-thumbnails' );  set_post_thumbnail_size( 250, 250, true );

update_option( 'thumbnail_size_w', 250 );
update_option( 'thumbnail_size_h', 250 );


/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

add_filter( 'widget_text', 'do_shortcode' );


/*------------------------Enable Menu-------------------------*/

add_theme_support('menus');


?>