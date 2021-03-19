<section class="section__area bg__yellow">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section__title mb-75">
					<h2><?php echo get_sub_field('title'); ?></h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">

		<?php if ( have_rows( 'items' ) ) : ?>
			<?php $i = 1;?>
				<?php while ( have_rows( 'items' ) ) : the_row(); ?>
			<div class="col-md-4">
				<div class="yellow-box">
					<?php $img = get_sub_field( 'img' ); ?>
					<?php if ( $img ) : ?>
						<div class="yellow-box__image">
							<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
						</div>
					<?php endif; ?>
					<div class="yellow-box__text">
						<h4>0<?php echo $i;?></h4>
						<h2><?php the_sub_field( 'title' ); ?></h2>
						<?php the_sub_field( 'text' ); ?>
					</div>
				</div>
			</div>
				<?php $i++; endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>



		</div>
	</div>
</section>