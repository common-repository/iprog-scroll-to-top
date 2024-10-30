<?php 
 	
 	if ( ! defined( 'ABSPATH' ) ) exit;
 	if (!class_exists("ISTT_Variables")) {
 		class ISTT_Variables extends ISTT_Html {

 			public static $file;
 			public static $options_slug;

 			// set data
			public static function set_data($temp_data){
				update_option(self::$options_slug,$temp_data);
			}

			// get data
			public static function get_data($temp_data = "",$mode = "one"){	
				$data = get_option(self::$options_slug);
				return ($mode == "all")?$data:$data[$temp_data];
			}	


 		}
 	}
 ?>