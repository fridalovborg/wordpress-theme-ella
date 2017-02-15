<?php
// functions.php

include "metabox-tfn.php";

// STYLE I EDITORN
add_action("after_setup_theme", "add_editor_styles");
function add_editor_styles() {
	add_editor_style('editor-style.css');
}

add_filter('mce_buttons_2', 'wp_mce_buttons_2');
function wp_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}

add_filter('tiny_mce_before_init', 'extra_formats');
function extra_formats($init_array) {
	$style_formats = array(
		array(
			'title' => 'Gult block',
			'block' => 'div',
			'classes' => 'yellow-block button',
			'wrapper' => false,
			'styles' => array(
				'color' => 'black',
				'font-family' => 'Impact',
				'background-color' => 'yellow'
				)
			)
		);
	$init_array['style_formats'] = json_encode($style_formats);
	return $init_array;
}

add_action( 'wp_dashboard_setup', 'fed16_remove_dashboard_boxes' );

function fed16_remove_dashboard_boxes() {

	global $wp_meta_boxes;

	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );

	wp_add_dashboard_widget( 'fed16_dashboard', 'Support', 'fed16_dashwidget' );

	function fed16_dashwidget() {
	?>
	Har du ett problem?<br>Ring 070-693 02 24

	<p><a href="http://localhost/wordpress/wp-admin/post-new.php?post_type=fed16_cpt_portfolio">Publicera ett nytt case</a></p>
	<?php
	}
}

// hooks 

// JENNI`S Övningsuppgift 1: 
// function ovningsuppgift1_scripts() {
// 	wp_enqueue_style( 'ovningsuppgift1', get_template_directory_uri() . '/css/ovningsuppgift1.css' );
// }

// add_action( 'wp_enqueue_scripts', 'ovningsuppgift1_scripts' ); 

// add_theme_support( 'post-thumbnails', array( 'post', 'post' ) );
// 

// tar bort emoji koden om en ej vill använda detta
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'feed_links', 2 );

// WIDGET - foodlist
//require "widget-foodlist.php";

require "theme_settings.php";

add_action( 'after_setup_theme', 'fed16_blog_setup' );

function fed16_blog_setup() {

	register_nav_menu( 'mainmenu', 'Website main navigation' );

	add_theme_support( 'post-thumbnails', array( 'post', 'fed16_cpt_portfolio' ) );

	add_image_size( 'blooper', 500, 500, array( 'left', 'top' ) );
	//the_post_thumbnail( 'blooper' );

	// Custom logo
	add_theme_support('custom-logo', array(  
			'width'			=> 600,
			'height'		=> 85,
			'flex-width'	=> true,
			'flex-height'	=> true
		));

	register_sidebar( array(
			'name' 			=> __( 'Footer', 'fed16' ),
			'id'			=> 'footer1',
			'description'	=> __( 'Kolumn 1 i footer.', 'fed16' ),
			'before_widget' => '<div class="footer footer-col-1">',
			'after_widget'	=> '</div>'
		));
}

add_action('wp_enqueue_scripts', 'add_fed16_scripts');

function add_fed16_scripts() {

    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', null, '1.0', 'all' );

    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' ); 
    
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );

    wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Overpass+Mono' );

    wp_enqueue_style( 'Nunito', '//fonts.googleapis.com/css?family=Nunito' );

    wp_enqueue_style( 'Playfair', '//fonts.googleapis.com/css?family=Playfair+Display' );

    wp_enqueue_style( 'Worksans', '//fonts.googleapis.com/css?family=Work+Sans' );

    wp_enqueue_style( 'Alegreya', '//fonts.googleapis.com/css?family=Alegreya+Sans+SC:100' );

	//wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Arsenal|Fira+Sans+Condensed' );
}

?>