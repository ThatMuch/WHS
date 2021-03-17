<div class="footer__top">
	<a class="scrollUp" href="#top"></a>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="social-bookmarks">
					<ul>
						<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/linkedin.svg';?>" alt=""></a></li>
						<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/instagram.svg';?>" alt=""></a></li>
						<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/facebook.svg';?>" alt=""></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer__area">
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<div class="footer__logo">
						<?php $custom_logo_id = get_theme_mod('custom_logo');
								$image = wp_get_attachment_image_src($custom_logo_id, 'full'); ?>
						<img src="<?php echo $image[0]; ?>" alt="We Hate School">
					</div>
					<div class="footer__text d-flex align-items-center">
						<img class="me-3" src="<?php echo get_stylesheet_directory_uri().'/assets/images/location.svg'; ?>" alt="">
						<span>19 place Tabareau, 69004 Lyon</span>
					</div>
					<div class="footer__menu">
						<?php
				wp_nav_menu(array(
					'theme_location' => 'submenu', // Defined when registering the menu
					'menu_id'        => 'sub-main',
					'container'      => false,
					'depth'          => 2,
					'menu_class'     => '',
					'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
					'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
				));
				?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>