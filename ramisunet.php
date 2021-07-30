<?php

/**
 * Plugin Name: Ramisunet
 * Plugin URI: 
 * Description: Handle the basics with this plugin.
 * Version: 1.10.3
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: 
 * Author URI: 
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: ramisunet
 * 
 */


// Register Custom Post Type
function products_post_type()
{

    $labels = array(
        'name'                  => _x('Products', 'Post Type General Name', 'ramisunet'),
        'singular_name'         => _x('Product', 'Post Type Singular Name', 'ramisunet'),
        'menu_name'             => __('Products', 'ramisunet'),
        'name_admin_bar'        => __('Product', 'ramisunet'),
        'archives'              => __('Item Archives', 'ramisunet'),
        'attributes'            => __('Item Attributes', 'ramisunet'),
        'parent_item_colon'     => __('Parent Product:', 'ramisunet'),
        'all_items'             => __('All Products', 'ramisunet'),
        'add_new_item'          => __('Add New Product', 'ramisunet'),
        'add_new'               => __('New Product', 'ramisunet'),
        'new_item'              => __('New Item', 'ramisunet'),
        'edit_item'             => __('Edit Product', 'ramisunet'),
        'update_item'           => __('Update Product', 'ramisunet'),
        'view_item'             => __('View Product', 'ramisunet'),
        'view_items'            => __('View Items', 'ramisunet'),
        'search_items'          => __('Search products', 'ramisunet'),
        'not_found'             => __('No products found', 'ramisunet'),
        'not_found_in_trash'    => __('No products found in Trash', 'ramisunet'),
        'featured_image'        => __('Featured Image', 'ramisunet'),
        'set_featured_image'    => __('Set featured image', 'ramisunet'),
        'remove_featured_image' => __('Remove featured image', 'ramisunet'),
        'use_featured_image'    => __('Use as featured image', 'ramisunet'),
        'insert_into_item'      => __('Insert into item', 'ramisunet'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'ramisunet'),
        'items_list'            => __('Items list', 'ramisunet'),
        'items_list_navigation' => __('Items list navigation', 'ramisunet'),
        'filter_items_list'     => __('Filter items list', 'ramisunet'),


    );
    $args = array(
        'label'                 => __('Product', 'ramisunet'),
        'description'           => __('Product information pages.', 'ramisunet'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats'),
        'show_in_rest' => true,
        'taxonomies'            => array('product_category', 'product_tag', 'category'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 10,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        //  'taxonomies' => ['product_category'],
    );
    register_post_type('product', $args);
}
add_action('init', 'products_post_type', 0);


// Register Custom Taxonomy
function product_category()
{

    $labels = array(
        'name'                       => _x('Product Categories', 'Taxonomy General Name', 'ramisunet'),
        'singular_name'              => _x('Product Category', 'Taxonomy Singular Name', 'ramisunet'),
        'menu_name'                  => __('Categories', 'ramisunet'),
        'all_items'                  => __('All Items', 'ramisunet'),
        'parent_item'                => __('Parent Item', 'ramisunet'),
        'parent_item_colon'          => __('Parent Item:', 'ramisunet'),
        'new_item_name'              => __('New Item Name', 'ramisunet'),
        'add_new_item'               => __('Add New Item', 'ramisunet'),
        'edit_item'                  => __('Edit Item', 'ramisunet'),
        'update_item'                => __('Update Item', 'ramisunet'),
        'view_item'                  => __('View Item', 'ramisunet'),
        'separate_items_with_commas' => __('Separate items with commas', 'ramisunet'),
        'add_or_remove_items'        => __('Add or remove items', 'ramisunet'),
        'choose_from_most_used'      => __('Choose from the most used', 'ramisunet'),
        'popular_items'              => __('Popular Items', 'ramisunet'),
        'search_items'               => __('Search Items', 'ramisunet'),
        'not_found'                  => __('Not Found', 'ramisunet'),
        'no_terms'                   => __('No items', 'ramisunet'),
        'items_list'                 => __('Items list', 'ramisunet'),
        'items_list_navigation'      => __('Items list navigation', 'ramisunet'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest' => true,
    );
    register_taxonomy('product_category', array('product'), $args);
}
add_action('init', 'product_category', 0);

// Register Custom Taxonomy
function product_tag()
{

    $labels = array(
        'name'                       => _x('Product Tags', 'Taxonomy General Name', 'ramisunet'),
        'singular_name'              => _x('Product Tag', 'Taxonomy Singular Name', 'ramisunet'),
        'menu_name'                  => __('Tags', 'ramisunet'),
        'all_items'                  => __('All Items', 'ramisunet'),
        'parent_item'                => __('Parent Item', 'ramisunet'),
        'parent_item_colon'          => __('Parent Item:', 'ramisunet'),
        'new_item_name'              => __('New Item Name', 'ramisunet'),
        'add_new_item'               => __('Add New Item', 'ramisunet'),
        'edit_item'                  => __('Edit Item', 'ramisunet'),
        'update_item'                => __('Update Item', 'ramisunet'),
        'view_item'                  => __('View Item', 'ramisunet'),
        'separate_items_with_commas' => __('Separate items with commas', 'ramisunet'),
        'add_or_remove_items'        => __('Add or remove items', 'ramisunet'),
        'choose_from_most_used'      => __('Choose from the most used', 'ramisunet'),
        'popular_items'              => __('Popular Items', 'ramisunet'),
        'search_items'               => __('Search Items', 'ramisunet'),
        'not_found'                  => __('Not Found', 'ramisunet'),
        'no_terms'                   => __('No items', 'ramisunet'),
        'items_list'                 => __('Items list', 'ramisunet'),
        'items_list_navigation'      => __('Items list navigation', 'ramisunet'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest' => true,
    );
    register_taxonomy('product_tag', array('product'), $args);
}
add_action('init', 'product_tag', 0);
