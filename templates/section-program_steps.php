<section class="section__area bg__white--five">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center">
                    <h1 class="f-69 c-black title mb-3">f<span class="c-yellow">o</span>r<span class="c-primary">m</span>i<span class="c-orange">d</span>a<span class="c-green">B</span>l<span class="c-gray">e</span>!</h1>
                    <p class="f-26"><?php the_sub_field( 'text' ); ?></p>
                </div>
		<div class="programeetree-wrapper">
			<?php $img = get_sub_field( 'img' ); ?>
			<?php if ( $img ) : ?>
				<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" class="d-block mx-auto" />
			<?php endif; ?>
			<?php $link = get_sub_field( 'link' ); ?>
			<?php if ( $link ) : ?>
				<div class="programee-button">
					<a href="<?php echo esc_url( $link['url'] ); ?>" class="btn-one yellow center"><span>le programme c'est par ici !</span></a>
				</div>
			<?php endif; ?>

		</div>
			</div>
		</div>
	</div>
</section>