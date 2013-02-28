<?php
/*
Plugin Name:Products
Plugin URI: http://editflow.org/
Description:an test plugin 
Author:tedi3231
Version: 0.1
Author URI: http://www.wedoapp.com/

Copyright 2009-2012 Mohammad Jangda, Daniel Bachhuber, et al.

GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/
add_action("init","prowp_register_my_post_types");

//when activate
register_activation_hook(__FILE__,'prowp_install');
//when plugin disabled called
register_deactivation_hook(__FILE__,'prowp_deactive');
add_filter('the_content','prowp_profanity_filter');

function prowp_profanity_filter(){
	$profanities = array('tedi3231','yuanyuan');
	$content = str_ireplace($profanities,'[censord]',$content);
	return $content;
}

function prowp_deactive(){
	echo 'disabled';
}

function prowp_register_my_post_types(){
    $labels = array(
        'name'=>'Products',
        'singular_name' =>'Product',
        'add_new' =>'Add New Product',
        'add_new_item' => 'Add New Product',
        'edit_item' => 'Edit Product',
        'new_item' => 'New Product',
        'all_items' => 'All Products',
        'view_item' => 'View Product',
        'search_items' => 'Search Products',
        'not_found' => 'No products found',
        'not_found_in_trash' => 'No products found in Trash'
    );
    register_post_type('products',array(
        'labels'=>$labels,
        'public' => true,)
        //'has_archive' = > true,
        //'taxonomies'=> array('category'),
    );
}

function prowp_install(){
	global $wp_version;
	if(version_compare($wp_version,3.0,'<')){
		wp_die('This plugin required wordpress version 3.5 or latter');
	}
}
