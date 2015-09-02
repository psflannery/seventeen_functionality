<?php
/**
 * Creates the Custom Post Types used in the site.
 * 
 * @subpackage: seventeen
 */
 
/* Add the Artists Post Type */
add_action( 'init', 'register_cpt_artists' );
function register_cpt_artists() {
    $labels = array( 
        'name' => _x( 'Artists', 'artists' ),
        'singular_name' => _x( 'Artist', 'artists' ),
        'add_new' => _x( 'Add New', 'artists' ),
        'add_new_item' => _x( 'Add New Artist', 'artists' ),
        'edit_item' => _x( 'Edit Artist', 'artists' ),
        'new_item' => _x( 'New Artist', 'artists' ),
        'view_item' => _x( 'View Artist', 'artists' ),
        'search_items' => _x( 'Search Artists', 'artists' ),
        'not_found' => _x( 'No artists found', 'artists' ),
        'not_found_in_trash' => _x( 'No artists found in Trash', 'artists' ),
        'parent_item_colon' => _x( 'Parent Artist:', 'artists' ),
        'menu_name' => _x( 'Artists', 'artists' ),
    );
	$args = array( 
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'The artist post type - to host the artist home page',
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
		//'taxonomies' => array( 'category', 'post_tag' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-art',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'page'
	);
	register_post_type( 'artists', $args );
}

/* Add the Exhibitions Post Type */
add_action( 'init', 'register_cpt_exhibitions' );
function register_cpt_exhibitions() {
    $labels = array( 
        'name' => _x( 'Exhibitions', 'exhibitions' ),
        'singular_name' => _x( 'Exhibition', 'exhibitions' ),
        'add_new' => _x( 'Add New', 'exhibitions' ),
        'add_new_item' => _x( 'Add New Exhibition', 'exhibitions' ),
        'edit_item' => _x( 'Edit Exhibition', 'exhibitions' ),
        'new_item' => _x( 'New Exhibition', 'exhibitions' ),
        'view_item' => _x( 'View Exhibition', 'exhibitions' ),
        'search_items' => _x( 'Search Exhibitions', 'exhibitions' ),
        'not_found' => _x( 'No exhibitions found', 'exhibitions' ),
        'not_found_in_trash' => _x( 'No exhibitions found in Trash', 'exhibitions' ),
        'parent_item_colon' => _x( 'Parent Exhibition:', 'exhibitions' ),
        'menu_name' => _x( 'Exhibitions', 'exhibitions' ),
    );
	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,
		'description' => 'The exhibition post type - to host the exhibition home page',
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies' => array( 'category', 'post_tag' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-images-alt2',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'exhibitions', $args );
}

/* Add the Publications Post Type */
add_action( 'init', 'register_cpt_publications' );
function register_cpt_publications() {
    $labels = array( 
        'name' => _x( 'Publications', 'publications' ),
        'singular_name' => _x( 'Publication', 'publications' ),
        'add_new' => _x( 'Add New', 'publications' ),
        'add_new_item' => _x( 'Add New Publication', 'publications' ),
        'edit_item' => _x( 'Edit Publication', 'publications' ),
        'new_item' => _x( 'New Publication', 'publications' ),
        'view_item' => _x( 'View Publication', 'publications' ),
        'search_items' => _x( 'Search Publications', 'publications' ),
        'not_found' => _x( 'No publications found', 'publications' ),
        'not_found_in_trash' => _x( 'No publications found in Trash', 'publications' ),
        'parent_item_colon' => _x( 'Parent Publication:', 'publications' ),
        'menu_name' => _x( 'Publications', 'publications' ),
    );
	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,
		'description' => 'The publication post type - to host the publication home page',
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
		'taxonomies' => array( 'category', 'post_tag' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-book-alt',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'publications', $args );
}

/* Add the News Post Type */
add_action( 'init', 'register_cpt_news' );
function register_cpt_news() {
    $labels = array( 
        'name' => _x( 'News', 'news' ),
        'singular_name' => _x( 'News', 'news' ),
        'add_new' => _x( 'Add New', 'news' ),
        'add_new_item' => _x( 'Add New News Item', 'news' ),
        'edit_item' => _x( 'Edit News Item', 'news' ),
        'new_item' => _x( 'New News Item', 'news' ),
        'view_item' => _x( 'View News Item', 'news' ),
        'search_items' => _x( 'Search News Items', 'news' ),
        'not_found' => _x( 'No news items found', 'news' ),
        'not_found_in_trash' => _x( 'No news items found in Trash', 'news' ),
        'parent_item_colon' => _x( 'Parent News Item:', 'news' ),
        'menu_name' => _x( 'News Items', 'news' ),
    );
	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,
		'description' => 'The news post type - to host the news home page',
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
		'taxonomies' => array( 'category', 'post_tag' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-megaphone',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'news', $args );
}
