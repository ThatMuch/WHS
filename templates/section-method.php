<?php
	$title = get_sub_field('title');
?>
<section class="section__area bg__gradient line__white--six">
<div class="container">
	<div class="row">
		<div class="col-lg-8 mx-auto">
			<div class="section__title">
				<?php if ( $title ) : ?>
					<h2><?php echo $title ?></h2>
				<?php endif; ?>
			</div>
			<div class="method">
				<?php if ( have_rows('items') ) : ?>
					<?php while( have_rows('items') ) : the_row(); ?>
						<div class="method__box flip flip-vertical">
                            <div class="method__title front" style="background: url(<?php the_sub_field('img');?>) no-repeat scroll center / cover;">
                                <h2><?php the_sub_field('title'); ?></h2>
                            </div>
							<div  class="method__body back">
								<div class="method__text">
									<?php if ( get_sub_field('title') ) : ?>
					<p class="method__text__title"><?php the_sub_field('title') ?></p>
				<?php endif; ?>
									<?php the_sub_field('text'); ?>
								</div>
							</div>
                            </div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

</section>