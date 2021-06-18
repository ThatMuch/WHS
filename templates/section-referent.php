        <div class="section__area author-area bg__black line__black--five pt-0 mt-150">
            <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <?php
                        $args = array(
                        'post_type' => 'team'
                        );
                        $the_query = new WP_Query($args);
                        $i = 0;
                        while ( $the_query->have_posts() ): $the_query->the_post();
                ?>
                    <div class="carousel-item <?php echo $i === 0 ? 'active' : '' ?>">
                        <div class="row author-wrapper d-flex">
                            <div class="col-md-3 order-md-1">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>" alt="<?php the_title(); ?>" />
                            </div>
                            <div class="col-md-9 col-lg-7 ms-auto pe-md-5">
                                <div class="author">
                                    <div class="author__name">
                                        <h2><?php the_field( 'job' ); ?></h2>
                                        <p><?php the_title(); ?></p>
                                    </div>
                                    <div class="author__text">
                                        <?php the_field( 'description' ); ?>
                                        <div id="text_more-<?php echo $i ?>" class="text_more collapse multi-collapse">
                                            <?php the_field( 'more' ); ?>
                                        </div>
                                        <button id="toggleText" class="btn-link" data-bs-toggle="collapse"
                                        data-bs-target="#text_more-<?php echo $i ?>" aria-expanded="false" aria-controls="text_more-<?php echo $i ?>">
                                        en savoir plus
                                        </button>
                                        <?php if ( have_rows( 'link' ) ) : ?>
                                            <?php while ( have_rows( 'link' ) ) : the_row(); ?>
                                            <a href="<?php the_sub_field( 'url' ); ?>" target="_blank" class="btn-one yellow mb-4"><span><?php the_sub_field( 'label' ); ?></span></a>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i++;  endwhile; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
        </div>