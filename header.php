<?

/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       mars_1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
	<?php mars_gtm('head') ?>
	<!--=== OPEN-GRAPH TAGS ===-->
	<?php mars_ogtags() ?>
	<!--=== PRELOAD FONTS ===-->
	<?php // mars_preload_fonts() ?>
	<!--=== WP HEAD ===-->
	<?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
	<?php mars_gtm('body') ?>

	<?php $custom_logo_id = get_theme_mod('custom_logo');
	$image = wp_get_attachment_image_src($custom_logo_id, 'full'); ?>
<div class="sticky-top header-wrapper">
	<?php if ( have_rows( 'tarif_classic', 'option' ) ) : ?>
		<?php while ( have_rows( 'tarif_classic', 'option' ) ) : the_row(); ?>
		<?php if ( have_rows( 'promotion' ) ) : ?>
			<?php while ( have_rows( 'promotion' ) ) : the_row(); ?>
				<?php if( get_sub_field('discount') ) : ?>
					<div class="header-top">
					<a href="<?php the_sub_field( 'link' ); ?>">
						<?php echo get_sub_field('discount'); ?>% de promotion sur les places de la rentrée de MAI
					</a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	<div class="header-area">
        <div class="container-fluid">
			<div class="navbar navbar-expand-lg align-items-center">
					<a class="navbar-brand" href="<?php echo  site_url(); ?>">
						<img id="logo_brand" src="<?php echo $image[0]; ?>" alt="We Hate School">
					</a>
					<div class="main-menu collapse navbar-collapse justify-content-center" id="navbar">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'mainmenu', // Defined when registering the menu
							 'level' => 2,
							'child_of' => 'Professionnels',
							'menu_id'        => 'menu-main',
							'container'      => false,
							'depth'          => 2,
							'menu_class'     => 'navbar-nav nav',
							'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
							'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
						));
						?>
						<button data-bs-toggle="modal" data-bs-target="#ContactModal" class="btn-one wow-modal-id-1"><span>Nous contacter</span></button>
					</div>
					    <button class="navbar-toggler menu-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
			</div>
		</div>
	</div>
</div>



	<?php if (is_page() && !is_front_page() || is_single()) :
		$background_image = get_the_post_thumbnail_url();
		?>
		<header class="page-hero__area <?php echo $background_image ? "hasBg" : "default"?>" style="background-image: url(<?php echo $background_image ? $background_image : get_template_directory_uri()."/assets/images/bg.png";?>)">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-hero__title">
						<h1 class="color-pro"><?php single_post_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>

		</header>
		<?php elseif (is_home()) :
			$background_image_home = get_the_post_thumbnail_url(get_option('page_for_posts'));
			?>
					<header class="page-hero__area <?php echo $background_image_home ? "hasBg" : "default"?>" style="background-image: url(<?php echo $background_image_home ? $background_image_home : get_template_directory_uri()."/assets/images/bg.png";?>) ">
					<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-hero__title">
						<h1 class="color-pro"><?php single_post_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
		</header>
		<?php elseif (is_archive() || is_category()) :
			$category = get_queried_object();
			$image = get_field('image', $category);
			?>
			<header class="page-hero__area <?php echo $image ? "hasBg" : "default"?>" style="background-image: url(<?php echo $image ? $image['url'] : $bg_default; ?>)">

					<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-hero__title">
										<h1 class="color-pro">
					<?php
					if (is_day()) :
						echo get_the_date();
					elseif (is_month()) :
						echo get_the_date(_x('F Y', 'monthly archives date format', 'stanlee'));
					elseif (is_year()) :
						echo get_the_date(_x('Y', 'yearly archives date format', 'stanlee'));
					else :
						single_cat_title();
					endif;
					?>
				</h1>
					</div>
				</div>
			</div>
		</div>
			</header>
	<?php endif; ?>
	<div id="content" class="site-content <?php if(is_home()){echo "bg__white--four";}  ;?>">

	<!-- Modal -->
<div class="modal fade" id="ContactModal" tabindex="-1" aria-labelledby="ContactModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ContactModalLabel">Réservez votre place</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php if ( get_field('formulaire_mailchimp', 'option') ) : ?>
			<?php echo do_shortcode(get_field('formulaire_mailchimp', 'option')); ?>
		<?php endif; ?>

      </div>
    </div>
  </div>
</div>