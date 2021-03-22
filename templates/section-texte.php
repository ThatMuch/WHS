<div class="section__area">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 mx-auto">
				<div class="section__title">
					<?php if( get_sub_field('titre') ) : ?>
						<h2><?php echo get_sub_field('titre'); ?></h2>
					<?php endif; ?>
					<?php if( get_sub_field('texte') ) : ?>
						<div class="mb-75"><?php echo get_sub_field('texte'); ?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
</div>