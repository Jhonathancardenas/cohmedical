<?php
/**
 * 
 * Header type 6
 *
 * @package Dental_Care
 */
?>

<header class="side-menu-fixed header-six">
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
    <!-- Main Navigation -->
    <div class="main-navigation">
        <nav id="site-navigation" class="navbar">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span class="sr-only"><?php echo esc_html__('Toggle navigation', 'dental-care'); ?></span>
                    <i class="fa fa-align-justify mobile-menu-icon" ></i>
                </button>
                <button type="button" class="navbar-toggle pull-right small-search"><span class="search-toggle"><i class="fa fa-search"></i></span></button>
            </div>
            <div class="side-menu-nav">
                <?php
                if (ot_get_option('one_page_en') == "on") {
                    if (has_nav_menu('one-page-menu')) {
                        wp_nav_menu(array(
                            'menu' => 'main',
                            'menu_class' => 'stronghold-menu',
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
                            'menu_class' => 'stronghold-menu',
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

    <div class="side-menu-icons">
        <!-- Cart Icon -->
        <div class="nav-icons-right">
            <?php if (class_exists('WooCommerce')) { ?>
                <span class="nav-icon"><a class="cart-icon" href="<?php echo esc_url(WC()->cart->get_cart_url()); ?>"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" class="badge nav-cart-badge">
                        <?php echo esc_html(WC()->cart->cart_contents_count); ?>                      
                    </a>   
                </span><?php } ?>
            <a class="search-toggle nav-icon"><i class="fa fa-search"></i></a>
        </div>

        <!-- Search Container -->
        <div id="search-container" class="search-box-wrapper clear container">
            <div class="search-box clear">
                <?php get_search_form(); ?>
            </div>
        </div> 
    </div>

    <div class="col-md-12 header-contact-info" style="display: none;">
        <div class="icon-wrapper">
            <i class="fa fa-clock-o"></i>
        </div>
        <div class="hcontact-info">
            <h6><?php echo esc_html(ot_get_option('opening_hours_text')); ?></h6>
            <p><?php echo esc_html(ot_get_option('contact_hours')); ?></p>
        </div>
    </div>

    <div class="col-md-12 header-contact-info" style="display: none;">
        <div class="icon-wrapper">
            <i class="fa fa-phone-square"></i>
        </div>
        <div class="hcontact-info">
            <h6><?php echo esc_html(ot_get_option('call_us_text')); ?></h6>
            <p><?php echo esc_html(ot_get_option('contact_number')); ?></p>
        </div>                   
    </div>

    <?php if (ot_get_option('contact_book_link') != ''): ?>
        <div class="col-md-12 header-contact-info" style="display: none;">
            <div class="icon-wrapper">
                <i class="fa fa-calendar"></i>
            </div>
            <div class="hcontact-info">
                <h6><a href="<?php echo get_permalink(ot_get_option('contact_book_link')); ?>"><?php echo esc_html(ot_get_option('contact_book_text')); ?></a></h6>
                <p><?php echo esc_html(ot_get_option('contact_book_subtext')); ?></p>
            </div>
        </div>
        <?php
    endif;
    ?>



</header>