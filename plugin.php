<?php
/*
Plugin Name: Simple Mailing List
Plugin URI: http://mr.hokya.com/simple-mailing-list/
Description: Retrieve all email addresses stored on your databases of comments and show it on both ordered list and comma separated values called CSV
Version: 1.44
Author: Julian Widya Perdana
Author URI: http://mr.hokya.com/
*/


function eml () {
	add_menu_page('Mailing List', 'Mailing List', 'manage_options','simple-mailing-list/options.php');
}


add_action('admin_menu', 'eml');

?>