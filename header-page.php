<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jessica Jones | Front-End Web Developer based in Toronto, ON</title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <?php // Load our CSS ?>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
  <script src="//use.typekit.net/rja7qqs.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>


<?php body_class(); ?>
<header data-stellar-background-ratio="0.5" class="page-header" style="background: url('<?php echo get_field('custom_background'); ?>') no-repeat center center; -webkit-background-size: cover;">
  <div class="page-title">
    <h2>
      <?php the_title(); ?></h2>
  </div>
  <div class="line"></div>
  <div class="navbar">
    <h1><a href="http://www.heyjess.ca" class="main-title"><?php bloginfo('name'); ?></a></h1>
    <nav>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
      )); ?>
    </nav>
  </div>
</header><!--/.header-->

