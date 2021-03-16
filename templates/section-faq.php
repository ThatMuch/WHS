<section class="section section-faq">
	<?php the_sub_field( 'title' ); ?>
	<?php the_sub_field( 'text' ); ?>
	<?php if ( have_rows( 'faq' ) ) : ?>
		<?php while ( have_rows( 'faq' ) ) : the_row(); ?>
			<?php the_sub_field( 'question' ); ?>
			<?php the_sub_field( 'slogan' ); ?>
			<?php the_sub_field( 'answer' ); ?>
		<?php endwhile; ?>
	<?php endif; ?>
</section>