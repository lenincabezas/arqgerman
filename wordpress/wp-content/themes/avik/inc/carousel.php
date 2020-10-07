<?php
/**
* carousel.php
*
* @author    Denis Franchi
* @package   Avik
*/
?>

<div class="container mt-5">
  <div id="avik-slider">
    <?php
    $avik_carousel_cat = esc_html( get_theme_mod('avik_carousel_setting'));
    $avik_carousel_count = esc_html( get_theme_mod('avik_count_setting'));
    $avik_new_query = new WP_Query( array( 'cat' => $avik_carousel_cat  , 'showposts' => $avik_carousel_count ));
    while ( $avik_new_query->have_posts() ) : $avik_new_query->the_post(); ?>
    <div class="item">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'carousel-pic' )?></a>
      <hr>
      <h3> <?php the_title();?> </h3>
    </div>
    <?php
  endwhile;
  wp_reset_query(); ?>
</div>
</div>
