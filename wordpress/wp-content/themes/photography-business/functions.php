<?php 
/**
 * The template for functions 
 *
 * @version    0.0.09
 * @package    photography-business
 * @author     Zidithemes
 * @copyright  Copyright (C) 2020 zidithemes.com All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * 
 */


if ( ! defined( 'ABSPATH' ) ) { exit; }

require get_template_directory() . "/inc/photography-business-layout-customizer.php";
require get_template_directory() . "/inc/photography-business-options.php";
require get_template_directory() . "/inc/photography-business-adm-style-options.php";
require get_template_directory() . "/inc/photography-business-customizer-pro-btn.php";

function photography_business_setup(){


	// ADD THEME SUPPORT
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support('woocommerce');
	
	//EDITOR STYLE
	add_editor_style('editor-style.css');

	register_nav_menus(
	    array(
	      'primary-menu' => esc_attr__( 'Primary Menu', 'photography-business' ),
	    )
	  );


	load_theme_textdomain( 'photography-business' );

	// SET CONTENT WIDTH
	if ( ! isset( $content_width ) ) $content_width = 600;

}

add_action('after_setup_theme', 'photography_business_setup');

// Load styles
function photography_business_load_styles_scripts(){
	// NOTE:   SOME OF THESE SCRIPTS ARE HOSTED ON A CDN AND ARE NOT STORED LOCALLY... SO THIS THEME MAY NOT RENDER PROPERLY IF YOU ARE NOT CONNECTED TO THE INTERNET
	
		wp_enqueue_style( 'photography-business-style', get_template_directory_uri() . '/style.css');

		wp_enqueue_style( 'photography-business-google-roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap');

		wp_enqueue_script('photography-business-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js' );
		
		wp_enqueue_script('photography-business-onejs-script', get_template_directory_uri() . '/js/zidi-one.js', array('jquery'), '1.0.0', true );
		
		if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); 
	
}

add_action('wp_enqueue_scripts', 'photography_business_load_styles_scripts');

function photography_business_pingback_wrap(){

		if ( is_singular() && pings_open() ) {
			echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
		}

}
add_action( 'wp_head', 'photography_business_pingback_wrap');



// Creating the sidebar
function photography_business_menu_init() {


register_sidebar(
		array(
                'name' 			=> esc_html__('Sidebar Widgets', 'photography-business'),
                'id'    		=> 'sidebar_id',
                'class'       	=> '',
				'description' 	=> esc_html__('Add sidebar widgets here', 'photography-business'),
				'before_widget' => '<div class="sidebar-items">',
				'after_widget' 	=> '</div>',
				'before_title' 	=> '<h2>',
				'after_title' 	=> '</h2>',
	));

	register_sidebar(array(
                'name' 			=> esc_html__('Main Footer', 'photography-business'),
                'id'    		=> 'main_footer',
                'class' 		=> '',
				'description' 	=> esc_html__('Add widgets here', 'photography-business'),
				'before_widget' => '<li>',
				'after_widget' 	=> '</li>',
				'before_title' 	=> '<h2>',
				'after_title' 	=> '</h2>',
	));
	

}
add_action('widgets_init', 'photography_business_menu_init');

// this increases or decreaes the length of the excerpt on the index page
function photography_business_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}
	return 20;
}
add_filter( 'excerpt_length', 'photography_business_excerpt_length', 999 );

function photography_business_excerpt_more( $more ) {
	
	if ( is_admin() ) {
    	return $more;
    }
    
}
add_filter( 'excerpt_more', 'photography_business_excerpt_more' );



if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}



/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function photography_business_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'photography_business_skip_link_focus_fix' );


