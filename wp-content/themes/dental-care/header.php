<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dental_Care
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php
        if (!function_exists('has_site_icon') || !has_site_icon()) {
            if (ot_get_option('favicon')) {
                echo '<link rel="shortcut icon" href="' . esc_url(ot_get_option('favicon')) . '" />' . "\n";
            }
        }
        ?>
        <?php wp_head(); ?>
    </head>
    
    <?php 

     if (ot_get_option('header_type') == "header-six") {?>
       <body <?php body_class('side-menu'); ?>>
     <?php
     }else{?>
        <body <?php body_class(); ?>>
     <?php
     }
    ?>
   
        <?php
        
         if (ot_get_option('header_type') == "header-six") {
         get_template_part("inc/parts/header-six-part");           
         }
            
        $page_class = '';

        if (get_post_type() == 'page' || get_post_type() == 'post' || get_post_type() == 'team-member' || get_post_type() == 'gallery' || get_post_type() == 'service' || get_post_type() == 'product') {
            $page_class = get_post_meta($post->ID, 'page_class', $single = true);
        }
        ?>
        
        <?php if (ot_get_option('site_layout_style') == "boxed") {?>
        <div class="container site-wrap">
            <div class="row">
        <?php } ?>
                
        <div id="page" class="hfeed site <?php echo $page_class; ?>">
            <a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e('Skip to content', 'dental-care'); ?></a>

            <?php
            if (ot_get_option('top_header_en') == "on") {
            get_template_part("inc/parts/header-top-part");
            }
            if (ot_get_option('header_type') == "header-one") {
                get_template_part("inc/parts/header-one-part");
            } else if (ot_get_option('header_type') == "header-two") {
                get_template_part("inc/parts/header-two-part");
            } else if (ot_get_option('header_type') == "header-three") {
                get_template_part("inc/parts/header-three-part");
            } else if (ot_get_option('header_type') == "header-four") {
                get_template_part("inc/parts/header-four-part");
            } else if (ot_get_option('header_type') == "header-five") {
                get_template_part("inc/parts/header-five-part");
            } 

            else if (ot_get_option('header_type') == "header-seven") {
                get_template_part("inc/parts/header-seven-part");
            } else if (ot_get_option('header_type') == "header-eight") {
                get_template_part("inc/parts/header-eight-part");
            } else if (ot_get_option('header_type') == "header-nine") {
                get_template_part("inc/parts/header-nine-part");
            } else if (ot_get_option('header_type') == "header-ten") {
                get_template_part("inc/parts/header-ten-part");
            } 
            
           
            
            if (ot_get_option('header_type') == NULL) {
                get_template_part("inc/parts/header-one-part");
            }
            
            if (ot_get_option('sticky_nav_en') == 'on') {
                get_template_part("inc/parts/header-sticky-part");
            }
            ?>

            <!-- Mobile Header -->
            <div class="mobile-header row">

                <!-- Mobile Logo -->
                <div class="mobile-logo col-md-6 pull-left">
                    <?php if (ot_get_option('logo')) { ?>
                        <a class="" href="<?php echo esc_url(home_url('/')); ?>">                                   
                            <img src="<?php echo esc_url((ot_get_option('logo'))); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        </a>
                    <?php } ?>

                    <?php if ((ot_get_option('logo') == NULL)) {
                        ?>
                        <h1 class="site-title"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">                                   
                                <?php esc_html(bloginfo('name')); ?>
                            </a></h1>
                    <?php } ?>
                </div>
                <!-- Mobile Menu-->
                <div class="col-md-6 pull-right">
                    <div class="mobile-menu-toggle">
                        <a id="mobile-menu-toggle-icon" href="#sidr"><i class="fa fa-bars"></i></a>
                    </div> 
                </div>
            </div>
            <div class="mobile-menu" id="sidr">
                <?php
                if (has_nav_menu('mobile-menu')) {
                    wp_nav_menu(array('theme_location' => 'mobile-menu'));
                }
                ?>
            <?php get_search_form(); ?>
            </div>
            
            <?php
             if (ot_get_option('mobile_header_en') == "on") {
                get_template_part("inc/parts/header-mobile-part");
            } 
            ?>

            <?php
            get_template_part("inc/parts/page-title-part");
            ?>
            <!-- #container fluid -->
            <div class="container-fluid">
                <!-- #content -->
                <div id="main-content" class="site-content row">
