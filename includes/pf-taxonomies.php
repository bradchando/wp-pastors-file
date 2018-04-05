<?php

/*
 * class PF_Taxonomies
 *
 * Creates required taxonomies for content types.
*/

class PF_Taxonomies
{

    /**
     * Initializes plugin, similar to __construct()
     */
    public static function init()
    {

    }

    /**
     * Create author taxonomy
     */
    public static function create_author_taxonomy() {
        $labels = array(
            'name' => _x( 'Author', 'taxonomy general name' ),
            'singular_name' => _x( 'Author', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Authors' ),
            'all_items' => __( 'All Authors' ),
            'parent_item' => __( 'Parent Author' ),
            'parent_item_colon' => __( 'Parent Author:' ),
            'edit_item' => __( 'Edit Author' ),
            'update_item' => __( 'Update Author' ),
            'add_new_item' => __( 'Add New Author' ),
            'new_item_name' => __( 'New Author' ),
            'menu_name' => __( 'Authors' ),
        );

        register_taxonomy('author',array('sermon','record'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'author' ),
        ));
    }

    public static function create_topic_taxonomy() {
        $labels = array(
            'name' => _x( 'Topic', 'taxonomy general name' ),
            'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Topics' ),
            'all_items' => __( 'All Topics' ),
            'parent_item' => __( 'Parent Topic' ),
            'parent_item_colon' => __( 'Parent Topic:' ),
            'edit_item' => __( 'Edit Topic' ),
            'update_item' => __( 'Update Topic' ),
            'add_new_item' => __( 'Add New Topic' ),
            'new_item_name' => __( 'New Topic' ),
            'menu_name' => __( 'Topics' ),
        );

        register_taxonomy('topic',array('sermon','record'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'topic' ),
        ));
    }

    public static function create_scripture_taxonomy() {
        $labels = array(
            'name' => _x( 'Scripture', 'taxonomy general name' ),
            'singular_name' => _x( 'Scripture', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Scriptures' ),
            'all_items' => __( 'All Scriptures' ),
            'parent_item' => __( 'Parent Scripture' ),
            'parent_item_colon' => __( 'Parent Scripture:' ),
            'edit_item' => __( 'EditScripturec' ),
            'update_item' => __( 'Update Scripture' ),
            'add_new_item' => __( 'Add New Scripture' ),
            'new_item_name' => __( 'New Scripture' ),
            'menu_name' => __( 'Scriptures' ),
        );

        register_taxonomy('scripture',array('sermon','record'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'scripture' ),
        ));
    }

    public static function create_series_taxonomy() {
        $labels = array(
            'name' => _x( 'Series', 'taxonomy general name' ),
            'singular_name' => _x( 'Series', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Series' ),
            'all_items' => __( 'All Series' ),
            'parent_item' => __( 'Parent Series' ),
            'parent_item_colon' => __( 'Parent Series:' ),
            'edit_item' => __( 'Edit Series' ),
            'update_item' => __( 'Update Series' ),
            'add_new_item' => __( 'Add New Series' ),
            'new_item_name' => __( 'New Series' ),
            'menu_name' => __( 'Series' ),
        );

        register_taxonomy('series',array('sermon'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'series' ),
        ));
    }

}

/* EOF */
?>