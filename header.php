<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Theme</title>

	<?php wp_head(); ?>

</head>

<?php // add custom class on specific page

	if( is_front_page() ) :
		$dftheme_classes = array( 'df-class', 'my-class' );
	else:
		$dfstart_classes = array();
	endif;
 ?>

<body <?php body_class( $dftheme_classes ); ?>>

	<div class="container">

		<div class="row">
			<div class="col-xs-12">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="#" class="navbar-brand">DF Theme</a>
						</div>
						<div class="collapse navbar-collapse" id="navbar-collapse">
						<?php wp_nav_menu( array( 
							'theme_location' => 'primary',
							'container'=> false,
							'menu_class'=> 'nav navbar-nav navbar-right'
						) ); ?>
						</div>
					</div>
				</nav><!--navbar-->
			</div><!--col-xs-12-->
			<div class="col-xs-12">
				<div class="search-form-container">
					<?php get_search_form(); ?>
				</div>
			</div>
			
		</div><!--row-->			
			
		<!-- custom header background image -->
		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">