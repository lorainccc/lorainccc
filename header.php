<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package LCCC Framework
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-7542329-2', 'auto', {'allowLinker': true});
  ga('require', 'linker');
  ga('linker:autoLink', ['sites.lorainccc.edu'] );
  ga('send', 'pageview');

</script>
	
<!-- Begin Eloqua tracking script -->
<script type="text/javascript">
    var _elqQ = _elqQ || [];
    _elqQ.push(['elqSetSiteId', '577764303']);
    _elqQ.push(['elqTrackPageView']);
    
    (function () {
        function async_load() {
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
            s.src = '//img04.en25.com/i/elqCfg.min.js';
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        }
        if (window.addEventListener) window.addEventListener('DOMContentLoaded', async_load, false);
        else if (window.attachEvent) window.attachEvent('onload', async_load); 
    })();
</script>
<!-- End Eloqua tracking script -->
	
<style>
/* Campus Status Styling */
 
 [ng-class]{
  display: none;
 }

.lc-active{
 display:block;
}

.lc-inactive{
 display:none;
}

 .lc-status{
  margin: 10px 0;
  min-height: 155px;
 }

 .lc-status span.headline{
  font-family: 'Raleway', sans-serif;
  font-size: 30px;
  font-weight: 700;
 }
 
 .lc-status span.headline, .lc-status span.exclamation{
  color: #c00000;
 }

 .lc-status span.headline, .lc-status span.info{
  color: #0055a5;
 }
  .lc-status .lc-status-button-exclamation {
	-moz-box-shadow:inset 0px 1px 0px 0px #f5978e;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f5978e;
	box-shadow:inset 0px 1px 0px 0px #f5978e;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f24537), color-stop(1, #c00000) );
	background:-moz-linear-gradient( center top, #f24537 5%, #c00000 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24537', endColorstr='#c00000');
	background-color:#f24537;
	-webkit-border-top-left-radius:8px;
	-moz-border-radius-topleft:8px;
	border-top-left-radius:8px;
	-webkit-border-top-right-radius:8px;
	-moz-border-radius-topright:8px;
	border-top-right-radius:8px;
	-webkit-border-bottom-right-radius:8px;
	-moz-border-radius-bottomright:8px;
	border-bottom-right-radius:8px;
	-webkit-border-bottom-left-radius:8px;
	-moz-border-radius-bottomleft:8px;
	border-bottom-left-radius:8px;
	text-indent:0px;
	border:1px solid #d02718;
	display:inline-block;
	color:#ffffff;
	font-family:'Open Sans';
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	line-height:30px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #810e05;
 padding:0 15px;
}
  .lc-status .lc-status-button-exclamation:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #c00000), color-stop(1, #f24537) );
	background:-moz-linear-gradient( center top, #c00000 5%, #f24537 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c00000', endColorstr='#f24537');
	background-color:#c00000;
}
  .lc-status .lc-status-button-exclamation:active {
	position:relative;
	top:1px;
 }
 
  .lc-status .lc-status-button-info, .lc-status .lc-status-button-info-alt {
	-moz-box-shadow:inset 0px 1px 0px 0px #97c4fe;
	-webkit-box-shadow:inset 0px 1px 0px 0px #97c4fe;
	box-shadow:inset 0px 1px 0px 0px #97c4fe;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #439ef2), color-stop(1, #0055a5) );
	background:-moz-linear-gradient( center top, #439ef2 5%, #0055a5 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#439ef2', endColorstr='#0055a5');
	background-color:#439ef2;
	-webkit-border-top-left-radius:8px;
	-moz-border-radius-topleft:8px;
	border-top-left-radius:8px;
	-webkit-border-top-right-radius:8px;
	-moz-border-radius-topright:8px;
	border-top-right-radius:8px;
	-webkit-border-bottom-right-radius:8px;
	-moz-border-radius-bottomright:8px;
	border-bottom-right-radius:8px;
	-webkit-border-bottom-left-radius:8px;
	-moz-border-radius-bottomleft:8px;
	border-bottom-left-radius:8px;
	text-indent:0;
	border:1px solid #337fed;
	display:inline-block;
	color:#ffffff;
	font-family:'Open Sans';
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	line-height:30px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #1570cd;
 padding:0 15px;
}
 .lc-status .lc-status-button-info:hover, .lc-status .lc-status-button-info-alt:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #0055a5), color-stop(1, #439ef2) );
	background:-moz-linear-gradient( center top, #0055a5 5%, #439ef2 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0055a5', endColorstr='#439ef2');
	background-color:#0055a5;
} .lc-status .lc-status-button-info:active, .lc-status .lc-status-button-info-alt:active {
	position:relative;
	top:1px;
}
  .lc-status .lc-status-button-info a, .lc-status .lc-status-button-info-alt a{
  color:#fff;
 } 
 
</style>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lccc-framework' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		  <div class="row show-for-medium">
    <div class="large-6 medium-6 columns"><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/LCCC-Logo.png" height="70" width="325" alt="Lorain County Community College Logo" /></a>  </div>
    <div class="large-6 medium-6 columns">
     									<?php
          wp_nav_menu(array(
											'container' => false,
											'menu' => __( 'Header Shortcuts Menu', 'textdomain' ),
											'menu_class' => 'menu align-right',
											'theme_location' => 'header-shortcuts',
											//'items_wrap'      => '<ul id="%1$s header-menu" class="%2$s">%3$s</ul>',
           'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
           ));
											?>
      <!-- This should be similar to what is generated when using Wordpress searchform.php -->
      <!--<form role="search" method="get" class="search-form" action="">
        <label>
          <input type="search" placeholder="Search" name="s" class="float-right"/>
        </label>
      </form>-->
     <div class="large-9 medium-6 columns searchbox">
      	<?php if ( is_active_sidebar( 'lccc-search-sidebar' ) ) { ?>
																<?php dynamic_sidebar( 'lccc-search-sidebar' ); ?>
								<?php }else{
															if ( class_exists( 'CustomGoogleSearch' ) ) {
																// check for plugin using plugin name
																// Plugin is activated
																		if ( is_active_sidebar( 'lccc-four-o-four-sidebar' ) ) {

																		}else{
																		$instance = array(
																			'display_results' => '3',
																		);                                               the_widget('CGS_Widget', $instance);
																			}
															}else{
																echo 'no widgets found';
															}
								}		?>
     </div>
    </div>
  </div>
<div class="medium-blue-bg show-for-medium">
    <div class="row">
      <div class="large-12 columns">
        <nav class="menu-centered">
									<?php
          wp_nav_menu(array(
											'container' => false,
											'menu' => __( 'Primary', 'textdomain' ),
											'menu_class' => 'dropdown menu',
											'theme_location' => 'primary',
											'items_wrap'      => '<ul id="%1$s" class="%2$s" role="menubar" data-dropdown-menu>%3$s</ul>',
											//Recommend setting this to false, but if you need a fallback...
											'fallback_cb' => 'lc_topbar_menu_fallback',
											'walker' => new lc_top_bar_menu_walker,
												));
											?>
        </nav>
      </div>
    </div>
  </div>
  <div class="row show-for-small-only mobile-nav-bar">
    <div class="small-8 columns"> <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/lccclogo_white.svg" alt="LCCC Logo" width="165" height="31.875" /></a> </div>
    <div class="small-2 columns clearfix"> <span data-responsive-toggle="mobile-search" data-hide-for="medium"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/magnifying-glass.svg" height="25" width="25" alt="Search the LCCC Website" class="float-right" data-toggle/></span> </div>
    <div class="small-2 columns"> <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      </span> </div>
  </div>
  <div id="mobile-search" class="show-for-small-only">
        <?php if ( is_active_sidebar( 'lccc-search-sidebar' ) ) { 
																dynamic_sidebar( 'lccc-search-sidebar' ); 
								}		?>
  </div>
  <div id="responsive-menu" class="show-for-small-only">
			  <nav role="navigation" aria-label="<?php _e( 'Mobile Main Menu', 'lorainccc' );?>" aria-describedby="mobile-primary-menu mobile-header-shortcuts">
    <ul class="vertical menu" data-drilldown data-parent-link="true">
     <li><a href="/" alt="Link back to LCCC Home Page">Home</a></li>
					<?php 	wp_nav_menu(array(
													'container' => false,
													'menu' => __( 'Drill Menu', 'textdomain' ),
													'menu_class' => 'vertical menu',
													'theme_location' => 'mobile-primary',
													'menu_id' => 'mobile-primary-menu',
														//Recommend setting this to false, but if you need a fallback...
													'fallback_cb' => 'lc_drill_menu_fallback',
													'walker' => new lc_drill_menu_walker(),
												));
     ?>
     <li>&nbsp;</li>
     <?php
            wp_nav_menu(array(
													'container' => false,
													'menu' => __( 'Drill Menu', 'textdomain' ),
													'menu_class' => 'vertical menu',
													'theme_location' => 'mobile-header-shortcuts',
													'menu_id' => 'mobile-header-shortcuts',
														//Recommend setting this to false, but if you need a fallback...
													'fallback_cb' => 'lc_drill_menu_fallback',
													'walker' => new lc_drill_menu_walker(),
												));
					?>

    </ul>
			</nav>
  </div>

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">