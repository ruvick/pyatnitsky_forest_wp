<?php

/*
Template Name: Страница Дома
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="page">

	<section id="page-recurring" class="page-recurring">
		<div class="_container">

			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
			}
			?>

			<h1><? the_title(); ?></h1>

			<div class="house-types__row d-flex">

				<a href="<?php echo get_permalink(30);?>" class="house-card__body d-flex">
					<div class="house-card__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/card-houses/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/card-houses/01.jpg?_v=1632757662937" alt="">
							</picture>
						</div>
						<div class="house-card__text">
							<h3>Квадро</h3>
							<p class="house-card__descp">Из оцилиндрованого бревна</p>
						</div>
						<div class="house-card__price-item d-flex">
							<p class="house-card__volume btn">400 м2</p>
							<div class="house-card__block-price">
								<p class="house-card__price">3 000 000 р</p>
								<p class="house-card__price-old">3 750 000 р</p>
							</div>
						</div>
					</a>

					<a href="<?php echo get_permalink(30);?>" class="house-card__body d-flex">
						<div class="house-card__img">
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/img/card-houses/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/card-houses/02.jpg?_v=1632757662937" alt="">
								</picture>
							</div>
							<div class="house-card__text">
								<h3>Усадьба</h3>
								<p class="house-card__descp">Дома из клееного бруса</p>
							</div>
							<div class="house-card__price-item d-flex">
								<p class="house-card__volume btn">200 м2</p>
								<div class="house-card__block-price">
									<p class="house-card__price">2 500 000 р</p>
									<p class="house-card__price-old">2 950 000 р</p>
								</div>
							</div>
						</a>

						<a href="<?php echo get_permalink(30);?>" class="house-card__body d-flex">
							<div class="house-card__img">
								<picture>
									<source srcset="<?php echo get_template_directory_uri(); ?>/img/card-houses/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/card-houses/03.jpg?_v=1632757662937" alt="">
									</picture>
								</div>
								<div class="house-card__text">
									<h3>Коттедж 1</h3>
									<p class="house-card__descp">Бани</p>
								</div>
								<div class="house-card__price-item d-flex">
									<p class="house-card__volume btn">100 м2</p>
									<div class="house-card__block-price">
										<p class="house-card__price">1 100 000 р</p>
										<p class="house-card__price-old">1 450 000 р</p>
									</div>
								</div>
							</a>

							<a href="<?php echo get_permalink(30);?>" class="house-card__body d-flex">
								<div class="house-card__img">
									<picture>
										<source srcset="<?php echo get_template_directory_uri(); ?>/img/card-houses/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/card-houses/04.jpg?_v=1632757662937" alt="">
										</picture>
									</div>
									<div class="house-card__text">
										<h3>Коттедж 2</h3>
										<p class="house-card__descp">Дома из профилированного бруса</p>
									</div>
									<div class="house-card__price-item d-flex">
										<p class="house-card__volume btn">70 м2</p>
										<div class="house-card__block-price">
											<p class="house-card__price">900 000 р</p>
											<p class="house-card__price-old">950 000 р</p>
										</div>
									</div>
								</a>

							</div>

						</div>
					</section>

					<?php get_template_part('template-parts/follow-sec'); ?>

				</main>

				<?php get_footer();
