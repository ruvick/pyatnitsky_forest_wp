
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package light_market
 * Template Name: Страница Генплана
 * Template Post Type: page
 */

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">
	<section class="page-recurring content">
		<div class="_container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 
                <a href="<?php echo wp_get_attachment_url(carbon_get_the_post_meta("offer_gp_file")); ?>" class="pasport_lnk">Скачать генплан в формате PDF</a>
                <div class = "history">
                    <div class = "h_element shourum"> - Шоурум</div>
                    <div class = "h_element rezerv"> - Забронировано</div>
                </div>
        </div>
	</section>

    <section class="page-recurring content gp_section">
        <img loading="lazy" class = "genplan_img" fancybox src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta("offer_gp_img"), 'full')[0]; ?>" alt="">
    </section>

    <?php get_template_part('template-parts/instagramm'); ?>
</main>

<?php get_footer();