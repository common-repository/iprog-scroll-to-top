<?php 

	if ( ! defined( 'ABSPATH' ) ) exit;
 	if (!class_exists("ISTT_Backend_Controller")) {

 		class ISTT_Backend_Controller extends ISTT_Controller {
 			
 			static function initialize(){
 				
 				add_action( 'admin_menu', array("ISTT_Backend_Controller","register_menu_page") );

 			}

 			static function register_menu_page(){

			         add_menu_page(
			            'iprog scroll to top',
			            'ISTT',
			            'manage_options',
			            'iprog-scroll-to-top',
			            array(
			              	"ISTT_Admin_Menu_View",
			        		"display_main_menu"
			            ),
			             plugins_url( 'iprog-scroll-to-top/plugin/assets/images/menu_icon.png' ),
			            80
			        );
 			}
 		}
 	}

 ?>