<?php 
/**
Plugin Name: WPB Filterable Portfolio
Plugin URI: http://wpbean.com/product/wpb-filterable-portfolio
Description: Filterable portfolio Wordpress plugin. Shortcode [wpb-portfolio]
Author: wpbean
Version: 2.09.3
Author URI: http://wpbean.com
text-domain: wpb_fp
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 


/**
 * Define Path 
 */

if ( !defined( 'WPB_FP_URI' ) ) {
	define( 'WPB_FP_URI', plugin_dir_path( __FILE__ ) );
}


/**
 * Define metaboxes directory constant
 */

if ( !defined( 'WPB_FP_CUSTOM_METABOXES_DIR' ) ) {
	define( 'WPB_FP_CUSTOM_METABOXES_DIR', plugins_url('/admin/metaboxes', __FILE__) );
}


/**
 * Define TextDomain
 */

if ( !defined( 'WPB_FP_TEXTDOMAIN' ) ) {
	define( 'WPB_FP_TEXTDOMAIN','wpb_fp' );
}



/**
 * Internationalization
 */

function wpb_fp_textdomain() {
	load_plugin_textdomain( WPB_FP_TEXTDOMAIN, false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'wpb_fp_textdomain' );



/**
 * Add plugin action links
 */

function wpb_portfolio_plugin_actions( $links ) {
   $links[] = '<a href="'.menu_page_url('portfolio-settings', false).'">'. __('Settings',WPB_FP_TEXTDOMAIN) .'</a>';
   $links[] = '<a href="http://wpbean.com/support/" target="_blank">'. __('Support',WPB_FP_TEXTDOMAIN) .'</a>';
   $links[] = '<a href="http://wpbean.com/wpb-filterable-portfolio-documentation/" target="_blank">'. __('Documentation',WPB_FP_TEXTDOMAIN) .'</a>';
   return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'wpb_portfolio_plugin_actions' );




/**
 * Requred files
 */

require_once dirname( __FILE__ ) . '/admin/wpb-fp-getting-options.php';
require_once dirname( __FILE__ ) . '/admin/wpb_aq_resizer.php';
require_once dirname( __FILE__ ) . '/admin/wpb-fp-admin.php';
require_once dirname( __FILE__ ) . '/admin/wpb-class.settings-api.php';
require_once dirname( __FILE__ ) . '/admin/wpb-settings-config.php';
require_once dirname( __FILE__ ) . '/admin/metaboxes/meta_box.php';
require_once dirname( __FILE__ ) . '/admin/wpb_fp_metabox_conig.php';
require_once dirname( __FILE__ ) . '/admin/wpb_fp_shortcode_generator.php';


require_once dirname( __FILE__ ) . '/inc/wpb_scripts.php';
require_once dirname( __FILE__ ) . '/inc/wpb-fp-shortcode.php';
require_once dirname( __FILE__ ) . '/inc/wpb-fp-post-type.php';
require_once dirname( __FILE__ ) . '/inc/wpb-fp-functions.php';


/**
 * Gallery
 */

$wpb_fp_gallery_support = wpb_fp_get_option( 'wpb_fp_gallery_support', 'wpb_fp_general' );
if( $wpb_fp_gallery_support != 'on' ){
	require_once dirname( __FILE__ ) . '/inc/wpb_fp_gallery.php';
}
