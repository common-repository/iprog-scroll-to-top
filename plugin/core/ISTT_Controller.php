<?php 

	if ( ! defined( 'ABSPATH' ) ) exit;
 	if (!class_exists("ISTT_Controller")) {

 		class ISTT_Controller extends ISTT_Variables {

 			static function init(){

 				if (!is_admin()) {
 					ISTT_Frontend_Controller::initialize();
 				}else{
 					ISTT_Backend_Controller::initialize();
 				}
 			}

 			static function load_style($name,$path){
 				wp_enqueue_style($name,$path);
 			}

 			static function load_script($name,$path,$in_footer=false){
 				wp_enqueue_script($name,$path,array(),false,$in_footer);
 			}

 			static function localize_script($refname,$name,$data=array()){
 				wp_localize_script($refname,$name,$data);
 			}



 		}

 	}

 ?>