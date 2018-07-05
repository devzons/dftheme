<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DF Start Theme</title>

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

	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	
	<!-- custom header background image -->
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">