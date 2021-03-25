<section class="section__area">
	<div class="container">
		<?php if( get_sub_field('them_title') ) : ?>
			<h2 class="text-center mb-5"><?php echo get_sub_field('them_title'); ?></h2>
		<?php endif; ?>

		<div class="row row-15">
			<?php if ( have_rows( 'items' ) ) : ?>
				<?php while ( have_rows( 'items' ) ) : the_row(); ?>
					<div class="col-md-6 col-lg-4">
						<div class="card-box bg__black">
							<h2><?php the_sub_field( 'titre' ); ?></h2>
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ) : ?>
							<div class="card-box__image">
								<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
							</div>
							<?php endif; ?>
							<p><?php the_sub_field( 'texte' ); ?></p>
						</div>
					</div>
				<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
</section>