<?php
/**
 * section-contact.php
 *
 * @author    Denis Franchi
 * @package   Avik
 */
 ?>

<!-- Section Contact -->
<?php if ( false == esc_html( get_theme_mod( 'avik_enable_contact', false) )):?>
<section class="contact" id="contact">
      <div class="row paddong-contact">
            <!-- Address -->
            <div class="col-lg-6 address">
              <?php
              $avik_contact_cat = esc_url( get_theme_mod('avik_contact_category'));
              $avik_contact_count =1;
              $avik_new_query = new WP_Query( array( 'cat' => $avik_contact_cat  , 'showposts' => $avik_contact_count ));
              while ( $avik_new_query->have_posts() ) : $avik_new_query->the_post(); ?>
              <?php $avik_image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'avik_big');?>
              <h3 data-aos="fade-up"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
              <?php the_content(); ?>
              <!-- Social Icons Contact -->
              <?php if ( false == esc_html( get_theme_mod( 'avik_enable_social_contact', false) )) :?>
              <div class="avik-social-icons-contact" data-aos="zoom-in">
                <ul class="avik-social-icons-contact-ul">
                  <?php get_template_part( 'inc/social' ); ?>
                </ul>
              </div>
              <?php endif;?>
            </div>
            <!-- Widget Contact Form -->
            <div class="col-lg-6 widget-contact-contact">
              <?php dynamic_sidebar('widget_contact_form'); ?>
            </div>
          </div>
          <!-- Map -->
          <?php if ( false ==  esc_html(get_theme_mod( 'avik_enable_image_contact', false ) )) : ?>
            <div class="avik-map">
              <a href="<?php the_permalink();?>">
                <img src="<?php if ( $avik_image_attributes[0] ) :
                  echo  esc_url($avik_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/avik-default.jpg'; endif; ?>"/></a>
                </div>
          <?php endif; 
         endwhile;
        wp_reset_query();?>
</section>
<?php endif; ?>