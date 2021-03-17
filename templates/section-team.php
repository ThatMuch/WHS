    <div class="section__area bg__gradient pb-0">
            <div class="container">
                <div class="row team-wrapper">
                    <div class="col-lg-6">
                        <div class="team">
                            <?php $img = get_sub_field( 'img' ); ?>
			<?php if ( $img ) : ?>
				<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
			<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team__text">
                            <div class="team__title">
                                <h2><?php the_sub_field( 'title' ); ?></h2>
                                <p><?php the_sub_field( 'text_upper' ); ?></p>
                            </div>
                            <?php the_sub_field( 'text' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>