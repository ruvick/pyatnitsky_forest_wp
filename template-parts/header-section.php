<header id="header" class="header">
	<div class="header__container _container">

		<div class="header__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="header__logo logo-icon">
				<p>Пятницкий <br>лес</p>
			</a>

			<div class="header__menu menu">
				<nav class="menu__body">
					<?php wp_nav_menu(array(
						'theme_location' => 'menu_main', 'menu_class' => 'menu__list',
						'container_class' => 'menu__list', 'container' => false
					)); ?>
				</nav>
			</div>

			<div class="header__callback d-flex">
				<a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phone_1"); ?></a>
				<a href="#callback" class="header__popup-link _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
			</div>
			<a href="tel:84951700000" class="mob-callback__phone"></a>
			<a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-callback__phone"></a>

			<div class="menu__icon icon-menu">
				<span></span>
				<span></span>
				<span></span>
			</div>

		</div>

	</div>
</header>

<!-- Мобильное меню -->
<div class="header__mob-menu mob-menu">
	<?php wp_nav_menu(array(
		'theme_location' => 'menu_main', 'menu_class' => 'mob-menu__list',
		'container_class' => 'mob-menu__list', 'container' => false
	)); ?>
	<a href="#callback" class="header__popup-link header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>