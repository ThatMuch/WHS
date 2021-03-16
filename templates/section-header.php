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
  <section class="section section-header">
    <div class="container">
    <div class="section-header__content">
        <!-- Title -->
        <?php if(get_sub_field('lead') ) : ?>
            <h1 class="section__title animate__animated animate__slideInDown"> <?php echo  get_sub_field('title'); ?></h1>
        <?php endif; ?>
        <!-- Title -->
        <!-- Lead -->
        <?php if(get_sub_field('lead') ) : ?>
            <h2 class="section__lead animate__animated animate__slideInDown"> <?php echo  get_sub_field('lead'); ?></h2>
        <?php endif; ?>
        <!-- Lead -->
        <!-- Button -->
        <?php if ( get_sub_field('link') ) : $link = get_sub_field('link'); ?>
                    <a class="btn btn-primary animate__animated animate__fadeIn" href="<?php echo  $link['url']; ?>">
                        <?php echo  $link['title']; ?>
                    </a>
                <?php endif; ?>
                <!-- Button -->
    </div>
      </div>
 </section>