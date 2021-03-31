<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       mars_1.0.0
 */
?>

<?php get_header(); ?>
<main id="page" class="section__area bg__white line">

      <section class="container pt-5">
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
      </section>
</main>

<?php if ( have_rows( 'events_formidable' ) ) : ?>
	<?php while ( have_rows( 'events_formidable' ) ) : the_row(); ?>
    <div class="section__area section__area-formidable bg__black line__black--two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="f-69 c-white title">f<span class="c-yellow">o</span>r<span class="c-blue">m</span>i<span class="c-orange">d</span>a<span class="c-green">B</span>l<span class="c-gray">e</span>!</h1>
						<?php if( get_sub_field('content') ) : ?>
							<div class="f-22"><?php echo get_sub_field('content'); ?></div>
						<?php endif; ?>
                        <a href="<?php the_sub_field( 'link' ); ?>" target="_blank" class="btn btn-yellow mt-40"><span>réserver un créneau avec le fondateur</span></a>
                    </div>
                </div>
            </div>
    </div>
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
