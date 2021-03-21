<?
/**
 * Template for ACF flexible elements
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       mars_1.0.0
 *
 *
 */
?>
<?php
$taxonomy = 'events_categories';
$categories = get_terms($taxonomy); ?>
<?php get_header(); ?>
<div class="section__area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section__title">
                    <h2><?php echo get_sub_field('title'); ?></h2>
                </div>
				<div class="page-tabs">
					<ul class="nav nav-tabs" role="tablist">
						<?php $y = 0; ?>
						<?php foreach ($categories as $category) :?>
							<li role="presentation">
								<a data-bs-toggle="tab" class="nav-item <?php echo $y === 0 ? ' active' : '' ; ?>" data-bs-target="#tab-<?php echo $category->term_id  ;?>">
									<?php echo $category->name; ?></a>
								</li>
						<?php $y++; endforeach; ?>
					</ul>
					<div class="tab-content">
						<?php $i = 0; ?>
						<?php foreach ($categories as $category) :?>
							<div id="tab-<?php echo $category->term_id  ;?>" class="tab-pane fade <?php echo $i === 0 ? ' in active show' : '' ; ?>" role="tabpanel" aria-labelledby="<?php echo $category->term_id  ;?>-tab">
								<div class="events">
									<div class="events__wrapper">
										<?php 	$args = array(
													'post_type'=> 'events',
													'order'    => 'DESC',
													'posts_per_page' => 5,
													'hide_empty'=> true,
													  'tax_query' => array(
														array(
															'taxonomy' => 'events_categories',
															'field' => 'term_id',
															'terms' => $category->term_id,
														)
													)
												);
												$the_query = new WP_Query( $args ); ?>
										<?php if( $the_query->have_posts() ) : ?>
											<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
												<div class="events__box <?php echo get_field('lien') ? 'striped' : '' ?>">
													<h2>avril</h2>
													<div class="events__body">
														<div class="events__date">
															<?php // echo get_field('date'); ?>
															<p>avril</p>
															<h2>27</h2>
														</div>
														<div class="events__time">

														</div>
														<div class="events__text">
															1ère leçon du podcast bavardages
														</div>
														<?php if ( get_field('lien') ) : ?>
															<div class="events__link">
															<a href="<?php echo get_field('lien'); ?>" class="btn-one yellow"><span>Réserver votre place</span></a>
														</div>
														<?php endif; ?>
													</div>

										<?php  endwhile; ?>
										<?php endif; wp_reset_postdata(); ?>

									</div>
								</div>
							</div>
							</div>
						<?php $i++; endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>