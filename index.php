<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="page">

	<section id="info" class="info">
		<div class="slider-index _swiper">
			<?
			$pict = carbon_get_theme_option('slider_index');
			if ($pict) {
				$pictIndex = 0;
				foreach ($pict as $item) {
			?>
					<div class="slider-index__slide slider__slide _bgi" style="background-image: url(<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0]; ?>);">
						<div class="nuar_blk"></div>
						<div class="_container">
							<? if (!empty($item['slider_title'])) { ?>
								<h1><? echo $item['slider_title']; ?></h1>
								<p><? echo $item['slider_subtitle']; ?></p>
								<a href="<? echo $item['slider_link']; ?>" class="slider-index__btn btn"><? echo $item['slider_link_text']; ?></a>
							<? } ?>
						</div>
					</div>
			<?
					$pictIndex++;
				}
			}
			?>
		</div>
		<div class="swiper-button swiper-button-next"></div>
		<div class="swiper-button swiper-button-prev"></div>
	</section>

	<section id="dignity" class="dignity">
		<div class="_container">
			<div class="dignity__row d-flex">
				<div class="dignity__item d-flex">
					<div class="dignity__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/dignity/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/dignity/01.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
					<div class="dignity__descp">
						<h6>Закрытый жилой комплекс</h6>
						<p>Закрытая охраняемая территория, <br> видеонаблюдение по всей территории поселка</p>
					</div>
				</div>
				<a href="https://yandex.ru/maps/-/CCUqUVuAHD" target="_blank" class="dignity__item d-flex">
					<div class="dignity__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/dignity/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/dignity/02.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
					<div class="dignity__descp">
						<h6>Легко добраться</h6>
						<p> Дорога из центра займет 16 минут. <br/>Комплекс расположен в 2,5 км от <br/>г. Курска</p>
					</div>
				</a>
				<div class="dignity__item d-flex">
					<div class="dignity__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/dignity/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/dignity/03.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
					<div class="dignity__descp">
						<h6>Инфраструктура</h6>
						<p>Торговый центр, детский сад, <br> спортивная площадка, лыжероллерная трасса</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<? $aboutht = carbon_get_theme_option('about_home_title');
	if (!empty($aboutht)) { ?>
	<section id="about-project" class="about-project">
		<div class="_container">
			<h2 class="title"><?php echo  carbon_get_theme_option('about_home_title'); ?></h2>
			<div class="about-project__subtitle">
			<?php echo apply_filters('the_content', carbon_get_theme_option('about_home')); ?>
			</div>
			<a href="<?php echo get_template_directory_uri(); ?>/img/video/pyatnitsky.mp4" data-rel="media" class="about__link-video fancybox position">
				<video class="about__video" controls="controls" loop autoplay muted poster="<?php echo get_template_directory_uri(); ?>/img/video/video.png">
					<source src="<?php echo get_template_directory_uri(); ?>/img/video/pyatnitsky.mp4" type='video/mp4'>
				</video>
			</a>

			<a href="https://forestsea.ru/wp-content/uploads/2021/10/prezentation-les-more.pdf" class="gallery-project__btn btn">Скачать презентацию</a>
		</div>
	</section>
<? } ?>

	<section id="house-types" class="house-types">
		<div class="_container">
			<h2 class="title">Типы домов</h2>

			<div class="house-types__row d-flex">

					<?php get_template_part('template-parts/main-homes'); ?>

			</div>

			<a href="<?php echo get_permalink(27);?>" class="house-types__btn btn">Все дома</a>

		</div>
	</section>

	<section id="gallery-project" class="gallery-project">
		<div class="_container">
			<h2 class="title">Фотогалерея проекта</h2>
			<div class="gallery-project__row d-flex">
				<div class="gallery-project__col gallery-project__col_left">
					<div class="gallery-project__img-big">
						<a data-lightbox = "gl1" href="<?php echo get_template_directory_uri(); ?>/img/gallery-project/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-project/01.jpg" class="href">
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/img/gallery-project/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-project/01.jpg?_v=1632757662937" alt="">
							</picture>
						</a>
					</div>
				</div>
				<div class="gallery-project__col d-flex">
					<div class="gallery-project__img">
						<a data-lightbox = "gl1" href="<?php echo get_template_directory_uri(); ?>/img/gallery-project/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-project/02.jpg" class="href">
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/img/gallery-project/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-project/02.jpg?_v=1632757662937" alt="">
							</picture>
						</a>
					</div>
					<div class="gallery-project__img">
						<a data-lightbox = "gl1" href="<?php echo get_template_directory_uri(); ?>/img/gallery-project/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-project/03.jpg" class="href">
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/img/gallery-project/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-project/03.jpg?_v=1632757662937" alt="">
							</picture>
						</a>
					</div>
					<div class="gallery-project__img">
						<a data-lightbox = "gl1" href="<?php echo get_template_directory_uri(); ?>/img/gallery-project/04.jpg" class="href">
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/img/gallery-project/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-project/04.jpg?_v=1632757662937" alt="">
							</picture>
						</a>
					</div>
				</div>
			</div>
			<a href="<?php echo get_permalink(21);?>" class="gallery-project__btn btn">перейти в галерею</a>
		</div>
	</section>

	<?php get_template_part('template-parts/instagramm'); ?>

	<section id="index-map" class="index-map">
		<div class="_container">
			<h2 class="title">Как добраться</h2>
		</div>
		<div class="index-map__map">
			<div class="mapIn">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2150bf3f4a6ed3d96eb57d8be5c8ab1958ed1d0217a66f9c874924d36153d2c9&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>	
			
			<div class = "dbrVIdeo">
				<a href="<?php echo wp_get_attachment_url(carbon_get_theme_option("as_dbr_video")); ?>" data-rel="media" class="about__link-video">
					<video class="about__video" controls="controls" loop autoplay muted poster="<?php echo get_template_directory_uri(); ?>/img/video/video.png">
						<source src="<?php echo wp_get_attachment_url(carbon_get_theme_option("as_dbr_video")); ?>" type='video/mp4'>
					</video>
				</a>
			</div>
		</div>
	</section>

	<section id="team" class="team">
		<div class="_container">
			<h2 class="title">Наша команда</h2>

			<?php get_template_part('template-parts/main-command'); ?>

			<a href="<?php echo get_permalink(24);?>" class="team__btn btn">Вся комманда</a>

		</div>
	</section>

<!-- 	<section id="quest-work" class="quest-work">
		<div class="_container">
			<div class="quest-work__block-bg _bgi d-flex">
				<div class="quest-work__img">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/vacancies.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/vacancies.png?_v=1632757662937" alt="">
					</picture>
				</div>
				<div class="quest-work__title-block">
					<h2>Хотите работать с нами?</h2>
					<a href="#callback" class="quest-work__btn _popup-link btn">Смотреть все вакансии</a>
				</div>
			</div>
		</div>
	</section> -->

	<section id="consult-sec" class="consult-sec">
		<div class="_container">
			<div class="consult-sec__row d-flex">
				<div class="consult-sec__title-block d-flex">
					<h2>Нужна <br> консультация?</h2>
					<p>
						Подробно расскажем о нашем коттеджном поселке, ходе строительства, проектах коттеджей и таунхаусов, ознакомим
						с инфраструктурой и предложим самое выгодное предложение.
					</p>
				</div>
				<a href="#callback" class="consult-sec__btn _popup-link btn">Задать вопрос</a>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>