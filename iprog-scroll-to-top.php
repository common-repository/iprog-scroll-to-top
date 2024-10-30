<?php 
/*
	Plugin Name: iprog scroll to top
	Version: 1.1
	Plugin URI: http://iprog21.zerobstacle.com/iprog-scroll-to-top
	Description: A simple dancing button that has the ability to move up the browser scroll bar automatically.
	Text Domain: istt
	Author: iprog21
	Author URI: http://iprog21.zerobstacle.com/
*/


if ( ! defined( 'ABSPATH' ) ) exit;
require_once "plugin/libs/ISTT_Html.php";
require_once "plugin/libs/ISTT_Variables.php";
require_once "plugin/ISTT_Bootstrap.php";

ISTT_Bootstrap::$file = __FILE__;
ISTT_Bootstrap::$options_slug = "istt_data";

register_activation_hook( __FILE__, array( "ISTT_Bootstrap", "on_activation" ) );
register_deactivation_hook( __FILE__, array( "ISTT_Bootstrap", "on_deactivation" ) );

ISTT_Bootstrap::initialize();


?>