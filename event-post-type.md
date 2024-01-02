/**
 * Registers a custom post type 'my_post_type'.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wp_university_post_types(){
	$labels = [
		'name' => _x( 'Events', 'Post Type General Name', 'wpuniversity' ),
		'singular_name' => _x( 'Event', 'Post Type Singular Name', 'wpuniversity' ),
		'menu_name' => __( 'Events', 'wpuniversity' ),
		'name_admin_bar' => __( 'Events', 'wpuniversity' ),
		'archives' => __( 'Events Archives', 'wpuniversity' ),
		'attributes' => __( 'Events Attributes', 'wpuniversity' ),
		'parent_item_colon' => __( 'Parent Event:', 'wpuniversity' ),
		'all_items' => __( 'All Events', 'wpuniversity' ),
		'add_new_item' => __( 'Add New Event', 'wpuniversity' ),
		'add_new' => __( 'Add New', 'wpuniversity' ),
		'new_item' => __( 'New Event', 'wpuniversity' ),
		'edit_item' => __( 'Edit Event', 'wpuniversity' ),
		'update_item' => __( 'Update Event', 'wpuniversity' ),
		'view_item' => __( 'View Event', 'wpuniversity' ),
		'view_items' => __( 'View Events', 'wpuniversity' ),
		'search_items' => __( 'Search Events', 'wpuniversity' ),
		'not_found' => __( 'Event Not Found', 'wpuniversity' ),
		'not_found_in_trash' => __( 'Event Not Found in Trash', 'wpuniversity' ),
		'featured_image' => __( 'Featured Image', 'wpuniversity' ),
		'set_featured_image' => __( 'Set Featured Image', 'wpuniversity' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'wpuniversity' ),
		'use_featured_image' => __( 'Use as Featured Image', 'wpuniversity' ),
		'insert_into_item' => __( 'Insert into Event', 'wpuniversity' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Event', 'wpuniversity' ),
		'items_list' => __( 'Events List', 'wpuniversity' ),
		'items_list_navigation' => __( 'Events List Navigation', 'wpuniversity' ),
		'filter_items_list' => __( 'Filter Events List', 'wpuniversity' ),
	];
	$labels = apply_filters( 'my_post_type-labels', $labels );

	$args = [
		'label' => __( 'Event', 'wpuniversity' ),
		'description' => __( 'Event Description', 'wpuniversity' ),
		'labels' => $labels,
		'supports' => [
			'title',
			'editor',
		],
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-post',
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'can_export' => false,
		'capability_type' => 'page',
		'show_in_rest' => true,
	];
	$args = apply_filters( 'my_post_type-args', $args );

	register_post_type( 'my_post_type', $args );
}

Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks.