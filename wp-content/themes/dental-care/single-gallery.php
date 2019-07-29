<?php
/**
 * 
 * Displays single galleries
 *
 * @package Dental_Care
 */
get_header();

$dental_care_cols_main = 'col-md-9 col-sm-12 col-xs-12';
$dental_care_cols_side = 'col-md-3 col-sm-12 col-xs-12';
$dental_care_layout_val = get_post_meta($post->ID, 'page_layout', $single = true);

if ($dental_care_layout_val == NULL) {
    $dental_care_layout_val = ot_get_option('layout-global');
}
if ($dental_care_layout_val == 'no-sidebar') {
    $dental_care_cols_main = 'col-md-12';
    $dental_care_cols_side = 'hidden';
} else if ($dental_care_layout_val == 'sidebar-right') {
    $dental_care_cols_main = 'col-md-9 col-sm-12 col-xs-12 pull-left';
    $dental_care_cols_side = 'col-md-3 col-sm-12 col-xs-12 pull-right';
} else if ($dental_care_layout_val == 'sidebar-left') {
    $dental_care_cols_main = 'col-md-9 col-sm-12 col-xs-12 pull-right';
    $dental_care_cols_side = 'col-md-3 col-sm-12 col-xs-12 pull-left';
}
$dental_care_sidebar = get_post_meta($post->ID, 'primary_sidebar', $single = true);
?>

<div class="container">
    <div class="row">
        <div id="primary" class="content-area <?php echo esc_attr($dental_care_cols_main); ?>">
            <main id="main" class="site-main">
                <div class="single-gallery-wrapper">
                    <?php
                    $dental_care_images = explode(',', get_post_meta($post->ID, 'gallery_images_img', $single = true));
                    $dental_care_gallery_type = get_post_meta($post->ID, 'gallery_select', $single = true);
                    $dental_care_video_gallery_list = get_post_meta($post->ID, 'video_gallery_list', $single = true);
                    $dental_care_filter_gallery_list = get_post_meta($post->ID, 'filter_gallery_list', $single = true);
                    $dental_care_captions_en = get_post_meta($post->ID, 'image_captions_en', $single = true);

                    if ($dental_care_gallery_type == 'gallery_slider') {
                        if ($dental_care_images) {
                            echo '<div class="gallery-slider owl-carousel">';
                            foreach ($dental_care_images as $id) {
                                if (!empty($id)) {
                                    $full_src = wp_get_attachment_image_src($id, 'full');
                                    $gallery_img = wp_get_attachment_image($id, 'full');
                                    echo '<div class="gallery-slider-img">';
                                    echo '<a class="gallery-slide-img" href="' . esc_url($full_src[0]) . '"> ' . $gallery_img . ' ';
                                    echo '</a>';
                                    if ($dental_care_captions_en == "on") {
                                    $caption = get_the_excerpt($id);
                                    echo '<div class="gallery-img-caption">' . esc_html($caption) . '</div>';
                                }
                                echo '</div>';
                                
                                }
                            }
                            echo '</div>';
                        }
                    } else if ($dental_care_gallery_type == 'gallery_carousel') {
                        if ($dental_care_images) {
                            echo '<div class="gallery-carousel owl-carousel">';
                            foreach ($dental_care_images as $id) {
                                if (!empty($id)) {
                                    $full_src = wp_get_attachment_image_src($id, 'full');
                                    $gallery_img = wp_get_attachment_image($id, 'full');
                                    echo '<div class="gallery-carousel-img">';
                                    echo '<a class="gallery-slide-img" href="' . esc_url($full_src[0]) . '"> ' . $gallery_img . ' ';
                                    echo '</a>';
                                    if ($dental_care_captions_en == "on") {
                                    $caption = get_the_excerpt($id);
                                    echo '<div class="gallery-img-caption">' . esc_html($caption) . '</div>';
                                }
                                echo '</div>';
                                }
                            }
                            echo '</div>';
                        }
                    } else if ($dental_care_gallery_type == 'gallery_justified') {
                        if ($dental_care_captions_en == "on") {
                        $caps_en = "true";
                    } else {
                        $caps_en = "false";
                    }
                        if ($dental_care_images) {
                            echo '<div class="gallery-justified" data-caps="'. esc_attr($caps_en).'">';
                            foreach ($dental_care_images as $id) {
                                if (!empty($id)) {
                                    $full_src = wp_get_attachment_image_src($id, 'full');
                                    $gallery_img = wp_get_attachment_image($id, 'full');
                                    echo '<a href="' . esc_url($full_src[0]) . '"> <img src="' . esc_url($full_src[0]) . '" alt="';

                                if ($dental_care_captions_en == "on") {
                                    $caption = get_the_excerpt($id);
                                    echo esc_attr($caption);
                                }

                                echo '"/> ';
                                   
                                    echo '</a>';
                                }
                            }
                            echo '</div>';
                        }
                    }else if ($dental_care_gallery_type == 'gallery_col_two') {
                        if ($dental_care_images) {
                            $img_count = 0;
                            echo '<div class="gallery-two-col">';
                            echo '<div class="row">';
                            foreach ($dental_care_images as $id) {
                                if (!empty($id)) {
                                    $full_src = wp_get_attachment_image_src($id, 'full');
                                    $gallery_img = wp_get_attachment_image($id, 'full');
                                    echo '<div class="col-md-6 gallery-col-item">';
                                    echo '<div class="gallery-col-img-wrapper">';
                                    echo '<a href="' . esc_url($full_src[0]) . '"><span class="gallery-col-img-overlay">
                                <i class="fa fa-link"></i>
                                   </span> ' . $gallery_img . ' ';

                                    echo '</a>';
                                    echo '</div>';
                                    
                                    if ($dental_care_captions_en == "on") {
                                    $caption = get_the_excerpt($id);
                                    echo '<div class="gallery-img-caption">' . esc_html($caption) . '</div>';
                                }

                                    echo '</div>';
                                    $img_count++;
                                    if ($img_count == 2) {
                                        $img_count = 0;
                                        echo '</div>';
                                        echo '<div class="row">';
                                    }
                                }
                            }
                            if ($img_count < 3) {

                                echo '</div>';
                            }
                            echo '</div>';
                        }
                    }
                    else if ($dental_care_gallery_type == 'gallery_col_three') {
                        if ($dental_care_images) {
                            $img_count = 0;
                            echo '<div class="gallery-three-col">';
                            echo '<div class="row">';
                            foreach ($dental_care_images as $id) {
                                if (!empty($id)) {
                                    $full_src = wp_get_attachment_image_src($id, 'full');
                                    $gallery_img = wp_get_attachment_image($id, 'full');
                                    echo '<div class="col-md-4 gallery-col-item">';
                                    echo '<div class="gallery-col-img-wrapper">';
                                    echo '<a href="' . esc_url($full_src[0]) . '"><span class="gallery-col-img-overlay">
                                <i class="fa fa-link"></i>
                                   </span> ' . $gallery_img . ' ';

                                    echo '</a>';
                                    echo '</div>';
                                    
                                    if ($dental_care_captions_en == "on") {
                                    $caption = get_the_excerpt($id);
                                    echo '<div class="gallery-img-caption">' . esc_html($caption) . '</div>';
                                }

                                    echo '</div>';
                                    $img_count++;
                                    if ($img_count == 3) {
                                        $img_count = 0;
                                        echo '</div>';
                                        echo '<div class="row">';
                                    }
                                }
                            }
                            if ($img_count < 3) {

                                echo '</div>';
                            }
                            echo '</div>';
                        }
                    } else if ($dental_care_gallery_type == 'gallery_col_four') {
                        if ($dental_care_images) {
                            $img_count = 0;
                            echo '<div class="gallery-four-col">';
                            echo '<div class="row">';
                            foreach ($dental_care_images as $id) {
                                if (!empty($id)) {
                                    $full_src = wp_get_attachment_image_src($id, 'full');
                                    $gallery_img = wp_get_attachment_image($id, 'full');
                                    echo '<div class="col-md-3 gallery-col-item">';
                                    echo '<div class="gallery-col-img-wrapper">';
                                    echo '<a href="' . esc_url($full_src[0]) . '"><span class="gallery-col-img-overlay">
                                <i class="fa fa-link"></i>
                                   </span> ' . $gallery_img . ' ';

                                    echo '</a>';
                                    echo '</div>';
                                    
                                    if ($dental_care_captions_en == "on") {
                                    $caption = get_the_excerpt($id);
                                    echo '<div class="gallery-img-caption">' . esc_html($caption) . '</div>';
                                }

                                    echo '</div>';
                                    $img_count++;
                                    if ($img_count == 4) {
                                        $img_count = 0;
                                        echo '</div>';
                                        echo '<div class="row">';
                                    }
                                }
                            }
                            if ($img_count < 4) {

                                echo '</div>';
                            }
                            echo '</div>';
                        }
                    } else if ($dental_care_gallery_type == 'gallery_video') {

                        $video_count = 0;
                        echo '<div class="video-gallery-wrapper">';
                        echo '<div class="row">';
                        if (!empty($dental_care_video_gallery_list)) {
                            foreach ($dental_care_video_gallery_list as $video_item) {
                                if (isset($video_item['title']) && !empty($video_item['title'])) {
                                    $url = $video_item['title'];
                                } else
                                    $url = '';
                                if (isset($video_item['video_thumb']) && !empty($video_item['video_thumb'])) {
                                    $image = $video_item['video_thumb'];
                                } else
                                    $image = '';
                                if (isset($video_item['title']) && !empty($video_item['title']) && isset($video_item['video_thumb']) && !empty($video_item['video_thumb'])) {

                                    echo '<div class="col-md-4 video-item-wrapper">';
                                    echo '<div class="video-item">';
                                    echo '<a href="' . esc_url($url) . '&width=960&height=580' . '" data-rel="prettyPhoto" title="Video Link"><span class="gallery-col-img-overlay"><i class="fa fa-play"></i>
                                                </span><img src="' . esc_url($image) . '" alt="Video Thumb" /></a>'
                                    . '</div></div>';
                                }
                                $video_count++;
                                if ($video_count == 3) {
                                    $video_count = 0;
                                    echo '</div>';
                                    echo '<div class="row">';
                                }
                            }
                            if ($video_count < 3) {

                                echo '</div>';
                            }
                        }

                        echo '</div>';
                    } else if ($dental_care_gallery_type == 'gallery_filter_category') {

                        echo '<div class="filter-gallery-wrapper">';

                        $args = array(
                            'type' => 'post',
                            'child_of' => 0,
                            'parent' => '',
                            'orderby' => 'name',
                            'order' => 'ASC',
                            'hide_empty' => 0,
                            'hierarchical' => 1,
                            'number' => '9999',
                            'taxonomy' => 'gallery-categories',
                            'pad_counts' => false,
                        );
                        $categories = get_categories($args);

                        echo '<div class="isotope-filter classcatFilter">';
                        echo ' <a href="#" data-filter="*" class="current">' . esc_html__('All Images', 'dental-care') . '</a>';
                        foreach ($categories as $cat) {
                            echo '<a href="#" data-filter=".' . esc_attr($cat->slug) . '">' . esc_html($cat->name) . '</a>';
                        }
                        echo '</div>';
                        echo '<div class="isotope-images-container">';
                        if (!empty($dental_care_filter_gallery_list)) {
                            foreach ($dental_care_filter_gallery_list as $gallery_image) {

                                echo '<div style="width:32.5%;" class="iso-cat-item ';

                               if($gallery_image['gallery_cat'] != NULL){
                                foreach ($gallery_image['gallery_cat'] as $category) {
                                    $cat_info = get_category($category);
                                    $string .= $cat_info->slug . " ";
                                }
                                }
                                echo '">';
                                echo '<div class="iso-cat-img-wrapper"><a href="' . esc_url($gallery_image['gallery_cat_img']) . '"><span class="iso-overlay"><span class="cat-img-title">'. esc_html($gallery_image['title']).'</span></span><img src="' . esc_url($gallery_image['gallery_cat_img']) . '" alt="Gallery Image"></a></div>';
                                echo '  </div>';
                    }
                        }

                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->

<?php
if (!($dental_care_layout_val == 'no-sidebar')) {
    echo '<div id="secondary" class="widget-area ' . esc_attr($dental_care_cols_side) . '" role="complementary">';
    ?>       
            <?php
            if ($dental_care_sidebar == NULL) {
                get_sidebar();
            } else {
                if (!function_exists('dynamic_sidebar') || !dynamic_sidebar($dental_care_sidebar)) :
                    ?>
                    <?php
                endif;
            }


            echo '</div>';
            ?>
        <?php } ?>  
    </div>
</div>

        <?php
        if ($dental_care_gallery_type == 'gallery_slider') {

            function dental_care_gallery_slider() {
                ?>
        <script>
            jQuery(document).ready(function ($) {
                "use strict";
                if ($('.gallery-slider').children('.gallery-slide-img').length > 1) {
                    var $loopSet = true;
                } else {
                    var $loopSet = false;
                }
                $(".gallery-slider").owlCarousel({
                    items: 1,
                    animateOut: 'fadeOutLeft',
                    animateIn: 'fadeInRight',
                    loop: $loopSet,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    nav: true,
                    navText: [
                        "<i class='fa fa-chevron-left'></i>",
                        "<i class='fa fa-chevron-right'></i>"
                    ]
                });

            });
        </script>
        <?php
    }

    add_action('wp_footer', 'dental_care_gallery_slider', 10, 2);
} elseif ($dental_care_gallery_type == 'gallery_justified') {

    function dental_care_justified() {
        ?>
        <script>
            jQuery(document).ready(function ($) {
                "use strict";
                var $container = $('.gallery-justified');
                var caps = $(".gallery-justified").data('caps');
                $container.imagesLoaded(function () {
                    $(".gallery-justified").justifiedGallery({
                        rowHeight: 200,
                        margins: 4,
                        lastRow: 'justify',
                        randomize: false,
                        captions: caps
                    });
                });
            });
        </script>
        <?php
    }

    add_action('wp_footer', 'dental_care_justified', 10, 2);
} elseif ($dental_care_gallery_type == 'gallery_carousel') {

    function dental_care_carousel() {
        ?>
        <script>
            jQuery(document).ready(function ($) {
                "use strict";
                if ($('.gallery-carousel').children('.gallery-slide-img').length > 1) {
                    var $loopSet = true;
                } else {
                    var $loopSet = false;
                }
                $(".gallery-carousel").owlCarousel({
                    items: 3,
                    margin: 20,
                    loop: $loopSet,
                    autoplayTimeout: 5000,
                    autoplay: true,
                    navigation: false,
                    pagination: false,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        800: {
                            items: 2,
                        },
                        1100: {
                            items: 3,
                        }
                    }
                });

            });
        </script>
        <?php
    }

    add_action('wp_footer', 'dental_care_carousel', 10, 2);
}

get_footer();


