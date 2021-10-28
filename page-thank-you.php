<?php

/*
Template Name: Страница Благодарности
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section'); ?>

<main class="page">

	<section id="page-thank-you" class="page-thank-you page-recurring">
		<div class="_container">

			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
			}
			?>

			<h1>Благодарим за обращение</h1>
			<p>Наши менеджеры свяжутся с Вами в течение 15 минут</p>

		</div>
	</section>

	<?php get_template_part('template-parts/instagramm'); ?>

</main>

<?php get_footer();
