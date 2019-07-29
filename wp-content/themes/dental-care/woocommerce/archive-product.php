<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

get_header('shop');
?>

<?php
$dental_care_cols_main = 'col-md-9 col-sm-12 col-xs-12';
$dental_care_cols_side = 'col-md-3 col-sm-12 col-xs-12';

if (ot_get_option('layout-shop') != NULL){
    $dental_care_layout = ot_get_option('layout-shop');
}else{
    $dental_care_layout = 'no-sidebar';
}

if ($dental_care_layout == 'no-sidebar') {
    $dental_care_cols_main = 'col-md-12';
    $dental_care_cols_side = 'hidden';
} else if ($dental_care_layout == 'sidebar-right') {
    $dental_care_cols_main = 'col-md-9 col-sm-12 col-xs-12 pull-left';
    $dental_care_cols_side = 'col-md-3 col-sm-12 col-xs-12 pull-right';
} else if ($dental_care_layout == 'sidebar-left') {
    $dental_care_cols_main = 'col-md-9 col-sm-12 col-xs-12 pull-right';
    $dental_care_cols_side = 'col-md-3 col-sm-12 col-xs-12 pull-left';
}

get_sidebar('above-shop');
?>
<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>

   
<?php endif; ?>

<div class="container shop-content">
    <div class="row">

        <?php
        /**
         * woocommerce_before_main_content hook
         *
         * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
         * @hooked woocommerce_breadcrumb - 20
         */
        do_action('woocommerce_before_main_content');
        ?>


        <?php do_action('woocommerce_archive_description'); ?>

        <?php if (have_posts()) : ?>
            <div class="<?php echo esc_attr($dental_care_cols_main); ?>">
                <?php
                /**
                 * woocommerce_before_shop_loop hook
                 *
                 * @hooked woocommerce_result_count - 20
                 * @hooked woocommerce_catalog_ordering - 30
                 */
                do_action('woocommerce_before_shop_loop');
                ?>


                <?php woocommerce_product_loop_start(); ?>

                <?php woocommerce_product_subcategories(); ?>

                <?php while (have_posts()) : the_post(); ?>

                    <?php wc_get_template_part('content', 'product'); ?>

                <?php endwhile; // end of the loop.  ?>

                <?php woocommerce_product_loop_end(); ?>


                <?php
                /**
                 * woocommerce_after_shop_loop hook
                 *
                 * @hooked woocommerce_pagination - 10
                 */
                do_action('woocommerce_after_shop_loop');
                ?>
            </div>
        <?php elseif (!woocommerce_product_subcategories(array('before' => woocommerce_product_loop_start(false), 'after' => woocommerce_product_loop_end(false)))) : ?>

            <?php wc_get_template('loop/no-products-found.php'); ?>

        <?php endif; ?>

        <?php
        /**
         * woocommerce_after_main_content hook
         *
         * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
         */
        do_action('woocommerce_after_main_content');
        ?>

        <?php
        /**
         * woocommerce_sidebar hook
         *
         * @hooked woocommerce_get_sidebar - 10
         */
        ?>

        <?php
        echo '<div class="' . esc_attr($dental_care_cols_side) . '">';
        get_sidebar('shop');  //do_action( 'woocommerce_sidebar' ); 
        echo '</div>';
		?>

    </div>
</div>

<?php get_footer('shop'); ?>