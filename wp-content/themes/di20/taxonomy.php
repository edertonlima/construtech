<?php get_header(); ?>

<section class="box-content post list-post" id="goScrollOn">
	<div class="container">

		<h2>Novidades</h2>
		<h3><?php echo category_description(); ?></h3>

		<div class="row">
			<?php
			$count_post = 0;

			while ( have_posts() ) : the_post();

				$count_post = $count_post+1;
				if($count_post == 1){
					get_template_part( 'content-blog-first', 'page' );
				}else{
					get_template_part( 'content-blog', 'page' );
				}

			endwhile;
			?>
		</div>

	</div>
</section>

<?php get_footer(); ?>