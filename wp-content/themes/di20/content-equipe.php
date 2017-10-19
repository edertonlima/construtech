
<section class="box-content" id="goScrollOn">
	<div class="container">

	</div>
</section>

<script type="text/javascript">
	jQuery('.menu-equipe').addClass('active');
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery('.owl-carousel.parceiros').owlCarousel({
		loop: false,
		center: false,
		nav: true,
		margin: 20,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 6
			}
		}
	}) 
</script>