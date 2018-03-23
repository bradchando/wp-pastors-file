<?php

/*
 * Plugin Name: WP Pastors File
 * Plugin URI: http://www.bradchandonnet.info/wp-pastors-file
 * Description: A plugin to help pastors (or any researcher) catalog and recall research information.
 * Version: 0.1
 * Author: Brad Chandonnet
 * Author URI: http://www.bradchandonnet.info
*/

/*******************************************************************************
 ** INCLUDES **
 *******************************************************************************/

include_once('includes/pf-taxonomies.php');
include_once('includes/pf-post-types.php');
//include_once('includes/pf-views.php');

/**
 * Controller: PCommVideoUpload
 */
class PastorsFileController
{

    /*******************************************************************************
     ** PROPERTIES **
     *******************************************************************************/


    /**
     * Constructor method:
     * Creates required taxonomies and content types
     */
    function __construct()
    {
        /*******************************************************************************
         ** FILTERS **
         *******************************************************************************/

        /*******************************************************************************
         ** CONSTANTS **
         *******************************************************************************/
        define('PFURL', WP_PLUGIN_URL."/".dirname(plugin_basename(__FILE__)));
        define('PFPATH', WP_PLUGIN_DIR."/".dirname(plugin_basename(__FILE__)));

        /*******************************************************************************
         ** INITIALIZE ALL TAXONOMIES **
         *******************************************************************************/
        add_action('init', 'PF_Taxonomies::create_author_taxonomy', 0);
        add_action('init', 'PF_Taxonomies::create_topic_taxonomy', 0);
        add_action('init', 'PF_Taxonomies::create_scripture_taxonomy', 0);

        /*******************************************************************************
         ** INITIALIZE CONTENT TYPES **
         *******************************************************************************/
        add_action('init', 'PF_PostTypes::create_sermon_type', 0);
        add_action('init', 'PF_PostTypes::create_records_type', 0);

        /*******************************************************************************
         ** ENQUEUE SCRIPTS AND STYLES FOR FRONT-END **
         *******************************************************************************/

        /*******************************************************************************
         ** SHORTCODES **
         *******************************************************************************/

        /*******************************************************************************
         ** ADMIN INIT **
         *******************************************************************************/

    }

    /*******************************************************************************
     ** METHODS **
     *******************************************************************************/


} // end class definition

/**
 * Create instance of controller
 */
$utcs = new PastorsFileController();

/* EOF */
?>