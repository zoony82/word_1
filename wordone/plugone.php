<?php
/*
Plugin Name: insam message
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: The Plugin's Version Number, e.g.: 1.0
Author: Name Of The Plugin Author
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/
function testShortCode(){
?>
hello this is insams shortcode
<?php
}
add_shortcode( 'test', 'testShortCode');
