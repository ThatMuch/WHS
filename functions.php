<?php
/*Ce fichier fait partie deWHS, mars child theme.

Toutes les fonctions de ce fichier seront chargées avant les fonctions de thème parent.
En savoir plus sur https://codex.wordpress.org/Child_Themes.

Remarque : cette fonction charge la feuille de style parent avant, puis la feuille de style du thème enfant
(laissez-le en place à moins que vous sachiez ce que vous faites.)
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.min.css', array( 'mars_/styles' ) );
    }
endif;

function my_scripts() {
            wp_enqueue_script( 'read-more', get_stylesheet_directory_uri().'/assets/scripts/readmore.js',true, array(), '', false );
             wp_enqueue_script('custom-script', get_stylesheet_directory_uri().'/assets/scripts/main.js', array('jquery'),'', false);

}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

/*Écrivez ici vos propres fonctions */
require('functions/functions-sections.php');
require('functions/functions-custom_whs.php');