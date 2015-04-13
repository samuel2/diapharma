<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=divice-width">
      <title><?php bloginfo('name'); ?></title>
      <?php wp_head(); ?>
   </head>

   <body <?php body_class(); ?>>
	
	<div class="container">

	<!-- Site header begin -->
	
	<header class="site-header">
            
            <!-- hd-search -->
            <div class="hd-search">
                <?php get_search_from(); ?>
            </div><!-- /hd-search -->
            
	   <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
	   <h5>
		<?php bloginfo('description'); ?> 

		<?php if (is_page('presentation')) {?>
		 - Merci d'avoir consulte notre travail !
		<?php } ?>
	   </h5>

	   
	<nav class="site-nav">
	   <?php

		$args = array(
			'theme_location' => 'primary'
		);

	   ?>
	   <?php wp_nav_menu( $args ); ?>

	</nav>

	</header>
	
	<!-- Site header end -->
