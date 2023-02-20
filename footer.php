</main>
<footer class="site__footer">
	<div>
		<a href="https://www.inserm.fr/">
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/footer1.png" alt="Logo Inserm">
		</a>

		<a href="https://u-paris.fr/">
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/footer2.jpg" alt="Logo Universite de Paris">
		</a>
		<a href="https://hopitaux-parisouest.aphp.fr/">
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/footer3.png" alt="Logo Hopitaux Universitaire Paris Ouest">
		</a>

		<a href="https://www.institutcardiovasculaireparis.fr/accueil">
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/footer4.jpg" alt="Logo Institut des Sciences Cardiovasculaires Université Paris Cité">
		</a>


	</div>
	<?php wp_nav_menu(array('theme_location' => 'footer')); ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>