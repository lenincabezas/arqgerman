<?php
/**
 * section-blog.php
 *
 * @author    Denis Franchi
 * @package   Avik
 */
 ?>

<!-- Section Avik-Blog -->
<?php if ( false == esc_html( get_theme_mod( 'avik_enable_blog', false) )):?>
<section class="avik-blog" id="avik-blog">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="text-right blog pb-5 font-tit-blog" data-aos="zoom-in"><?php echo esc_html( get_theme_mod( 'avik_title_blog',__('Latest News','avik'))); ?></h2>
                <div class="row">
                  <?php
                  $avik_blog_cat = esc_url( get_theme_mod('avik_blog_category'));
                  $avik_blog_count =3;
                  $avik_new_query = new WP_Query( array( 'cat' => $avik_blog_cat  , 'showposts' => $avik_blog_count ));
                  while ( $avik_new_query->have_posts() ) : $avik_new_query->the_post(); ?>
                  <?php $avik_image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'avik_news_av');?>
                  <a href="<?php the_permalink();?>" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 link-blog" data-aos="fade-up">
                    <div class="blog-image">
                      <img src="<?php if ( $avik_image_attributes[0] ) :
                        echo esc_url($avik_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/avik-default.jpg'; endif; ?>">
                      </div>
                      <h2 class="blog-title"><?php the_title();?></h2>
                      <div class="blog-subtitle"><?php the_excerpt();?></div>
                      <?php if ( false == esc_html( get_theme_mod( 'avik_enable_time_comment_blog_home', false) )) :?>
                        <span class="blog-info"><i class="far fa-calendar"></i><?php echo get_the_date (); ?></span>
                        <span class="blog-info"><i class="fas fa-comment"></i><?php comments_number(); ?></span>
                      <?php endif; ?>
                    </a>
                  <?php endwhile;
                  wp_reset_query(); ?>
                </div>
              </div>
            </div>
          </div>
</section>
<div class="clear"></div>
<?php endif; ?>