<?php 
	//register Nav walker class alias
	require_once('wp_bootstrap_navwalker.php');

	//Theme Support
	function wpb_theme_setup(){

		//Nav Menus 
		register_nav_menus(array(
			'primary' => _('Primary Menu')

			));
	}

	add_action('after_setup_theme', 'wpb_theme_setup');

?>