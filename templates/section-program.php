<section id="promo" class="section__area bg__gradient pb-0">
	<div class="container">
		<?php if ( have_rows( 'items' ) ) : ?>
			<?php while ( have_rows( 'items' ) ) : the_row(); ?>
				<?php $img = get_sub_field( 'img' ); ?>
		<div class="row align-items-center">
			<div class="col-md-5">
				<div class="promo-image-box">
					<?php if ( $img ) : ?>
						<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" class="img-responsive" />
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-7 pl-lg-5">
				<div class="promo-text-box">
					<p class="f-21"><?php the_sub_field( 'text' ); ?></p>
					<div class="d-flex">
											<?php $lien = get_sub_field( 'lien' ); ?>
					<?php if ( $lien ) : ?>
						<a href="<?php echo esc_url( $lien['url'] ); ?>" target="<?php echo esc_attr( $lien['target'] ); ?>" class="btn-one">
						<span><?php echo esc_html( $lien['title'] ); ?></span></a>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>