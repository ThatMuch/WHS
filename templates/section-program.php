

<?php
$img = get_sub_field( 'img' );
$lien = get_sub_field( 'lien' );
$text = get_sub_field( 'text' );
?>

<section id="promo" class="section__area bg__gradient ">
	<div class="container">
		<div class="is-mobile">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<?php if ( have_rows( 'items' ) ) : $i = 0; ?>
					<?php while ( have_rows( 'items' ) ) : the_row(); ?>
						<button
						type="button"
						data-bs-target="#carouselExampleIndicators"
						data-bs-slide-to="<?php echo $i?>"
						class="<?php echo $i=== 0 ? 'active' : '';?> btn-bullets"
						aria-current="<?php $i=== 0 ;?>"
						aria-label="Slide <?php echo $i?>">
						</button>
					<?php $i++; endwhile;?>
				<?php endif;?>
			</div>
			<div class="carousel-inner">
				<?php if ( have_rows( 'items' ) ) : $y = 0; ?>
					<?php while ( have_rows( 'items' ) ) : the_row(); ?>
					<?php
						$img = get_sub_field( 'img' );
						$lien = get_sub_field( 'lien' );
						$text = get_sub_field( 'text' );
					?>
				<div class="carousel-item <?php echo $y=== 0 ? 'active' : '';?>">
					<div class="promo-image-box">
					<?php if ( $img ) : ?>
						<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" class="img-responsive" />
					<?php endif; ?>
					</div>
			<div class="promo-text-box">
						<p class="f-21"><?php echo $text ;?></p>
						<div class="d-flex">

						<?php if ( $lien ) : ?>
							<a href="<?php echo esc_url( $lien['url'] ); ?>" target="<?php echo esc_attr( $lien['target'] ); ?>" class="btn-one">
							<span><?php echo esc_html( $lien['title'] ); ?></span></a>
						<?php endif; ?>
						</div>
					</div>

				</div>
					<?php $y++; endwhile;?>
				<?php endif;?>

			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			</div>
		</div>
		<div class="is-desktop">
			<?php if ( have_rows( 'items' ) ) : ?>
				<?php while ( have_rows( 'items' ) ) : the_row(); ?>
				<?php
					$img = get_sub_field( 'img' );
					$lien = get_sub_field( 'lien' );
					$text = get_sub_field( 'text' );
				?>
					<p class="d-none box-content"><?php echo $text ;?></p>

	<?php endwhile; ?>
			<div class="row align-items-center">
				<div class="col-md-5">
					<div class="promo-image-box">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/panneaux_programme.svg" alt="" class="svg"/>
					</div>
				</div>
				<div class="col-md-7 pl-lg-5">
					<div class="promo-text-box px-5">
						<p id="promo-text-box__text" class="f-21"></p>
						<div class="d-flex">
							<a href="" target="_blank" class="btn-one">
							<span>Formidable c'est par ici</span></a>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<script>
	  /*=============================================
  =            Hover SVG Section            =
  =============================================*/


// SVG
const convertImages = (query,callback) => {
  const images = document.querySelectorAll(query);

  images.forEach(image => {
    fetch(image.src)
      .then(res => res.text())
      .then(data => {
        const parser = new DOMParser();
        const svg = parser.parseFromString(data,'image/svg+xml').querySelector('svg');

        if (image.id) svg.id = image.id;
        if (image.className) svg.classList = image.classList;

        image.parentNode.replaceChild(svg,image);
      })
      .then(callback)
      .catch(error => console.error(error))
  });
}

convertImages('img.svg', hoverSigns());

const arrayTexts = [...document.getElementsByClassName('box-content')];
var content = document.getElementById('promo-text-box__text');

content.innerText = arrayTexts[0].innerText;

function hoverSigns() {
	setTimeout(function() {
		var svg = document.querySelectorAll('img.svg');
		var arraySigns = [...document.getElementsByClassName('sign')];
		arraySigns[1].classList.add('hover');

		arraySigns.forEach(sign => {
			sign.addEventListener('mouseover', () => {
				switch (sign.getAttribute('id')) {
					case "CTA_inspirer":
						sign.classList.add('hover');
						arraySigns[1].classList.remove('hover');
						arraySigns[2].classList.remove('hover');
						content.innerText = arrayTexts[1].innerText;
						break;
					case "CTA_former":
						sign.classList.add('hover');
						arraySigns[0].classList.remove('hover');
						arraySigns[2].classList.remove('hover');
						content.innerText = arrayTexts[0].innerText;
						break;
					case "CTA_accompagner":
						sign.classList.add('hover');
						arraySigns[1].classList.remove('hover');
						arraySigns[0].classList.remove('hover');
						content.innerText = arrayTexts[2].innerText;
						break;

					default:
						content.innerText = arrayTexts[0].innerText;
						break;
				}
			});
		});
	}, 2000);
}
  /*=====  End of Hover SVG Section  ======*/
</script>