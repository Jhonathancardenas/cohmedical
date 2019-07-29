<?php
/**
 * 
 * Initializes theme option custom styles
 *
 * @package Dental_Care
 */
global $post;

function dental_care_dynamic_styles() {

    if (ot_get_option('top_header_en') == "off") {
        ?>
        <style type = "text/css">
            .header-top{
                display: none;
            }
        </style>
        <?php
    }

    if (ot_get_option('footer_menu_type') == "menunone") {
        ?>
        <style type = "text/css">
            .site-info-inner{
                text-align: center;
            }
        </style>
        <?php
    }

    if (ot_get_option('catalog_mode_en') == "on") {
        ?>
        <style type = "text/css">
            .woocommerce div.product form.cart .button,
            .woocommerce ul.products li.product .button{
                display: none !important;
            }
        </style>
        <?php
    }

    if (ot_get_option('cart_icon_en') == "off") {
        ?>
        <style type ="text/css">
            .cart-icon,
            .nav-cart-badge{
                display: none;
            }
        </style>
        <?php
    }

    if (ot_get_option('search_en') == "off") {
        ?>
        <style type ="text/css">
            .search-toggle {
                display: none;
            }
        </style>
        <?php
    }

    if (ot_get_option('footer_widget_en') == "off") {
        ?>
        <style type ="text/css">
            .footer-area{
                display: none;
            }
        </style>
        <?php
    }

    if (ot_get_option('header_top_bg_color')) {
        $color = ot_get_option('header_top_bg_color');
        ?>
        <style type ="text/css">
            .header-top{
                background: <?php echo $color ?> !important;
            }
        </style>
        <?php
    }

    if (ot_get_option('header_top_text_color')) {
        $color = ot_get_option('header_top_text_color');
        ?>
        <style type ="text/css">
            .header-top,
            .header-top a{
                color: <?php echo $color ?> !important;
            }
        </style>
        <?php
    }

    if (ot_get_option('header_top_icon_color')) {
        $color = ot_get_option('header_top_icon_color');
        ?>
        <style type ="text/css">
            .header-top i,
            .header-top .social-menu li a{
                color: <?php echo $color ?> !important;
            }
        </style>
        <?php
    }

    if (ot_get_option('main_nav_drop_link_color')) {
        $color = ot_get_option('main_nav_drop_link_color');
        ?>
        <style type ="text/css">
            .main-navigation ul ul li a{
                color: <?php echo $color ?> !important;
            }
        </style>
        <?php
    }

    if (ot_get_option('main_nav_link_color')) {
        $color = ot_get_option('main_nav_link_color');
        ?>
        <style type ="text/css">
            .main-navigation a,
            .nav-icon,
            .cart-icon{
                color: <?php echo $color ?> !important;
            }

            .nav-cart-badge{
                color: <?php echo $color ?> !important;                
            }

            .side-menu-nav .stronghold-menu > li > a {
                color: <?php echo $color ?> !important;
            }

        </style>
        <?php
    }
    
    if (ot_get_option('main_nav_link_hover_color')) {
        $color = ot_get_option('main_nav_link_hover_color');
        ?>
        <style type ="text/css">
            .main-navigation li:hover > a,
            .header-three .navbar-nav > li > a:hover,
            .side-menu-nav .stronghold-menu li a:hover{
                color: <?php echo $color ?> !important;
            }

        </style>
        <?php
    }

    if (ot_get_option('main_nav_bg_color')) {
        $color = ot_get_option('main_nav_bg_color');
        ?>
        <style type ="text/css">
            .header-one,
            .header-three .bottom-header,
            .header-two .bottom-header-wrap,
            .bottom-header-wrap,
            .side-menu-fixed{
                background: <?php echo $color ?> !important;
            }
        </style>
        <?php
    }

    if (ot_get_option('header_area_bg_color')) {
        $color = ot_get_option('header_area_bg_color');
        ?>
        <style type ="text/css">
            .header-three, 
            .header-four .masthead,
            .header-seven .contact-header-area,
            .header-mobile .contact-header-area,
            .header-eight,
            .header-nine .masthead{
                background: <?php echo $color ?> !important;
            }
        </style>
        <?php
    }

    if (ot_get_option('header_contact_icon_color')) {
        $color = ot_get_option('header_contact_icon_color');
        ?>
        <style type ="text/css">
            .header-four .icon-wrapper i,
            .header-three .icon-wrapper i,
            .header-contact-info .icon-wrapper i,
            .header-seven .icon-wrapper i,
            .header-mobile .icon-wrapper i{
                color: <?php echo $color ?> !important;
            }
        </style>
        <?php
    }
    if (ot_get_option('header_contact_desc_color')) {
        $color = ot_get_option('header_contact_desc_color');
        ?>
        <style type ="text/css">
            .header-three .header-three-contact-info p,
            .header-four .header-contact-info p,
            .header-eight .hcontact-info p,
            .header-seven .header-area-contact-info p,
            .header-mobile .header-area-contact-info p{
                color: <?php echo $color ?> !important;
            }
        </style>
        <?php
    }
    if (ot_get_option('header_contact_title_color')) {
        $color = ot_get_option('header_contact_title_color');
        ?>
        <style type ="text/css">
            .header-three .header-three-contact-info h6,
            .header-four .header-contact-info h6,
            .header-three .header-three-contact-info h6 a,
            .header-four .header-contact-info h6 a,
            .header-eight .hcontact-info h6,
            .header-eight .hcontact-info h6 a,
            .header-seven .header-area-contact-info h6,
            .header-seven .header-area-contact-info h6 a,
            .header-mobile .header-area-contact-info h6,
            .header-mobile .header-area-contact-info h6 a{
                color: <?php echo $color ?>;
            }
        </style>
        <?php
    }

    if (ot_get_option('mega_menu_bg')) {
        $megamenubg = ot_get_option('mega_menu_bg', array());
        $megamenubg_bc = $megamenubg['background-color'];
        $mega_menu_bg_bi = $megamenubg['background-image'];

        if ($megamenubg_bc != NULL) {
            ?>
            <style type ="text/css">
                .main-navigation ul ul{
                    background: <?php echo $megamenubg_bc; ?> !important; 
                }
            </style>
            <?php
        }if ($megamenubg_bc == NULL && $mega_menu_bg_bi != NULL) {
            ?>
            <style type ="text/css">
                .main-navigation ul ul{
                    background: url('<?php echo $mega_menu_bg_bi; ?>') no-repeat center center; 
                    background-size:cover;
                }
                .main-navigation ul ul li > ul{
                    background: none;
                }
            </style>
            <?php
        }
    }

    if (ot_get_option('sticky_header_link_color')) {
        $color = ot_get_option('sticky_header_link_color');
        ?>
        <style type ="text/css">
            .sticky-header-wrapper .navbar-nav>li>a{
                color: <?php echo $color ?> !important;
            }
        </style>
        <?php
    }

    if (ot_get_option('sticky_header_drop_link_color')) {
        $color = ot_get_option('sticky_header_drop_link_color');
        ?>
        <style type ="text/css">
            .sticky-header-wrapper .main-navigation ul ul li a{
                color: <?php echo $color ?> !important;
            }
        </style>
        <?php
    }

    if (ot_get_option('sticky_header_background_color')) {
        $color = ot_get_option('sticky_header_background_color');
        ?>
        <style type ="text/css">
            .sticky-header-wrapper{
                background: <?php echo $color ?> !important;
            }
        </style>
        <?php
    }

    if (ot_get_option('site_layout_style') == "boxed") {
        if (ot_get_option('site_bg')) {
            $sitebg = ot_get_option('site_bg', array());
            $sitebg_bc = $sitebg['background-color'];
            $sitebg_bi = $sitebg['background-image'];

            if ($sitebg_bc != NULL) {
                ?>
                <style type ="text/css">
                    body{
                        background: <?php echo $sitebg_bc; ?> !important; 
                    }
                </style>
                <?php
            }if ($sitebg_bc == NULL && $sitebg_bi != NULL) {
                ?>
                <style type ="text/css">
                    body{
                        background: url('<?php echo $sitebg_bi; ?>');
                    }

                </style>
                <?php
            }
        }
    }


    if (ot_get_option('footerwd_bg')) {


        $footerbg = ot_get_option('footerwd_bg', array());
        $footerbg_bc = $footerbg['background-color'];
        ?>
        <style type ="text/css">
            .footer-area,
            .footer-area-inner{
                background: <?php echo $footerbg_bc; ?> !important
            }
        </style>
        <?php
    }
    if (ot_get_option('footerwd_bg')) {
        $footerbg_bg = ot_get_option('footerwd_bg', array());
        $footerbg_bi = $footerbg_bg['background-image'];
        ?>
        <style type ="text/css">
            .footer-area{
                background: url('<?php echo $footerbg_bi; ?>') no-repeat center center; 
                background-size:cover;
            }
        </style>
        <?php
    }

    if (ot_get_option('footerwd_tx_color')) {
        $color = ot_get_option('footerwd_tx_color');
        ?>
        <style type ="text/css">
            .footer-area a,
            .footer-area{
                color: <?php echo $color; ?> 
            }
        </style>
        <?php
    }

    if (ot_get_option('footercp_tx_color')) {
        $color = ot_get_option('footercp_tx_color');
        ?>
        <style type ="text/css">
            .footer-nav-menu li a,
            .site-info-inner,
            .social-menu li a{
                color: <?php echo $color; ?>
            }
        </style>
        <?php
    }

    if (ot_get_option('footercp_bg_color')) {
        $color = ot_get_option('footercp_bg_color');
        ?>
        <style type ="text/css">
            .site-info,
            .site-info-inner{
                background: <?php echo $color; ?> !important
            }

            .site-info-wrapper{
                background: <?php echo $color; ?> !important
            }
        </style>
        <?php
    }

    if (ot_get_option('footercp_bg_color')) {
        $color = ot_get_option('footercp_bg_color');
        ?>
        <style type ="text/css">
            .site-info,
            .site-info-inner{
                background: <?php echo $color; ?> !important
            }

            .site-info-wrapper{
                background: <?php echo $color; ?> !important
            }
        </style>
        <?php
    }

    if (ot_get_option('css_custom')) {
        $style = ot_get_option('css_custom');
        ?>
        <style type ="text/css">
        <?php echo $style; ?>
        </style>
        <?php
    }

    if (ot_get_option('logo_custom_en') == "on") {
        $logo_size = ot_get_option('logo_size');
        $logo_margin = ot_get_option('logo_margin');
        $mobile_logo_margin = ot_get_option('mobile_logo_margin');
        ?>
        <style type ="text/css">
            .site-logo{
                margin-top: <?php echo $logo_margin; ?>px !important;
            }

            .navbar-brand img{
                max-height:<?php echo $logo_size; ?>px !important;
            }

            .mobile-logo img{
                margin-top: <?php echo $mobile_logo_margin; ?>px !important;
            }
        </style>
        <?php
    }


    /* Body typography */
    if (ot_get_option('body_font')) {
        $bodyfont = ot_get_option('body_font', array());
        $bodyfont_ff = $bodyfont['font-family'];
        $bodyfont_fc = $bodyfont['font-color'];
        $bodyfont_fs = $bodyfont['font-size'];
        $bodyfont_lh = $bodyfont['line-height'];
        $bodyfont_fst = $bodyfont['font-style'];
        $bodyfont_fv = $bodyfont['font-variant'];
        $bodyfont_fw = $bodyfont['font-weight'];
        $bodyfont_ls = $bodyfont['letter-spacing'];
        $bodyfont_td = $bodyfont['text-decoration'];
        $bodyfont_tt = $bodyfont['text-transform'];

        if (!empty($bodyfont['font-family'])) {
            $ot_google_fonts = get_theme_mod('ot_google_fonts', array());
            if (isset($ot_google_fonts[$bodyfont['font-family']]['family'])) {
                $bodyfont_ff = $ot_google_fonts[$bodyfont['font-family']]['family'];
            } else {
                $bodyfont_ff = $bodyfont['font-family'];
            }
        }
        ?>

        <style type = "text/css">
            body {
                font-family: <?php echo $bodyfont_ff; ?>;
                color: <?php echo $bodyfont_fc; ?> ;
                font-size: <?php echo $bodyfont_fs; ?>;
                line-height: <?php echo $bodyfont_lh; ?>;
                font-style: <?php echo $bodyfont_fst; ?>;
                font-variant: <?php echo $bodyfont_fv; ?>;
                font-weight: <?php echo $bodyfont_fw; ?>;
                letter-spacing: <?php echo $bodyfont_ls; ?>;
                text-decoration: <?php echo $bodyfont_td; ?>;
                text-transform: <?php echo $bodyfont_tt; ?>;
            }
        </style>
        <?php
    }

    /* Main navigation typography */
    if (ot_get_option('main_navigation_font')) {
        $navfont = ot_get_option('main_navigation_font', array());
        $navfont_ff = $navfont['font-family'];
        $navfont_fc = $navfont['font-color'];
        $navfont_fs = $navfont['font-size'];
        $navfont_lh = $navfont['line-height'];
        $navfont_fst = $navfont['font-style'];
        $navfont_fv = $navfont['font-variant'];
        $navfont_fw = $navfont['font-weight'];
        $navfont_ls = $navfont['letter-spacing'];
        $navfont_td = $navfont['text-decoration'];
        $navfont_tt = $navfont['text-transform'];

        if (!empty($navfont['font-family'])) {
            $ot_google_fonts = get_theme_mod('ot_google_fonts', array());
            if (isset($ot_google_fonts[$navfont['font-family']]['family'])) {
                $navfont_ff = $ot_google_fonts[$navfont['font-family']]['family'];
            } else {
                $navfont_ff = $navfont['font-family'];
            }
        }
        ?>

        <style type = "text/css">
            .main-navigation a{
                font-family: <?php echo $navfont_ff; ?>;
                color: <?php echo $navfont_fc; ?> ;
                font-size: <?php echo $navfont_fs; ?>;
                line-height: <?php echo $navfont_lh; ?>;
                font-style: <?php echo $navfont_fst; ?>;
                font-variant: <?php echo $navfont_fv; ?>;
                font-weight: <?php echo $navfont_fw; ?>;
                letter-spacing: <?php echo $navfont_ls; ?>;
                text-decoration: <?php echo $navfont_td; ?>;
                text-transform: <?php echo $navfont_tt; ?>;
            }


        </style>
        <?php
    }

    /* H1 typography */
    if (ot_get_option('h1_font')) {
        $h1font = ot_get_option('h1_font', array());
        $h1font_ff = $h1font['font-family'];
        $h1font_fc = $h1font['font-color'];
        $h1font_fs = $h1font['font-size'];
        $h1font_lh = $h1font['line-height'];
        $h1font_fst = $h1font['font-style'];
        $h1font_fv = $h1font['font-variant'];
        $h1font_fw = $h1font['font-weight'];
        $h1font_ls = $h1font['letter-spacing'];
        $h1font_td = $h1font['text-decoration'];
        $h1font_tt = $h1font['text-transform'];

        if (!empty($h1font['font-family'])) {
            $ot_google_fonts = get_theme_mod('ot_google_fonts', array());
            if (isset($ot_google_fonts[$h1font['font-family']]['family'])) {
                $h1font_ff = $ot_google_fonts[$h1font['font-family']]['family'];
            } else {
                $h1font_ff = $h1font['font-family'];
            }
        }
        ?>

        <style type = "text/css">
            h1  {
                font-family: <?php echo $h1font_ff; ?> !important;
                color: <?php echo $h1font_fc; ?> ;
                font-size: <?php echo $h1font_fs; ?>;
                line-height: <?php echo $h1font_lh; ?>;
                font-style: <?php echo $h1font_fst; ?>;
                font-variant: <?php echo $h1font_fv; ?>;
                font-weight: <?php echo $h1font_fw; ?>;
                letter-spacing: <?php echo $h1font_ls; ?>;
                text-decoration: <?php echo $h1font_td; ?>;
                text-transform: <?php echo $h1font_tt; ?>;
            }
        </style>

        <?php
    }
    /* H2 typography */
    if (ot_get_option('h2_font')) {
        $h2font = ot_get_option('h2_font', array());
        $h2font_ff = $h2font['font-family'];
        $h2font_fc = $h2font['font-color'];
        $h2font_fs = $h2font['font-size'];
        $h2font_lh = $h2font['line-height'];
        $h2font_fst = $h2font['font-style'];
        $h2font_fv = $h2font['font-variant'];
        $h2font_fw = $h2font['font-weight'];
        $h2font_ls = $h2font['letter-spacing'];
        $h2font_td = $h2font['text-decoration'];
        $h2font_tt = $h2font['text-transform'];

        if (!empty($h2font['font-family'])) {
            $ot_google_fonts = get_theme_mod('ot_google_fonts', array());
            if (isset($ot_google_fonts[$h2font['font-family']]['family'])) {
                $h2font_ff = $ot_google_fonts[$h2font['font-family']]['family'];
            } else {
                $h2font_ff = $h2font['font-family'];
            }
        }
        ?>

        <style type = "text/css">
            h2  {
                font-family: <?php echo $h2font_ff; ?> !important;
                color: <?php echo $h2font_fc; ?> ;
                font-size: <?php echo $h2font_fs; ?>;
                line-height: <?php echo $h2font_lh; ?>;
                font-style: <?php echo $h2font_fst; ?>;
                font-variant: <?php echo $h2font_fv; ?>;
                font-weight: <?php echo $h2font_fw; ?>;
                letter-spacing: <?php echo $h2font_ls; ?>;
                text-decoration: <?php echo $h2font_td; ?>;
                text-transform: <?php echo $h2font_tt; ?>;
            }
        </style>
        <?php
    }
    /* H3 typography */
    if (ot_get_option('h3_font')) {
        $h3font = ot_get_option('h3_font', array());
        $h3font_ff = $h3font['font-family'];
        $h3font_fc = $h3font['font-color'];
        $h3font_fs = $h3font['font-size'];
        $h3font_lh = $h3font['line-height'];
        $h3font_fst = $h3font['font-style'];
        $h3font_fv = $h3font['font-variant'];
        $h3font_fw = $h3font['font-weight'];
        $h3font_ls = $h3font['letter-spacing'];
        $h3font_td = $h3font['text-decoration'];
        $h3font_tt = $h3font['text-transform'];

        if (!empty($h3font['font-family'])) {
            $ot_google_fonts = get_theme_mod('ot_google_fonts', array());
            if (isset($ot_google_fonts[$h3font['font-family']]['family'])) {
                $h3font_ff = $ot_google_fonts[$h3font['font-family']]['family'];
            } else {
                $h3font_ff = $h3font['font-family'];
            }
        }
        ?>

        <style type = "text/css">
            h3  {
                font-family: <?php echo $h3font_ff; ?> !important;
                color: <?php echo $h3font_fc; ?> ;
                font-size: <?php echo $h3font_fs; ?>;
                line-height: <?php echo $h3font_lh; ?>;
                font-style: <?php echo $h3font_fst; ?>;
                font-variant: <?php echo $h3font_fv; ?>;
                font-weight: <?php echo $h3font_fw; ?>;
                letter-spacing: <?php echo $h3font_ls; ?>;
                text-decoration: <?php echo $h3font_td; ?>;
                text-transform: <?php echo $h3font_tt; ?>;
            }
        </style>
        <?php
    }
    /* H4 typography */
    if (ot_get_option('h4_font')) {
        $h4font = ot_get_option('h4_font', array());
        $h4font_ff = $h4font['font-family'];
        $h4font_fc = $h4font['font-color'];
        $h4font_fs = $h4font['font-size'];
        $h4font_lh = $h4font['line-height'];
        $h4font_fst = $h4font['font-style'];
        $h4font_fv = $h4font['font-variant'];
        $h4font_fw = $h4font['font-weight'];
        $h4font_ls = $h4font['letter-spacing'];
        $h4font_td = $h4font['text-decoration'];
        $h4font_tt = $h4font['text-transform'];

        if (!empty($h4font['font-family'])) {
            $ot_google_fonts = get_theme_mod('ot_google_fonts', array());
            if (isset($ot_google_fonts[$h4font['font-family']]['family'])) {
                $h4font_ff = $ot_google_fonts[$h4font['font-family']]['family'];
            } else {
                $h4font_ff = $h4font['font-family'];
            }
        }
        ?>

        <style type = "text/css">
            h4  {
                font-family: <?php echo $h4font_ff; ?> !important;
                color: <?php echo $h4font_fc; ?> ;
                font-size: <?php echo $h4font_fs; ?>;
                line-height: <?php echo $h4font_lh; ?>;
                font-style: <?php echo $h4font_fst; ?>;
                font-variant: <?php echo $h4font_fv; ?>;
                font-weight: <?php echo $h4font_fw; ?>;
                letter-spacing: <?php echo $h4font_ls; ?>;
                text-decoration: <?php echo $h4font_td; ?>;
                text-transform: <?php echo $h4font_tt; ?>;
            }
        </style>

        <?php
    }
    /* H5 typography */
    if (ot_get_option('h5_font')) {
        $h5font = ot_get_option('h5_font', array());
        $h5font_ff = $h5font['font-family'];
        $h5font_fc = $h5font['font-color'];
        $h5font_fs = $h5font['font-size'];
        $h5font_lh = $h5font['line-height'];
        $h5font_fst = $h5font['font-style'];
        $h5font_fv = $h5font['font-variant'];
        $h5font_fw = $h5font['font-weight'];
        $h5font_ls = $h5font['letter-spacing'];
        $h5font_td = $h5font['text-decoration'];
        $h5font_tt = $h5font['text-transform'];

        if (!empty($h5font['font-family'])) {
            $ot_google_fonts = get_theme_mod('ot_google_fonts', array());
            if (isset($ot_google_fonts[$h5font['font-family']]['family'])) {
                $h5font_ff = $ot_google_fonts[$h5font['font-family']]['family'];
            } else {
                $h5font_ff = $h5font['font-family'];
            }
        }
        ?>

        <style type = "text/css">
            h5  {
                font-family: <?php echo $h5font_ff; ?> !important;
                color: <?php echo $h5font_fc; ?> ;
                font-size: <?php echo $h5font_fs; ?>;
                line-height: <?php echo $h5font_lh; ?>;
                font-style: <?php echo $h5font_fst; ?>;
                font-variant: <?php echo $h5font_fv; ?>;
                font-weight: <?php echo $h5font_fw; ?>;
                letter-spacing: <?php echo $h5font_ls; ?>;
                text-decoration: <?php echo $h5font_td; ?>;
                text-transform: <?php echo $h5font_tt; ?>;
            }
        </style>
        <?php
    }

    /* H6 typography */
    if (ot_get_option('h6_font')) {
        $h6font = ot_get_option('h6_font', array());
        $h6font_ff = $h6font['font-family'];
        $h6font_fc = $h6font['font-color'];
        $h6font_fs = $h6font['font-size'];
        $h6font_lh = $h6font['line-height'];
        $h6font_fst = $h6font['font-style'];
        $h6font_fv = $h6font['font-variant'];
        $h6font_fw = $h6font['font-weight'];
        $h6font_ls = $h6font['letter-spacing'];
        $h6font_td = $h6font['text-decoration'];
        $h6font_tt = $h6font['text-transform'];

        if (!empty($h6font['font-family'])) {
            $ot_google_fonts = get_theme_mod('ot_google_fonts', array());
            if (isset($ot_google_fonts[$h6font['font-family']]['family'])) {
                $h6font_ff = $ot_google_fonts[$h6font['font-family']]['family'];
            } else {
                $h6font_ff = $h6font['font-family'];
            }
        }
        ?>
        <style type = "text/css">
            h6  {
                font-family: <?php echo $h6font_ff; ?> !important;
                color: <?php echo $h6font_fc; ?> ;
                font-size: <?php echo $h6font_fs; ?>;
                line-height: <?php echo $h6font_lh; ?>;
                font-style: <?php echo $h6font_fst; ?>;
                font-variant: <?php echo $h6font_fv; ?>;
                font-weight: <?php echo $h6font_fw; ?>;
                letter-spacing: <?php echo $h6font_ls; ?>;
                text-decoration: <?php echo $h6font_td; ?>;
                text-transform: <?php echo $h6font_tt; ?>;
            }
        </style>

        <?php
    }

    if (ot_get_option('featured_img_single_en') == "off") {
        ?>
        <style type ="text/css">
            .blog-single-featured{
                display: none;
            }
        </style>
        <?php
    }

    if (ot_get_option('single_posts_nav_en') == "off") {
        ?>
        <style type ="text/css">
            .post-navigation{
                display: none;
            }
        </style>
        <?php
    }

    if (ot_get_option('posts_meta_en') == "off") {
        ?>
        <style type ="text/css">
            .entry-meta{
                display: none;
            }
        </style>
        <?php
    }

    if (ot_get_option('share_bar_en') == "off") {
        ?>
        <style type ="text/css">
            .share-bar{
                display: none;
            }
        </style>
        <?php
    }

    if (ot_get_option('rel_posts_en') == "off") {
        ?>
        <style type ="text/css">
            .related-posts{
                display: none;
            }
        </style>
        <?php
    }

    if (ot_get_option('author_box_en') == "off") {
        ?>
        <style type ="text/css">
            .author-box{
                display: none;
            }
        </style>
        <?php
    }

    if (ot_get_option('read_more_en') == "off") {
        ?>
        <style type ="text/css">
            .bread-more-btn{
                display: none;
            }
        </style>
        <?php
    }

    if (ot_get_option('header_type') == "header-five") {
        ?>
        <style type ="text/css">
            .dental-care-rev-wrapper{
                margin-top: -190px;
            }   

            .header-top,
            .mobile-header{
                background: rgba(255,255,255,.2);
            }

            @media screen and (max-width: 950px){
                .dental-care-rev-wrapper {
                    margin-top: 0;
                }

            }
        </style>
        <?php
    }
    if (ot_get_option('header_type') == "header-eight") {
        ?>
        <style type ="text/css">
            .dental-care-rev-wrapper{
                margin-top: -320px;
            }   

            .header-top,
            .mobile-header{
                background: rgba(255,255,255,.2);
            }

            .page-header-transparent {
                margin-top: -250px;
            }

            .page-title-wrapper-bg {
                padding-top: 100px;
                padding-bottom: 60px;
            }

            @media screen and (max-width: 800px){
                .page-header-transparent {
                    margin-top: 0;
                }

                .page-title-wrapper-bg {
                    padding-top: 50px;
                    padding-bottom: 50px;
                }
            }

            @media screen and (max-width: 950px){
                .dental-care-rev-wrapper {
                    margin-top: 0;
                }

            }
        </style>
        <?php
    }


    if (ot_get_option('header_type') == "header-six") {
        ?>
        <style type ="text/css">





        </style>
        <?php
    }

    /* Color scheme color picker */
    if (ot_get_option('color_scheme')) {
        $color_scheme_col = ot_get_option('color_scheme');
        ?>
        <style type = "text/css">
            a,
            .header-top .header-top-email a:hover,
            .header-top .header-top-appointment a:hover,
            .main-navigation .current-menu-item > a,
            .main-navigation li:hover > a,
            .main-navigation ul ul li a:hover,
            .nav-icon:hover,
            .cart-icon:hover,
            .stronghold-menu > li.mega-menu > ul.sub-menu > .menu-item-has-children > a:hover,
            .header-three .icon-wrapper i,
            .header-four .icon-wrapper i, 
            .header-three .icon-wrapper i, 
            .header-nine .cicon-wrapper i,
            .header-contact-info .icon-wrapper i, 
            .header-seven .icon-wrapper i, 
            .header-mobile .icon-wrapper i,
            .header-three .header-three-contact-info h6 a:hover,
            .header-three .nav-cart-badge,
            .header-contact-info:hover .icon-wrapper i,
            .side-menu-fixed .side-menu-nav ul li ul li a,
            .side-menu-nav .stronghold-menu > li.mega-menu ul a,
            .side-menu-nav .stronghold-menu li ul li a,
            .side-menu-nav ul ul li:hover > ul li a,
            .side-menu-nav .stronghold-menu li .menu-item-has-children > a:after,
            .side-menu-fixed .side-menu-nav ul li ul,
            .side-menu-fixed .side-menu-nav ul .mega-menu ul,
            .strhld-breadcrumb .breadcrumb-trail a:hover,
            .footer-nav-menu li a:hover,
            .opening-hours-wid li i,
            .company-info-wid li i,
            .widget .widget_nav_menu li:before,
            .sticky-post,
            .entry-title a:hover,
            .entry-meta a:hover,
            .blog-featured-img-overlay i:hover,
            .single-post .post-navigation a:hover,
            .share-bar ul li:hover > a,
            .author-name a:hover,
            .author_soclinks li a:hover,
            .required,
            .team-member-main-name a:hover,
            .service-main-name a:hover,
            .team-member-main-pos,
            .team-member-block-img-overlay i:hover,
            .service-block-img-overlay i:hover,
            .gallery-col-img-overlay i:hover,
            .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce div.product .stock,
            .woocommerce .star-rating span,
            .woocommerce ul.products li.product .price,
            .WC-product-name a:hover,
            #dental-care-blog-items .dental-care-blog-info h5 a:hover,
            .iso-cat-item .iso-overlay i:hover,
            .blog-grid-widget-info h6 a:hover,
            #dental-care-products .product-name-sc a:hover,
            .blog-grid-widget-featured a .blog-grid-widget-overlay i:hover,
            .carousel_arrow_nav_top .arrow_prev_top,
            .carousel_arrow_nav_top .arrow_next_top,
            .wpcf7-form .input-group .input-icon{
                color: <?php echo $color_scheme_col ?>;
            }

            button:hover,
            .btn:hover,
            input[type="button"]:hover,
            input[type="reset"]:hover,
            input[type="submit"]:hover,
            .header-three .bottom-header,
            .side-menu-fixed,
            .header-nine .header-contact-social li a,
            .widget_tag_cloud a:hover,
            .blog-featured-img-overlay,
            .search-content .result-icon,
            .home-btn,
            .team-member-block-img-overlay,
            .service-block-img-overlay,
            .gallery-col-img-overlay,
            .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
            .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover,
            .woocommerce #respond input#submit.alt:hover, 
            .woocommerce a.button.alt:hover, 
            .woocommerce button.button.alt:hover, 
            .woocommerce input.button.alt:hover,
            .woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover,
            .widget_product_tag_cloud .tagcloud a:hover,
            .blog-date-overlay,
            .isotope-filter a:hover,
            .isotope-filter .current,
            .iso-overlay,
            #to-top:hover,
            .blog-grid-widget-overlay,
            .social-widget-item a,
            .woocommerce #respond input#submit:hover, 
            .woocommerce a.button:hover, 
            .woocommerce button.button:hover, 
            .woocommerce input.button:hover,
            .side-menu-fixed .side-menu-nav ul li ul li a:hover{
                background: <?php echo $color_scheme_col ?>;
            }

            .nav-cart-badge,
            .woocommerce span.onsale,
            .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,
            .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
            .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{
                background-color: <?php echo $color_scheme_col ?>;
            }

            .mobile-menu .current-menu-item a,
            .mobile-menu a:hover,
            .main-navigation a:hover,
            .side-menu-nav .stronghold-menu > li.mega-menu ul li i,
            .side-menu-nav .stronghold-menu li ul li i,
            .side-menu-fixed .side-menu-nav ul li ul li a,
            .nav-icon:hover,
            .nav-icon a:hover,
            .footer-area a:hover{
                color: <?php echo $color_scheme_col ?> !important;
            }

            blockquote {
                border-left: 5px solid <?php echo $color_scheme_col ?>;
            }

        </style>
        <?php
    }
}

add_action('wp_head', 'dental_care_dynamic_styles', 100);
