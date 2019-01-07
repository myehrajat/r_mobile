<?php
/**
 * @package RentIt_Mobile
 * @version 1.0
 */
/*
Plugin Name: RentIt Mobile
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: this make hide renit theme header and footer
Version: 1.0
Author URI: https://ma.tt/
Text Domain: RentIt_Mobile
*/
//RentIt_Mobile_hide();
include_once('customizer.php');
add_action( 'wp_enqueue_scripts', 'RentIt_Mobile_hide', 600 );
function RentIt_Mobile_hide(){
	require_once(plugin_dir_path(__FILE__).'Mobile-Detect/Mobile_Detect.php');
	$detect = new Mobile_Detect();
	// Check for any mobile or Tablet device. and hide for mobile
	//var_dump(get_theme_mod('mobile_app_header_desktop', 0));
	$hide = array(
		//1 means hide 0 means show
		'admin_bar' =>get_theme_mod('mobile_app_admin_bar', NULL),
		
		'header_mobile' =>get_theme_mod('mobile_app_header_mobile',NULL),
		'header_tablet' =>get_theme_mod('mobile_app_header_tablet', NULL),
		'header_desktop' =>get_theme_mod('mobile_app_header_desktop', NULL),
		
		'footer_mobile' =>get_theme_mod('mobile_app_footer_mobile', NULL),
		'footer_tablet' =>get_theme_mod('mobile_app_footer_tablet', NULL),
		'footer_desktop' =>get_theme_mod('mobile_app_footer_desktop', NULL),
		
		'footer_widgets_mobile' =>get_theme_mod('mobile_app_footer_widgets_mobile', 0),
		'footer_widgets_tablet' =>get_theme_mod('mobile_app_footer_widgets_tablet', 0),
		'footer_widgets_desktop' =>get_theme_mod('mobile_app_footer_widgets_desktop', 0),
	);
	if($hide['admin_bar'] or $_GET['admin_bar']==false){
		//https://codex.wordpress.org/Function_Reference/show_admin_bar
		show_admin_bar( false );
	}
	//var_dump($hide);
	if($detect->isMobile()){
		$hide['type']='mobile';
	}elseif($detect->isTablet()){
		$hide['type']='tablet';
	}else{
		$hide['type']='desktop';
	}
	wp_enqueue_script( 'renita_delete_mobile',plugins_url("delete-header-and-footer.js",__FILE__ ), array( 'jquery' ), '1.0.0', true );
	wp_localize_script( 'renita_delete_mobile', 'hide',$hide );

}
