<?php

/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if (has_nav_menu('primary')) : ?>
	<nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e('Primary menu', 'twentytwentyone'); ?>">
		<div class="menu-button-container">
			<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
				<span class="dropdown-icon open"><?php esc_html_e('Menu', 'twentytwentyone'); ?>
					<?php echo twenty_twenty_one_get_icon_svg('ui', 'menu'); // phpcs:ignore WordPress.Security.EscapeOutput 
					?>
				</span>
				<span class="dropdown-icon close"><?php esc_html_e('Close', 'twentytwentyone'); ?>
					<?php echo twenty_twenty_one_get_icon_svg('ui', 'close'); // phpcs:ignore WordPress.Security.EscapeOutput 
					?>
				</span>
			</button><!-- #primary-mobile-menu -->
		</div><!-- .menu-button-container -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu-wrapper',
				'container_class' => 'primary-menu-container ps-0 pe-0',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php
endif; ?>
<ul class="nav">
	<li>
		<a href="#" class="d-column ellipsis">
			<i class="fa fa-ellipsis-h text-center" aria-hidden="true"></i>Menu
		</a>
	</li>
	<li>
		<a href="#" class="d-column search">
			<i class="fa fa-search text-center" aria-hidden="true"></i>Search
		</a>
	</li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle d-column user-circle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-user-circle-o text-center" aria-hidden="true"></i>
			Account <span class="caret"></span>
		</a>
		<ul class="dropdown-menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</li>
</ul>