<?php
/**
* custom-controls.php
*
* @author    Denis Franchi
* @package   Avik
*/

/* TABLE OF CONTENT

1 - General additional classes

1.1 - Class Toggle Switchs
1.2 - Class Category Control
1.2/B - Dropdown Posts Custom Control
1.3 - Class add panel
1.4 - Class TinyMCE
1.6 - Class Alpha Color
1.7 - Class Slider custom control
1.8 - Class Simple Notice
2 - CSS Customize

2.2 - Color Filter Header Home
2.3 - Font Size Logo
2.4 - Responsive avik_Enable Style

3 - Dependently-Contextual Customizer Controls

3.1 - Section Team
3.2 - Social Team Who we are
3.3 - Blog
3.4 - Social
3.5 - Filter Header Home


4 - General Sanitization

4.1 - Image Sanitization
4.2 - Toggle switch Sanitization
4.3 - Dropwown Pages Sanitization
4.4 - Dropwown Categoryes Sanitization
4.5 - Select sanitization function
4.6 - Alpha Color Sanitization
4.7 - Slider custom control Sanitization
4.8 - Text custom control Sanitization

*/

/* ------------------------------------------------------------------------- *
##  1 General additional classes */
/* ------------------------------------------------------------------------- */

/* ------------------------------------*
##  1.1 Class Toggle Switchs */
/* ----------------------------------- */

if ( class_exists( 'WP_Customize_Control' ) ) {

  class Avik_Toggle_Switch_Custom_control extends WP_Customize_Control {
    /**
    * The type of control being rendered
    */
    public $type = 'toogle_switch';
    /**
    * Enqueue our scripts and styles
    */
    public function enqueue(){
      wp_enqueue_style( 'avik_custom_controls_css', trailingslashit( get_template_directory_uri() ) . 'inc/css/avik-customizer.css', array(), '1.0', 'all' );
    }
    /**
    * Render the control in the customizer
    */
    public function render_content(){
      ?>
      <div class="toggle-switch-control">
        <div class="toggle-switch">
          <input type="checkbox" id="<?php echo esc_url($this->id); ?>" name="<?php echo esc_url($this->id); ?>" class="toggle-switch-checkbox" value="<?php echo esc_html( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?>>
          <label class="toggle-switch-label" for="<?php echo esc_url( $this->id ); ?>">
            <span class="toggle-switch-inner"></span>
            <span class="toggle-switch-switch"></span>

          </label>
        </div>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <?php if( !empty( $this->description ) ) { ?>
          <span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
        <?php } ?>
      </div>
      <?php
    }
  }
}

/* ------------------------------------*
##  1.2 Class Category Control */
/* ----------------------------------- */

if (class_exists('WP_Customize_Control')) {
  class Avik_Customize_Category_Control extends WP_Customize_Control {
    public function render_content() {
      $dropdown = wp_dropdown_categories(
        array(
          'name'              => '_customize-dropdown-category-' . $this->id,
          'echo'              => 0,
          'show_count'        => 1,
          'show_option_none'  => __( '&mdash; Select &mdash;','avik' ),
          'option_none_value' => 0,
          'selected'          => $this->value(),
        )
      );
      $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
      printf(
        '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
        $this->label,
        $dropdown

      );
    }
  }
}

/* ------------------------------------*
##  1.2/B Dropdown Posts Custom Control */
/* ----------------------------------- */

if (class_exists('WP_Customize_Control')) {
class Avik_Dropdown_Posts_Custom_Control extends WP_Customize_Control {
  /**
   * The type of control being rendered
   */
  public $type = 'dropdown_posts';
  /**
   * Posts
   */
  private $posts = array();
  /**
   * Constructor
   */
  public function __construct( $manager, $id, $args = array(), $options = array() ) {
    parent::__construct( $manager, $id, $args );
    // Get our Posts
    $this->posts = get_posts( $this->input_attrs );
  }

  /**
   * Render the control in the customizer
   */
  public function render_content() {
  ?>
    <div class="dropdown_posts_control">
      <?php if( !empty( $this->label ) ) { ?>
        <label for="<?php echo esc_attr( $this->id ); ?>" class="customize-control-title">
          <?php echo esc_html( $this->label ); ?>
        </label>
      <?php } ?>
      <?php if( !empty( $this->description ) ) { ?>
        <span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
      <?php } ?>
      <select name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>" <?php $this->link(); ?>>
        <?php
          if( !empty( $this->posts ) ) {
            foreach ( $this->posts as $post ) {
              printf( '<option value="%s" %s>%s</option>',
                $post->ID,
                selected( $this->value(), $post->ID, false ),
                $post->post_title
              );
            }
          }
        ?>
      </select>
    </div>
  <?php
  }
}
}
/* ------------------------------------*
##  1.3 Class add panel */
/* ----------------------------------- */

if ( class_exists( 'WP_Customize_Panel' ) ) {
  class Avik_WP_Customize_Panel extends WP_Customize_Panel {
    public $panel;
    public $type = 'pe_panel';
    public function json() {
      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
      $array['content'] = $this->get_content();
      $array['active'] = $this->active();
      $array['instanceNumber'] = $this->instance_number;
      return $array;
    }
  }
}
if ( class_exists( 'WP_Customize_Section' ) ) {
  class Avik_WP_Customize_Section extends WP_Customize_Section {
    public $section;
    public $type = 'pe_section';
    public function json() {
      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
      $array['content'] = $this->get_content();
      $array['active'] = $this->active();
      $array['instanceNumber'] = $this->instance_number;
      if ( $this->panel ) {
        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
      } else {
        $array['customizeAction'] = 'Customizing';
      }
      return $array;
    }
  }
}


/* ------------------------------------*
##  1.4 Class TinyMCE */
/* ----------------------------------- */

if (class_exists('WP_Customize_Control')) {

  class Avik_TinyMCE_Custom_control extends WP_Customize_Control {
    /**
    * The type of control being rendered
    */
    public $type = 'tinymce_editor';
    /**
    * Enqueue our scripts and styles
    */
    public function enqueue(){
      wp_enqueue_script( 'avik_custom_controls_js', trailingslashit( get_template_directory_uri() ) . 'inc/js/avik-class-customizer.js', array( 'jquery' ), '1.0', true );
      wp_enqueue_style( 'avik_custom_controls_css', trailingslashit( get_template_directory_uri() ) . 'inc/css/avik-customizer.css', array(), '1.0', 'all' );
      wp_enqueue_editor();
    }
    /**
    * Pass our TinyMCE toolbar string to JavaScript
    */
    public function to_json() {
      parent::to_json();
      $this->json['skyrockettinymcetoolbar1'] = isset( $this->input_attrs['toolbar1'] ) ? esc_js( $this->input_attrs['toolbar1'] ) : 'bold italic bullist numlist alignleft aligncenter alignright link';
      $this->json['skyrockettinymcetoolbar2'] = isset( $this->input_attrs['toolbar2'] ) ? esc_js( $this->input_attrs['toolbar2'] ) : '';
    }
    /**
    * Render the control in the customizer
    */
    public function render_content(){
      ?>
      <div class="tinymce-control">
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <?php if( !empty( $this->description ) ) { ?>
          <span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
        <?php } ?>
        <textarea id="<?php echo esc_url( $this->id ); ?>" class="customize-control-tinymce-editor" <?php $this->link(); ?>><?php echo esc_html( $this->value() ); ?></textarea>
      </div>
      <?php
    }
  }

}

/* ------------------------------------*
##  1.6 Class Alpha Color  */
/* ----------------------------------- */

/*
* @author Anthony Hortin <http://maddisondesigns.com>
* @license http://www.gnu.org/licenses/gpl-2.0.html
* @link https://github.com/maddisondesigns
*/

if (class_exists('WP_Customize_Control')) {
  class Avik_Customize_Alpha_Color_Control extends WP_Customize_Control {

    public $type = 'alpha-color';

    public $palette;

    public $show_opacity;

    public function enqueue() {
      wp_enqueue_script( 'avik_custom_controls_js', trailingslashit( get_template_directory_uri() ) . 'inc/js/avik-class-customizer.js', array( 'jquery', 'wp-color-picker' ), '1.0', true );
      wp_enqueue_style( 'avik_custom_controls_css', trailingslashit( get_template_directory_uri() ) . 'inc/css/avik-customizer.css', array( 'wp-color-picker' ), '1.0', 'all' );
    }

    public function render_content() {


      if ( is_array( $this->palette ) ) {
        $palette = implode( '|', $this->palette );
      } else {

        $palette = ( false === $this->palette || 'false' === $this->palette ) ? 'false' : 'true';
      }

      $show_opacity = ( false === $this->show_opacity || 'false' === $this->show_opacity ) ? 'false' : 'true';

      ?>
      <label>
        <?php
        if ( isset( $this->label ) && '' !== $this->label ) {
          echo '<span class="customize-control-title">' . esc_html(sanitize_text_field( $this->label )) . '</span>';
        }
        if ( isset( $this->description ) && '' !== $this->description ) {
          echo '<span class="description customize-control-description">' . esc_html(sanitize_text_field( $this->description )) . '</span>';
        } ?>
      </label>
      <input class="alpha-color-control" type="text" data-show-opacity="<?php echo esc_html($show_opacity); ?>" data-palette="<?php echo esc_html( $palette ); ?>" data-default-color="<?php echo esc_html( $this->settings['default']->default ); ?>" <?php $this->link(); ?>  />
      <?php
    }
  }
}

/* ------------------------------------*
##  1.7 Class Slider custom control  */
/* ----------------------------------- */

if (class_exists('WP_Customize_Control')) {

  class Avik_Slider_Custom_Control extends WP_Customize_Control {
    /**
    * The type of control being rendered
    */
    public $type = 'slider_control';
    /**
    * Enqueue our scripts and styles
    */
    public function enqueue() {
      wp_enqueue_script( 'avik_custom_controls_js', trailingslashit( get_template_directory_uri() ) . 'inc/js/avik-class-customizer.js', array( 'jquery', 'jquery-ui-core' ), '1.0', true );
      wp_enqueue_style( 'avik_custom_controls_css', trailingslashit( get_template_directory_uri() ) . 'inc/css/avik-customizer.css', array(), '1.0', 'all' );
    }
    /**
    * Render the control in the customizer
    */
    public function render_content() {
      ?>
      <div class="slider-custom-control">
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span><input type="number" id="<?php echo esc_html( $this->id ); ?>" name="<?php echo esc_html( $this->id ); ?>" value="<?php echo esc_html( $this->value() ); ?>" class="customize-control-slider-value" <?php $this->link(); ?> />
        <div class="slider" slider-min-value="<?php echo esc_html( $this->input_attrs['min'] ); ?>" slider-max-value="<?php echo esc_html( $this->input_attrs['max'] ); ?>" slider-step-value="<?php echo esc_html( $this->input_attrs['step'] ); ?>"></div><span class="slider-reset dashicons dashicons-image-rotate" slider-reset-value="<?php echo esc_html( $this->value() ); ?>"></span>
      </div>
      <?php
    }
  }
}

/* -----------------------------------------*
##  1.8 Class Simple Notice Custom Control  */
/* ---------------------------------------- */

if (class_exists('WP_Customize_Control')) {

class Avik_Simple_Notice_Custom_Control extends WP_Customize_Control {
  /**
   * The type of control being rendered
   */
  public $type = 'simple_notice';
  /**
   * Render the control in the customizer
   */
  public function render_content() {
    $allowed_html = array(
      'a' => array(
        'href' => array(),
        'title' => array(),
        'class' => array(),
        'target' => array(),
      ),
      'br' => array(),
      'em' => array(),
      'hr'=> array(),
      'strong' => array(),
      'i' => array(
        'class' => array()
      ),
      'button' => array(
        'class' => array()
      ),
      'div' => array(
        'style' => array()
      ),
      'p' => array(
        'style' => array()
      ),
      'span' => array(
        'class' => array(),
      ),
      'code' => array(),
    );
  ?>
    <div class="simple-notice-custom-control">
      <?php if( !empty( $this->label ) ) { ?>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
      <?php } ?>
      <?php if( !empty( $this->description ) ) { ?>
        <span class="customize-control-description"><?php echo wp_kses( $this->description, $allowed_html ); ?></span>
      <?php } ?>
    </div>

<!-- Style for Custom Simple Notices -->
<style>

.simple-notice-custom-control{
  padding-top: 2em;
  border: 1px solid #ccc;
  background-color: #fff;
}

.simple-notice-custom-control span{
  padding:0 5px 0 5px;
}

.simple-notice-custom-control{
  font-family: 'Montserrat', sans-serif;
  transition-duration: 0.7s;
  transition-timing-function: ease;
}


.customize-control-description{
  font-style: normal!important;
}

.simple-notice-custom-control button {
  background: transparent;
  color: #fff;
  padding-top: 10px;
  padding-left: 10px;
  padding-right: 10px;
  padding-bottom:10px;
  font-size: 14px;
  position: relative;
  margin-top: 10px;
  margin-bottom: 10px;
  border-radius: 4px;
  border:1px solid #ccc!important;
  background-color:#82B541!important
}

.simple-notice-custom-control a{
  color: #fff;
  text-decoration: none;
}

.simple-notice-custom-control a:hover{
   color: #fff!important;
}

.simple-notice-custom-control button:hover {
   background-color: gray;
}

</style>
<?php
}
}
}

/** Simple Notice Custom Control */

if (class_exists('WP_Customize_Control')) {

  class Avik_Simple_Notice_s_Custom_Control extends WP_Customize_Control {
  /**
   * The type of control being rendered
   */
  public $type = 'simple_notice';
  /**
   * Render the control in the customizer
   */
  public function render_content() {
    $allowed_html = array(
      'a' => array(
        'href' => array(),
        'title' => array(),
        'class' => array(),
        'target' => array(),
      ),
      'br' => array(),
      'em' => array(),
      'strong' => array(),
      'i' => array(
        'class' => array()
      ),
      'span' => array(
        'class' => array(),
      ),
      'code' => array(),
    );
  ?>
    <div class="simple-notice-custom-control-s">
      <?php if( !empty( $this->label ) ) { ?>
        <span class="customize-control-title-s"><b><?php echo esc_html( $this->label ); ?></b></span>
      <?php } ?>
      <?php if( !empty( $this->description ) ) { ?>
        <span class="customize-control-description-s"><b><?php echo wp_kses( $this->description, $allowed_html ); ?></b></span>
      <?php } ?>
    </div>
    <!-- Style for Custom Simple Notices -->
			<style>
				.simple-notice-custom-control-s{
				border-bottom: 1px solid #2885bb;
			}
			.simple-notice-custom-control-s span{
				font-weight:bold;
			}
			</style>
  <?php
  }
}
}

/* ------------------------------------------------------------------------- *
##  2 CSS Customize */
/* ------------------------------------------------------------------------- */

function avik_customizer_css() {

   if ( false == esc_html( get_theme_mod( 'avik_enable_filter_home', false) )) :
  ?>

<style>

/* ------------------------------------------------------------------------- *
## 2.2 Color Filter Header Home */
/* ------------------------------------------------------------------------- */

.filter-header{
  background-color:<?php echo esc_attr( get_theme_mod('avik_color_filter_header', 'rgba(122,122,122,0.05)')); ?>;
}

</style>

<?php endif;?>

<style>

/* ------------------------------------------------------------------------- *
## 2.3 Font Size Logo */
/* ------------------------------------------------------------------------- */

.avik-custom-logo-body{width:<?php echo esc_attr( get_theme_mod('avik_font_size_logo', '160')); ?>px ;}

</style>

<!-- 2.4 Responsive Enable Style  -->

<!-- Scroll to top -->
<?php if ( true == esc_html( get_theme_mod( 'avik_position_top', true) )) : ?>
<style>
#avik-scrol-to-top{
  right: 40px;
}

</style>
<?php endif; ?>
<?php if ( false == esc_html( get_theme_mod( 'avik_position_top', true) )) : ?>
<style>
#avik-scrol-to-top{
  left: 40px;
}

</style>
<?php endif; ?>
<?php if ( true == esc_html( get_theme_mod( 'avik_enable_to_top_media', false) )) : ?>

<style>

@media (max-width: 699px) {

    #avik-scrol-to-top{
      display: none!important;
    }

}

</style>
<?php endif; ?>

<!-- Sidebar smartphone -->

<?php if ( true == esc_html( get_theme_mod( 'avik_enable_sidebar_media', false) )) : ?>

  <style>

  @media (max-width: 699px) {

    #secondary{
      display: none!important;
    }
  }

</style>

<?php endif; 

/* ------------------------------------------------------------------------- *
##  Font Family */
/* ------------------------------------------------------------------------- */

?>

<style>
/* Font Family Title */
 h1,h2,h3,h4,h5,h6{
	font-family:'<?php echo esc_html(get_theme_mod('avik_title_font','Montserrat')); ?>';
 }

 /*Font Family Subtitle */
 p,span,li{
	font-family:'<?php echo esc_html(get_theme_mod('avik_subtitle_font','Montserrat')); ?>';
 }

</style>
<?php 

/* ------------------------------------------------------------------------- *
##  Text Header automatic */
/* ------------------------------------------------------------------------- */

?>

<style>

.text-image-static{
  padding-top: <?php echo esc_attr( get_theme_mod('avik_padding_top_text_static', 5)); ?>em;
  padding-left: <?php echo esc_attr( get_theme_mod('avik_padding_left_text_static', 5)); ?>em;
}

span#avikservices{
  font-size: <?php echo esc_attr( get_theme_mod('avik_font_size_text_static', 32)); ?>px;
}

.typed-cursor{
  font-size: <?php echo esc_attr( get_theme_mod('avik_font_size_cursor_static', 40)); ?>px;
}

</style>

<?php if ( true == esc_html( get_theme_mod( 'avik_enable_text_static_bold', false) )) : ?>

<style>

span#avikservices,.typed-cursor{
  font-weight: 300;
}

</style>

<?php endif; ?>

<?php if ( false == esc_html( get_theme_mod( 'avik_enable_text_static_bold', false) )) : ?>

<style>

span#avikservices,.typed-cursor{
  font-weight: bold;
}

</style>

<?php endif; ?>

<!-- Margin Section -->
<style>
#who-we-are{
  margin-top:<?php echo esc_attr( get_theme_mod('avik_margin_top_section_whoweare', 4)); ?>em;
  margin-bottom:<?php echo esc_attr( get_theme_mod('avik_margin_bottom_section_whoweare', 0)); ?>em;
}

#services{
  margin-top:<?php echo esc_attr( get_theme_mod('avik_margin_top_section_services', 8)); ?>em;
  margin-bottom:<?php echo esc_attr( get_theme_mod('avik_margin_bottom_section_services', 4)); ?>em;
  padding-bottom:<?php echo esc_attr( get_theme_mod('avik_padding_bottom_section_services', 0)); ?>em;
}

#portfolio{
  margin-top:<?php echo esc_attr( get_theme_mod('avik_margin_top_section_portfolio', 0)); ?>em;
  margin-bottom:<?php echo esc_attr( get_theme_mod('avik_margin_bottom_section_portfolio', 5)); ?>em;
}

#avik-blog{
  margin-top:<?php echo esc_attr( get_theme_mod('avik_margin_top_section_avik-blog', 3)); ?>em;
  margin-bottom:<?php echo esc_attr( get_theme_mod('avik_margin_bottom_section_avik-blog', 5)); ?>em;
  padding-bottom:<?php echo esc_attr( get_theme_mod('avik_padding_bottom_section_avik-blog', 2)); ?>em;
}

#contact{
  margin-top:<?php echo esc_attr( get_theme_mod('avik_margin_top_section_contact', 6)); ?>em;
  margin-bottom:<?php echo esc_attr( get_theme_mod('avik_margin_bottom_section_contact', 0)); ?>em;
}

.site-post-page{
  margin-top:<?php echo esc_attr( get_theme_mod('avik_margin_top_site-av', 10)); ?>em;
}

/* Font Size Title in Homepage */

h3.tit-who,.portfolio h3,h2.font-tit-blog,.address h3,.tabs h1.tab__title,.avik-who-we-are h3,.title-partenrs h2,.title-whoweare h3,
.title-team h3,.brands h3,.avik-info-img-page-contact h1{
  font-size:<?php echo esc_attr( get_theme_mod('avik_font_size_title_general', 32)); ?>px;
}


/* ------------------------------------------------------------------------- *
##  Who we are */
/* ------------------------------------------------------------------------- */

img.img-who-we-are{
  max-width: <?php echo esc_attr( get_theme_mod('avik_with_image_p_who_we', 350)); ?>px!important;
  height: <?php echo esc_attr( get_theme_mod('avik_height_image_p_who_we', 400)); ?>px!important;
  margin-left:<?php echo esc_attr( get_theme_mod('avik_margin_left_image_p_who_we', 0)); ?>em;
}

.second-image-who-we-are{
  margin-top:<?php echo esc_attr( get_theme_mod('avik_margin_top_image_p_who_we', 5)); ?>em;
}

.first-image-who-we-are img{
  max-width: <?php echo esc_attr( get_theme_mod('avik_with_image_s_who_we', 350)); ?>px!important;
  height: <?php echo esc_attr( get_theme_mod('avik_height_image_s_who_we', 400)); ?>px!important;
  margin-top:<?php echo esc_attr( get_theme_mod('avik_margin_top_image_s_who_we', 0)); ?>em;
  margin-left:<?php echo esc_attr( get_theme_mod('avik_margin_left_image_s_who_we', 0)); ?>em;
}

</style>

<?php

/* ------------------------------------------------------------------------- *
##  Services */
/* ------------------------------------------------------------------------- */
?>
<style>

.img-avic-services-default{
  width:  <?php echo esc_attr( get_theme_mod('avik_with_image_s_services', 80)); ?>px!important;
  height: <?php echo esc_attr( get_theme_mod('avik_height_image_s_services', 80)); ?>px!important;
}

/* Contact */

.widget-contact-contact h3{
  margin-top:<?php echo esc_attr( get_theme_mod('avik_padding_top_widget_contact', 1)); ?>em;
}

.contact img{
  max-height: <?php echo esc_attr( get_theme_mod('avik_height_img_contact', 500)); ?>px;
}

</style>
<?php if ( false == esc_html( get_theme_mod( 'avik_enable_effect_image_contact', false) )) : ?>

<style>
.contact img:hover{
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
  transition: all .4s ease-in-out;
}
</style>
<?php endif;?>

<style>
/* Who we are Page */

.header-image-whoweare img{
  max-height:<?php echo esc_attr( get_theme_mod('avik_height_image_whowearepage', 500)); ?>px;
}

.second-image-who-we-are-page img{
  max-height:<?php echo esc_attr( get_theme_mod('avik_height_image_s_whowearepage', 500)); ?>px;
}

.text-image-whoweare{
  padding-top:<?php echo esc_attr( get_theme_mod('avik_padding_cursor_image_whowearepage', 5)); ?>em;
}
</style>

<?php if ( false == esc_html( get_theme_mod( 'avik_enable_ob_img_whoweare', true) )) : ?>

<style>
.header-image-whoweare img{
  object-fit: cover;
}

</style>
<?php endif;?>

<style>

/* Swervices Page */

.header-image-services img{
  max-height:<?php echo esc_attr( get_theme_mod('avik_height_image_services_page', 500)); ?>px;
}


.text-image-services{
  padding-top:<?php echo esc_attr( get_theme_mod('avik_padding_cursor_image_services_page', 5)); ?>em;
}
</style>

<?php if ( false == esc_html( get_theme_mod( 'avik_enable_ob_img_services_page', true) )) : ?>

<style>
.header-image-services img{
  object-fit: cover;
}

</style>
<?php endif;?>

<style>
/* Nav Menu */

.navbar a{
  font-size:<?php echo esc_attr( get_theme_mod('avik_font_size_menu', 13)); ?>px;
}

.navbar-collapse li {
  padding: 0 <?php echo esc_attr( get_theme_mod('avik_padding_menu', 10)); ?>px;
}

.navbar,.dropdown-menu {
  background-color:<?php echo esc_attr( get_theme_mod('avik_background_color_menu', '#000')); ?>;
}

@media (max-width: 988px) {
.navbar.hide-menu{
  background-color: <?php echo esc_attr( get_theme_mod('avik_background_color_menu', '#000'))?>!important;
}

.navbar.hide-menu a,.navbar.hide-menu .avik-logo p{
  color:<?php echo esc_attr( get_theme_mod('avik_color_menu', '#000')); ?>!important;
}
}

.navbar a:hover,.navbar.hide-menu:hover,.navbar a.active{
  color:<?php echo esc_attr( get_theme_mod('avik_color_menu_active', '#777777')); ?>;
}

.navbar.hide-menu,.navbar.hide-menu .dropdown-menu,.navbar.hide-menu .dropdown-menu a:hover{
  background-color: <?php echo esc_attr( get_theme_mod('avik_background_color_menu_hide', 'rgba(0,32,122,0)')); ?>;
}

.navbar.hide-menu a,.navbar.hide-menu .avik-logo p{
  color:<?php echo esc_attr( get_theme_mod('avik_color_menu_hide', '#fff')); ?>;
}

.navbar a,.avik-logo p,span.close.denis-x,.navbar-toggler-icon i{
  color:<?php echo esc_attr( get_theme_mod('avik_color_menu', '#fff')); ?>;
}

.dropdown-item:hover{
  background-color:<?php echo esc_attr( get_theme_mod('avik_background_color_menu_item', '#ccc')); ?>!important;
}

</style>

<?php if ( false == esc_html( get_theme_mod( 'avik_enable_shadow_menu', false) )) : ?>

<style>
.navbar {
  -webkit-box-shadow: 1px -4px 12px 1px #000000;
  box-shadow: 1px -4px 12px 1px #000000;
}
</style>
<?php endif;?>

<style>

/* 404 Page */

.image-404 img{
  max-height:<?php echo esc_attr( get_theme_mod('avik_height_image_404', 400)); ?>px;
}

</style>

<?php if ( false == esc_html( get_theme_mod( 'avik_enable_ob_img_404', false) )) : ?>

<style>
.image-404 img{
  object-fit: cover;
}

</style>
<?php endif;?>

<?php

}
add_action( 'wp_head', 'avik_customizer_css' );


/* ------------------------------------------------------------------------- *
##  3 Dependently-Contextual Customizer Controls */
/* ------------------------------------------------------------------------- */

/* ---------------------------------------- *
##  3.1 Section Team */
/* --------------------------------------- */

// Enable Section Team

function avik_enable_team_whoweare($control) {

  $option = $control->manager->get_setting('avik_enable_team_whoweare');

  return $option->value() == 'avik_title_general_team_whoweare';
  return $option->value() == 'avik_color_social_icons_team';
  return $option->value() == 'avik_color_hover_social_icons_team';

}

/* --------------------------------------*
##  3.2 Social Team Who we are */
/* -------------------------------------- */

// avik_Enable Icon Facebook 1

function avik_enable_facebook_icon_team_1($control) {

  $option = $control->manager->get_setting('avik_enable_facebook_icon_team_1');

  return $option->value() == 'avik_link_facebook_icon_team_1';

}

// Enable Icon Twitter 1

function avik_enable_twitter_icon_team_1($control) {

  $option = $control->manager->get_setting('avik_enable_twitter_icon_team_1');

  return $option->value() == 'avik_link_twitter_icon_team_1';

}

// Enable Icon Instagram 1

function avik_enable_instagram_icon_team_1($control) {

  $option = $control->manager->get_setting('avik_enable_instagram_icon_team_1');

  return $option->value() == 'avik_link_instagram_icon_team_1';

}

// Enable Icon Linkedin 1

function avik_enable_linkedin_icon_team_1($control) {

  $option = $control->manager->get_setting('avik_enable_linkedin_icon_team_1');

  return $option->value() == 'avik_link_linkedin_icon_team_1';

}

// Enable Google Plus 1

function avik_enable_google_plus_icon_team_1($control) {

  $option = $control->manager->get_setting('avik_enable_google_plus_icon_team_1');

  return $option->value() == 'avik_link_google_plus_icon_team_1';

}

// avik_Enable Icon Facebook 2

function avik_enable_facebook_icon_team_2($control) {

  $option = $control->manager->get_setting('avik_enable_facebook_icon_team_2');

  return $option->value() == 'avik_link_facebook_icon_team_2';

}

// Enable Icon Twitter 2

function avik_enable_twitter_icon_team_2($control) {

  $option = $control->manager->get_setting('avik_enable_twitter_icon_team_2');

  return $option->value() == 'avik_link_twitter_icon_team_2';

}

// Enable Icon Instagram 2

function avik_enable_instagram_icon_team_2($control) {

  $option = $control->manager->get_setting('avik_enable_instagram_icon_team_2');

  return $option->value() == 'avik_link_instagram_icon_team_2';

}

// Enable Icon Linkedin 2

function avik_enable_linkedin_icon_team_2($control) {

  $option = $control->manager->get_setting('avik_enable_linkedin_icon_team_2');

  return $option->value() == 'avik_link_linkedin_icon_team_2';

}

// Enable Google Plus 2

function avik_enable_google_plus_icon_team_2($control) {

  $option = $control->manager->get_setting('avik_enable_google_plus_icon_team_2');

  return $option->value() == 'avik_link_google_plus_icon_team_2';

}

// Enable Icon Facebook 3

function avik_enable_facebook_icon_team_3($control) {

  $option = $control->manager->get_setting('avik_enable_facebook_icon_team_3');

  return $option->value() == 'avik_link_facebook_icon_team_3';

}

// Enable Icon Twitter 3

function avik_enable_twitter_icon_team_3($control) {

  $option = $control->manager->get_setting('avik_enable_twitter_icon_team_3');

  return $option->value() == 'avik_link_twitter_icon_team_3';

}

// Enable Icon Instagram 3

function avik_enable_instagram_icon_team_3($control) {

  $option = $control->manager->get_setting('avik_enable_instagram_icon_team_3');

  return $option->value() == 'avik_link_instagram_icon_team_3';

}

// Enable Icon Linkedin 3

function avik_enable_linkedin_icon_team_3($control) {

  $option = $control->manager->get_setting('avik_enable_linkedin_icon_team_3');

  return $option->value() == 'avik_link_linkedin_icon_team_3';

}

// Enable Google Plus 3

function avik_enable_google_plus_icon_team_3($control) {

  $option = $control->manager->get_setting('avik_enable_google_plus_icon_team_3');

  return $option->value() == 'avik_link_google_plus_icon_team_3';

}


/* --------------------------------------*
##  3.3 Blog */
/* -------------------------------------- */


// Enable carousel Blog

function avik_enable_carousel($control) {

  $option = $control->manager->get_setting('avik_enable_carousel');

  return $option->value() == 'avik_carousel_category';
  return $option->value() == 'avik_carousel_count';

}

/* --------------------------------------*
##  3.4 Social */
/* -------------------------------------- */

// Facebook

function avik_enable_facebook_social($control) {

  $option = $control->manager->get_setting('avik_enable_facebook_social');

  return $option->value() == 'avik_link_facebook_social';

}

// Twitter

function avik_enable_twitter_social($control) {

  $option = $control->manager->get_setting('avik_enable_twitter_social');

  return $option->value() == 'avik_link_twitter_social';

}

// Google Plus

function avik_enable_google_plus_social($control) {

  $option = $control->manager->get_setting('avik_enable_google_plus_social');

  return $option->value() == 'avik_link_google_plus_social';

}

// Dribbble

function avik_enable_dribbble_social($control) {

  $option = $control->manager->get_setting('avik_enable_dribbble_social');

  return $option->value() == 'avik_link_dribbble_social';

}

// Tumblr

function avik_enable_tumblr_social($control) {

  $option = $control->manager->get_setting('avik_enable_tumblr_social');

  return $option->value() == 'avik_link_tumblr_social';

}

// Instagram

function avik_enable_instagram_social($control) {

  $option = $control->manager->get_setting('avik_enable_instagram_social');

  return $option->value() == 'avik_link_instagram_social';

}

// Linkedin

function avik_enable_linkedin_social($control) {

  $option = $control->manager->get_setting('avik_enable_linkedin_social');

  return $option->value() == 'avik_link_linkedin_social';

}

// Youtube

function avik_enable_youtube_social($control) {

  $option = $control->manager->get_setting('avik_enable_youtube_social');

  return $option->value() == 'avik_link_youtube_social';

}

// Pinterest

function avik_enable_pinterest_social($control) {

  $option = $control->manager->get_setting('avik_enable_pinterest_social');

  return $option->value() == 'avik_link_pinterest_social';

}

// Flickr

function avik_enable_flickr_social($control) {

  $option = $control->manager->get_setting('avik_enable_flickr_social');

  return $option->value() == 'avik_link_flickr_social';

}

// Github

function avik_enable_github_social($control) {

  $option = $control->manager->get_setting('avik_enable_github_social');

  return $option->value() == 'avik_link_github_social';

}


/* --------------------------------------*
##  3.5 Filter Header Home */
/* -------------------------------------- */

// Color Filter Header Home

function avik_enable_filter_home($control) {

  $option = $control->manager->get_setting('avik_enable_filter_home');

  return $option->value() == 'avik_color_filter_header';

}

/* ------------------------------------------------------------------------- *
##  4 General Sanitization */
/* ------------------------------------------------------------------------- */

/* ----------------------------------------------- *
##  4.1 Image Sanitization */
/* ------------------------------------------------*/

if ( ! function_exists( 'avik_sanitize_file' ) ) {
  function avik_sanitize_file( $file, $setting ) {

    //allowed file types
    $mimes = array(
      'jpg|jpeg|jpe' => 'image/jpeg',
      'gif'          => 'image/gif',
      'png'          => 'image/png',
      'mp4'          => 'video/mp4',
      'bmp'          => 'image/bmp',
      'tif|tiff'     => 'image/tiff',
      'ico'          => 'image/x-icon',
    );

    //check file type from file name
    $file_ext = wp_check_filetype( $file, $mimes );

    //if file has a valid mime type return it, otherwise return default
    return ( $file_ext['ext'] ? $file : $setting->default );
  }
}

/* ----------------------------------------------- *
##  4.2 Toggle switch Sanitization */
/* ------------------------------------------------*/

if ( ! function_exists( 'avik_switch_sanitization' ) ) {
  function avik_switch_sanitization( $input ) {
    if ( true === $input ) {
      return 1;
    } else {
      return 0;
    }
  }
}

/* ----------------------------------------------- *
##  4.3 Dropwown Pages Sanitization */
/* ------------------------------------------------*/


function avik_sanitize_dropdown_pages( $page_id, $setting ) {
  $page_id = absint( $page_id );
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/* ----------------------------------------------- *
##  4.4 Dropwown Categoryes Sanitization */
/* ------------------------------------------------*/

function avik_sanitize_category_select( $cat_id, $setting) {
  $cat_id = absint($cat_id);
  return is_string(get_the_category_by_ID( $cat_id )) ? $cat_id :  $setting->default;
}


/* ----------------------------------------------- *
##  4.5 Select sanitization function */
/* ------------------------------------------------*/

function avik_sanitize_select( $input, $setting ){

  //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
  $input = sanitize_key($input);

  //get the list of possible select options
  $choices = $setting->manager->get_control( $setting->id )->choices;

  //return input if valid or return default option
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}


/* ----------------------------------------------- *
##  4.6 Alpha Color Sanitization  */
/* ------------------------------------------------*/
/**
*@param  string	Input to be sanitized
*@return string	Sanitized input
*/

if ( ! function_exists( 'avik_hex_rgba_sanitization' ) ) {
  function avik_hex_rgba_sanitization( $input, $setting ) {
    if ( empty( $input ) || is_array( $input ) ) {
      return $setting->default;
    }

    if ( false === strpos( $input, 'rgba' ) ) {

      $input = sanitize_hex_color( $input );
    } else {

      $input = str_replace( ' ', '', $input );
      sscanf( $input, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha );
      $input = 'rgba(' . avik_in_range( $red, 0, 255 ) . ',' . avik_in_range( $green, 0, 255 ) . ',' . avik_in_range( $blue, 0, 255 ) . ',' . avik_in_range( $alpha, 0, 1 ) . ')';
    }
    return $input;
  }
}

/**
* @param  number	Input to be sanitized
* @return number	Sanitized input
*/
if ( ! function_exists( 'avik_in_range' ) ) {
  function avik_in_range( $input, $min, $max ){
    if ( $input < $min ) {
      $input = $min;
    }
    if ( $input > $max ) {
      $input = $max;
    }
    return $input;
  }
}


/* ----------------------------------------------- *
##  4.7 Slider custom control Sanitization  */
/* ------------------------------------------------*/

/**
* @param  string		Input value to check
* @return integer	Returned integer value
*/
if ( ! function_exists( 'avik_sanitize_integer' ) ) {
  function avik_sanitize_integer( $input ) {
    return (int) $input;
  }
}

/* ----------------------------------------------- *
##  4.8 Text custom control Sanitization  */
/* ------------------------------------------------*/

if ( ! function_exists( 'avik_text_sanitization' ) ) {
  function avik_text_sanitization( $input ) {
    if ( strpos( $input, ',' ) !== false) {
      $input = explode( ',', $input );
    }
    if( is_array( $input ) ) {
      foreach ( $input as $key => $value ) {
        $input[$key] = sanitize_text_field( $value );
      }
      $input = implode( ',', $input );
    }
    else {
      $input = sanitize_text_field( $input );
    }
    return $input;
  }
}
