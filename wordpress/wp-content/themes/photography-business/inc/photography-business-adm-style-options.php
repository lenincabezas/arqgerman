<?php

if (!function_exists('photography_business_admin_style')) {
	function photography_business_admin_style($hook) {
		//admin style
		if ('appearance_page_photography_business_theme_info_options' === $hook) {
			wp_enqueue_style('photography-business-admin-script-style', get_template_directory_uri() . '/css/photography-business-admin.css');
		}
	}
}
add_action('admin_enqueue_scripts', 'photography_business_admin_style');
