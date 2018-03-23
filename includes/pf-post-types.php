<?php

/*
 * class PF_PostTypes
 *
 * Creates required post types.
*/

class PF_PostTypes
{

    /**
     * Initializes plugin, similar to __construct()
     */
    public static function init()
    {

    }

    /**
     * Create Sermon Post Type
     */
    public static function create_sermon_type() {
        $labels = array(
            'name' => _x( 'Sermon', 'post type general name' ),
            'singular_name' => _x( 'Sermon', 'post type singular name' ),
            'search_items' =>  __( 'Sermons' ),
            'all_items' => __( 'All Sermons' ),
            'parent_item' => __( 'Parent Sermon' ),
            'parent_item_colon' => __( 'Parent Sermon:' ),
            'edit_item' => __( 'Edit Sermon' ),
            'update_item' => __( 'Update Sermon' ),
            'add_new_item' => __( 'Add New Sermon' ),
            'new_item_name' => __( 'New Sermon' ),
            'menu_name' => __( 'Sermons' ),
        );

        register_post_type('sermon', array(
            'labels' => $labels,
            'menu_icon' => 'dashicons-megaphone',
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'author', 'thumbnail', 'custom-fields', 'comments', 'excerpt', 'editor' ),
            'taxonomies' => array('post_tag')
        ));
    }

    public static function create_records_type() {
        $labels = array(
            'name' => _x( 'Record', 'post type general name' ),
            'singular_name' => _x( 'Record', 'post type singular name' ),
            'search_items' =>  __( 'Records' ),
            'all_items' => __( 'All Records' ),
            'parent_item' => __( 'Parent Record' ),
            'parent_item_colon' => __( 'Parent Record:' ),
            'edit_item' => __( 'Edit Record' ),
            'update_item' => __( 'Update Record' ),
            'add_new_item' => __( 'Add New Record' ),
            'new_item_name' => __( 'New Record' ),
            'menu_name' => __( 'Records' ),
        );

        register_post_type('record', array(
            'labels' => $labels,
            'menu_icon' => 'dashicons-book-alt',
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'author', 'thumbnail', 'custom-fields', 'comments', 'excerpt', 'editor' ),
            'taxonomies' => array('post_tag','author')
        ));
    }

}

/* EOF */
?>