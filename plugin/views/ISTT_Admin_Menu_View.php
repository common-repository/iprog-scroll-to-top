<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	 if (!class_exists("ISTT_Admin_Menu_View")) {
	 	class ISTT_Admin_Menu_View extends ISTT_View {

	 		static function display_main_menu(){
	 			ob_start();

	 			echo ISTT_Html::div_start(array("class"=>"wrap"));
		 			echo ISTT_Html::div_start(array("class"=>"welcome-panel"));

			 			$plugin_banner = ISTT_Html::img(array(
							"src" => self::get_data("plugin_url")."plugin/assets/images/plugin_banner.png"
						));

						$plugin_upgrade_version_button = ISTT_Html::a("Upgrade Version",array(
							"class" => "button button-primary button-hero",
							"style" => "position:absolute;top:100px",
							"href" => "http://iprog21.zerobstacle.com/iprog-scroll-to-top/",
							"target" => "_blank"
						));

			 			echo ISTT_Html::div($plugin_banner.$plugin_upgrade_version_button);
			 		
					
					echo ISTT_Html::div_end();
				echo ISTT_Html::div_end();

				$main_menu = ob_get_clean();
				echo $main_menu;
	 		}

	 	}
	 }
 ?>


