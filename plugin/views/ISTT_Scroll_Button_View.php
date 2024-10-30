<?php 
	if ( ! defined( 'ABSPATH' ) ) exit;
	 if (!class_exists("ISTT_Scroll_Button_View")) {
	 	class ISTT_Scroll_Button_View extends ISTT_View {

	 		static function display_button(){
	 			ob_start();

				echo ISTT_Html::div(
					ISTT_Html::div("",array("class"=>"istt-arrow-up"))
				,array("class"=>"istt-button"));


				$istt_button = ob_get_clean();
				echo $istt_button;
	 		}

	 	}
	 }
 ?>