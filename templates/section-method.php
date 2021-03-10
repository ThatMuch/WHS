<?php
	$title = get_sub_field('title');
?>
<section class="section section-methode">
<?php if ( $title ) : ?>
	<h2><?php echo $title ?></h2>
<?php endif; ?>
<?php if ( have_rows('items') ) : ?>

	<?php while( have_rows('items') ) : the_row(); ?>
		<h3><?php the_sub_field('title'); ?></h3>
		<p><?php the_sub_field('text'); ?></p>
		<?php if ( get_sub_field('img') ) : ?>
			<img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('title'); ?>">
		<?php endif; ?>

	<?php endwhile; ?>

<?php endif; ?>

</section>