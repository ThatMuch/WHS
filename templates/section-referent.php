        <div class="section__area author-area bg__black line__black--five pt-0 mt-150">
            <div class="container">
                <div class="row author-wrapper d-flex">
                    <div class="col-md-3 order-md-1">
                        <?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			<?php endif; ?>
                    </div>
                    <div class="col-md-9 col-lg-5 ms-auto pr-md-5">
                        <div class="author">
                            <div class="author__name">
                                <h2><?php the_sub_field( 'title' ); ?></h2>
                                <p><?php the_sub_field( 'name' ); ?></p>
                            </div>
                            <div class="author__text">
                                <p><?php the_sub_field( 'text' ); ?></p>
                                <a href="#">en savoir plus</a>
								<?php $link = get_sub_field( 'link' ); ?>
								<?php if ( $link ) : ?>
									<a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="btn-one yellow"><span><?php echo esc_html( $link['title'] ); ?></span></a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>