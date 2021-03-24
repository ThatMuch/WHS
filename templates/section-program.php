

<?php
$img = get_sub_field( 'img' );
$lien = get_sub_field( 'lien' );
$text = get_sub_field( 'text' );
?>

<section id="promo" class="section__area bg__gradient pb-0">
	<div class="container">
		<div class="is-mobile">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<?php if ( have_rows( 'items' ) ) : $i = 0; ?>
					<?php while ( have_rows( 'items' ) ) : the_row(); ?>
						<button
						type="button"
						data-bs-target="#carouselExampleIndicators"
						data-bs-slide-to="<?php echo $i?>"
						class="<?php echo $i=== 0 ? 'active' : '';?> btn-bullets"
						aria-current="<?php $i=== 0 ;?>"
						aria-label="Slide <?php echo $i?>">
						</button>
					<?php $i++; endwhile;?>
				<?php endif;?>
			</div>
			<div class="carousel-inner">
	<?php if ( have_rows( 'items' ) ) : $y = 0; ?>
					<?php while ( have_rows( 'items' ) ) : the_row(); ?>
					<?php
						$img = get_sub_field( 'img' );
						$lien = get_sub_field( 'lien' );
						$text = get_sub_field( 'text' );
					?>
				<div class="carousel-item <?php echo $y=== 0 ? 'active' : '';?>">
					<div class="promo-image-box">
					<?php if ( $img ) : ?>
						<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" class="img-responsive" />
					<?php endif; ?>
					</div>
		<div class="promo-text-box">
						<p class="f-21"><?php echo $text ;?></p>
						<div class="d-flex">

						<?php if ( $lien ) : ?>
							<a href="<?php echo esc_url( $lien['url'] ); ?>" target="<?php echo esc_attr( $lien['target'] ); ?>" class="btn-one">
							<span><?php echo esc_html( $lien['title'] ); ?></span></a>
						<?php endif; ?>
						</div>
					</div>

				</div>
					<?php $y++; endwhile;?>
				<?php endif;?>

			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			</div>
		</div>
		<div class="is-desktop">
			<?php if ( have_rows( 'items' ) ) : ?>
				<?php while ( have_rows( 'items' ) ) : the_row(); ?>
				<?php
$img = get_sub_field( 'img' );
$lien = get_sub_field( 'lien' );
$text = get_sub_field( 'text' );
?>
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
						<p class="f-21"><?php echo $text ;?></p>
						<div class="d-flex">

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
	</div>
</section>