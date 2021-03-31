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
$taxonomy = 'events_categories';
$categories = get_terms($taxonomy);
?>
<?php get_header(); ?>
<div class="section__area bg__white--three section__events">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section__title">
                    <h2>Nos évenements</h2>
                </div>
				<div class="page-tabs">
					<ul class="nav nav-tabs" role="tablist">
						<?php $y = 0; ?>
						<?php foreach ($categories as $category) :?>
						<?php //var_dump($category);?>
							<li role="presentation">
								<a data-bs-toggle="tab" class="nav-item <?php echo $y === 0 ? ' active' : '' ; ?>" data-bs-target="#tab-<?php echo $category->term_id ;?>">
									<?php echo $category->name; ?></a>
								</li>
						<?php $y++; endforeach; ?>
					</ul>
					<div class="tab-content">
						<?php $i = 0; ?>
						<?php foreach ($categories as $category) :?>
							<div id="tab-<?php echo $category->term_id ;?>" class="tab-pane fade <?php echo $i === 0 ? ' in active show' : '' ; ?>" role="tabpanel" aria-labelledby="<?php echo $category->term_id ;?>-tab">
								<div class="events">
									<div class="events__wrapper">
										<?php 	$args = array(
													'post_type'=> 'events',
													'order'    => 'DESC',
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

												<?php
												// Format posts
												$formatted_posts = array();
												$months = array();

												while( $the_query->have_posts() ) {
													$the_query->the_post();
													$full_date = date_create_from_format('Y-m-d H:i:s', get_field('date'));
													$date = explode(' ', date_i18n('F j H:i', $full_date->getTimestamp()));

													array_push($formatted_posts, array(
														'date'=> $full_date,
														'month' => $date[0],
														'day' => $date[1],
														'time' => str_replace(":","h",$date[2]),
														'title' => get_the_title(),
														'link' => get_field('lien'),
														'places' => get_field('places'),
														'rentree' =>  get_field( 'rentree' )[0],
													));
												};

												// Sort posts by date
												usort($formatted_posts, function ($a, $b) {
													if ($a['date'] == $b['date']) {
														return 0;
													}
  													return $a['date']< $b['date'] ? -1 : 1;
												});



												// Store months

												foreach ($formatted_posts as $key => $value) {
													if(!array_key_exists($value['month'], $months)) {
														$months[$value['month']] = array();
													}
													array_push($months[$value['month']], $value);
												}
												?>

										<?php if( $the_query->have_posts() ) : ?>
											<?php foreach( $months as $month => $value) : ?>
												<div class="events__box">
													<h2 class="fw-normal"><?php echo $month;?></h2>
													<?php foreach( $value as $event_post) : ?>

													<div class="events__body">
														<div class="events__date">
															<p class="month"><?php echo $event_post['month'];?></p>
															<p class="day"><?php echo $event_post['day'];?></p>
														</div>
														<div class="events__time">
															<?php echo $event_post['time'];?>
														</div>
														<div class="events__text">
														<p class="mb-0 <?php echo $event_post['rentree'] ? 'fw-bold': '';?>"><?php echo $event_post['title'];?></p>
														<?php if($event_post['places']) : ;?>
															<p class="mb-0 places"><?php echo $event_post['places'];?> places disponibles</p>
														<?php endif ;?>
														</div>
														<?php if ( $event_post['link'] ) : ?>
														<div class="events__link">
															<a data-bs-toggle="modal" data-bs-target="#EventModal" class="btn-one yellow"><span>Réservez votre place</span></a>
														</div>
														<?php endif; ?>
													</div>

	<!-- Modal -->
<div class="modal fade" id="EventModal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EventModalLabel">Réservez votre place</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
			<iframe id="inlineFrameExample"
				title="Inline Frame Example"
				width="100%"
				height="600"
				src="<?php echo $event_post['link'];?>">
			</iframe>

      </div>
    </div>
  </div>
</div>

										<?php  endforeach; ?>
										</div>
										<?php  endforeach; ?>
										<?php endif;
										wp_reset_postdata(); ?>

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
<?php if ( have_rows( 'events_formidable' ) ) : ?>
	<?php while ( have_rows( 'events_formidable' ) ) : the_row(); ?>
    <div class="section__area section__area-formidable bg__black line__black--two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="f-69 c-white title">f<span class="c-yellow">o</span>r<span class="c-blue">m</span>i<span class="c-orange">d</span>a<span class="c-green">B</span>l<span class="c-gray">e</span>!</h1>
						<?php if( get_sub_field('content') ) : ?>
							<div class="f-22"><?php echo get_sub_field('content'); ?></div>
						<?php endif; ?>
                        <a href="<?php the_sub_field( 'link' ); ?>" target="_blank" class="btn btn-yellow mt-40"><span>réserver un créneau avec le fondateur</span></a>
                    </div>
                </div>
            </div>
    </div>
	<?php endwhile; ?>
	<?php endif; ?>

														</main>
<?php get_footer() ?>