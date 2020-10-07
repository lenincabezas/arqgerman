<?php
/**
* avik-support.php
* @link https://www.denisfranchi.com
*
* @package Avik
*
*/

function avik_page_display() {
?>

 <div class="at-header-admin">
      <div class="at-logo-admin">
		   	<h2><?php echo esc_html__('Avik','avik');?></h2>
		  	<span><?php echo esc_html__('V 1.4.4','avik');?></span>
		  </div>
		   <div class="at-logo-icon-admin">
		   	<span class="dashicons dashicons-screenoptions"></span>
	     </div>
   </div>
<!-- Tab links -->
<div class="avik-tab-support">
	<div class="tab">
		<button class="tablinks" onclick="avikopenGuide(event, 'Welcome')"id="defaultOpen"><?php esc_html_e('Welcome','avik'); ?></button>
		<button class="tablinks" onclick="avikopenGuide(event, 'Help')"><?php esc_html_e('Help','avik'); ?></button>
		<button class="tablinks" onclick="avikopenGuide(event, 'Options')"><?php esc_html_e('Pro Version','avik'); ?></button>
		<button class="tablinks" onclick="avikopenGuide(event, 'Changelog')"><a class="at-nav-link" href="<?php echo esc_url(avik_url_updates_theme); ?>" target="_blank"><?php echo esc_html('Changelog','avik')?></a></button>
		<button class="tablinks" onclick="avikopenGuide(event, 'Starter Demos')"><a class="at-nav-link" href="<?php echo esc_url(avik_url_demos_theme); ?>" target="_blank"><?php echo esc_html('Starter Demos','avik')?></a></button>
	</div>
	<!-- Tab content -->
	<!-- Welcome -->
	<div id="Welcome" class="tabcontent">
		<h3 class="avik-welkome-support-title"><?php esc_html_e('Welcome to Avik!','avik' ); ?></h3>
		<p class="avik-welkome-support"><?php esc_html_e('Thank you for choosing Avik.','avik');?><br>
		    <?php esc_html_e('The theme is ready to be used. You can customize everything you want in a few simple clicks directly from the front end.', 'avik' ); ?><br>
			<?php esc_html_e('In this new version, many improvements have been made, and many controls have been added to personalize your site to the maximum.','avik')?><br>
			<?php esc_html_e('If you have problems with this new version, do not hesitate to ask for support in our','avik')?><a class="av-link-news" target="_blank" href="<?php echo esc_url(avik_forum_theme)?>"><?php esc_html_e('Forum.','avik')?></a><?php esc_html_e('Now we also offer support for the Free version.','avik')?><br>
			<?php esc_html_e('A big news is that you can import demos with a few simple steps.Our demos are always in development, so new ones will always come out!','avik')?><br>
			<?php esc_html_e('Here you can view the demos and see the previews:','avik')?><a class="av-link-news" target="_blank" href="<?php echo esc_url(avik_url_demos_theme)?>"><?php esc_html_e('Demos Avik','avik')?></a>
		  </p>
		  <div class="container">
		  <h2><?php _e('Important links to get you started with Avik','avik')?></h2>
		  <div class="row">
		  <div class="col-md-4">
		    <h3><?php _e('Get Started','avik')?></h3>
		    <button class="at-button-dem"><a target="_blank" href="<?php echo esc_url(avik_url_basic_documentation);?>"><?php _e('Learn Basics','avik')?></a></button>
		  </div>
		  <div class="col-md-4">
			<h3><?php _e('Next Steps','avik')?></h3>
			<ul>
			  <li><span class="dashicons dashicons-media-document"></span><a target="_blank" href="<?php echo esc_url(avik_url_documentation_theme);?>"><?php _e('Documentation','avik')?></a></li>
			  <li><span class="dashicons dashicons-layout"></span><a target="_blank" href="<?php echo esc_url(avik_url_demos_theme);?>"><?php _e('Starter Demos','avik')?></a></li>
			  <li><span class="dashicons dashicons-migrate"></span><a target="_blank" href="<?php echo esc_url(avik_url_promotion);?>"><?php _e('Premium Version','avik')?></a></li>
			</ul>
		</div>
		  <div class="col-md-4">
		    <h3><?php _e('Further Actions','avik')?></h3>
			<ul>
			  <li><span class="dashicons dashicons-businessperson"></span><a target="_blank" href="<?php echo esc_url(avik_url_support_theme);?>"><?php _e('Got theme support question?','avik')?></a></li>
			  <li><span class="dashicons dashicons-thumbs-up"></span><a target="_blank" href="<?php echo esc_url(avik_review_theme);?>"><?php _e('Leave a review','avik')?></a></li>
			  <li><span class="dashicons dashicons-admin-appearance"></span><a target="_blank" href="<?php echo esc_url(avik_url_updates_theme);?>"><?php _e('Changelog','avik')?></a></li>
			</ul>
		  </div>
         </div>
		</div>
	</div>
	<!-- Help -->
	<div id="Help" class="tabcontent">
		<div class="at-documentation">
	<div class="at-header-help">
	  <h2><?php echo esc_html__('Documentation','avik');?></h2>
	</div>
	<div class="at-header-help-p">
	   <p><?php echo esc_html__('In this page you can view general frequently asked questions to help you get started.','avik')?>
	      <?php echo esc_html__('For more, refer to our documentation site or click the links below:','avik')?></p>
          <div class="at-button-documentation">
		   	<a class="at-read-documentation" target="_blank" href="<?php echo esc_url(avik_url_documentation_theme); ?>"><?php echo esc_html('Read Documentation','avik');?></a>
		   <a class="at-theme-support" target="_blank" href="<?php echo esc_url(avik_url_support_theme); ?>"><?php echo esc_html('Theme Support','avik');?></a>
	     </div>
       </div>
    </div>
		<h3 class="avik-welkome-support-title"><?php esc_html_e('Frequently Asked Questions','avik' ); ?></h3>
		<a href="#" class="togglefaq"><span class="dashicons dashicons-plus at-plus"></span>
		  <?php esc_html_e('I want to configure the menu to scroll the various sections on the home page, what can I do?','avik')?>
		  <p class="at-number"><?php esc_html_e('1','avik')?></p>
		</a>
          <div class="faqanswer">
            <p><?php esc_html_e('To add a section of the Avik site to the main menu,with effect to scroll, you need to proceed like this:','avik')?></p>
            <div class="at-full-article">
              <a target="_blank" href="<?php echo esc_url(avik_url_faq_1_support); ?>"><?php esc_html_e('VIEW FULL ARTICLE','avik')?></a>
         </div>
    </div>
	   <a href="#" class="togglefaq"><span class="dashicons dashicons-plus"></span>
		<?php esc_html_e('How do I create a Who we are page?','avik')?>
		  <p class="at-number"><?php esc_html_e('2','avik')?></p></a>
          <div class="faqanswer">
			 <p><?php esc_html_e('The section Who we are in addition to the various customizations of the page, has the ability to create a dedicated page.
                                 To create it you have to proceed in this way:','avik')?></p>
			 <div class="at-full-article">
               <a target="_blank" href="<?php echo esc_url(avik_url_faq_2_support); ?>"><?php esc_html_e('VIEW FULL ARTICLE','avik')?></a>
             </div>
          </div>
		<a href="#" class="togglefaq"><span class="dashicons dashicons-plus"></span>
		<?php esc_html_e('There are many customizations, how do you make us orient myself?','avik')?>
		 <p class="at-number"><?php esc_html_e('3','avik')?></p></a>
          <div class="faqanswer">
			 <p><?php esc_html_e('With Avik you have the possibility to customize your site, let see how to do it step by step.','avik')?></p>
			 <div class="at-full-article">
              <a target="_blank" href="<?php echo esc_url(avik_url_faq_3_support); ?>"><?php esc_html_e('VIEW FULL ARTICLE','avik')?></a>
            </div>
         </div>    
		   <a href="#" class="togglefaq"><span class="dashicons dashicons-plus"></span>
			<?php esc_html_e('Why are there 2 menus?','avik')?>
			 <p class="at-number"><?php esc_html_e('4','avik')?></p></a>
          <div class="faqanswer">
			 <p><?php esc_html_e('In Avik there are 2 menus, 1 for the Homepage and 1 for posts and pages ...','avik')?></p>
			 <div class="at-full-article">
              <a target="_blank" href="<?php echo esc_url(avik_url_faq_4_support); ?>"><?php esc_html_e('VIEW FULL ARTICLE','avik')?></a>
            </div>
		  </div>
		  <div class="at-margin-bottom-tab"></div>
		<div class="avik-clear-guide-support-admin"></div>
	</div>
	<!-- PRO VERSION -->
	<div id="Options" class="tabcontent">
		<h3 class="avik-welkome-support-title"><?php esc_html_e( 'PRO VERSION', 'avik' ); ?></h3>
		<p class="avik-welkome-support">
			<?php esc_html_e( 'Specifications Avik theme','avik');?>
		</p>
		<div class="avik-guide-support-admin-comparison">
			<div class="comparison">
				<table>
					<thead>
						<tr>
							<th class="tl tl2"></th>
							<th class="product" style="background:#82B541;border-top-left-radius: 5px; border-left:0px;"><?php esc_html_e('FREE','avik');?></th>
							<th class="product" style="background:#82B541;"><?php esc_html_e('PRO','avik');?></th>
							</tr>
							<tr>
								<th></th>
								<th class="price-info">
									<div class="price-now"><span><?php esc_html_e('AVIK - THEME','avik');?></span><br>
										<p></p>
									</div>
								</th>
								<th class="price-info">
									<div class="price-now"><span><?php esc_html_e('AVIK - THEME','avik');?></span>
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
							<!-- Logo -->
							<tr>
								<td></td>
									<td colspan="3"><?php esc_html_e('Logo Upload','avik');?></td>
							</tr>
							<tr class="compare-row">
								<td><?php esc_html_e('Logo Upload','avik');?></td>
								<td><span><i class="fa fa-check"></i></span>
								</td>
								<td><span><i class="fa fa-check"></i></span></td>
							</td>
						</tr>
						<!-- Font Awesome -->
						<tr>
							<td></td>
							<td colspan="3"><?php esc_html_e('Font Awesome Icons v5','avik');?></td>
						</tr>
						<tr>
							<td><?php esc_html_e('Font Awesome Icons v5','avik');?></td>
							<td><span><i class="fa fa-check"></i></span>
							</td>
							<td><span><i class="fa fa-check"></i></span></td>
						</td>
					</tr>
					<!-- Ready Retina -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Retina Ready','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('Retina Ready','avik');?></td>
						<td><span><i class="fa fa-check"></i></span>
						</td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Responsive -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Responsive Design','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Responsive Design','avik');?></td>
						<td><span><i class="fa fa-check"></i></span>
						</td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Color Change -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Color Change','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('Color Change','avik');?></td>
						<td><span><i class="fa fa-check"></i></span>
						</td>
						<td><span><?php esc_html_e('Live + 10 Skins','avik');?></span></td>
					</tr>
					<!-- Color Title -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Color Titles and Paragraphs','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Color Titles and Paragraphs','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span>
						</td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Font Family -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Font Family','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('Font Family','avik');?></td>
						<td><span><?php esc_html_e('20','avik');?></span>
						</td>
						<td><span><?php esc_html_e('20+ Custom Font','avik');?></span></td>
					</tr>
					<!-- Layou setting -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Layout Settings','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Layout Settings','avik');?></td>
						<td><span><i class="fa fa-check"></i></span>
						</td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Header Spider -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Header Spider Effect','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('Header Spider Effect','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- More Slides -->
					<tr>
						<td></td>
						<td colspan="4"><?php esc_html_e('More Slider','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('More Slides','avik');?></td>
						<td><span><?php esc_html_e('1','avik');?></span></td>
						<td><span><?php esc_html_e('3','avik');?></span></td>
					</tr>
					<!-- More Widgets -->
					<tr>
						<td></td>
						<td colspan="4"><?php esc_html_e('More Areas Widgets','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('More Areas Widgets','avik');?></td>
						<td><span><?php esc_html_e('5','avik');?></span></td>
						<td><span><?php esc_html_e('13','avik');?></span></td>
					</tr>
					<!-- Menu types -->
					<tr>
						<td></td>
						<td colspan="4"><?php esc_html_e('Menu Types','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Menu Types','avik');?></td>
						<td><span><?php esc_html_e('1','avik');?></span></td>
						<td><span><?php esc_html_e('3','avik');?></span></td>
					</tr>
					<!-- Page Template -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Page Templates','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('Page Templates','avik');?></td>
						<td><span><?php esc_html_e('2','avik');?></span></td>
						<td><span><?php esc_html_e('14','avik');?></span></td>
					</tr>
						<!-- Post Template -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Post Templates','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Post Templates','avik');?></td>
						<td><span><?php esc_html_e('2','avik');?></span></td>
						<td><span><?php esc_html_e('4','avik');?></span></td>
					</tr>
					<!-- Blog Layout -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Blog Layouts','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('Blog Layouts','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><i class="fa fa-check"></i></td>
					</tr>
					<!-- Meta Box -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Meta Box Customized','avik');?></td>
					</tr>
					<tr >
						<td><?php esc_html_e('Meta Box Customized','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><i class="fa fa-check"></i></td>
					</tr>
					<!-- Pop-ip Light Box -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Pop-up Light Box','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('Pop-up Light Box','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><i class="fa fa-check"></i></td>
					</tr>
					<!-- Gutenberg -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Gutenberg Compatible','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Gutenberg Compatible','avik');?></td>
						<td><span><i class="fa fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Portfolio -->
					<tr>
						<td></td>
						<td colspan="4"><?php esc_html_e('Portfolio','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('Portfolio','avik');?></td>
						<td><span><?php esc_html_e('1','avik');?></span></td>
						<td><span><?php esc_html_e('2','avik');?></span></td>
					</tr>
					<!-- Portfolio Extended -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Portfolio Layout','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Portfolio Layout','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Effect Hover Portfolio -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Effect Hover Image Portfolio','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Effect Hover Image Portfolio','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><?php esc_html_e('19','avik');?></span></td>
					</tr>
					<!-- About US -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('About US','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('About US','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Woocommerce compatible -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Woocommerce Complatible','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Woocommerce Complatible','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Woocommerce Template -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Woocommerce Templates','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('Woocommerce Templates','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Woocommerce Slider -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Woocommerce Slider','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Woocommerce Slider','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Editor -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Editor Blocks','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Editor Blocks','avik');?></td>
						<td><span><i class="fas fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Dropdown Menu -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Dropdown Menu','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Dropdown Menu','avik');?></td>
						<td><span><i class="fa fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Child-Theme Included -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Child-Theme Included','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Child-Theme Included','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Transition Ready -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Transition Ready','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Transition Ready','avik');?></td>
						<td><span><i class="fa fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Language -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Language','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Language','avik');?></td>
						<td><span><?php esc_html_e('English and Italian','avik');?></span></td>
						<td><span><?php esc_html_e('English and Italian','avik');?></span></td>
					</tr>
					<!-- Full Support -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Full Support','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('Full Support','avik');?></td>
						<td><span><i class="fas fa-times avik-icon-free"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<!-- Support -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Support','avik');?></td>
					</tr>
					<tr>
						<td><?php esc_html_e('Support','avik');?></td>
						<td><span><i class="fa fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<!-- Color Navmenu -->
					<tr>
						<td></td>
						<td colspan="3"><?php esc_html_e('Color Nav Menu','avik');?></td>
					</tr>
					<tr class="compare-row">
						<td><?php esc_html_e('Color Nav Menu','avik');?></td>
						<td><span><i class="fa fa-check"></i></span></td>
						<td><span><i class="fa fa-check"></i></span></td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><div class="avik-no-button-free"></div></td>
						<td><a href="<?php echo esc_url('https://www.denisfranchi.com/avik-pro-10-0-0/');?>" class="price-buy" target="_blank"><?php esc_html_e('GO PRO','avik');?><span class="hide-mobile"></span></a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="avik-clear-guide-support-admin"></div>
</div>

<?php
/* And Settings Page */
}







