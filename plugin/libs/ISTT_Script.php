<?php 

	class ISTT_Script {

		static function istt_register_scripts(){

			
			add_action("wp_enqueue_scripts",array("ISTT_Script","register_istt_scripts"),10);
			
		}

		static function register_istt_scripts(){

			self::register_istt_css();
			self::register_istt_js();
		}

		static function register_istt_css(){
				wp_enqueue_style("istt-frontend-style",ISTT_CSS_URI."istt-frontend-style.css");
		}

		static function register_istt_js(){

				wp_enqueue_script("istt-frontend-script",ISTT_JS_URI."istt-frontend-script.js",array("jquery"=>"jquery"));
		}
	}


 ?>