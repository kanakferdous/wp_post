<?php

function demo1_bootstrapping(){
    load_theme_textdomain("Demo1");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    register_nav_menu( "topmenu",__("Top Menu"));
}
add_action("after_setup_theme","demo1_bootstrapping");

function scripts_stylefiles(){
    wp_enqueue_style( "bootstrap", get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( "stylemaincss", get_template_directory_uri() . '/css/business-casual.min.css');
    wp_enqueue_style("Raleway","//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");
    wp_enqueue_style("Lora","//fonts.googleapis.com/css?family=Lora:400,400i,700,700i");
    wp_enqueue_style("maincss",get_stylesheet_uri());

    wp_enqueue_script( 'bootstrap_bundle_min', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery') );
    wp_enqueue_script( 'jquery_easing_min', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array('jquery') );
}
add_action("wp_enqueue_scripts","scripts_stylefiles");

//custom


add_action( 'init', 'codex_book_init' );

function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'book', $args );
}

add_action( 'init', 'codex_book2_init' );

function codex_book2_init() {
	$labels = array(
		'name'               => _x( 'Books2', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Book2', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Books2', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Book2', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'book2', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Book2', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Book2', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Book2', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Book2', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Books2', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Books2', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Books2:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book2' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'book2', $args );
}