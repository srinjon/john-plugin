<?php 
/**
 * @package johnPlugin
 */
/*
Plugin Name: John Plugin
Plugin URI: http://johnuser.com/plugin
Description: This is a plugin about get the record of User IP Address.
Version: 1.0.0 
Author: Srinjon Sadhukhan
Author URI: http://johnuser.com
License: GPLv2 or later
Text Domain: john-plugin
*/
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2022 Automattic, Inc.
*/
// if(! defined( 'ABSPATH') ){
//     die;
// }
defined( 'ABSPATH' ) or die('Hey, you can\t access this file, you silly human!' );
// if( ! function_exists('add_action')){
//     echo 'Hey, you can\t access this file, you silly human!';
//     exit;
// }
// echo plugin_dir_path(__FILE__);die;
// echo plugins_url();//Includes files to plugin(Images,Js,Css)
// echo "<br/>";
// echo plugin_dir_path(__FILE__);die;//Include php files
define("PLUGIN_DIR_PATH",plugin_dir_path(__FILE__));
define("PLUGIN_URL",plugins_url());
function add_my_custom_menu(){
  add_menu_page("john-plugin","John Plugin","manage_options","john-plugin","john_admin_view","dashicons-dashboard",11);
  add_submenu_page(
    "john-plugin",
    "Add New",
    "John Setup",
    "manage_options",
    "john-plugin",
    "add_new_function"
  );
  add_submenu_page(
    "john-plugin",
    "Add Pages",
    "All Pages",
    "manage_options",
    "all-pages",
    "add_new_function2"
  );
}
add_action("admin_menu","add_my_custom_menu");
function john_admin_view(){
  echo "<h1>Hello Srinjon</h1>";

}
function add_new_function(){
  include_once PLUGIN_DIR_PATH."/views/John-Setup.php";
 //John Setup function
}
function add_new_function2(){
 //all pages functions
 include_once PLUGIN_DIR_PATH."/views/All-Pages.php";
}
// register_activation_hook( __FILE__, array( $johnPlugin,'activate' ));
// register_deactivation_hook(__FILE__,array( $johnPlugin, 'deactivate' ));
// register_uninstall_hook( __FILE__, array( $johnPlugin, 'uninstall'));