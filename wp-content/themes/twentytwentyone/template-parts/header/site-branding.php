<?php

/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$blog_info    = get_bloginfo('name');
$description  = get_bloginfo('description', 'display');
$show_title   = (true === get_theme_mod('display_title_and_tagline', true));
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<?php if (has_custom_logo() && $show_title) : ?>
	<div class="site-logo"><?php the_custom_logo(); ?></div>
<?php endif; ?>

<div class="site-branding d-flex pt-4 pb-4">
	<nav class="navbar navbar-expand-lg bg-body-tertiary pt-0 pb-0">
		<div class="container-fluid ps-0">
			<a class="navbar-brand" href="#">
				<?php if (has_custom_logo() && !$show_title) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php endif; ?>

				<?php if ($blog_info) : ?>
					<?php if (is_front_page() && !is_paged()) : ?>
						<h1 class="<?php echo esc_attr($header_class); ?>"><?php echo esc_html($blog_info); ?></h1>
					<?php elseif (is_front_page() && !is_home()) : ?>
						<h1 class="<?php echo esc_attr($header_class); ?>"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($blog_info); ?></a></h1>
					<?php else : ?>
						<p class="<?php echo esc_attr($header_class); ?>"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($blog_info); ?></a></p>
					<?php endif; ?>
				<?php endif; ?>

				<?php if ($description && true === get_theme_mod('display_title_and_tagline', true)) : ?>
					<p class="site-description">
						<?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput 
						?>
					</p>
				<?php endif; ?>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse hover-menu ">
				<div class="navbar-nav">
					<a class="nav-link active" aria-current="page" href="#">Home</a>

				</div>
			</div>
		</div>
	</nav>
	<form class="d-flex form-search" role="search">
		<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		<button class="btn bg-while" type="submit">Submit</button>
	</form>
	
</div><!-- .site-branding -->

