<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' /> 
		<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
		<link href="http://mycopie.com/wp-content/themes/Archive/css/component.css" rel="stylesheet" type="text/css">

	</head>

	<body>
	<?php /*
	<div class="page-loader">
		<span class="pre-img">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/patterns/loader-3.gif">
		</span>
	</div>
	*/ ?>

<?php require 'modals.php'; ?>