<?php

/**
 * header.php
 *
 * The header for the theme.
 */

?>

<?php
// Get the favicon
	$favicon = IMAGE . '/icons/favicons.png';

//Get the custom touch icon
	$touch-icon = IMAGES . '/icons/apple-touch-icon-152x152';
?>

<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8" <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name'); ?> </title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="author" content"manak">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/style.css" />

	<!--[if lt IE 9]>
		<script scr="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicon and Apply icons -->
	<link rel="shortcut icon" href="<?php echo $favicon; ?>">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $touch_icon; ?>"

	<?php wp_head(); ?>

</head>
<body>


</body>
</html>