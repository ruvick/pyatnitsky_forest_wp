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
							<!-- <p class="project-card__block-price-number-old">Цена без скидки: <span><?echo carbon_get_post_meta(get_the_ID(),"offer_old_price"); ?> р</span></p> -->
						</div>
					</div>
					<div class="project-card__specific">
						<div class="info__charact">
							<?	$charact = carbon_get_post_meta(get_the_ID(),'complex_charact');
							if($charact) {
								$charactIndex = 0;
								foreach($charact as $items) {
									?>
									<div class="info__charact-row d-flex">
										<div class="info__charact-name"><? echo $items['charact_name']; ?></div>
										<div class="info__charact-line"></div>
										<div class="info__charact-desc"><? echo $items['charact_desc']; ?></div>
									</div> 
									<?
									$charactIndex++; 
								}
							}
							?>
						</div>
					</div>
					<a href="<?php echo wp_get_attachment_url(carbon_get_the_post_meta("offer_pasport")); ?>" class="pasport_lnk">Скачать паспорт объекта</a>
					<a href="#" class="project-card__btn btn">Заказать расчет стоимости</a>
				</div>

			</div>

		</div>
	</section>

	<section id="project-descp-sec" class="project-descp-sec recurring">
		<div class="_container">

			<h2>Описание</h2>

			<? the_content();?>

			<? 
				$video1 = carbon_get_the_post_meta("offer_video_str_1");
				$video2 = carbon_get_the_post_meta("offer_video_str_2");

			if (!empty($video1)) {
			?>
				<h2>Ход строительства</h2>
				<a href="<?php echo wp_get_attachment_url($video1); ?>" data-rel="media" class="about__link-video_str fancybox position">
					<video class="about__video" controls="controls" loop autoplay muted poster="<?php echo get_template_directory_uri(); ?>/img/video/video.png">
						<source src="<?php echo wp_get_attachment_url($video1); ?>" type='video/mp4'>
					</video>
				</a>
			<?}
			if (!empty($video2)) {
				
			?>
				<a href="<?php echo wp_get_attachment_url($video2); ?>" data-rel="media" class="about__link-video_str fancybox position">
					<video class="about__video" controls="controls" loop autoplay muted poster="<?php echo get_template_directory_uri(); ?>/img/video/video.png">
						<source src="<?php echo wp_get_attachment_url($video2); ?>" type='video/mp4'>
					</video>
				</a>
			<?}?>

			
			<div class="project-descp-sec__line"></div>

			<h2>Планировки</h2>

			<div class="project-descp-sec__layouts-block d-flex">

				<div class="project-descp-sec__layouts-img-item">
					<div class="project-descp-sec__layouts-img">
						<a fancybox href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta("offer_plan_img"), 'large')[0]; ?>" class="href">
							<img loading="lazy"  src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta("offer_plan_img"), 'large')[0]; ?>" alt="">
						</a>
					</div>
					<h4><? echo carbon_get_the_post_meta("offer_plan_h"); ?></h4>
				</div>

				<div class="project-descp-sec__layouts-img-item">
					<div class="project-descp-sec__layouts-img">
						<img loading="lazy" fancybox src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta("offer_plan_img_1"), 'large')[0]; ?>" alt="">
					</div>
					<h4><? echo carbon_get_the_post_meta("offer_plan_h_1"); ?></h4>
				</div>

				<? if (carbon_get_the_post_meta("offer_plan_img_2")) { ?>
					<div class="project-descp-sec__layouts-img-item">
						<div class="project-descp-sec__layouts-img">
							<img loading="lazy" fancybox src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta("offer_plan_img_2"), 'large')[0]; ?>" alt="">
						</div>
						<h4><? echo carbon_get_the_post_meta("offer_plan_h_2"); ?></h4>
					</div>
				<?}?>
				
				<? if (carbon_get_the_post_meta("offer_plan_img_3")) { ?>
				<div class="project-descp-sec__layouts-img-item">
					<div class="project-descp-sec__layouts-img">
						<img loading="lazy" fancybox src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta("offer_plan_img_3"), 'large')[0]; ?>" alt="">
					</div>
					<h4><? echo carbon_get_the_post_meta("offer_plan_h_3"); ?></h4>
				</div>
				<?}?>

			</div>

		</div>
	</section>

	<?php get_template_part('template-parts/instagramm'); ?>

</main>

<?php get_footer();
