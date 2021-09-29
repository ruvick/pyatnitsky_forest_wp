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
				
			<?php get_template_part('template-parts/main-command'); ?>

			</div>

		</div>
	</section>

	<?php get_template_part('template-parts/instagramm'); ?>

</main>

<?php get_footer();
