<section class="box-content post det-post" id="goScrollOn">
	<div class="container">

		<div class="row na-midia">

			<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>				
			<div class="list-na-midia">
				<div class="col-4">
					<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>" class="img-det-single">
				</div>

				<div class="col-8">	
					<div class="cont-list">
						<h4><?php the_title(); ?></h4>
						<?php if (get_field('subtitulo')) { ?>
							<h5><?php the_field('subtitulo'); ?></h5>
						<?php } ?>
						<div class="info-post">
							<?php if (get_field('localizacao')) { ?>
								<?php the_field('localizacao'); echo ', ('.ucfirst(get_the_date()).')'; ?>,
							<?php }else{ ?>
								<?php echo ucfirst(get_the_date()); ?>
							<?php } ?>
							<br>Por <?php echo get_the_author_meta('first_name'); ?>
						</div>
						<?php the_excerpt(); ?>
					</div>
				</div>

				<div class="col-12">	
					<div class="cont-list content-txt">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>