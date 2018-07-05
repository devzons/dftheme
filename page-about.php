<?php get_header(); ?>

<div class="row">

	<div class="col-xs-12 col-sm-8">
	<?php 
	if( have_posts() ) : 

		while( have_posts() ) : the_post(); ?>

			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>

		<?php

	 	endwhile;

	endif;

	?>
	</div><!--col-sm-8-->
	<div class="col-xs-12 col-sm-4">

		<?php get_sidebar(); ?>

	</div><!--col-sm-8-->

</div><!--row-->

<?php get_footer(); ?>
