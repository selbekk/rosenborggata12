<?php
/**
 * The sidebar containing the secondary widget area, displays on posts and pages.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage Rosenborggata_12
 * @since Rosenborggata 12 1.0
 */

if ( is_active_sidebar( 'nyheter' ) ) : ?>
	<aside class="sidebar col-md-4 hidden-xs hidden-sm" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
				<?php dynamic_sidebar( 'nyheter' ); ?>
			</div>
		</div>
	</aside>
<?php endif; ?>