<?php get_header(); ?>

<section class="box-content box-comofunciona" id="goScrollOn">
	<div class="container">

		<h2>Como Funciona</h2>
		<h3>Somos Venture Builders</h3>

		<div class="row">
			<div class="col-4 ico-comofunciona">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/como-funciona/ico-1.png">
				<h4>Recrutamento Founders</h4>
				<p>Buscamos pessoas com o espírito empreendedor, motivados a gerar impacto através da tecnologia, resolvendo problemas reais.</p>
			</div>

			<div class="col-4 ico-comofunciona">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/como-funciona/ico-2.png">
				<h4>Formamos um Time</h4>
				<p>Juntos co-criamos, formamos um time, prototipamos soluções, validamos modelos de negócios escaláveis.</p>
			</div>

			<div class="col-4 ico-comofunciona">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/como-funciona/ico-3.png">
				<h4>Investimos para Crescer</h4>
				<p>Investimos no negócio para desenvolver produtos incríveis e trilhar o caminho do crescimento.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-9 metodologia">
				<h2>Metodologia</h2>
				<p>Trazemos a nossa expertise desenvolvida numa das empresas mais representativas do segmento para construir startups de tecnologia.</p>
				<p>Damos apertura a colaboradores e empreendedores que como nós procura transformar a construção.</p>
			</div>
		</div>

		<?php /* $page = get_page_by_path( 'sobre' ); ?>
		<div class="list-post-home">
			<h4><?php the_field('titulo_home',$page->ID); ?></h4>
		</div>

		<div class="row">

			<?php if( have_rows('areas_de_atuacao',$page->ID) ): ?>
								
				<?php while ( have_rows('areas_de_atuacao',$page->ID) ) : the_row(); ?>

					<div class="col-4">				
						<div class="item-areaatuacao">
							<div class="icon-content">
								<div class="icon">
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
							</div>
							<div class="desc_wrapper">
								<h3><?php the_sub_field('titulo'); ?></h3>
								<p><?php the_sub_field('texto'); ?></p>
							</div>
						</div>
					</div>

				<?php endwhile; ?>

			<?php endif; ?>

			<div class="home-sobre-nos">
				<div class="col-6">
					<p><strong><?php the_field('destaque_home',$page->ID); ?></strong></p>

					<?php the_field('texto_home',$page->ID); ?>

					<a href="<?php echo get_permalink(get_page_by_path('sobre')); ?>" title="Leia mais" class="leia-mais">
						<i class="fa fa-file-text-o" aria-hidden="true"></i>
						Leia mais
					</a>
				</div>

				<div class="col-6">

					<?php 
						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), '' );
					?>
					<img src="<?php echo $imagem[0]; ?>" alt="Conheça um pouco sobre nós">
				</div>
			</div>

		</div> */ ?>
	</div>	
</section>

<section class="box-content">
	<div class="container">

		<h2>Construtechs</h2>
		<h3>Em nosso portfólio</h3>

	</div>	
</section>

<?php get_footer(); ?>

<script type="text/javascript">
	jQuery(document).ready(function(){	    



	});

	jQuery(window).resize(function(){

	});
</script>