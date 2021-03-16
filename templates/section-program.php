<section class="section section-methode">
<?php if ( have_rows( 'items' ) ) : ?>
				<?php while ( have_rows( 'items' ) ) : the_row(); ?>
					<?php $img = get_sub_field( 'img' ); ?>
					<?php if ( $img ) : ?>
						<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
					<?php endif; ?>
					<?php the_sub_field( 'text' ); ?>
					<?php $lien = get_sub_field( 'lien' ); ?>
					<?php if ( $lien ) : ?>
						<a href="<?php echo esc_url( $lien['url'] ); ?>" target="<?php echo esc_attr( $lien['target'] ); ?>"><?php echo esc_html( $lien['title'] ); ?></a>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
</section>