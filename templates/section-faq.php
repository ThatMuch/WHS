<section class="section__area bg__yellow">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 mx-auto">
				<div class="text-center">
					<h2 ><?php the_sub_field( 'title' ); ?></h2>
					<?php the_sub_field( 'text' ); ?>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="promotion" id="faq">
					<?php if ( have_rows( 'faq' ) ) : $i = 0; ?>
						<?php while ( have_rows( 'faq' ) ) : the_row(); ?>
						<div class="promotion__item">
							<div class="promotion__title collapsed" data-bs-toggle="collapse" data-bs-target="#faq-<?php echo $i; ?>" aria-expanded="true">
								<h2><?php the_sub_field( 'question' ); ?></h2>
								<div class="slogan"><?php the_sub_field( 'slogan' ); ?></div>
							</div>
							<div id="faq-<?php echo $i; ?>" class="collapse promotion__body" data-parent="#faq">
                                <div class="promotion__text">
                                    <?php the_sub_field( 'answer' ); ?>
                                </div>
                            </div>
					</div>
						<?php $i++; endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>