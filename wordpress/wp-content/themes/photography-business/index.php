<?php 
/**
 * The template for displaying index page
 *
 * @version    0.0.09
 * @package    photography-business
 * @author     Zidithemes
 * @copyright  Copyright (C) 2020 zidithemes.com All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * 
 */
?>

<?php get_header(); ?>

	


<?php

$photography_business_index_cn = esc_html(get_theme_mod('photography_business_index_class_name_settings'));

$is_elementor_theme_exist = function_exists( 'elementor_theme_do_location' );


if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'index' ) ) {

?>

<div id="content" class="page-content">

	<div class="flowid  
			<?php if ( !empty( $photography_business_index_cn )): ?>
					<?php echo esc_attr($photography_business_index_cn); ?>
				<?php else: ?> 
					<?php echo 'photography-business-index-seventeen'; ?>
			<?php endif; ?> ">

	    <div class="mg-auto wid-90 mobwid-90">
	        
	        <div class="inner dsply-fl fl-wrap jc-sp-btw">
	            
	            <div class="wid-70-5 mobwid-100 blog-2-col-inner">
	    
	                <div class="mg-tp dsply-fl fl-wrap">
	                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

	                	<?php get_template_part('content', get_post_format());  ?>
	                	 
	                	
	                    <?php endwhile; else : ?>
							<h2><?php esc_html_e('No posts Found!', 'photography-business'); ?></h2>
	                    <?php endif; ?>

	                </div>
	                <ul class="pagination flowid">
					   <?php the_posts_pagination(); ?>
					</ul>
	            </div>
	            <?php get_sidebar(); ?>

	        </div>

	    </div>
	</div>
</div>

<?php } ?>


<?php get_footer(); ?>