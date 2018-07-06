<?php get_header(); ?>

<div class="row">

	<div class="col-xs-12">
		
		<?php 

		$lastBlog = new WP_Query( 'type=post&posts_per_page=1' );

		?>

		<?php 
		if( $lastBlog->have_posts() ) : 

			while( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>	

			<?php

		 	endwhile;

		endif;

		wp_reset_postdata();

		?>

	</div>

	<div class="col-xs-12 col-sm-8">

	<?php 
	if( have_posts() ) : 

		while( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>		

		<?php

	 	endwhile;

	endif;

	// Print posts by category name, id
	$args = array(
		'type' => 'post',
		'posts_per_page' => 2,
		'category_name' => 'news'
	);

	$lastBlog = new WP_Query( $args );

	?>

	<?php 
	if( $lastBlog->have_posts() ) : 

		while( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>	

		<?php

	 	endwhile;

	endif;

	wp_reset_postdata();

	?>

	</div><!--col-sm-8-->
	<div class="col-xs-12 col-sm-4">

		<?php get_sidebar(); ?>

	</div><!--col-sm-8-->

</div><!--row-->

<?php get_footer(); ?>