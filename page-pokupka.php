
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
 * Template Name: Страница Покупка и юридическая чистота
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
					<div class="prod_banners">
                        <div class="prod_element prod_element_ipoteka">
                            <div class="nuar_blk"></div>
                            <div class="text">
                                <h2>Сельская ипотека всего 2,7%*</h2>
                                <p>Самые выгодные предложения по ипотеке <br> на приобретение частного дома за городом.<br> У нас только надежные и проверенные банки!</p>
                            </div>
                        </div>
                        <div class="prod_element prod_element_treidin">
                            <div class="nuar_blk"></div>
                            <div class="text">
                                <h2>Трейдин на покупку недвижимости</h2>
                                <p>Примем Вашу недвижимость в трейдин <br/>предложим выгодную цену и поможем<br/> оформить все документы</p>
                                <a href="#callback" class="slider-index__btn btn _popup-link">Вызвать специалиста</a>
                            </div>
                        </div>
                    </div>
                    <?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 
        </div>
	</section>

    <?php get_template_part('template-parts/instagramm'); ?>
</main>

<?php get_footer();