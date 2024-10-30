<?php 
 	
 	if ( ! defined( 'ABSPATH' ) ) exit;
 	if (!class_exists("ISTT_Bootstrap")) {
 		class ISTT_Bootstrap extends ISTT_Variables {

 			static function initialize(){
 				spl_autoload_register(array("ISTT_Bootstrap","_auto_load"));
 				ISTT_Controller::init();
 				
 			}



 			static function on_activation(){

 				$options_data = array(
 					"plugin_version" => "2.0",
 					"plugin_name" => "Scrolltotop",
 					"plugin_prefix" => "istt_",
 					"plugin_slug" => "istt",
 					"plugin_url" => plugin_dir_url(self::$file),
 					"plugin_path" => plugin_dir_path(self::$file)
 				);

 				update_option(self::$options_slug,$options_data);

 			}

 			static function on_deactivation(){
 				delete_option("istt_data");
 			}


 			static function _auto_load($class){
 				self::_load_class_file($class);
 			}

 			static function _load_class_file($class,$dir=null){


				if ( is_null( $dir ) ){
					$dir = plugin_dir_path(self::$file)."plugin/";
				}



				foreach ( scandir( $dir ) as $file ) {
					
					// directory?
					if ( is_dir( $dir . $file ) && substr( $file, 0, 1 ) !== '.' ){
							
						self::_load_class_file( $class, $dir . $file . '/' );
					}


					// php file and filename matches class?
					if (
						substr( $file, 0, 1 ) !== '.' &&
						preg_match( "/.php$/i" , $file ) &&
						(str_replace( '.php', '', $file ) == $class || str_replace( '.class.php', '', $file ) == $class )
					) {

						include $dir . $file;
					}
				}
			}

			



 		}
 	}
 ?>