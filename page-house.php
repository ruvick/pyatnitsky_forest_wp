<?php

/*
Template Name: Страница Проект
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

			<div class="project-card__row d-flex">

				<div class="project-wrap">
					<div class="project-card__slider project-card__img _swiper">
						<?
						$pict = carbon_get_the_post_meta('offer_picture');
						if ($pict) {
							$pictIndex = 0;
							foreach ($pict as $item) {
								?>
								<div class="project-card__slide slider__slide">
									<img src="<?php echo wp_get_attachment_image_src($item['gal_img'], 'large')[0]; ?>" id="<? echo $item['gal_img_sku']; ?>" alt="<? echo $item['gal_img_alt']; ?>">
								</div>
								<?
								$pictIndex++;
							}
						}
						?>
					</div>
					<div class="swiper-button project-card__next swiper-button-next"></div>
					<div class="swiper-button project-card__prev swiper-button-prev"></div>
				</div>

				<div class="project-card__descp">
					<div class="project-card__block-price d-flex">
						<div class="project-card__block-price-volume"><?echo carbon_get_post_meta(get_the_ID(),"offer_square"); ?></div>
						<div class="project-card__block-price-number">
							<p class="project-card__block-price-number-new"><?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?> р</p>
							<p class="project-card__block-price-number-old">Цена без скидки: <span><?echo carbon_get_post_meta(get_the_ID(),"offer_old_price"); ?> р</span></p>
						</div>
					</div>
					<div class="project-card__specific">
						<div class="info__charact">

							<div class="info__charact-row d-flex">
								<div class="info__charact-name">Площадь</div>
								<div class="info__charact-line"></div>
								<div class="info__charact-desc">370 м2</div>
							</div>

							<div class="info__charact-row d-flex">
								<div class="info__charact-name">Этажей</div>
								<div class="info__charact-line"></div>
								<div class="info__charact-desc">2</div>
							</div>

							<div class="info__charact-row d-flex">
								<div class="info__charact-name">Жилая площадь</div>
								<div class="info__charact-line"></div>
								<div class="info__charact-desc">170 м2</div>
							</div>

							<div class="info__charact-row d-flex">
								<div class="info__charact-name">Площадь кухни</div>
								<div class="info__charact-line"></div>
								<div class="info__charact-desc">30 м2</div>
							</div>

							<div class="info__charact-row d-flex">
								<div class="info__charact-name">Гараж</div>
								<div class="info__charact-line"></div>
								<div class="info__charact-desc">на 3 машины и более</div>
							</div>

							<div class="info__charact-row d-flex">
								<div class="info__charact-name">Количество спален</div>
								<div class="info__charact-line"></div>
								<div class="info__charact-desc">5+</div>
							</div>

							<div class="info__charact-row d-flex">
								<div class="info__charact-name">Назначение</div>
								<div class="info__charact-line"></div>
								<div class="info__charact-desc">таун-хаус</div>
							</div>

						</div>
					</div>
					<a href="#" class="project-card__btn btn">Заказать расчет стоимости</a>
				</div>

			</div>

		</div>
	</section>

	<section id="project-descp-sec" class="project-descp-sec recurring">
		<div class="_container">

			<h2>Описание</h2>

			<p>
				Просторный и светлый одноэтажный дом понравится любителям отдыха на природе. Отличный вариант для загородной резиденции! 
			</p>

			<h6>Отличительные особенности:</h6>
			<ul>
				<li>Благодаря фахверковой конструкции и жесткому несущему каркасу обладает повышенной надежностью.</li>
				<li>При строительстве используются материалы, устойчивые к перепаду температур, влаги и разрушительных воздействий окружающей среды.</li>
				<li>Готовая внутренняя отделка: в доме можно жить сразу после сдачи в эксплуатацию!</li>
			</ul>

			<div class="project-descp-sec__line"></div>

			<h2>Планировки</h2>

			<div class="project-descp-sec__layouts-block d-flex">

				<div class="project-descp-sec__layouts-img-item">
					<div class="project-descp-sec__layouts-img">
						<img src="<?php echo get_template_directory_uri();?>/img/project/02.jpg" alt="">
					</div>
					<h4>Усадьба 1</h4>
				</div>

				<div class="project-descp-sec__layouts-img-item">
					<div class="project-descp-sec__layouts-img">
						<img src="<?php echo get_template_directory_uri();?>/img/project/03.jpg" alt="">
					</div>
					<h4>Усадьба 2</h4>
				</div>

			</div>

		</div>
	</section>

	<?php get_template_part('template-parts/follow-sec'); ?>

</main>

<?php get_footer();
