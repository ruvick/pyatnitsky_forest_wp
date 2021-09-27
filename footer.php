<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<div class="footer__policy">
				<p>© 2021 Все права защищены</p>
				<div class="footer__social d-flex">
					<a href="#" class="footer__social-icon social-icon-01"></a>
					<a href="#" class="footer__social-icon social-icon-02"></a>
				</div>
			</div>

			<div class="footer__menu-block d-flex">
				<ul class="footer__menu footer__menu_left">
					<li><a href="#" class="menu__link">Типовые проекты</a></li>
					<li><a href="#" class="menu__link">Квадро</a></li>
					<li><a href="#" class="menu__link">Коттедж 1</a></li>
					<li><a href="#" class="menu__link">Коттедж 2</a></li>
					<li><a href="project.html" class="menu__link">Усадьба</a></li>
				</ul>

				<ul class="footer__menu footer__menu_right">
					<li><a href="#" class="menu__link">О проекте</a></li>
					<li><a href="#" class="menu__link">Дома</a></li>
					<li><a href="gallery.html" class="menu__link">Галерея</a></li>
					<li><a href="team.html" class="menu__link">Наша команда</a></li>
					<li><a href="#" class="menu__link">Как добраться</a></li>
					<li><a href="#" class="menu__link">Контакты</a></li>
				</ul>
			</div>

			<div class="footer__contacts d-flex">
				<a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="footer__phone"><? echo $tel = carbon_get_theme_option("as_phone_1"); ?></a>
				<a href="#callback" class="footer__callback _popup-link">Заказать звонок</a>
				<? $adr = carbon_get_theme_option("as_address");
				if (!empty($adr)) { ?><p class="footer__address"><? echo $adr; ?></p><? } ?>
				<? $mail = carbon_get_theme_option("as_email");
				if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="footer__email"><? echo $mail; ?></a><? } ?>
			</div>

		</div>

	</div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>