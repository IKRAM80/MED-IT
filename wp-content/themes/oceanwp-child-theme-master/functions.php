<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );

}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );
/**  
* Mettre le script personnalisé en file d'attente
*/ 
function oceanwp_child_enqueue_scripts() { 
	 wp_enqueue_script( 'oceanwp-child-custom-script', get_stylesheet_directory_uri() . '/scripts/script.js', array( 'jquery' ), '1.0', true );
	 //Le script dépend de jQuery dans sa version 1.0 et le script sera chargé dans le pied de page
	 } 
	 add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_scripts' );

//Mise en place du bouton Nous contacter: généré dynamiquement et centré comme les autres éléments du menu

function contact_btn( $items, $args ) {
	$contact_url = home_url( '/contact/' );
	$items .= '<li class="menu-item"><a href="' . esc_url( $contact_url ) . '" class=" contact-btn menu-item ">Nous contacter</a></li>';
	return $items;
}
	add_filter( 'wp_nav_menu_items', 'contact_btn', 10, 2 );
	


