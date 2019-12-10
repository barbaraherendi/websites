<?php
/**
 * Felicity functions and definitions
 *
 * @package Felicity
*/

// Use a child theme instead of placing custom functions here
// http://codex.wordpress.org/Child_Themes
/* ------------------------------------------------------------------------- *
 *  Load theme files
/* ------------------------------------------------------------------------- */	
require_once ('functions/felicity-functions.php'); 			// Theme Custom Functions
require_once ('functions/felicity-image-sliders.php'); 		// Theme Custom Functions
require_once ('functions/felicity-metaboxes.php');			// Theme Custom Metaboxes
require_once ('functions/felicity-woocommerce.php');		// WooCommerce Support
require_once ('functions/felicity-shortcodes.php');			// Shortcodes
require_once ('functions/felicity-post-types.php');			// Custom Post Types
require_once ('admin/options-framework.php');				// Loads the Options Panel

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Page Sidebar',
		'id'   => 'page_sidebar',
		'description'   => 'This is a widgetized area.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
  register_sidebar(array(		
		'name' => 'Main 1',		
		'id'   => 'main_1',
		'description'   => 'This is a widgetized area.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Main 2',
		'id'   => 'main_2',
		'description'   => 'This is a widgetized area.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Lang Selector',
		'id'   => 'langsel',
		'description'   => 'This is a widgetized area.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}
