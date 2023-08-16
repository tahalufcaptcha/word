<div class="bottom-widgets container-fluid">
	<div class="d-flex justify-content-between m-0">
<p class="m-0 primary-color footer-font-size"><?php echo ICL_LANGUAGE_CODE == 'en' ? "© 2023 All Rights Reserved. NPCM" : "© 2023 جميع الحقوق محفوظة. NPCM"; ?></p>
<p class="m-0 primary-color footer-font-size"><?php echo ICL_LANGUAGE_CODE == 'en' ? "Devolved By Tahaluf" : "تطوير تحالف"; ?></p>
</div>
</div>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/aos/aos.js"></script>
<script>
	AOS.init({
		disable: function() {
			var maxWidth = 1024;
			return window.innerWidth < maxWidth;
		}
	});
</script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jQuery.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/slick/slick.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/custom.js"></script>
