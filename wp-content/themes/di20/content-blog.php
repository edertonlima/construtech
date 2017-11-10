
<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>
	
<div class="col-4">

	<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>" class="img-list">
	<div class="cont-list">
		<h5><?php the_title(); ?></h5>
		<?php the_excerpt(); ?>
	</div>

</div>