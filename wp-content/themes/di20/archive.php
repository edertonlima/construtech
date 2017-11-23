<?php get_header(); ?>

<section class="box-content post list-post" id="goScrollOn">
	<div class="container">

		<h2>Ecosistema</h2>
		<h3><?php the_field('subtitulo','option'); ?></h3>	

		<div class="row">
			<?php
				while ( have_posts() ) : the_post(); 
					
					$count_post = $count_post+1;
					if($count_post == 1){
						get_template_part( 'content-ecosistema-list-left', 'post' );
					}else{
						get_template_part( 'content-ecosistema-list-right', 'post' );
					}

				endwhile;
				wp_reset_query();
			?>
		</div>

	</div>
</section>

<?php get_footer(); ?>