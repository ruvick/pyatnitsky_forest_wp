<?php get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="page">

	<section id="info" class="info">

		<div class="slider-index _swiper">

			<div class="slider-index__slide slider__slide _bgi">
				<div class="_container">
					<h1>Строим дома на века!</h1>
					<p>Строгая система контроля на каждом этапе строительства. <br> Узнайте о наших гарантиях!</p>
					<a href="#" class="slider-index__btn btn">узнать подробности</a>
				</div>
			</div>

			<div class="slider-index__slide slider__slide _bgi">
				<div class="_container">
					<h1>Строим дома на века!</h1>
					<p>Строгая система контроля на каждом этапе строительства. <br> Узнайте о наших гарантиях!</p>
					<a href="#" class="slider-index__btn btn">узнать подробности</a>
				</div>
			</div>

			<div class="slider-index__slide slider__slide _bgi">
				<div class="_container">
					<h1>Строим дома на века!</h1>
					<p>Строгая система контроля на каждом этапе строительства. <br> Узнайте о наших гарантиях!</p>
					<a href="#" class="slider-index__btn btn">узнать подробности</a>
				</div>
			</div>

			<div class="slider-index__slide slider__slide _bgi">
				<div class="_container">
					<h1>Строим дома на века!</h1>
					<p>Строгая система контроля на каждом этапе строительства. <br> Узнайте о наших гарантиях!</p>
					<a href="#" class="slider-index__btn btn">узнать подробности</a>
				</div>
			</div>
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
						<h6>Закрытый поселок</h6>
						<p>Закрытая охраняемая территория</p>
					</div>
				</div>

				<div class="dignity__item d-flex">
					<div class="dignity__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/dignity/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/dignity/02.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
					<div class="dignity__descp">
						<h6>Легко добраться</h6>
						<p>Всего 2,5 км от г. Курск</p>
					</div>
				</div>

				<div class="dignity__item d-flex">
					<div class="dignity__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/dignity/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/dignity/03.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
					<div class="dignity__descp">
						<h6>Инфраструктура</h6>
						<p>Все необходимое для жизни <br> на территории поселка;</p>
					</div>
				</div>

			</div>

		</div>
	</section>

	<section id="about-project" class="about-project">
		<div class="_container">
			<h2 class="title"><?php echo carbon_get_theme_option('about_home_title'); ?></h2>
			<?php echo carbon_get_theme_option('about_home'); ?>
		</div>
	</section>

	<section id="house-types" class="house-types">
		<div class="_container">
			<h2 class="title">Типы домов</h2>

			<div class="house-types__row d-flex">

				<a href="#" class="house-card__body d-flex">
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

				<a href="#" class="house-card__body d-flex">
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

				<a href="#" class="house-card__body d-flex">
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

				<a href="#" class="house-card__body d-flex">
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

	<section id="gallery-project" class="gallery-project">
		<div class="_container">
			<h2 class="title">Фотогалерея проекта</h2>
			<div class="gallery-project__row d-flex">
				<div class="gallery-project__col gallery-project__col_left">
					<div class="gallery-project__img-big">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/gallery-project/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-project/01.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
				</div>
				<div class="gallery-project__col d-flex">
					<div class="gallery-project__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/gallery-project/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-project/02.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
					<div class="gallery-project__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/gallery-project/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-project/03.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
					<div class="gallery-project__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/gallery-project/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-project/04.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
				</div>
			</div>
			<a href="#" class="gallery-project__btn btn">перейти в галерею</a>
		</div>
	</section>

	<section id="follow-sec" class="follow-sec">
		<div class="_container">
			<a href="<?php echo carbon_get_theme_option('as_insta'); ?>" class="follow-sec__bg d-flex">
				<div class="follow-sec__img-tel">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/instagram/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/01.png?_v=1632757662937" alt="">
					</picture>
				</div>
				<div class="follow-sec__title">
					<h2>Следите за нашим проектом в Instagram</h2>
					<div class="follow-sec__link"></div>
				</div>
				<div class="follow-sec__img-house">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/instagram/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram/02.png?_v=1632757662937" alt="">
					</picture>
				</div>
			</a>
		</div>
	</section>

	<section id="index-map" class="index-map">
		<div class="_container">
			<h2 class="title">Как добраться</h2>
		</div>
		<div id="map" class="index-map__map map"></div>
		<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

		<script>
			ymaps.ready(init);

			function init() {
				var myMap = new ymaps.Map("map", {
					// Координаты центра карты
					center: [<?php echo carbon_get_theme_option('map_point') ?>],
					// Масштаб карты
					zoom: 10,
					// Выключаем все управление картой
					controls: []
				});

				var myGeoObjects = [];

				// Указываем координаты метки
				myGeoObjects = new ymaps.Placemark([<?php echo carbon_get_theme_option('map_point') ?>], {
					// hintContent: '<div class="map-hint">Авто профи, Курск, ул.Комарова, 16</div>',
					balloonContent: '<div class="map-hint"><?php echo carbon_get_theme_option('text_map') ?>',
				}, {
					iconLayout: 'default#image',
					// Путь до нашей картинки
					iconImageHref: '<?php bloginfo("template_url"); ?>/img/icons/map-marker.svg',
					// Размеры иконки
					iconImageSize: [26, 32],
					// Смещение верхнего угла относительно основания иконки
					iconImageOffset: [-25, -100]
				});

				var clusterer = new ymaps.Clusterer({
					clusterDisableClickZoom: false,
					clusterOpenBalloonOnClick: false,
				});

				clusterer.add(myGeoObjects);
				myMap.geoObjects.add(clusterer);
				// Отключим zoom
				myMap.behaviors.disable('scrollZoom');

			}
		</script>
	</section>

	<section id="team" class="team">
		<div class="_container">
			<h2 class="title">Наша команда</h2>

			<div class="team__row d-flex">

				<div class="team-card__body d-flex">
					<div class="team-card__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/team/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/team/01.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
					<div class="team-card__text">
						<h3>Иванова Дарья Васильевна</h3>
						<p class="team-card__descp">Директор по развитию</p>
					</div>
					<div class="team-card__contact d-flex">
						<div class="team-card__line"></div>
						<a href="tel:+7(495)1234567" class="team-card__tel">(495) 123-45-67</a>
						<a href="mailto:random@mail.com" class="team-card__email">random@mail.com</a>
					</div>
				</div>

				<div class="team-card__body d-flex">
					<div class="team-card__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/team/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/team/02.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
					<div class="team-card__text">
						<h3>Петров Алексей Петрович</h3>
						<p class="team-card__descp">Исполнительный директор</p>
					</div>
					<div class="team-card__contact d-flex">
						<div class="team-card__line"></div>
						<a href="tel:+7(495)1234567" class="team-card__tel">(495) 123-45-67</a>
						<a href="mailto:random@mail.com" class="team-card__email">random@mail.com</a>
					</div>
				</div>

				<div class="team-card__body d-flex">
					<div class="team-card__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/team/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/team/03.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
					<div class="team-card__text">
						<h3>Кисегач Алена Борисовна</h3>
						<p class="team-card__descp">Заместитель директора</p>
					</div>
					<div class="team-card__contact d-flex">
						<div class="team-card__line"></div>
						<a href="tel:+7(495)1234567" class="team-card__tel">(495) 123-45-67</a>
						<a href="mailto:random@mail.com" class="team-card__email">random@mail.com</a>
					</div>
				</div>

				<div class="team-card__body d-flex">
					<div class="team-card__img">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/team/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/team/04.jpg?_v=1632757662937" alt="">
						</picture>
					</div>
					<div class="team-card__text">
						<h3>Маслов Александр Иванович</h3>
						<p class="team-card__descp">Архитектор</p>
					</div>
					<div class="team-card__contact d-flex">
						<div class="team-card__line"></div>
						<a href="tel:+7(495)1234567" class="team-card__tel">(495) 123-45-67</a>
						<a href="mailto:random@mail.com" class="team-card__email">random@mail.com</a>
					</div>
				</div>

			</div>

			<a href="#" class="team__btn btn">Все сотрудники</a>

		</div>
	</section>

	<section id="quest-work" class="quest-work">
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
	</section>

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