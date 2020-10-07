<?php
/**
* front-page.php
*
* @author    Denis Franchi
* @package   Avik

*/


get_header();

// Slider/Video/Static
get_template_part( 'template-parts/content',esc_html( get_theme_mod('avik_order_header_home','page-static') )); 

// Sector One 
get_template_part( 'sections/section',esc_html( get_theme_mod('avik_order_sect_1','whoweare') )); 

// Sector Two
get_template_part( 'sections/section',esc_html( get_theme_mod('avik_order_sect_2','services') )); 

// Sector Three
get_template_part( 'sections/section',esc_html( get_theme_mod('avik_order_sect_3','portfolio') )); 

// Sector Four
get_template_part( 'sections/section',esc_html( get_theme_mod('avik_order_sect_4','blog') )); 

// Sector Five
get_template_part( 'sections/section',esc_html( get_theme_mod('avik_order_sect_5','contact') )); 

 get_footer(); ?>

