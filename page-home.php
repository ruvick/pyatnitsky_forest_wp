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
				
					<?php get_template_part('template-parts/main-homes'); ?>
					
			</div>

		</div>
	</section>

					<?php get_template_part('template-parts/follow-sec'); ?>

</main>

<?php get_footer();
