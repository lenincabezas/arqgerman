<?php
//options

function photography_business_theme_info_menu() {

	add_theme_page( 
		esc_html__('Welcome To Photography Business WordPress Theme', 'photography-business'), 
		esc_html__('Photography Business Theme Info', 'photography-business'), 
		'manage_options', 
		'photography_business_theme_info_options', 
		'photography_business_theme_info_display' 
	);

}


add_action( 'admin_menu', 'photography_business_theme_info_menu' );



function photography_business_theme_info_display() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( esc_html_e( 'You do not have sufficient permissions to access this page.', 'photography-business' ) );
	}
	
	?>
	<div class="wrap photography-business-adm">
		<h1 class="header-welcome"><?php esc_html_e('Welcome to Photography Business - 0.0.09', 'photography-business'); ?></h1>
		<div class="photography-business-adm-dsply-fl photography-business-adm-fl-wrap photography-business-adm-jc-sp-btw">

			<div class="photography-business-adm-wid-49 theme-para theme-doc photography-business-adm-mobwid-100">
				<h4><?php esc_html_e('Theme Documentation','photography-business'); ?></h4>
				<p><?php esc_html_e('Documentation for this theme includes all theme information that is needed to get your site up and running', 'photography-business'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://zidithemes.com/photography-business/'); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Theme Documentation', 'photography-business'); ?>
					</a>
				</p>
			</div>


			<div class="photography-business-adm-wid-49 theme-para theme-opt photography-business-adm-mobwid-100">
				<h4><?php esc_html_e('Photography Business Pro','photography-business'); ?></h4>
				<p class="">
					<?php esc_html_e('Photography Business Pro includes portfolio page templates, additional features and more options to customize your website.',  'photography-business'); ?>
				</p>
				<p>
					<a href="<?php echo esc_url('https://zidithemes.com/photography-business-pro/'); ?>" class="button button-primary" target="_blank">
						<?php esc_html_e('Upgrade to Photography Business Pro', 'photography-business'); ?>
					</a>
				</p>
			</div>

			<div class="photography-business-adm-wid-49 theme-para theme-opt photography-business-adm-mobwid-100">
				<h4><?php esc_html_e('Theme Options','photography-business'); ?></h4>
				<p class="">
					<?php esc_html_e('Photography Business Theme supports Theme Customizer. Click "Go To Customizer" to open the Customizer now.',  'photography-business'); ?>
				</p>
				<p>
					<a href="<?php echo esc_url(admin_url('customize.php')); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Go To Customizer', 'photography-business'); ?>
					</a>
				</p>
			</div>

			<div class="photography-business-adm-wid-49 theme-para theme-doc photography-business-adm-mobwid-100">
				<h4><?php esc_html_e('Watch Tutorial on Photography Business','photography-business'); ?></h4>
				<p><?php esc_html_e('Watch Youtube tutorial on how to install and use Photography Business theme.', 'photography-business'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://www.youtube.com/watch?v=hal0YGR9osE'); ?>" class="button button-secondary button-youtube" target="_blank">
						<?php esc_html_e('Watch Photography Business Tutorial', 'photography-business'); ?>
					</a>
				</p>
			</div>


			<div class="photography-business-adm-wid-49 theme-para theme-review photography-business-adm-mobwid-100">
				<h4><?php esc_html_e('Leave us a review','photography-business'); ?></h4>
				<p><?php esc_html_e('We would love to hear your feedback.', 'photography-business'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://wordpress.org/support/theme/photography-business/reviews/#new-post'); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Submit a review', 'photography-business'); ?>
					</a>
				</p>
			</div>


			<div class="photography-business-adm-wid-49 theme-para theme-support photography-business-adm-mobwid-100">
				<h4><?php esc_html_e('Support','photography-business'); ?></h4>
				<p><?php esc_html_e('Reach out in the theme support forums on WordPress.org.', 'photography-business'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://wordpress.org/support/theme/photography-business/'); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Support Forum', 'photography-business'); ?>
					</a>
				</p>
			</div>


			

			<div class="theme-upgrade photography-business-adm-wid-100">
				<table class="photography-business-adm-wid-100">
					<thead class="theme-table-head">
						<tr>
							<th class="feature"><h3><?php esc_html_e('Features', 'photography-business'); ?></h3></th>
							<th class="photography-business-adm-wid-33"><h3><?php esc_html_e('Photography Business', 'photography-business'); ?></h3></th>
							<th class="photography-business-adm-wid-33"><h3><?php esc_html_e('Photography Business Pro', 'photography-business'); ?></h3></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Number Of Index Page Styles', 'photography-business'); ?></h3></td>
							<td><span class="number-index-styles"><?php esc_html_e('3', 'photography-business'); ?></span></td>
							<td><span class="number-index-styles"><?php esc_html_e('17', 'photography-business'); ?></span></td>
						</tr>
						<tr>
							<td class="feature-items-title">
								<h3><?php esc_html_e('Theme Price', 'photography-business'); ?></h3>
							</td>
							<td class="free-btn"><?php esc_html_e('Free', 'photography-business'); ?></td>
							<td>
								<a class="pro-link-btn" href="<?php echo esc_url('https://zidithemes.com/photography-business-pro/'); ?>" target="_blank">
									<?php esc_html_e('$30', 'photography-business'); ?>
								</a>
							</td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Responsive Design', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Portfolio Page Template', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Testimonials Page Template', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Team Page Template', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Gallery Page Template', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Pricing Page Template', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('One Column Post Template', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('3 News Grid Image Styles', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Full Width Template', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Footer Credits Options', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Color Options', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Gutenberg Compatible', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Elementor Compatible', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Major Browser Compatible', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Woocommerce Compatible', 'photography-business'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class=""></td>
							<td class=""></td>
							<td class="go-pro">
								<span class="">
									<a class="link" href="<?php echo esc_url('https://zidithemes.com/photography-business-pro/'); ?>" target="_blank">
										<?php esc_html_e('View Pro', 'photography-business'); ?>
									</a>
								</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>


		</div>
	</div>
	<?php
}
?>
