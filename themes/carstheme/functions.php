<?php
function add_jquery() {
       wp_enqueue_script( 'jquery' );
    }

add_action('init', 'add_jquery');
function oc_enqu(){
	wp_enqueue_style( 'bootstrap_css',
  					get_template_directory_uri() . '/assets/css/bootstrap.min.css',
  					array(),
  					'4.4.1'
  );
	wp_enqueue_script( 'bootstrap_js',
  					get_template_directory_uri() . '/assets/javascript/bootstrap.min.js',
  					array('jquery'),
  					'4.4.1',
  					true);
  wp_enqueue_style( 'splide_css',
            get_template_directory_uri() . '/assets/css/splide.min.css',
            array(),
            true
);

	wp_enqueue_style('font_a',
						'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
						array(),
						'all'
	);
	wp_enqueue_style('oc_style',
		get_template_directory_uri() . '/style.css',
		array('bootstrap_css'),
		'1.0',
		'all'
	);
  wp_enqueue_script( 'splide',
  					get_template_directory_uri() . '/assets/javascript/splide.min.js',
  					array(),
  					true);

}
add_action('wp_enqueue_scripts', 'oc_enqu');

function footerscr(){
  wp_enqueue_script( 'myscript_js',
  					get_template_directory_uri() . '/assets/javascript/scripts.js',
  					array(),
  					true);
}

add_action('wp_enqueue_scripts', 'footerscr');

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

if ( ! function_exists('post_cars') ) {

function post_cars() {

	$labels = array(
		'name'                  => _x( 'Cars', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Car', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Cars', 'text_domain' ),
		'name_admin_bar'        => __( 'Cars', 'text_domain' ),
		'archives'              => __( 'Car Archives', 'text_domain' ),
		'attributes'            => __( 'Car Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Car', 'text_domain' ),
		'all_items'             => __( 'All Cars', 'text_domain' ),
		'add_new_item'          => __( 'Add New Car', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Car', 'text_domain' ),
		'edit_item'             => __( 'Edit Car', 'text_domain' ),
		'update_item'           => __( 'Update Car', 'text_domain' ),
		'view_item'             => __( 'View Car', 'text_domain' ),
		'view_items'            => __( 'View Car', 'text_domain' ),
		'search_items'          => __( 'Search Car', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into car', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this car', 'text_domain' ),
		'items_list'            => __( 'Car list', 'text_domain' ),
		'items_list_navigation' => __( 'Items car navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter car list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Car', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-car',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'cars', $args );
}
add_action( 'init', 'post_cars', 0 );

}

// Register Taxonomy Brand
function create_brand_tax() {

	$labels = array(
		'name'              => _x( 'Brands', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Brand', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Brands', 'textdomain' ),
		'all_items'         => __( 'All Brands', 'textdomain' ),
		'parent_item'       => __( 'Parent Brand', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Brand:', 'textdomain' ),
		'edit_item'         => __( 'Edit Brand', 'textdomain' ),
		'update_item'       => __( 'Update Brand', 'textdomain' ),
		'add_new_item'      => __( 'Add New Brand', 'textdomain' ),
		'new_item_name'     => __( 'New Brand Name', 'textdomain' ),
		'menu_name'         => __( 'Brand', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'textdomain' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	);
	register_taxonomy( 'brand', array('cars'), $args );

}
add_action( 'init', 'create_brand_tax' );

?>
