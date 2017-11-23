<?php get_header(); ?>

<section class="box-content box-comofunciona" id="goScrollOn">
	<div class="container">

		<h2><?php the_field('titulo_comofunciona'); ?></h2>
		<h3><?php the_field('subtitulo_comofunciona'); ?></h3>

		<?php if( have_rows('itens_comofunciona') ): ?>
			
			<div class="row">
				<?php 
					$count_itens = 0;
					while ( have_rows('itens_comofunciona') ) : the_row(); 
						$count_itens = $count_itens+1; ?>

						<div class="col-4 <?php if($count_itens > 3){ echo 'mar-left-1'; } ?> ico-comofunciona">
							<img src="<?php the_sub_field('imagem'); ?>">
							<h4><?php the_sub_field('titulo'); ?></h4>
							<p><?php the_sub_field('texto'); ?></p>
						</div>

						<?php 
							if($count_itens == 3){ ?>

			</div>

	</div>
</section>

<section class="box-content box-comofunciona cinza">
	<div class="container">

		<div class="row">
			<div class="col-10 metodologia">
				<h2><?php the_field('titulo_destaque_comofunciona'); ?></h2>
				<h4><?php the_field('texto_destaque_comofunciona'); ?></h4>
			</div>
		</div>

	</div>
</section>

<section class="box-content no-padding-top box-comofunciona">
	<div class="container">

		<div class="row">



							<?php }
						?>

					<?php endwhile;
				?>

		<?php endif; ?>

		</div>

	</div>	
</section>

<section class="box-content">
	<div class="container">

		<h2>Construtechs</h2>
		<h3><?php the_field('subtitulo',79); ?></h3>

		<?php if( have_rows('portfolio',79) ): ?>
			
			<div class="owl-carousel owl-theme startups">
				<?php while ( have_rows('portfolio',79) ) : the_row(); ?>
					<a href="<?php the_sub_field('link',79); ?>" target="_blank" title="<?php the_sub_field('titulo',79); ?>" class="item">
						<img src="<?php the_sub_field('imagem',79); ?>" alt="<?php the_sub_field('titulo',79); ?>">
					</a>
				<?php endwhile; ?>
			</div>		

		<?php endif; ?>

	</div>	
</section>

<?php get_template_part( 'content-contato', 'page' ); ?>

<section class="box-content">
	<div class="container">

		<h2>Construtechs</h2>
		<h3>na mídia</h3>

		<?php query_posts(
			array(
				'post_type' => 'na-midia',
				'posts_per_page' => 12
			)
		); ?>

		<div class="owl-carousel owl-theme na-midia">
			<?php while ( have_posts() ) : the_post(); 
				$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>

				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="item">
					<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>">
				</a>

			<?php endwhile;
			wp_reset_query(); ?>
		</div>

	</div>	
</section>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery('.owl-carousel.startups').owlCarousel({
		loop: false,
		center: false,
		nav: false,
		margin: 20,
		responsive: {
			500: {
				items: 1
			},
			768: {
				items: 3
			}
		}
	});

	jQuery('.owl-carousel.na-midia').owlCarousel({
		loop: false,
		center: false,
		nav: false,
		margin: 20,
		responsive: {
			500: {
				items: 1
			},
			768: {
				items: 4
			}
		}
	}) 
</script>