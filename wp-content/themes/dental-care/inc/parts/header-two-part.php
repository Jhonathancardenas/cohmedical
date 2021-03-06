<?php
/**
 * 
 * Header type 2 
 *
 * @package Dental_Care
 */
?>
<div class="header-two container-fluid">
    <header class="masthead  ">
        <div class="container">

            <div class="row logo-title-wrap">
                <div class="logo-wrap">
                    <?php
                    if (ot_get_option('logo')) :
                        $logo_id = dental_care_get_attachment_id_by_url(ot_get_option('logo'));
                        $logo_img = wp_get_attachment_image($logo_id, 'full');
                        ?>
                        <h1 class="site-logo">
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">                                   
                                <?php echo $logo_img; ?>
                            </a>
                        </h1>
                        <?php
                    endif;

                    if ((ot_get_option('logo') == NULL)) {
                        ?>
                        <h1 class="site-title"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">                                   
                                <?php esc_html(bloginfo('name')); ?>
                            </a></h1>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Main Navigation -->
        <div class="header-two bottom-header-wrap">
            <div class="container">
                <div class="row bottom-header">
                    <div class="col-md-10 col-sm-10 col-xs-12  main-navigation">
                        <nav id="site-navigation" class="navbar ">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-main-collapse">
                                    <span class="sr-only"><?php echo esc_html__('Toggle navigation', 'dental-care'); ?></span>
                                    <i class="fa fa-align-justify mobile-menu-icon" ></i>
                                </button>
                                <button type="button" class="navbar-toggle pull-right small-search"><span class="search-toggle"><i class="fa fa-search"></i></span></button>
                            </div>
                            <div class="collapse navbar-collapse navbar-main-collapse">
                                <?php
                                if (ot_get_option('one_page_en') == "on") {
                                    if (has_nav_menu('one-page-menu')) {
                                        wp_nav_menu(array(
                                            'menu' => 'main',
                                            'menu_class' => 'nav navbar-nav stronghold-menu',
                                            'theme_location' => 'one-page-menu',
                                            'depth' => 0,
                                            'container' => false,
                                            'walker' => new stronghold_mega_menu_walker
                                                )
                                        );
                                    }
                                } else {
                                    if (has_nav_menu('primary')) {
                                        wp_nav_menu(array(
                                            'menu' => 'main',
                                            'menu_class' => 'nav navbar-nav stronghold-menu',
                                            'theme_location' => 'primary',
                                            'depth' => 0,
                                            'container' => false,
                                            'walker' => new stronghold_mega_menu_walker
                                                )
                                        );
                                    }
                                }
                                ?>
                            </div>	
                        </nav> <!--#site-navigation -->
                    </div>

                    <!-- Cart Icon -->
                    <div class="col-md-2 hidden-xs hidden-sm nav-icons-right">
                        <?php if (class_exists('WooCommerce')) { ?>
                            <span class="pull-right nav-icon"><a class="cart-icon" href="<?php echo esc_url(WC()->cart->get_cart_url()); ?>"><i class="fa fa-shopping-cart"></i></a>
                                <a href="#" class="badge nav-cart-badge">
                                    <?php echo esc_html(WC()->cart->cart_contents_count); ?>                      
                                </a>   
                            </span><?php } ?>
                        <a class="search-toggle pull-right nav-icon"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--        </div> -->
        <!-- Search Container -->
        <div id="search-container" class="search-box-wrapper clear container">
            <div class="search-box clear">
                <?php get_search_form(); ?>
            </div>
        </div> 

    </header>
</div>