<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       mars_1.0.0
 */
?>

<div class="row reverse-row mb-5">
	<div class="col-md-3">
		<div class="podcast">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<a href="<?php the_permalink() ;?>" target="_blank" >
				<?php if(get_post_thumbnail_id( $post->ID )) : ?>
				<img src="<?php echo $image[0]?>" alt="<?php the_title(); ?>"/>
				<?php else : ?>
					<img src="<?php echo get_template_directory_uri() ; ?>/assets/images/default_image.png"  alt="<?php the_title(); ?>"/>
				<?php endif; ?>
				</a>

		<!-- 	<button><img src="assets/img/podcast-button.svg" alt=""></button> -->
		</div>
	</div>
	<div class="col-md-9 ps-lg-5">
		<h5 class="mt-1 post__title"><?php the_title(); ?></h5>
		<p><?php echo excerpt(30); ?></p>
		<a href="<?php the_permalink() ;?>" target="_blank" class="link">lire plus</a>
	</div>
</div>