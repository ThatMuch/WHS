<div class="footer__top">
	<a class="scrollUp" href="#top"></a>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="social-bookmarks">
					<ul>
						<?php if ( have_rows( 'rs', 'option' ) ) : ?>
							<?php while ( have_rows( 'rs', 'option' ) ) : the_row(); ?>
							<?php if( get_sub_field('linkedin')): ?>
								<li><a href="<?php the_sub_field( 'linkedin' ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/linkedin.svg';?>" alt="logo_linkedin"></a></li>
							<?php endif;?>
							<?php if( get_sub_field('instagram')): ?>
						<li><a href="<?php the_sub_field( 'instagram' ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/instagram.svg';?>" alt="logo_instagram"></a></li>
<?php endif;?>
						<?php if( get_sub_field('facebook')): ?>
						<li><a href="<?php the_sub_field( 'facebook' ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/facebook.svg';?>" alt="logo_facebook"></a></li>
						<?php endif;?>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="footer__area">
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
				<a href="https://wehateschool.co/programme" class="link-program"></a>
					<div class="footer__logo">
						<?php $custom_logo_id = get_theme_mod('custom_logo');
								$image = wp_get_attachment_image_src($custom_logo_id, 'full'); ?>
						<img src="<?php echo $image[0]; ?>" alt="We Hate School">
					</div>
					<div class="footer__text d-flex align-items-center">
						<span><?php the_field( 'adress', 'option' ); ?></span>
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
</footer>
		<div class="footer__credits">
		<div class="container">
			<div class="p-2">
				©Copyright <?php echo date("Y"); ?>, Tous droits réservés <?php echo get_bloginfo( 'name' )?>
			</div>
			<a class="footer__credits__thatmuch" href="https://thatmuch.fr" target="_blank" rel="noopener noreferrer">
				<img src="<?php echo  get_template_directory_uri() ?>/assets/images/thatmuch-logo.webp" alt="logo that much">
			</a>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

<script>
// var logo = document.getElementById('logo_brand');
// console.log(logo);
// logo.addEventListener('mouseover',() => {
//     logo.setAttribute('src','<?php // echo get_stylesheet_directory_uri().'/assets/images/Gif_Logo_WHS.gif'; ?>');
// })
// logo.addEventListener('mouseleave',() => {
//     logo.setAttribute('src','<?php // echo $image[0] ;?>');
// })


var ua = navigator.userAgent.toLowerCase();

if (ua.indexOf('safari') != -1) {
  if (ua.indexOf('chrome') > -1) {
    $('body').addClass('chrome');
  } else {
    $('body').addClass('safari');
  }
}

/* Flip Card */

$(".flipper").click(function() {
  var target = $( event.target );
    $(this).toggleClass("flip");
  return false;
});

</script>