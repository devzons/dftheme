<?php get_header(); ?>

<div class="row">
		
<?php

$args_cat = array(
	'include' => '5, 7, 15'
);

$categories = get_categories( $args_cat );

foreach( $categories as $category ):

	$args1 = array(
		'type' => 'post',
		'posts_per_page' => 1,
		'category__in' => $category->term_id,
		'category__not_in' => array( 16 ),
	);

	$lastBlog = new WP_Query( $args1 );

	?>

	<?php 
	if( $lastBlog->have_posts() ) : 

		while( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

		<div class="col-xs-12 col-sm-4">

			<?php get_template_part( 'content', 'featured' ); ?>

		</div>

		<?php

	 	endwhile;

	endif;

	wp_reset_postdata();	

endforeach;

?>

</div>

<div class="row">

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
