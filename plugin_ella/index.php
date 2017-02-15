<?php
/**
* Plugin Name: ELLA plugin
* Description: Custom Post Types-exampel för plugin ELLA
* Author: Frida Lövborg
* Author URI: http://www.lovborg.com
* Version: 1.0
* Plugin URI: http://www.fridalovborg.se
**/

// Säkerhetssak
defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); 

 
//require "namnet_pa_filen.php";
//i filen säger vi att det finns en funktion som heter init_cpt_portfolio();

/* När pluginet aktiveras så hookar man på denna funktion
som körs */ 

add_action( 'init', 'fed16_setup_plugin' );

function fed16_setup_plugin () {
	// Om koden ligger i en annan fil, anropa bara funktionen
	//init_cpt_portfolio(); 

	// Rubriker för knappar och menyer
	$lables = array (
		'name'					=> 'Portfolio', 
		'singular_name'	 		=> 'Portfolio Item',
		'add_new' 				=> 'Lägg till',
		'add_new_item'			=> 'Lägg till ny portfoliogrej',
		'edit_item'				=> 'Rediger',
		'new_item'				=> 'Lägg till nytt',
		'all_items' 			=> 'Alla portfoliogrejer',
		'view_items' 			=> 'Visa portfoliogrejer',
		'search_items' 			=> 'Sök portfoliogrej',
		'not_found'				=> 'Hittade inga portfoliogrejer',
		'not_found_in_trash'	=> 'Hittade inget i papperskorgen',
		'menu_name'				=> 'Portfolio'
		);


	// Andra inställningar för cpt:n
	$args = array (
		'labels'				=> $lables,
		'description'			=> 'Portfolio',
		'public'				=> true,
		'menu_position'			=> 5,
		'menu_icon'				=> 'dashicons-palmtree',
		'supports'				=> array(
									'title',
									'editor',
									'thumbnail',
									'author',
									'excerpt',
									'page-attributes'
								),
		'has_archive'			=> true,
		'rewrite' 				=> array (
									'slug' 			=> 'items',
									'with_front' 	=> true
								)
		);

	// Få CPT:n att synas i menyn (samt registrera den)
	// OBS skriv ej för långt namn, då funkar det ej! 
	register_post_type( 'fed16_cpt_portfolio', $args );

	// Förfarande: 1. Lables 2. Inställningar 3. Registrera taxonomin

	$lables = array (

			'name'				=> 'Projekttyp',
			'singular_name'		=> 'Projekttyp',
			'search_items'		=> 'Sök projekttyp',
			'all_items'			=> 'Alla projekttyper', 
			'parent_item'		=> 'Huvudtyp',
			'parent_item_colon'	=> 'Huvudtyp:',
			'edit_item'			=> 'Redigera projekttyp',
			'update_item'		=> 'Uppdatera projekttyp',
			'add_new_item'		=> 'Lägg till projekttyp',
			'new_item_name'		=> 'Ny projekttyp',
			'menu_name'			=> 'Projekttyper'
		);

	$args = array (

			'labels'			=> $lables,
			'hierarchical'		=> true
		);

	// Aktivera taxonomin
	register_taxonomy( 'fed16_projekttyp', 'fed16_cpt_portfolio', $args );

}