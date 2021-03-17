<?php
/**
 * Add your own custom functions here
 * For example, your shortcodes...
 *
 */

// Page d'options
if(function_exists('acf_add_options_page') ) {
   // acf_add_options_page();
remove_action('acf/init', 'my_acf_op_init');
add_action('acf/init', 'whs_acf_op_init');
function whs_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_sub_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('WHS Settings'),
            'menu_title'  => __('WHS Settings'),
            'redirect'    => false,
            'position'     => 2,
        ));

        // Add sub page.
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Tarification Settings'),
            'menu_title'  => __('Tarification'),
            'parent_slug' => $parent['menu_slug'],
        ));
        // Add sub page.
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Coordonées Settings'),
            'menu_title'  => __('Coordonées'),
            'parent_slug' => $parent['menu_slug'],
        ));
        // Add sub page.
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Footer Settings'),
            'menu_title'  => __('Footer'),
            'parent_slug' => $parent['menu_slug'],
        ));
        // Add sub page.
        $child = acf_add_options_sub_page(array(
            'page_title'  => __('Support'),
            'menu_title'  => __('Support'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}
}


