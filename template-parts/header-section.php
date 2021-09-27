<header id="header" class="header">
	<div class="header__container _container">

		<div class="header__row d-flex">

			<a href="index.html" class="header__logo logo-icon">
				<p>Пятницкий <br>лес</p>
			</a>

			<div class="header__menu menu">
				<nav class="menu__body">
					<ul class="menu__list sibling-fade d-flex">
						<li><a href="#" class="menu__link">О проекте</a></li>
						<li><a href="#" class="menu__link">Дома</a></li>
						<li><a href="gallery.html" class="menu__link">Галерея</a></li>
						<li><a href="team.html" class="menu__link">Наша команда</a></li>
						<li><a href="#" class="menu__link">Как добраться</a></li> 
						<li><a href="#" class="menu__link">Контакты</a></li> 
					</ul>
						<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu__list',
						'container_class' => 'menu__list','container' => false )); ?>  -->
					</nav>
				</div>

				<div class="header__callback d-flex">
					<a href="tel:+7(47131)21251">+7 (47131) 2-12-51</a>
					<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phone_1"); ?></a> -->
					<a href="#callback" class="header__popup-link _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
				</div>
				<a href="tel:84951700000" class="mob-callback__phone"></a>
				<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-callback__phone"></a> -->

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
		<ul class="mob-menu__list">
			<li><a href="#" class="menu__link">О проекте</a></li>
			<li><a href="#" class="menu__link">Дома</a></li>
			<li><a href="gallery.html" class="menu__link">Галерея</a></li>
			<li><a href="team.html" class="menu__link">Наша команда</a></li>
			<li><a href="#" class="menu__link">Как добраться</a></li> 
			<li><a href="#" class="menu__link">Контакты</a></li> 
		</ul>
			<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
			'container_class' => 'mob-menu__list','container' => false )); ?>  -->
			<a href="#callback" class="header__popup-link header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
		</div>