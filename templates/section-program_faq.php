<?php
$taxonomy = 'faqs_categories';
$categories = get_terms(array(
    "taxonomy" => $taxonomy,
    "order" => 'DESC'
));

?>
<section class="section__area bg__white--five" id="FAQ">
	<div class="container">
		                <div class="row mt-100">
                    <div class="col-md-12">
                        <div class="section__title mb-5">
                            <h2><?php the_sub_field( 'title' );?></h2>
                        </div>
                        <?php $i= 0;?>
                        <?php foreach ($categories as $category) : ?>
                        <div class="faq">
                            <div class="faq__title">
                                <h5><?php echo $category->name; ?></h5>
                            </div>
                            <div class="promotion" id="promotion">
                            <?php 	$args = array(
													'post_type'=> 'faqs',
													'order'    => 'ASC',
													'hide_empty'=> true,
													  'tax_query' => array(
														array(
															'taxonomy' => 'faqs_categories',
															'field' => 'term_id',
															'terms' => $category->term_id,
														)
													)
												);
												$post_query = new WP_Query( $args ); ?>
										<?php if( $post_query->have_posts() ) : ?>

											<?php while( $post_query->have_posts() ) : $post_query->the_post();?>
                                <div class="promotion__item">
                                    <div class="promotion__title collapsed" data-bs-toggle="collapse" data-bs-target="#promotion-<?php echo $i ?>" aria-expanded="true">
                                        <h4><?php the_title();?></h4>
                                    </div>
                                    <div id="promotion-<?php echo $i ?>" class="collapse promotion__body" data-bs-parent="#<?php echo $category->slug ?>">
                                        <div class="promotion__text">
                                            <?php the_content();?>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++; endwhile; ?>
                            <?php endif; wp_reset_postdata(); ?>
                            </div>
                        </div>
                        <?php  endforeach ;?>
                    </div>
                </div>
	</div>
</section>
