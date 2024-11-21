<?php
/**
 * The header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BootstrapFast
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Owl.css -->
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
	<!-- Fonts -->
	<link rel="stylesheet" href="https://use.typekit.net/qkt4glp.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
		rel="stylesheet">
	<!-- Font Awesome.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
	<!-- Output.css -->
	<link href="<?=get_template_directory_uri()?>/css/output.css" rel="stylesheet">
	<!-- Omaxe.css -->
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/omaxe.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<main>
	     <!-- preloader -->
		 <div class="preloader-wrapper">
        </div>
        <!-- nav -->
        <div class="nav-fixed">
            <div class="w-[90%] mx-auto relative z-[99]">
                <div class="logo absolute left-0 fade" style="z-index: 9;">
                    <a href="<?=site_url()?>">
                        <img src="<?=get_template_directory_uri()?>/img/logo.webp" alt="logo" class="w-[50%] md:w-[50%]">
                    </a>
                </div>
                <div class="fade  absolute right-0 w-full">
                    <div class="menu_toggler relative float-right">


                        <span class="btn-1 btn-1-custom  !flex items-center gap-x-2 relative z-[999999]"
                            id="menu_toggler">
                            <div class="menu_lines_wrapper">
                                <span class="menu_lines menu_line-1"></span>
                                <span class="menu_lines menu_line-2"></span>
                            </div>
                            Menu
                        </span>

                        <div class="menu-wrapper">
                            <a href="#homeSection" class="uppercase home-link">Home</a>
                            <a href="#sportSection" class="uppercase">THE SPORTS</a>
                            <a href="#shoppingSection" class="uppercase">THE SHOPPING</a>
                            <a href="#foodSection" class="uppercase">The Food</a>
                            <a href="#hospitalitySection" class="uppercase">The Hospitality</a>
                            <a href="#socialSection" class="uppercase">The Social</a>
                            <a href="#contactSection" class="uppercase">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>