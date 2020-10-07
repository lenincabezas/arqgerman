<?php
/**
 * section-whoweare.php
 *
 * @author    Denis Franchi
 * @package   Avik
 */
 ?>

 <!-- Section Who we are -->
<?php if ( false == esc_html( get_theme_mod( 'avik_enable_whoweare', false) )):?>
<?php
$avik_whowearecontent = esc_attr( get_theme_mod( 'avik_page_id_whoweare' ));
$avik_whoweare_count = 1;
$avik_mod = new WP_Query( array( 'page_id' => $avik_whowearecontent ,'showposts' => $avik_whoweare_count ) );
while ( $avik_mod->have_posts() ) : $avik_mod->the_post(); { ?>
  <?php $avik_image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'avik_big');?>
  <section id="who-we-are" class="avik-who-we-are">
    <div class="container">
    <div class="row m-0">
      <div class="col-xs-12 col-sm-4">
        <!-- Title who-we-are -->
        <h3><?php the_title();?></h3>
        <div><?php the_excerpt();?></div>
        <div class="avik-btn-who-we-are">
          <a href="<?php the_permalink();?>" class="btn btn-avik" role="button" aria-pressed="true" data-aos="zoom-in" data-aos-duration="2000"><?php echo esc_html(get_theme_mod('avik_title_button_services',__('Read more...','avik'))); ?></a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-8 who-we-are-image-frame">
        <div class="container">
        <div class="row">
          <!-- Image 1 who we are -->
          <?php if ( false == esc_html( get_theme_mod( 'avik_enable_second_image_whoweare', false) )) : ?>
          <div class="first-image-who-we-are col-md-6 col-xs-12" data-aos="fade-right" data-aos-duration="2000">
            <?php if ( class_exists( 'MultiPostThumbnails')) :
              MultiPostThumbnails::the_post_thumbnail(
                get_post_type(),
                'thumbnail-two-page');
              endif;?>
              <?php endif;?>
            </div>
            <!-- Image 2 who we are -->
            <div class="second-image-who-we-are col-md-6 col-xs-12" data-aos="zoom-in" data-aos-duration="2000">
              <img class="img-who-we-are border-who-we-are" src="<?php if ( $avik_image_attributes[0] ) :
                echo esc_url($avik_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/avik-default.jpg'; endif; ?>"/>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      </section>
      <div class="clear"></div>
    <?php }
  endwhile;
  wp_reset_query();?>
<?php endif; ?>