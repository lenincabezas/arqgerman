<?php


function photography_business_layout_customizer_settings( $wp_customize ){


	//ADD PANEL
	$wp_customize->add_panel('photography_business_site_layout_option_panel',
		array(
			'title'      => esc_html__('Photography Business - Customize Layout', 'photography-business'),
			'priority'   => 2,
			'capability' => 'edit_theme_options',
		)
	);

	//BEGIN ADVERT BOX SECTION
	$wp_customize->add_section('photography_business_header_box_section', array(
		'title' => __('Photography Business - Logo and Advert Section', 'photography-business'),
		'priority' => 10,
		'panel' => 'photography_business_site_layout_option_panel',
	));

	$wp_customize->add_setting('photography_business_header_box_display_settings', array(
	    'default' => __('none', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'photography_business_header_box_display_control', array(
	    'label'    => __('Display Logo and Ad Section', 'photography-business'),
	    'section'  => 'photography_business_header_box_section',
	    'settings' => 'photography_business_header_box_display_settings',
	    'type'     	=> 'select',
	    'choices'	=> array(
	    				'block' => __('Yes', 'photography-business'),
	    				'none' 	=> __('No', 'photography-business'),
	    			   )
	)));

	
	//LOGO LINK COLOR
	$wp_customize->add_setting('photography_business_header_box_logo_link_color_settings', array(
	    'default' => __('#353535', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'photography_business_header_box_logo_link_color_control', array(
	    'label'    => __('Logo Text Color', 'photography-business'),
	    'section'  => 'photography_business_header_box_section',
	    'settings' => 'photography_business_header_box_logo_link_color_settings',
	)));


	//AD DISPLAY
	$wp_customize->add_setting('photography_business_ad_img_display_settings', array(
	    'default' => __('none', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'photography_business_ad_img_display_control', array(
	    'label'    => __('Display Ad', 'photography-business'),
	    'section'  => 'photography_business_header_box_section',
	    'settings' => 'photography_business_ad_img_display_settings',
	    'type'     	=> 'select',
	    'choices'	=> array(
	    				'block' => __('Yes',  'photography-business'),
	    				'none' 	=> __('No',  'photography-business'),
	    			   )
	)));


	//UPLOAD AD
    $wp_customize->add_setting('photography_business_ad_img_settings', array(
        'default' => __('#', 'photography-business'),
        'sanitize_callback'  => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'photography_business_ad_img_control', array(
        'label'    => __('Upload Advert Image', 'photography-business'),
        'section'  => 'photography_business_header_box_section',
        'settings' => 'photography_business_ad_img_settings',
        'width'    => 1000,
        'height'   => 1000,
    )));

    //AD LINK
	$wp_customize->add_setting('photography_business_ad_img_link_settings', array(
	    'default' => __('#', 'photography-business'),
	    'sanitize_callback'  => 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'photography_business_ad_img_link_control', array(
	    'label'    => __('Enter Ad Link', 'photography-business'),
	    'section'  => 'photography_business_header_box_section',
	    'settings' => 'photography_business_ad_img_link_settings',
	    'type'     => 'url',
	)));



	//BEGIN NAVIGATION BACKGROUND COLOR SECTION
	$wp_customize->add_section('photography_business_navbar_section', array(
		'title' => __('Photography Business - Navbar BG Color', 'photography-business'),
		'priority' => 10,
		'panel' => 'photography_business_site_layout_option_panel',
	));

	
	//NAVBAR SECTION BACKGROUND COLOR
	$wp_customize->add_setting('photography_business_navbar_section_bg_color_settings', array(
	    'default' => __('#ffffff', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'photography_business_navbar_section_bg_color_control', array(
	    'label'    => __('Navbar Background Color', 'photography-business'),
	    'section'  => 'photography_business_navbar_section',
	    'settings' => 'photography_business_navbar_section_bg_color_settings',
	)));

	//NAVBAR SECTION TEXT COLOR
	$wp_customize->add_setting('photography_business_navbar_section_text_color_settings', array(
	    'default' => __('#353535', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'photography_business_navbar_section_text_color_control', array(
	    'label'    => __('Navbar Text Color', 'photography-business'),
	    'section'  => 'photography_business_navbar_section',
	    'settings' => 'photography_business_navbar_section_text_color_settings',
	)));

	//Photography Business INDEX SECTION CLASS NAME
	$wp_customize->add_section('photography_business_index_class_name_section', array(
		'title' => __('Photography Business - Change Index Posts Style', 'photography-business'),
		'priority' => 9,
		'panel'	=> 'photography_business_site_layout_option_panel',
	));

	
	$wp_customize->add_setting('photography_business_index_class_name_settings', array(
	    'default' => __('photography-business-index-seventeen', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'photography_business_index_class_name_display_control', array(
	    'label'    => __('Change Style', 'photography-business'),
	    'section'  => 'photography_business_index_class_name_section',
	    'settings' => 'photography_business_index_class_name_settings',
	    'type'     	=> 'select',
	    'choices'	=> array(
	    				'photography-business-index-fifteen' 		=> __('List Layout (No Border) - Right Sidebar', 'photography-business'),
	    				'photography-business-index-sixteen' 		=> __('List Layout (No Border - Two Columns) - No Sidebar', 'photography-business'),
	    				'photography-business-index-seventeen' 		=> __('List Layout (No Border - Three Columns) - No Sidebar', 'photography-business'),
	    			   )
	)));



	//BEGIN Photography Business READ MORE BACKGROUND COLOR SECTION
	$wp_customize->add_section('photography_business_readmore_section', array(
		'title' => __('Photography Business - Read More BG Color', 'photography-business'),
		'priority' => 11,
		'panel' => 'photography_business_site_layout_option_panel',
	));

	
	//Photography Business READ MORE SECTION BACKGROUND COLOR
	$wp_customize->add_setting('photography_business_readmore_bg_color_settings', array(
	    'default' => __('#ffffff', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'photography_business_readmore_bg_color_control', array(
	    'label'    => __('Read More Background Color', 'photography-business'),
	    'section'  => 'photography_business_readmore_section',
	    'settings' => 'photography_business_readmore_bg_color_settings',
	)));
	
	//Photography Business READ MORE SECTION BACKGROUND COLOR
	$wp_customize->add_setting('photography_business_readmore_text_color_settings', array(
	    'default' => __('#424242', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'photography_business_readmore_text_color_control', array(
	    'label'    => __('Read More Text Color', 'photography-business'),
	    'section'  => 'photography_business_readmore_section',
	    'settings' => 'photography_business_readmore_text_color_settings',
	)));

	//BEGIN SIDEBAR BACKGROUND COLOR SECTION
	$wp_customize->add_section('photography_business_sidebar_section', array(
		'title' => __('Photography Business - Sidebar Header BG Color', 'photography-business'),
		'priority' => 11,
		'panel' => 'photography_business_site_layout_option_panel',
	));

	
	//SIDEBAR SECTION BACKGROUND COLOR
	$wp_customize->add_setting('photography_business_sidebar_header_bg_color_settings', array(
	    'default' => __('#ffffff', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'photography_business_sidebar_header_bg_color_control', array(
	    'label'    => __('Sidebar Header Background Color', 'photography-business'),
	    'section'  => 'photography_business_sidebar_section',
	    'settings' => 'photography_business_sidebar_header_bg_color_settings',
	)));

		//SIDEBAR SECTION HEADER TEXT COLOR
	$wp_customize->add_setting('photography_business_sidebar_header_title_color_settings', array(
	    'default' => __('#353535', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'photography_business_sidebar_header_text_color_control', array(
	    'label'    => __('Sidebar Header Text Color', 'photography-business'),
	    'section'  => 'photography_business_sidebar_section',
	    'settings' => 'photography_business_sidebar_header_title_color_settings',
	)));

	//BEGIN Photography Business PAGINATION BACKGROUND COLOR SECTION
	$wp_customize->add_section('photography_business_pagination_section', array(
		'title' => __('Photography Business - Pagination BG Color', 'photography-business'),
		'priority' => 11,
		'panel' => 'photography_business_site_layout_option_panel',
	));

	
	//Photography Business PAGINATION SECTION BACKGROUND COLOR
	$wp_customize->add_setting('photography_business_pagination_bg_color_settings', array(
	    'default' => __('#ffffff', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'photography_business_pagination_bg_color_control', array(
	    'label'    => __('Page Numbers Background Color', 'photography-business'),
	    'section'  => 'photography_business_pagination_section',
	    'settings' => 'photography_business_pagination_bg_color_settings',
	)));


	//BEGIN Photography Business SEARCH BUTTON SIDEBAR BACKGROUND COLOR SECTION
	$wp_customize->add_section('photography_business_search_btn_sidebar_section', array(
		'title' => __('Photography Business - Search Button BG Color', 'photography-business'),
		'priority' => 11,
		'panel' => 'photography_business_site_layout_option_panel',
	));

	
	//Photography Business SEARCH BUTTON SIDEBAR SECTION BACKGROUND COLOR
	$wp_customize->add_setting('photography_business_search_btn_sidebar_bg_color_settings', array(
	    'default' => __('#ffffff', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'photography_business_search_btn_sidebar_bg_color_control', array(
	    'label'    => __('Search Button Sidebar Background Color', 'photography-business'),
	    'section'  => 'photography_business_search_btn_sidebar_section',
	    'settings' => 'photography_business_search_btn_sidebar_bg_color_settings',
	)));



	//BEGIN FOOTER BACKGROUND COLOR SECTION
	$wp_customize->add_section('photography_business_footer_section', array(
		'title' => __('Photography Business - Footer BG Color', 'photography-business'),
		'priority' => 11,
		'panel' => 'photography_business_site_layout_option_panel',
	));

	
	//FOOTER SECTION BACKGROUND COLOR
	$wp_customize->add_setting('photography_business_footer_bg_color_settings', array(
	    'default' => __('#353535', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'photography_business_footer_bg_color_control', array(
	    'label'    => __('footer Header Background Color', 'photography-business'),
	    'section'  => 'photography_business_footer_section',
	    'settings' => 'photography_business_footer_bg_color_settings',
	)));


	//FOOTER SECTION LINK TEXT COLOR
	$wp_customize->add_setting('photography_business_footer_text_link_color_settings', array(
	    'default' => __('#fff', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'photography_business_footer_text_link_color_control', array(
	    'label'    => __('Footer Link Text Color', 'photography-business'),
	    'section'  => 'photography_business_footer_section',
	    'settings' => 'photography_business_footer_text_link_color_settings',
	)));

	//FOOTER SECTION HEADER TITLE COLOR
	$wp_customize->add_setting('photography_business_footer_header_text_color_settings', array(
	    'default' => __('#fff', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'photography_business_footer_header_text_color_control', array(
	    'label'    => __('Footer Header Title Text Color', 'photography-business'),
	    'section'  => 'photography_business_footer_section',
	    'settings' => 'photography_business_footer_header_text_color_settings',
	)));

	//FOOTER SECTION DISPLAY HEADER TITLE
	$wp_customize->add_setting('photography_business_footer_display_header_text_settings', array(
	    'default' => __('block', 'photography-business'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'photography_business_footer_display_header_text_control', array(
	    'label'    => __('Footer Display Header Title', 'photography-business'),
	    'section'  => 'photography_business_footer_section',
	    'settings' => 'photography_business_footer_display_header_text_settings',
	    'type'     	=> 'select',
	    'choices'	=> array(
	    				'block' => __('Yes', 'photography-business'),
	    				'none' 	=> __('No', 'photography-business'),
	    			   )
	)));

	$wp_customize->get_setting('photography_business_header_box_display_settings')->transport 				= 	'postMessage';
	$wp_customize->get_setting('photography_business_header_box_logo_link_color_settings')->transport 		= 	'postMessage';
	$wp_customize->get_setting('photography_business_navbar_section_bg_color_settings')->transport 			= 	'postMessage';
	$wp_customize->get_setting('photography_business_navbar_section_text_color_settings')->transport 		= 	'postMessage';
    $wp_customize->get_setting('photography_business_readmore_bg_color_settings')->transport 				= 	'postMessage';
    $wp_customize->get_setting('photography_business_readmore_text_color_settings')->transport 				= 	'postMessage';
    $wp_customize->get_setting('photography_business_sidebar_header_bg_color_settings')->transport 			= 	'postMessage';
    $wp_customize->get_setting('photography_business_sidebar_header_title_color_settings')->transport 		=	'postMessage';
    $wp_customize->get_setting('photography_business_search_btn_sidebar_bg_color_settings')->transport 		= 	'postMessage';
    $wp_customize->get_setting('photography_business_pagination_bg_color_settings')->transport 				= 	'postMessage';
    $wp_customize->get_setting('photography_business_footer_bg_color_settings')->transport 					= 	'postMessage';
    $wp_customize->get_setting('photography_business_footer_text_link_color_settings')->transport 			= 	'postMessage';
    $wp_customize->get_setting('photography_business_footer_header_text_color_settings')->transport 		= 	'postMessage';
    $wp_customize->get_setting('photography_business_footer_display_header_text_settings')->transport 		= 	'postMessage';


}


//CSS
function photography_business_layout_custom_css(){
	?>

<style type="text/css">

.header-box .ad-box-img {
	display: <?php echo esc_attr(get_theme_mod('photography_business_ad_img_display_settings')); ?>
}

.header-box {
	display: <?php echo esc_attr(get_theme_mod('photography_business_header_box_display_settings')); ?>;
}

.header-box .logo .logo-text-link {
	color: <?php echo esc_attr(get_theme_mod('photography_business_header_box_logo_link_color_settings')); ?>;
}

.nav-outer {
	background: <?php echo esc_attr(get_theme_mod('photography_business_navbar_section_bg_color_settings')); ?>;
}

.theme-nav ul li a {
	color: <?php echo esc_attr(get_theme_mod('photography_business_navbar_section_text_color_settings')); ?>;
}

.photography-business-index .blog-2-col-inner .items .items-inner .img-box .details-box .details-box-inner .btn-case a {
	background: <?php echo esc_attr(get_theme_mod('photography_business_readmore_bg_color_settings')); ?>;
	color: <?php echo esc_attr( get_theme_mod('photography_business_readmore_text_color_settings')); ?>;
}

.sidebar .sidebar-inner .sidebar-items h2 {
	background: <?php echo esc_attr(get_theme_mod('photography_business_sidebar_header_bg_color_settings')); ?>;
	color: <?php echo esc_attr(get_theme_mod('photography_business_sidebar_header_title_color_settings')); ?>;
}

.sidebar .sidebar-inner .sidebar-items .searchform div #searchsubmit {
	background: <?php echo esc_attr(get_theme_mod('photography_business_search_btn_sidebar_bg_color_settings')); ?>;
}

.page-numbers {
	background: <?php echo esc_attr(get_theme_mod('photography_business_pagination_bg_color_settings')); ?>;	
}

.footer-4-col {
	background: <?php echo esc_attr(get_theme_mod('photography_business_footer_bg_color_settings')); ?>; 
}

.footer-4-col .inner .footer .footer-inner .footer-items a {
	color: <?php echo esc_attr(get_theme_mod('photography_business_footer_text_link_color_settings')); ?>;
}

.footer-4-col .inner .footer .footer-inner .footer-items li h2 {
	display: <?php echo esc_attr(get_theme_mod('photography_business_footer_display_header_text_settings')); ?>;
	color: <?php echo esc_attr(get_theme_mod('photography_business_footer_header_text_color_settings')); ?>;
}

</style>


	<?php

}


function photography_business_layout_customizer_live_preview()
{
	wp_enqueue_script( 
		  'photography-business-site-layout-customizer',			
		  get_template_directory_uri().'/js/photography-business-layout-customizer.js',
		  array( 'jquery','customize-preview' ),	
		  '',						
		  true						
	);
}




add_action('wp_head', 'photography_business_layout_custom_css');
add_action('customize_register', 'photography_business_layout_customizer_settings');
add_action( 'customize_preview_init', 'photography_business_layout_customizer_live_preview' );


?>