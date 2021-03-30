<?
/**
 * The template displaying the posts-overview
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       mars_1.0.0
 */

?>

<?php get_header(); ?>
<main id="blog" class="blog section__area bg__white--four line__white--five">
  <section class="container">
      <div class=" load-more-target">
          <?php
          $args = array(
            'post_type' => 'post',

          );
          $wp_query = new WP_Query( $args );

          if ( $wp_query->have_posts() ) {
              while ( $wp_query->have_posts() ) {
                $wp_query->the_post();
                    get_template_part('templates/wp', 'post');
              }
            }
          ?>
      </div>
                  <?php global $wp_query;
        if (  $wp_query->max_num_pages > 1 ) : ?>
          <div class="d-flex justify-content-center w-100">
      <button id="load-more" class="btn btn-primary mb-3 ">Afficher plus</button>
    </div>
        <?php endif; ?>

  </section>
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
											<?php //var_dump($the_query->have_posts()) ;?>
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
															<a data-bs-toggle="modal" data-bs-target="#EventModal"
															class="btn-one yellow"><span>Réservez votre place</span></a>
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


</main>
<?php get_footer(); ?>
