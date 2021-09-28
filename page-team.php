<?php

/*
Template Name: Страница Наша команда
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

			<div class="team__row d-flex">
				
				<div class="team-card__body d-flex">
					<div class="team-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/team/01.jpg" alt="">
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
						<img src="<?php echo get_template_directory_uri();?>/img/team/02.jpg" alt="">
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
						<img src="<?php echo get_template_directory_uri();?>/img/team/03.jpg" alt="">
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
						<img src="<?php echo get_template_directory_uri();?>/img/team/04.jpg" alt="">
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

				<div class="team-card__body d-flex">
					<div class="team-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/team/04.jpg" alt="">
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

				<div class="team-card__body d-flex">
					<div class="team-card__img">
						<img src="<?php echo get_template_directory_uri();?>/img/team/03.jpg" alt="">
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
						<img src="<?php echo get_template_directory_uri();?>/img/team/02.jpg" alt="">
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
						<img src="<?php echo get_template_directory_uri();?>/img/team/01.jpg" alt="">
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

			</div>

		</div>
	</section>

	<?php get_template_part('template-parts/follow-sec'); ?>

</main>

<?php get_footer();
