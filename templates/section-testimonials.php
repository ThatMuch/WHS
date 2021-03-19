<?php
$args = array(
    'post_type'=> 'testimonials',
    'order'    => 'DESC',
);
$the_query = new WP_Query( $args );
?>

<section class="section__area bg__white--five pb-0">
	<div class="container">
<div class="row">
	<div class="col-md-12">
		<div class="section__title mt-75 mb-100">
			<h2> <?php echo get_sub_field('title');?></h2>
		</div>
		<div class="row row-0">
			<?php if($the_query->have_posts()) : ?>
				<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
				<div class="col-lg-4">
					<div class="testimonials" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
						<div class="testimonials__title">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="testimonials__subtitle">
							<?php the_field('role'); ?>
						</div>
						<div class="testimonials__text">
							<?php the_field('quote'); ?>
						</div>
					</div>
				</div>
				<?php endwhile ;?>
			<?php endif; wp_reset_postdata();?>
		</div>
	</div>
</div>
	</div>
</section>
