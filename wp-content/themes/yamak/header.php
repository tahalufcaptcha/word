<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/slick/slick.css">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/slick/slick-theme.css">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/owl/assets/owl.carousel.min.css">

</head>

<body <?php body_class(); ?>>

	<?php
	wp_body_open();
	?>

	<header id="site-header" class="header-footer-group py-3">

		<div class="header-inner section-inner container-fluid">

			<div class="header-titles-wrapper">
				<div class="header-titles d-flex align-items-center position-relative">
					<?php

					// Site title or logo.
					twentytwenty_site_logo();

					// Site description.
					//twentytwenty_site_description();
					?>

				</div><!-- .header-titles -->

			</div><!-- .header-titles-wrapper -->

			<div class="header-navigation-wrapper">
				<?php
				if (has_nav_menu('primary') || !has_nav_menu('expanded')) {
				?>
					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg('ellipsis'); ?>
							</span>
							<span class="toggle-text"><?php _e('Menu', 'twentytwenty'); ?></span>
						</span>
					</button>
					<!-- .nav-toggle -->

					<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x('Horizontal', 'menu', 'twentytwenty'); ?>">

						<ul class="primary-menu reset-list-style">

							<?php
							if (has_nav_menu('primary')) {

								wp_nav_menu(
									array(
										'container'  => '',
										'items_wrap' => '%3$s',
										'theme_location' => 'primary',
									)
								);
							}
							?>

						</ul>

					</nav><!-- .primary-menu-wrapper -->

				<?php
				}
				?>

			</div><!-- .header-navigation-wrapper -->
			<!--<div class="login-button text-center ">

				<span class="d-block btn-login primary-background p-2 border-radius-20 text-decoration-none"><a href="#">Login</a></span>
			</div>-->
			<div class="log-in d-md-flex justify-content-md-end">

				<?php if (is_active_sidebar('header-widget-area-1')) : ?>

					<div id="header-widget-area-1" class="chw-widget-area widget-area" role="complementary">

						<?php dynamic_sidebar('header-widget-area-1'); ?>

					</div>

				<?php endif; ?>

				<!-- <a href="https://npcm.ae/Provider/login" type="button" class="btn btn-outline-info-custmize text-decoration-none"><?php echo ICL_LANGUAGE_CODE == 'en' ? "Login" : "تسجيل"; ?></a> -->
			</div>
		</div><!-- .header-inner -->

	</header><!-- #site-header -->
	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
