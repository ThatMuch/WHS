<section class="section__area bg__primary">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section__title">
					<h2>formidable c'est : </h2>
				</div>
			</div>
		</div>
		<div class="row">
		<?php if ( have_rows( 'columns' ) ) : ?>
			<?php while ( have_rows( 'columns') ) : the_row(); ?>
			<?php if (get_sub_field('column_1' ) ) :?>
			<div class="col-md-6">
				<div class="pro__card bg__black">
					<?php the_sub_field( 'column_1' ); ?>
				</div>
            </div>
			<?php endif; ?>
			<?php if (get_sub_field('column_2' ) ) : ?>
			<div class="col-md-6">
				<div class="pro__card">
					<?php the_sub_field( 'column_2' ); ?>
				</div>
            </div>
			<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php if (get_sub_field('text' ) ) :?>
			                    <div class="col-md-12">
                        <div class="pro__card text-center">
                            <p><?php the_sub_field( 'text' ) ;?></p>
                        </div>
                    </div>
			<?php endif; ?>
			<?php if( have_rows('card') ) : ?>
				<?php while (have_rows('card')) : the_row() ; ?>
				        <div class="col-md-12">
                        <div class="pro__card bg__green text-center">
                            <h2><?php the_sub_field( 'title' ); ?></h2>
                            <?php the_sub_field( 'text' ); ?>
                        </div>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>
</section>