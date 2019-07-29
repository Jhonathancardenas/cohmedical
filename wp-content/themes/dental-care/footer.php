<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dental_Care
 */
?>
</div><!-- #content -->
</div><!-- #container fluid -->

<?php
$site_info_set = "col-md-6";
if (ot_get_option('footer_menu_type') == "menunone") {
    $site_info_set = "col-md-12";
}
?>

<footer id="colophon" class="site-footer container-fluid">
    <?php get_sidebar('footer'); ?>
    <div class="site-info-wrapper row">           
        <div class="container site-info">           
            <div class="site-info-inner <?php echo esc_attr($site_info_set); ?> col-sm-12 col-xs-12">
                <?php if (ot_get_option('copyright_text')): ?>
                    <span class="copyright"><?php echo esc_html(ot_get_option('copyright_text')); ?></span>
                <?php else: ?>
                    <span class="copyright">Copyright © 2016 Dental Care. All Rights Reserved. Shared by <!-- Please Do Not Remove Shared Credits Link --><a href='http://www.themes24x7.com/' id="sd">Themes24x7</a><!-- Please Do Not Remove Shared Credits Link --></span>
                <?php endif; ?>
                <?php if (ot_get_option('back_top_en') == 'on') { ?>
                    <a href="" id="to-top" title="Back to top"></a>
                <?php } ?>
            </div>

            <?php if (ot_get_option('footer_menu_type') == "navmenu"): ?>
                <div class="footer-menu col-md-6 col-sm-12 col-xs-12">
                    <?php
                    if (has_nav_menu('footer-menu')) {
                    wp_nav_menu(array(
                        "theme_location" => "footer-menu",
                        'container_class' => 'footer-menu-wrapper',
                        'menu_class' => 'footer-nav-menu'
                    ));
                    }
                    ?>
                </div>
                <?php
            endif;
            if (ot_get_option('footer_menu_type') == "socialmenu"):
                ?>
                <div class="footer-menu col-md-6 col-sm-12 col-xs-12">
                    <?php dental_care_add_social_menu(); ?> 
                </div>
            <?php endif; ?>

        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

 <?php if (ot_get_option('site_layout_style') == "boxed") {?>
</div>
</div>
 <?php } ?>

<?php wp_footer(); ?>

</body>
</html>
