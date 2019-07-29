<?php
/**
 * 
 * Header type 10
 *
 * @package Dental_Care
 */
?>

<?php
$allowed_html = array(
    'abbr' => array(
        'title' => true,
    ),
    'acronym' => array(
        'title' => true,
    ),
    'b' => array(),
    'blockquote' => array(
        'cite' => true,
    ),
    'cite' => array(),
    'code' => array(),
    'em' => array(),
    'i' => array(),
    'q' => array(
        'cite' => true,
    ),
    'strike' => array(),
    'strong' => array(),
    'i' => array(
        'class' => array(),
        'title' => array(),
        'style' => array(),
    ),
    'a' => array(
        'href' => array(),
        'rel' => array(),
        'class' => array(),
        'style' => array(),
    ),
    'p' => array(
        'class' => array(),
        'style' => array(),
    ),
    'ul' => array(
        'class' => array(),
        'style' => array(),
    ),
    'ol' => array(
        'class' => array(),
        'style' => array(),
    ),
    'li' => array(
        'class' => array(),
        'style' => array(),
    )
    );
?> 

<div class="header-two header-nine header-ten container-fluid">
    <header class="masthead  ">
        <div class="container">

            <div class="row logo-contact-row">
            <div class="logo-title-wrap col-md-3 col-sm-3 col-xs-3">
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
                
                <div class="col-md-9 col-sm-9 col-xs-9 contact-icons-wrapper">
                
                <?php if (ot_get_option('call_us_text') != ""){?>
                <div class="call-us-contact contact-icon">
                    <div class="cicon-wrapper">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="header-nine-contact-info">
                        <h6><?php echo esc_html(ot_get_option('call_us_text')); ?></h6>
                        <p><?php echo wp_kses(ot_get_option('contact_number'), $allowed_html); ?></p>
                    </div>
                    
                </div>
                <?php } ?>
                
                 <?php if (ot_get_option('opening_hours_text') != ""){?>
                <div class="contact-icon open-hours-contact">
                    <div class="cicon-wrapper">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="header-nine-contact-info">
                        <h6><?php echo esc_html(ot_get_option('opening_hours_text')); ?></h6>
                        <p><?php echo wp_kses(ot_get_option('contact_hours'), $allowed_html); ?></p>
                    </div>
                </div>
                <?php } ?>
                
                
                <?php if (ot_get_option('contact_book_text') != ""){?>
                <div class="book-appointment-contact contact-icon">
                    <div class="cicon-wrapper">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <div class="header-nine-contact-info">
                        <?php
                        $book_type = ot_get_option('contact_book_type');
                        
                        if ($book_type == "book-email"){?>
                           <h6><a href="mailto:<?php echo get_permalink(ot_get_option('book_email')); ?>?subject=<?php echo esc_html(ot_get_option('contact_book_text')); ?>"><?php echo esc_html(ot_get_option('contact_book_text')); ?></a></h6>
                       <?php }else{?>
                           <h6><a href="<?php echo get_permalink(ot_get_option('contact_book_link')); ?>"><?php echo esc_html(ot_get_option('contact_book_text')); ?></a></h6> 
                       <?php }
                        ?>
                        <p><?php echo wp_kses(ot_get_option('contact_book_subtext'), $allowed_html); ?></p>
                    </div>
                </div>
                <?php } ?>
                    
                    
                
            </div>
            </div>
            
        </div>
        <!-- Main Navigation -->
        <div class="row header-two bottom-header-wrap">
            <div class="container">
                <div class="row bottom-header">
                    <div class="col-md-9 col-sm-9 col-xs-12  main-navigation">
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
                    <div class="col-md-3 hidden-xs hidden-sm nav-icons-right">
                        <?php if (class_exists('WooCommerce')) { ?>
                            <span class="pull-right nav-icon"><a class="cart-icon" href="<?php echo esc_url(WC()->cart->get_cart_url()); ?>"><i class="fa fa-shopping-cart"></i></a>
                                <a href="#" class="badge nav-cart-badge">
                                    <?php echo esc_html(WC()->cart->cart_contents_count); ?>                      
                                </a>   
                            </span><?php } ?>
                        <a class="search-toggle pull-right nav-icon"><i class="fa fa-search"></i></a>
                        <div class="header-contact-social contact-icon">
                        <?php
                        dental_care_add_social_menu();
                        ?>
                    </div>
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