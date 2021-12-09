    <div class="section__area section__area-formidable bg__black line__black--two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="f-69 c-yellow title"><?php echo get_sub_field('title'); ?></h1>
						<?php if( get_sub_field('titre') ) : ?>
							<div class="f-22"><?php echo get_sub_field('titre'); ?></div>
						<?php endif; ?>
                        <?php if( get_sub_field('lien') ) : ?>
                        <a href="<?php the_sub_field( 'lien' ); ?>" target="_blank" class="btn btn-yellow mt-40"><span>réserver un créneau avec le fondateur</span></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </div>