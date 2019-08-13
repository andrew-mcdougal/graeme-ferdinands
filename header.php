<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

        <style>
            body{font-size:20px;line-height:160%;background:linear-gradient(100deg,#1200ff,#ff9400);color:#222;font-family:"Overpass",sans-serif}h1,h4{font-family:"Chivo",sans-serif}.header{background:#222}.hamburger{position:absolute;right:5px;top:5px}.nav{max-height:0;overflow:hidden}.nav li{position:relative;border-top:1px solid rgba(18,0,255,0.2)}.nav li a{font-size:.9em;color:#222}.nav li a:visited,.nav li a:link,.nav li a:visited:link{color:#222}@media all and (min-width:768px){.hamburger{display:none}.nav{max-height:none;overflow:visible}.nav:before{display:none}.nav li{position:relative}.nav li.current-menu-item>a{color:#FFF;background:#1200ff}#menu-main{display:flex;flex-direction:row;justify-content:center}}.header{background:#FFF}#inner-header{display:flex;flex-direction:column;align-items:center}.site-header{display:block}.site-header img{height:130px;width:130px}.site-subheader{font-family:"Great Vibes",serif;font-size:2.5em;margin:0 0 .5em 0;text-align:center}.hamburger-label{margin:0;font-size:.6em}nav{width:100%;text-align:center}main article{background:#FFF;border-radius:4px;border:none;margin:0;margin-bottom:1.5em}h1{margin:0 0 .5em 0;font-size:1.5em}@media all and (min-width:768px){h1{font-size:2.5em}}.entry-content{padding:1rem}@media all and (min-width:768px){.entry-content{padding:1.5rem}}.entry-content.sidebar{padding-right:1em!important}@media all and (min-width:768px){.entry-content.sidebar{padding:1.5em!important}}.entry-content img{border-radius:4px}.article-footer{display:none}.sidebar{background:#FFF;margin:0;border-radius:4px;margin-bottom:1.5em}.widget{padding:0;margin:0}.searchform .screen-reader-text{height:auto;width:auto;position:relative!important;clip-path:none}.searchform input{box-sizing:border-box;max-width:none;background:#d0ccff}.searchform button{width:100%;background:#ff9400;border-radius:4px;border:none;padding:.3em;line-height:150%}
        </style>

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<!--
                    <p class="site-header header-font" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
                    -->

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<!--
                    
                    -->

                    <!-- header logo svg -->
                    <a class="site-header" href="<?php echo home_url(); ?>" rel="nofollow">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/graeme-ferdinands-logo-1.svg" />
                    </a>
                    <p class="site-subheader header-font"><?php bloginfo('description'); ?></p>

					<!-- hamburger icon -->
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                        <br>
                        <p class="hamburger-label">MENU</p>
					</button>

					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

				</div>

			</header>
