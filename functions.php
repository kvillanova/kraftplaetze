<?php
include "func/configurar.php";
include "func/types.php";

add_theme_support('post-thumbnails');
add_image_size('carrossel', 960, 363, true);
add_image_size('page-sidebar', 240, 0, true);

function remove_menus () {
if(!current_user_can('update_core')):
global $menu;
	$restricted = array(__('Posts'), __('Tools'), __('Links'), __('Comments'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	} endif;
}
add_action('admin_menu', 'remove_menus');

function wps_admin_bar() {
	if(!current_user_can('update_core')):
    global $wp_admin_bar;
    //$wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('about');
    $wp_admin_bar->remove_menu('wporg');
    $wp_admin_bar->remove_menu('documentation');
    $wp_admin_bar->remove_menu('support-forums');
    $wp_admin_bar->remove_menu('feedback');
	$wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('new-post');
	$wp_admin_bar->remove_menu('new-link');
	$wp_admin_bar->remove_menu('new-media');
	$wp_admin_bar->remove_menu('new-page');
	endif;
}
add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );

?>