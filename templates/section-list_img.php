<section class="section__area bg__white--five line__white--eight">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section__title mb-100">
					<h2>quels résultats</h2>
				</div>
			</div>
		</div>
		<div class="row row-15">
			<?php if ( have_rows( 'items' ) ) : ?>
				<?php while ( have_rows( 'items' ) ) : the_row(); ?>
				    <div class="col-md-6">
                        <div class="promo">
							<?php $img = get_sub_field( 'img' );?>
							<?php if ( $img ) : ?>
								<div class="promo__image">
						<img src="<?php echo  $img ; ?>" alt="<?php the_sub_field( 'title' ); ?>" />
					</div>
					<?php endif; ?>
                            <div class="promo__text">
                                <h4><?php the_sub_field( 'title' ); ?></h4>
                                <?php the_sub_field( 'text' ); ?>
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		</div>
	</div>
</section>