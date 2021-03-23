    <div class="section__area section__area-formidable bg__black line__black--two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="f-69 c-white title">f<span class="c-yellow">o</span>r<span class="c-blue">m</span>i<span class="c-orange">d</span>a<span class="c-green">B</span>l<span class="c-gray">e</span>!</h1>
						<?php if( get_sub_field('titre') ) : ?>
							<div class="f-22"><?php echo get_sub_field('titre'); ?></div>
						<?php endif; ?>
                        <a href="<?php the_sub_field( 'lien' ); ?>" target="_blank" class="btn btn-yellow mt-40"><span>réserver un créneau avec le fondateur</span></a>
                    </div>
                </div>
            </div>
    </div>