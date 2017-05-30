<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title><?php bloginfo('title');?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl-carousel/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl-carousel/owl.theme.default.min.css"/>
	<?php wp_head(); ?>
</head>
<body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">
<section class="logo" style="width: 100%;z-index: 10;height: 120px;background-color: black;">
	<div class="col-md-12" style="padding-top: 20px;margin-bottom: 20px;padding-right: 0px;padding-left: 0px;">
		<div class="container full-screen-mobile">
			<div class="col-xs-1 col-md-3 left header-logo no-space">
				<a href="<?php echo get_option('home'); ?>">
					<?php the_custom_logo(); ?>
				</a>
			</div>
			<div class="col-xs-10 col-md-9 right header-logo">
				<nav id="nav" role="navigation">
					<a href="#nav" title="Show navigation"></a>
					<a href="#" title="Hide navigation"></a>
					<?php 
						$menuargs = array(
							"theme_location" => "primary",
							"menu_class" => "s-menu",
							"menu_id" => "main-menu",
						);
						$items = wp_get_nav_menu_items( 'main-menu', $menuargs); 
					?> 
					<ul class="clearfix menu-header" style="margin-bottom: 1px !important;z-index: 34 !important;width: 100%;margin-top: 11px; padding-left: 5px;padding-right: 5px;">
						<?php foreach( $items as $item ){ ?>
							<li class="smaller-li"><a href="<?php echo $item->url; ?>" class="left"><?php echo $item->title; ?></a></li>	
						<?php } ?>				
						<?php                   
					        $header_number    = $GLOBALS['cgv']['default-contact-number'];
					        $cf_header_number = get_post_meta($post->ID, 'header_contact_number', true);                    
					        if( $cf_header_number != "" ){
					            $header_number = $cf_header_number;
					        }
					    ?>
						<li class="smaller-li contact-menu" style="padding-left: 15px;"><i class="fa fa-phone color-white left contact-icon" aria-hidden="true"></i><p class="left" style="font-size: 15px;color: #386b08;font-weight: bold;margin-top: 15px;"><a href="tel:+<?php echo str_replace("-", "", $header_number); ?>" style="font-size: 16px;"><?php echo $header_number; ?></a></p></li>
					</ul>
				</nav>			
			</div>
		</div>

	</div>
</section>
