<?
/**
 * The template for displaying all single posts and attachments
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       mars_1.0.0
 */
?>

<?php get_header(); ?>
<div class="container container-post <?php echo (is_post_type('podcast-post')) ? "podcast" : "" ; ?>">
  <main id="post" class="content-area">
<section>
  <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
    <article>
	  <?php if (is_post_type('podcast-post')): ?>
	  	<div class="d-flex podcast-links mb-5">
			<?php if (get_field( 'spotify_podcast' )) : ?>
				<a href="<?php the_field( 'spotify_podcast' ); ?>" target="_blank" class="btn-icon"><i class="fab fa-spotify"></i></a>
			<?php endif; ?>
			<?php if (get_field( 'google_podcast' )) : ?>
				<a href="<?php the_field( 'google_podcast' ); ?>" target="_blank" class="btn-icon"><i class="fab fa-google"></i></a>
			<?php endif; ?>
			<?php if (get_field( 'apple_podcast' )) : ?>
				<a href="<?php the_field( 'apple_podcast' ); ?>" target="_blank" class="btn-icon"><i class="fab fa-apple"></i></a>
			<?php endif; ?>
			<?php if (get_field( 'soundcloud_podcast' )) : ?>
				<a href="<?php the_field( 'soundcloud_podcast' ); ?>" target="_blank" class="btn-icon"><i class="fab fa-soundcloud"></i></a>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<div class="postinfo mb-3"><?php echo  get_the_date_mars(); ?></div>
      <?php the_content(); ?>
    </article>
  <?php endwhile; endif; ?>
</section>

</main>
</div>

<?php get_footer(); ?>
