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


            /**
             * Post Type: Podcasts.
             */

            $labels = [
                "name" => __( "Podcasts", "WHS" ),
                "singular_name" => __( "Podcast", "WHS" ),
            ];

            $args = [
                "label" => __( "Podcasts", "WHS" ),
                "labels" => $labels,
                "description" => "",
                "public" => true,
                "publicly_queryable" => true,
                "show_ui" => true,
                "show_in_rest" => true,
                "rest_base" => "",
                "rest_controller_class" => "WP_REST_Posts_Controller",
                "has_archive" => false,
                "show_in_menu" => true,
                "show_in_nav_menus" => true,
                "delete_with_user" => false,
                "exclude_from_search" => false,
                "capability_type" => "post",
                "map_meta_cap" => true,
                "hierarchical" => false,
                "menu_icon" => "dashicons-megaphone",
                "rewrite" => [ "slug" => "podcast-post", "with_front" => true ],
                "query_var" => true,
                "supports" => [ "title", "editor", "thumbnail" ],
            ];

            register_post_type( "podcast-post", $args );


    }
}
}

function cptui_register_my_cpts_events() {

	/**
	 * Post Type: Événements.
	 */

	$labels = [
		"name" => __( "Événements", "WHS" ),
		"singular_name" => __( "Événement", "WHS" ),
	];

	$args = [
		"label" => __( "Événements", "WHS" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "events", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-calendar",
		"supports" => [ "title" ],
		"taxonomies" => [ "events_categories" ],
	];

	register_post_type( "events", $args );
}

add_action( 'init', 'cptui_register_my_cpts_events' );

function cptui_register_my_cpts_faq() {

	/**
	 * Post Type: Événements.
	 */

	$labels = [
		"name" => __( "FAQS", "WHS" ),
		"singular_name" => __( "FAQ", "WHS" ),
	];

	$args = [
		"label" => __( "FAQS", "WHS" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "faqs", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-list-view",
		"supports" => [ "title", "editor" ],
		"taxonomies" => [ "faqs_categories" ],
	];

	register_post_type( "faqs", $args );
}

add_action( 'init', 'cptui_register_my_cpts_faq' );


function create_faqs_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categories' ),
    );

    register_taxonomy( 'faqs_categories', array( 'faqs' ), $args );
}
add_action( 'init', 'create_faqs_taxonomies', 0 );
function create_events_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categories' ),
    );

    register_taxonomy( 'events_categories', array( 'events' ), $args );
}
add_action( 'init', 'create_events_taxonomies', 0 );

/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');