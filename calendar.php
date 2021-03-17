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
<?php /* Template Name: Calendrier */ ?>
<?php

$args = array(
    'post_type'=> 'events',
    'order'    => 'DESC',
	'hide_empty'=> 1,
);

$categories = get_categories($args);
$the_query = new WP_Query( $args ); ?>
<?php get_header(); ?>
<div class="section__area bg__white--three">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section__title">
                    <h2>Nos évenements</h2>
                </div>
				<div class="page-tabs">
					<ul class="nav nav-tabs">
						<?php foreach ($categories as $category) :?>
							<li>
								<a data-toggle="tab" class="nav-item active" href="#tab-<?php $category->cat_ID ;?>">
									<?php echo $category->name; ?></a>
								</li>
						<?php endforeach; ?>
					</ul>
					<div class="tab-content">
						<?php foreach ($categories as $category) :?>
							<?php //var_dump($category); ?>
						<div id="tab-<?php $category->cat_ID ;?>" class="tab-pane fade in show active">
							<div class="events">
								<div class="events__wrapper">
									<?php if( $the_query->have_posts() ) : ?>
										<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
											<div class="events__box striped">
												<h2>avril</h2>
												<div class="events__body">
													<div class="events__date">
														<p>avril</p>
														<h2>27</h2>
													</div>
													<div class="events__time">

													</div>
													<div class="events__text">
														1ère leçon du podcast bavardages <?php the_field( 'date' ); ?>
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
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer() ?>