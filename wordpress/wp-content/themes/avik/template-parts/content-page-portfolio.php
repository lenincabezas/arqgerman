<?php
/**
 * content-page-portfolio.php
 *
 * @author    Denis Franchi
 * @package   Avik
 */
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <?php the_post_thumbnail( 'avik_single_article_av', array( 'class' => 'img-fluid mb-4', 'alt' => get_the_title() ))?>
     <div class="title-page mt-1">
	 <h1 class="title-portfolio-post"><?php the_title();?></h1>
     </div>
	    <div class="entry-content">
		   <?php
		    the_content();
		    wp_link_pages( array(
			  'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'avik' ),
			  'after'  => '</div>',) );
		   ?>
	    </div>
	    <?php if ( get_edit_post_link() ) : ?>
		  <footer class="entry-footer">
			  <?php
			   edit_post_link(
			   sprintf(
				 wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'avik' ),
						array(
							'span' => array(
							'class' => array(),
							),
						)
					 ),
					get_the_title()
				  ),
				  '<span class="edit-link">',
			   	'</span>'
			    );
		  	?>
		</footer><!-- .entry-footer -->
	  <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
