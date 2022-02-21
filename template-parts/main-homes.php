<?

    $arg = [
        'sort_order'   => 'ASC',
        'sort_column'  => 'menu_order',
        'child_of' => 27,
        
    ];
    
    if (is_home())
        $arg["include"] = [44, 46, 48, 50];

					$pages = get_pages($arg);



					foreach( $pages as $pg ) {

?>
					<a href="<?php echo get_permalink($pg->ID);?>" class="house-card__body d-flex">
						<div class="house-card__img">
							<picture>
								<source srcset="<?php echo get_the_post_thumbnail_url( $pg->ID, 'medium' );; ?>" type="image/jpeg"><img src="<?php echo get_the_post_thumbnail_url( $pg->ID, 'medium' );; ?>" alt="">
							</picture>
						</div>
						<div class="house-card__text">
							<h3><?echo $pg->post_title;?></h3>
							<p class="house-card__descp"><? echo carbon_get_post_meta($pg->ID, "offer_dop_text");?></p>
						</div>
						<div class="house-card__price-item d-flex">
							<p class="house-card__volume btn"><? echo carbon_get_post_meta($pg->ID, "offer_square");?></p>
							<div class="house-card__block-price">
								<p class="house-card__price"><? echo carbon_get_post_meta($pg->ID, "offer_price");?> р</p>
								<!-- <p class="house-card__price-old"><? echo carbon_get_post_meta($pg->ID, "offer_old_price");?> р</p> -->
							</div>
							
						</div>
						<div class ="remont">
								<? echo carbon_get_post_meta($pg->ID, "offer_remont");?>
						</div>
					</a>
<?
    } 
?>