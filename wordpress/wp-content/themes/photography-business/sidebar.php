<?php 
/**
 * The template for displaying widgets in the sidebar
 *
 * @version    0.0.09
 * @package    photography-business
 * @author     Zidithemes
 * @copyright  Copyright (C) 2020 zidithemes.com All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * 
 */

?>

<?php if ( !is_active_sidebar( 'sidebar-widgets' ) ) : ?>
	<aside class="mobwid-100 no-show-mob sidebar wid-29">
		<div class="sidebar-inner">
			
			<?php if ( !is_active_sidebar( 'sidebar-widgets' ) ) { ?>

				<?php dynamic_sidebar('sidebar-widgets'); ?>

			<?php } ?>
			
	    </div>
	</aside>
<?php endif; ?>