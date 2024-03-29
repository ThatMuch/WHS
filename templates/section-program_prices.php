        <div id="tarification" class="section__area bg__white--five pb-0 section__program__price">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section__title mb-100">
                            <h2><?php echo get_sub_field('title');?></h2>
                        </div>
                    </div>
                </div>
                <div class="row row-15">
<?php if ( have_rows( 'tarif_classic', 'option' ) ) : ?>
	<?php while ( have_rows( 'tarif_classic', 'option' ) ) : the_row(); ?>
                    <div class="flipper col-md-6">
                        <div class="price-box bg__black price-box__front">
							<?php if( have_rows( 'promotion' ) ) : ?>
                                    <?php while ( have_rows( 'promotion' ) ) : the_row(); ?>
                                        <?php if (get_sub_field('discount')) : ?>
                                            <div class="price-box__off">
                                                <div>-<?php echo get_sub_field('discount'); ?>%</div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
							<?php endif; ?>
                            <div class="price-box__title">
                                <h2><?php the_sub_field( 'title' ); ?></h2>
                            </div>
                            <div class="price-box__body">
								<?php $price = intval(get_sub_field( 'price' )) ;?>
                                <?php if ( have_rows( 'promotion' ) ) : ?>
                                    <?php while ( have_rows( 'promotion' ) ) : the_row(); ?>
                                        <?php if (get_sub_field('discount')) : ?>
                                            <?php $discount = intval(get_sub_field( 'discount' )) ;?>
                                            <?php $newPrice = $price - ($price * ($discount / 100)) ;?>
                                            <h3><?php the_sub_field( 'discount' ); ?></h3>
                                            <h1><?php echo $newPrice ;?> €</h1>
                                        <?php else : ?>
                                        <h1><?php echo $price ?> €</h1>
                                    <?php    endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
			                <button class="btn btn-yellow"><span>Qui peut en profiter ?</span></button>
                        </div>
                        <div class="price-box bg__black price-box__back">
                            <div class="price-box__title">
                                <h2><?php the_sub_field( 'title' ); ?></h2>
                            </div>
                            <div class="price-box__body">
                                <?php the_sub_field( 'text' ); ?>
                            </div>
			                <button class="btn btn-yellow"><span>À quel prix ?</span></button>
                        </div>
                    </div>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'tarif_reduce', 'option' ) ) : ?>
	<?php while ( have_rows( 'tarif_reduce', 'option' ) ) : the_row(); ?>
                    <div class="flipper col-md-6">
                        <div class="price-box bg__white--ff price-box__front">
                            <div class="price-box__title ">
                                <h2><?php the_sub_field( 'titre' ); ?></h2>
                            </div>
                            <div class="price-box__body">
                                <h1><?php echo get_sub_field('price');?> €</h1>

                            </div>
			                <button class="btn btn-yellow white"><span>Qui peut en profiter ?</span></button>
                        </div>
                        <div class="price-box bg__white--ff price-box__back">
                            <div class="price-box__title">
                                <h2><?php the_sub_field( 'titre' ); ?></h2>
                            </div>
                            <div class="price-box__body">
                                <p><?php the_sub_field( 'text' ); ?> </p>
                            </div>
			                <button class="btn btn-yellow white"><span>À quel prix ?</span></button>
                        </div>
                    </div>
		<?php endwhile; ?>
<?php endif; ?>


                    <div class="col-md-12">
                        <div class="price-box bg__black p-4">
                            <div><?php the_field( 'group_discount', 'option' ); ?></div>
                        </div>
                    </div>
<?php if ( have_rows( 'advantages', 'option' ) ) : ?>
	<?php while ( have_rows( 'advantages', 'option' ) ) : the_row(); ?>
                    <div class="col-md-12">
							<div class="price-box bg__black pt-md-5">
								<h2 class="mb-30"><?php the_sub_field( 'title' ); ?></h2>
								<?php the_sub_field( 'text' ); ?>
							</div>
                    </div>
						<?php endwhile; ?>
<?php endif; ?>
                </div>
            </div>
        </div>