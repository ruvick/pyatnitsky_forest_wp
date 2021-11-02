<div class="team__row d-flex">
				<? 
					$items = carbon_get_theme_option("complex_command");
					if ($items) 
						foreach ($items as $item) {
				?>
					<div class="team-card__body d-flex">
						<div class="team-card__img">
							<picture>
								<source srcset="<?php echo wp_get_attachment_image_src($item['img_p'], 'full')[0]; ?>" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/team/01.jpg?_v=1632757662937" alt="">
							</picture>
						</div>
						<div class="team-card__text">
							<h3><? echo $item["name"]; ?></h3>
							<p class="team-card__descp"><? echo $item["dolg"]; ?></p>
						</div>
						<div class="team-card__contact d-flex">
							<div class="team-card__line"></div>
							<a href="tel:+7(495)1234567" class="team-card__tel"><? echo $item["phone"]; ?></a>
							<a href="mailto:<? echo $item["mail"]; ?>" class="team-card__email"><? echo $item["mail"]; ?></a>
						</div>
					</div>
				<?
					}
				?>


			</div>