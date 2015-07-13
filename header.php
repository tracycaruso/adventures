<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />
    
    <!-- Social Icons-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/includes/fontawesome/font-awesome.css?ver=3.8.1"/>
	<!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />

<?php wp_head(); ?>

</head>

<body <?php body_class('antialiased'); ?>>



<!-- Start the main container -->
<div class="container" role="document">
	<div class="row">
    
    <aside id="sidebar" class="small-12 large-5 columns">
	<?php if ( of_get_option( 'logo' ) ) { ?>
			<center><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo of_get_option( 'logo' ); ?>" class="logo"/></a></center>
			<?php } ?>
            
      <section class="top-bar-section">
	    <?php
	        wp_nav_menu( array(
	            'theme_location' => 'primary',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul>%3$s</ul>',
	            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
	            'walker' => new reverie_walker( array(
	                'in_top_bar' => true,
	                'item_type' => 'li',
	                'menu_type' => 'main-menu'
	            ) ),
	        ) );
	    ?>
	    </section>
        
        <section class="connections">
        	<?php if ( of_get_option( 'example_showhidden1' ) ) { ?>
			<a href="<?php echo of_get_option( 'example_text_hidden1' ); ?>" title="Follow the Good Dr. on Instagram" ><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="visit instagram"/> </a>
			<?php } ?>
            
            <?php if ( of_get_option( 'example_showhidden2' ) ) { ?>
			<a href="<?php echo of_get_option( 'example_text_hidden2' ); ?>" title="Follow the Good Dr. on Facebook"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png"/> </a>
			<?php } ?>
            
            <?php if ( of_get_option( 'example_showhidden3' ) ) { ?>
			<a href="<?php echo of_get_option( 'example_text_hidden3' ); ?>" title="Follow the Good Dr. on Twitter"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"/> </a>
			<?php } ?>
            
            <?php if ( of_get_option( 'example_showhidden4' ) ) { ?>
			<a href="<?php echo of_get_option( 'example_text_hidden4' ); ?>" title="Follow the Good Dr. on Google+"><img src="<?php echo get_template_directory_uri(); ?>/img/google.png"/> </a>
			<?php } ?>
            
            <?php if ( of_get_option( 'example_showhidden5' ) ) { ?>
			<a href="<?php echo of_get_option( 'example_text_hidden5' ); ?>" title="Connect with the Good Dr. on LinkedIn"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png"/> </a>
			<?php } ?>
            
            <?php if ( of_get_option( 'example_showhidden6' ) ) { ?>
			<a href="mailto:<?php echo of_get_option( 'example_text_hidden6' ); ?>" title="Email the Good Dr."><img src="<?php echo get_template_directory_uri(); ?>/img/email.png"/> </a>
			<?php } ?>
        </section>
        
       <div class="fullscreen"> 
        <section class="bio">
         	<h1 class="sidebar"><?php echo of_get_option( 'bio-title' ); ?></h1>
        	<?php if ( of_get_option( 'bio-pic' ) ) { ?>
			<img src="<?php echo of_get_option( 'bio-pic' ); ?>" />
           <p><?php echo of_get_option( 'bio-description' ); ?></p> 
			<?php } ?>
        </section>    
            

