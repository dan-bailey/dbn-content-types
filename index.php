/* put header stuff in here */

/* EXPERIENCES CONTENT TYPE */

// Register Custom Post Type
function experience_post_type() {

	$labels = array(
		'name'                  => _x( 'Experiences', 'Post Type General Name', 'DBN' ),
		'singular_name'         => _x( 'Experience', 'Post Type Singular Name', 'DBN' ),
		'menu_name'             => __( 'Experiences', 'DBN' ),
		'name_admin_bar'        => __( 'Experiences', 'DBN' ),
		'archives'              => __( 'Experience Archives', 'DBN' ),
		'attributes'            => __( 'Experience Attributes', 'DBN' ),
		'parent_item_colon'     => __( 'Parent Experience:', 'DBN' ),
		'all_items'             => __( 'All Experiences', 'DBN' ),
		'add_new_item'          => __( 'Add New Experience', 'DBN' ),
		'add_new'               => __( 'Add New', 'DBN' ),
		'new_item'              => __( 'New Experience', 'DBN' ),
		'edit_item'             => __( 'Edit Experience', 'DBN' ),
		'update_item'           => __( 'Update Experience', 'DBN' ),
		'view_item'             => __( 'View Experience', 'DBN' ),
		'view_items'            => __( 'View Experience', 'DBN' ),
		'search_items'          => __( 'Search Experience', 'DBN' ),
		'not_found'             => __( 'Not found', 'DBN' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'DBN' ),
		'featured_image'        => __( 'Featured Image', 'DBN' ),
		'set_featured_image'    => __( 'Set featured image', 'DBN' ),
		'remove_featured_image' => __( 'Remove featured image', 'DBN' ),
		'use_featured_image'    => __( 'Use as featured image', 'DBN' ),
		'insert_into_item'      => __( 'Insert into experience', 'DBN' ),
		'uploaded_to_this_item' => __( 'Uploaded to this experience', 'DBN' ),
		'items_list'            => __( 'Experiences list', 'DBN' ),
		'items_list_navigation' => __( 'Experiences list navigation', 'DBN' ),
		'filter_items_list'     => __( 'Filter experiences list', 'DBN' ),
	);
	$args = array(
		'label'                 => __( 'Experience', 'DBN' ),
		'description'           => __( 'Educational experiences', 'DBN' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'experience', $args );

}
add_action( 'init', 'experience_post_type', 0 );

/* BIKE CONTENT TYPE */