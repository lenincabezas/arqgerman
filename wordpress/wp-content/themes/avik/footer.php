<?php
/**
* footer.php
*
* @author    Denis Franchi
* @package   Avik
*/
?>
</div> <!--Content -->
<footer class="title-power-df">
  <div class="jumbotron">
    <!-- Social Icons Contact -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 footer-widget">
        <?php dynamic_sidebar('widget_footer_one'); ?>
     </div>
     <div class="col-lg-4 footer-widget">
     </div>
     <div class="col-lg-4 footer-widget">
        <?php dynamic_sidebar('widget_footer_two'); ?>
     </div>
  </div>
  <?php if ( false == esc_html( get_theme_mod( 'avik_enable_social_footer', false) )) :?>
  <div class="row text-center">
    <div class="col-md-2"></div>
    <div class="col-md-8 avik-social-icons-footer" data-aos="zoom-in">
      <?php get_template_part( 'inc/social' ); ?>
    </div>
    <div class="col-md-2"></div>
  </div>
  <?php endif;?>
</div>
    <hr class="my-4 avik-footer">
    <div class="text-center">
    <?php if ( false == esc_html( get_theme_mod( 'avik_enable_copyright_footer', false) )) :?>
      <p>
        &copy; <?php echo esc_html(date("Y")); echo " "; echo bloginfo('name'); ?>
      </p>
    <?php endif; ?>
    <p class="title-power-df">
      <?php
      $avik_theme_author = esc_url(franchi_design_url );
      printf( esc_html__( 'Avik by %1$s', 'avik' ), '<a href="'.$avik_theme_author.'" rel="designer">Franchi Design</a>' );
      ?>
    </p>
    </div>
  </div>
</footer>
</div><!-- #page -->
<?php if ( false == esc_html( get_theme_mod( 'avik_enable_to_top', false) )) :?>
  <div id="avik-scrol-to-top"><p><?php esc_html_e( 'BACK TO TOP', 'avik')?></p></div>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
