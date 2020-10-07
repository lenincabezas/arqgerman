<?php
/**
 * section-services.php
 *
 * @author    Denis Franchi
 * @package   Avik
 */
 ?>

<!-- Section Services -->
<?php if ( false == esc_html( get_theme_mod( 'avik_enable_services', false) )):?>
<section class="tabs" id="services">
    <div class="tab cf is-visible">
      <div class="container">
        <h1 class="tab__title animated wow fadeInUp tab-fade text-right"><?php echo esc_html( get_theme_mod( 'avik_title_services',__('Our Services','avik'))); ?></h1>
        <div class="tab__subheading tab-fade animated text-right"><h2><?php echo esc_html( get_theme_mod( 'avik_subtitle_services',__('Fast and Guaranteed','avik'))); ?></h2></div>
        <ul class="tabs__list cf">
          <?php
          $avik_services_cat = esc_attr( get_theme_mod('avik_services_category'));
          $avik_services_count =4;
          $avik_new_query = new WP_Query( array( 'cat' => $avik_services_cat  , 'showposts' => $avik_services_count ));
          while ( $avik_new_query->have_posts() ) : $avik_new_query->the_post(); ?>
          <?php $avik_image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ));?>
          <li class="tab__development tabs__list-item tabs__list-item--fourth animated wow fadeInUp tab-fadeup">
            <div class="tab__development-img"  <?php if ( false == esc_html( get_theme_mod( 'avik_enable_effect_img_services', false) )) : ?>data-aos="fade-left" data-aos-duration="2000"<?php endif?>>
              <img class="img-avic-services-default" src="<?php if ( $avik_image_attributes[0] ) :
                echo esc_url($avik_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/avik-default.jpg'; endif; ?>">
              </div>
              <h2 class="tab__development-title one"><?php the_title();?></h2>
              <a href="<?php the_permalink();?>" class="btn btn-avik a-button-services" role="button" aria-pressed="true" <?php if ( false == esc_html( get_theme_mod( 'avik_enable_effect_img_services', false) )) : ?>data-aos="zoom-in" data-aos-duration="2000"<?php endif?>><?php echo esc_html(get_theme_mod('avik_title_button_services',__('Read more...','avik'))); ?></a>
            </li>
          <?php endwhile;
          wp_reset_query(); ?>
        </ul>
      </div>
    </div>
</section>
<?php endif; ?>