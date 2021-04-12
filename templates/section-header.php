<?
/**
 * Header Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      Marconte
 * @version     0.1.0
 * @since       myPrestige_1.0.0
 *
 */
 ?>
<?php
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'medium' );
	$fond = get_sub_field('fond');
?>
<?php  ?>
  <section class="hero__area bg__gradient">
	  <a class="scrollUp" href="#promo"></a>
    <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hero__text">
                            <h1><?php the_sub_field( 'title' ); ?></h1>
                            <p><?php the_sub_field( 'lead' ); ?></p>
							<?php $link = get_sub_field( 'link' ); ?>
							<?php if ( $link ) : ?>
								<a href="<?php echo esc_attr( $link['url'] );?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="btn-one yellow center"><span><?php echo esc_html( $link['title'] ); ?></span></a>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
      </div>
 </section>