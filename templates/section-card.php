<!-- // FIXME: Image de fond -->
<section class="section__area bg__white--two line__white--three">
	<div class="container">
		<div class="row row-15">
<?php if ( have_rows( 'card1' ) ) : ?>
				<?php while ( have_rows( 'card1' ) ) : the_row(); ?>
				<?php $image1 = get_sub_field( 'image' ); ?>
			<div class="col-lg-7">
					<div class="boxed-item" style="background-image: url(<?php echo esc_url( $image1['url'] ) ;?>)">
						<div class="boxed-item__title">
							<h2><?php the_sub_field( 'titre' ); ?></h2>
						</div>
						<div><?php the_sub_field( 'text' ); ?></div>
					</div>
			</div>
					<?php endwhile; ?>
			<?php endif; ?>
<?php if ( have_rows( 'card2' ) ) : ?>
				<?php while ( have_rows( 'card2' ) ) : the_row(); ?>
				<?php $image2 = get_sub_field( 'image' );?>
			<div class="col-lg-5">
				<div class="boxed-item boxed__two" style="background-image: url(<?php echo esc_url( $image2['url'] ) ;?>)">
					<div class="boxed-item__title">
							<h2><?php the_sub_field( 'titre' ); ?></h2>
						</div>
						<div><?php the_sub_field( 'text' ); ?></div>
			</div>
			</div>
				<?php endwhile; ?>
			<?php endif; ?>
<?php if ( have_rows( 'card3' ) ) : ?>
				<?php while ( have_rows( 'card3' ) ) : the_row(); ?>
				<?php $image3 = get_sub_field( 'image' ); ?>
			<div class="col-lg-12">
				<div class="boxed-item boxed__three" style="background-image: url(<?php echo esc_url( $image3['url'] ) ;?>)">
					<div class="boxed-item__title">
							<h2><?php the_sub_field( 'titre' ); ?></h2>
						</div>
						<div><?php the_sub_field( 'text' ); ?></div>
			</div>
			</div>
	<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>