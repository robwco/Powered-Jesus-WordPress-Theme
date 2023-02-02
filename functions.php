<?php
/************************* 
Register Sermon Post Type
*************************/
register_post_type(
    'sermon',
    array(
        'public' => true,
        'labels' => array(
			'name'                => __( 'Sermons'),
	        'singular_name'       => __( 'Sermon'),
	        'menu_name'           => __( 'Sermons'),
	        'parent_item_colon'   => __( 'Parent Sermon'),
	        'all_items'           => __( 'All Sermons'),
	        'view_item'           => __( 'View Sermon'),
	        'add_new_item'        => __( 'Add New Sermon'),
	        'add_new'             => __( 'Add New'),
	        'edit_item'           => __( 'Edit Sermon'),
	        'update_item'         => __( 'Update Sermon'),
	        'search_items'        => __( 'Search Sermon'),
            ),
        'rewrite' => array( 'slug' => 'sermons', 'with_front' => false ),
        'has_archive' => 'sermons',
        'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 30 30"><path fill="currentColor" d="M 22 2 A 2 2 0 0 0 20 4 A 2 2 0 0 0 22 6 A 2 2 0 0 0 22.517578 5.9316406 L 24 7.4140625 L 24 9 L 26 9 L 26 7 A 1.0001 1.0001 0 0 0 25.707031 6.2929688 L 23.929688 4.515625 A 2 2 0 0 0 24 4 A 2 2 0 0 0 22 2 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 27 13 A 1.0001 1.0001 0 1 0 27 11 L 3 11 z M 4 15 L 5.6796875 23.392578 C 5.8666875 24.327578 6.687625 25 7.640625 25 L 11 25 L 11 28 L 19 28 L 19 25 L 22.359375 25 C 23.313375 25 24.135266 24.327578 24.322266 23.392578 L 26 15 L 4 15 z"></path></svg>'),
        'supports'  => array( 'title', 'editor', 'revisions', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats' ),
    )
);
/************************* 
Require and Install ACF Plugin
*************************/
// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/includes/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );
// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );
// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}
// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', '__return_false');
/************************* 
Create Sermon Custom Fields
*************************/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
    'key' => 'sermon_group',
    'title' => 'Sermon Fields',
    'fields' => array (
        array (
            'key' => 'field_sermons_1',
            'label' => 'Sermon Video',
            'name' => 'sermon_video',
            'type' => 'text',
            'prefix' => '',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '30%',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
        )
    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'sermon',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
));

endif;