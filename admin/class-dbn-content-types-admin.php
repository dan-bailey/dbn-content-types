<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.danbailey.net
 * @since      1.0.0
 *
 * @package    Dbn_Content_Types
 * @subpackage Dbn_Content_Types/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dbn_Content_Types
 * @subpackage Dbn_Content_Types/admin
 * @author     Dan Bailey <dbailey@danbailey.net>
 */
class Dbn_Content_Types_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dbn_Content_Types_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dbn_Content_Types_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dbn-content-types-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dbn_Content_Types_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dbn_Content_Types_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dbn-content-types-admin.js', array( 'jquery' ), $this->version, false );

	}

}

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

// Register Custom Post Type
function bike_post_type() {

	$labels = array(
		'name'                  => _x( 'Bikes', 'Post Type General Name', 'DBN' ),
		'singular_name'         => _x( 'Bike', 'Post Type Singular Name', 'DBN' ),
		'menu_name'             => __( 'Bikes', 'DBN' ),
		'name_admin_bar'        => __( 'Bikes', 'DBN' ),
		'archives'              => __( 'Bike Archives', 'DBN' ),
		'attributes'            => __( 'Bike Attributes', 'DBN' ),
		'parent_item_colon'     => __( 'Parent Bike:', 'DBN' ),
		'all_items'             => __( 'All Bikes', 'DBN' ),
		'add_new_item'          => __( 'Add New Bike', 'DBN' ),
		'add_new'               => __( 'Add New', 'DBN' ),
		'new_item'              => __( 'New Bike', 'DBN' ),
		'edit_item'             => __( 'Edit Bike', 'DBN' ),
		'update_item'           => __( 'Update Bike', 'DBN' ),
		'view_item'             => __( 'View Bike', 'DBN' ),
		'view_items'            => __( 'View Bikes', 'DBN' ),
		'search_items'          => __( 'Search Bike', 'DBN' ),
		'not_found'             => __( 'Not found', 'DBN' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'DBN' ),
		'featured_image'        => __( 'Featured Image', 'DBN' ),
		'set_featured_image'    => __( 'Set featured image', 'DBN' ),
		'remove_featured_image' => __( 'Remove featured image', 'DBN' ),
		'use_featured_image'    => __( 'Use as featured image', 'DBN' ),
		'insert_into_item'      => __( 'Insert into bike', 'DBN' ),
		'uploaded_to_this_item' => __( 'Uploaded to this bike', 'DBN' ),
		'items_list'            => __( 'Bikes list', 'DBN' ),
		'items_list_navigation' => __( 'Bikes list navigation', 'DBN' ),
		'filter_items_list'     => __( 'Filter bikes list', 'DBN' ),
	);
	$args = array(
		'label'                 => __( 'Bike', 'DBN' ),
		'description'           => __( 'Bicycles in the Fleet', 'DBN' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'bike_category', 'bike_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-update',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rest_base'             => 'bike',
	);
	register_post_type( 'bike_post_type', $args );

}
add_action( 'init', 'bike_post_type', 0 );
