<?php

/*
Template Name: Страница Галерея
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

			<div class="gallery-project__row d-flex">
				<div class="gallery-project__col gallery-project__col_left">
					<div class="gallery-project__img-big">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/gallery-project/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/gallery-project/01.jpg?_v=1632757662937" alt=""></picture>
						</div>
					</div>
					<div class="gallery-project__col d-flex">
						<div class="gallery-project__img">
							<picture><source srcset="<?php echo get_template_directory_uri();?>/img/gallery-project/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/gallery-project/02.jpg?_v=1632757662937" alt=""></picture>
							</div>
							<div class="gallery-project__img">
								<picture><source srcset="<?php echo get_template_directory_uri();?>/img/gallery-project/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/gallery-project/03.jpg?_v=1632757662937" alt=""></picture>
								</div>
								<div class="gallery-project__img">
									<picture><source srcset="<?php echo get_template_directory_uri();?>/img/gallery-project/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/gallery-project/04.jpg?_v=1632757662937" alt=""></picture>
									</div>
								</div>
							</div>

							<div class="gallery-project__row d-flex">
								<div class="gallery-project__col d-flex">
									<div class="gallery-project__img">
										<picture><source srcset="<?php echo get_template_directory_uri();?>/img/gallery-project/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/gallery-project/02.jpg?_v=1632757662937" alt=""></picture>
										</div>
										<div class="gallery-project__img">
											<picture><source srcset="<?php echo get_template_directory_uri();?>/img/gallery-project/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/gallery-project/03.jpg?_v=1632757662937" alt=""></picture>
											</div>
											<div class="gallery-project__img">
												<picture><source srcset="<?php echo get_template_directory_uri();?>/img/gallery-project/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/gallery-project/04.jpg?_v=1632757662937" alt=""></picture>
												</div>
											</div>
											<div class="gallery-project__col gallery-project__col_left gallery-project__col_left_mirro">
												<div class="gallery-project__img-big">
													<picture><source srcset="<?php echo get_template_directory_uri();?>/img/gallery-project/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/gallery-project/01.jpg?_v=1632757662937" alt=""></picture>
													</div>
												</div>
											</div>

										</div>
									</section>

									<?php get_template_part('template-parts/follow-sec'); ?>

								</main>

								<?php get_footer();
