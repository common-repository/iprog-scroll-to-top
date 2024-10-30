<?php 

	if ( ! defined( 'ABSPATH' ) ) exit;
 	if (!class_exists("ISTT_Frontend_Controller")) {

 		class ISTT_Frontend_Controller extends ISTT_Controller {

 			static function initialize(){

 				add_action("wp_enqueue_scripts",array("ISTT_Frontend_Controller","register_scripts"),10);

 				add_action("wp_footer",array("ISTT_Scroll_Button_View","display_button"));

 				

 			}

 			static function register_scripts(){
 				self::register_all_styles();
 				self::register_all_scripts();
 			}

 			static function register_all_styles(){
 				self::load_style("istt-frontend-style",self::get_data("plugin_url")."plugin/assets/css/istt-frontend-style.css");
 			}

 			static function register_all_scripts(){
 				self::load_script("istt-frontend-script",self::get_data("plugin_url")."plugin/assets/js/istt-frontend-script.js",array("jquery"=>"jquery"));
 			}

 			

 		}
 	}

 ?>