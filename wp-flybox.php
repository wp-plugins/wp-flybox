<?php
/*
Plugin Name: WP-FlyBox
Plugin URI: http://njarb.com/2012/08/wp-flybox/
Description: Tabbed fly-out social boxes for Facebook, Twitter, Google Plus, Youtube, LinkedIn, Feedburner, Pinterest, Flickr, DeviantArt, Instagram and a Contact Me Tab.
Version: 3.1
Author: Cyle Conoly
Author URI: http://www.facebook.com/cylec/
License: GPL2

Copyright 2012  Cyle Conoly  (email : cyle.conoly@gmail.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function wpflybox_admin() {  
    include('wpflybox_import_admin.php');  
}  

function wpflybox_admin_actions() {  
  add_options_page("WP-FlyBox", "WP-FlyBox", 1, "WP-FlyBox", "wpflybox_admin");          
  }  
add_action('admin_menu', 'wpflybox_admin_actions');


function wpflybox_init_head (){
if (get_option(wpflybox_side) !== "none"){
include('includes/css.php');
}
}

function wpflybox_init_body (){
if (get_option(wpflybox_side) !== "none"){
include('wpflybox_import.php');
}
}
  
add_action('wp_head', 'wpflybox_init_head');
add_action('wp_footer', 'wpflybox_init_body', 1);
