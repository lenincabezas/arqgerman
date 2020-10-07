<?php
/**
 * section-portfolio.php
 *
 * @author    Denis Franchi
 * @package   Avik
 */
 ?>

  <!--Section Portfolio -->
  <?php if ( false == esc_html( get_theme_mod( 'avik_enable_portfolio', false) )):?>
  <section class="portfolio" id="portfolio">
    <div class="container">
      <!-- Control tab Portfolio -->
      <div id="control-portfolio">
        <h3><?php echo esc_html( get_theme_mod( 'avik_title_portfolio','Portfolio')); ?></h3>
        <ul class="list-portfolio">
          <li class="portfolio-active all" onclick="avikfilterSelection('all')"><?php echo esc_html( get_theme_mod( 'avik_title_nav_all_portfolio',__('All','avik'))); ?></li>
          <?php if ( false == esc_html( get_theme_mod( 'avik_enable_portfolio_1', false) )):?>
          <li class="portfolio-active one" onclick="avikfilterSelection('1')"> <?php echo esc_html( get_theme_mod( 'avik_title_nav_1_portfolio',__('One','avik'))); ?></li>
          <?php endif;
           if ( false == esc_html( get_theme_mod( 'avik_enable_portfolio_2', false) )):?>
          <li class="portfolio-active two " onclick="avikfilterSelection('2')"> <?php echo esc_html( get_theme_mod( 'avik_title_nav_2_portfolio',__('Three','avik'))); ?></li>
          <?php endif; 
           if ( false == esc_html( get_theme_mod( 'avik_enable_portfolio_3', false) )):?>
          <li class="portfolio-active three" onclick="avikfilterSelection('3')"><?php echo esc_html( get_theme_mod( 'avik_title_nav_3_portfolio',__('Four','avik'))); ?></li>
          <?php endif; ?>
        </ul>
      </div>
      <div class="row">
        <!-- Column 1 -->
        <?php if ( false == esc_html( get_theme_mod( 'avik_enable_portfolio_1', false) )):
        $avik_portfolio_c_1_cat = esc_url( get_theme_mod('avik_portfolio_c_1_category'));
        $avik_portfolio_c_1_count =6;
        $avik_new_query = new WP_Query( array( 'cat' => $avik_portfolio_c_1_cat , 'showposts' => $avik_portfolio_c_1_count ));     
        while ( $avik_new_query->have_posts() ) : $avik_new_query->the_post();
         $avik_image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'avik_big');?>
        <div class="col-md-4 col-ms-6 column 1 tabcontent">
          <div class="content avik-portfolio">
          <a href="<?php the_permalink();?>">
              <img src="<?php if ( $avik_image_attributes[0] ) :
                echo esc_url($avik_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/avik-default.jpg'; endif; ?>"/></a>
              </div>
            </div>
            <?php
            endwhile;
           wp_reset_query();
            endif; ?>
          <!-- Column 2 -->
          <?php if ( false == esc_html( get_theme_mod( 'avik_enable_portfolio_2', false) )):
          $avik_portfolio_c_2_cat = esc_url( get_theme_mod('avik_portfolio_c_2_category'));
          $avik_portfolio_c_2_count =6;
          $avik_new_query = new WP_Query( array( 'cat' => $avik_portfolio_c_2_cat  , 'showposts' => $avik_portfolio_c_2_count ));
          while ( $avik_new_query->have_posts() ) : $avik_new_query->the_post(); 
          $avik_image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'avik_big');?>
          <div class="col-md-4 col-ms-6 column 2 tabcontent">
            <div class="content avik-portfolio">
              <a href="<?php the_permalink();?>">
                <img src="<?php if ( $avik_image_attributes[0] ) :
                  echo esc_url($avik_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/avik-default.jpg'; endif; ?>"/></a>
                </div>
              </div>
            <?php endwhile;
            wp_reset_query();
             endif; ?>
            <!-- Column 3 -->
            <?php if ( false == esc_html( get_theme_mod( 'avik_enable_portfolio_3', false) )):
            $avik_portfolio_c_3_cat = esc_url( get_theme_mod('avik_portfolio_c_3_category'));
            $avik_portfolio_c_3_count =6;
            $avik_new_query = new WP_Query( array( 'cat' => $avik_portfolio_c_3_cat  , 'showposts' => $avik_portfolio_c_3_count ));
            while ( $avik_new_query->have_posts() ) : $avik_new_query->the_post();
            $avik_image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'avik_big');?>
            <div class="col-md-4 col-ms-6 column 3 tabcontent">
              <div class="content avik-portfolio">
                <a href="<?php the_permalink();?>">
                  <img src="<?php if ( $avik_image_attributes[0] ) :
                    echo esc_url($avik_image_attributes[0]); else: echo esc_url(get_template_directory_uri()).'/images/avik-default.jpg'; endif; ?>"/></a>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_query();
               endif; ?>
              <div class="clearfix"></div>
            </div>
          </div>
</section>
<?php endif; ?>
       