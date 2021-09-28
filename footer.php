<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<div class="footer__policy">
				<p>© 2021 Все права защищены</p>
				<div class="footer__social d-flex">
					<a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="footer__social-icon social-icon-01"></a>
					<a href="<?php echo carbon_get_theme_option('as_insta'); ?>" class="footer__social-icon social-icon-02"></a>
				</div>
			</div>

			<div class="footer__menu-block d-flex">
				<?php wp_nav_menu(array(
					'theme_location' => 'menu_cat', 'menu_class' => 'footer__menu footer__menu_left',
					'container_class' => 'footer__menu footer__menu_left', 'container' => false
				)); ?>

				<?php wp_nav_menu(array(
					'theme_location' => 'menu_main', 'menu_class' => 'footer__menu footer__menu_right',
					'container_class' => 'footer__menu footer__menu_right', 'container' => false
				)); ?>
			</div>

			<div class="footer__contacts d-flex">
				<? $tel = carbon_get_theme_option("as_phone_1");
				if (!empty($tel)) { ?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="footer__phone"><? echo $tel; ?></a><? } ?>
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