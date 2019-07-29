<?php
/**
 * Dental Care functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dental_Care
 */
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter('ot_theme_mode', '__return_true');

/**
 * Required: include OptionTree.
 */
require( trailingslashit(get_template_directory()) . 'admin/ot-loader.php' );

/**
 * Required: OptionTree Additional Options
 */
add_filter('ot_show_pages', '__return_false');
add_filter('ot_show_new_layout', '__return_false');
add_filter('ot_override_forced_textarea_simple', '__return_true');

require get_template_directory() . '/inc/helpers/theme-options.php';

/**
 * Theme option Styles
 */
require get_template_directory() . '/inc/helpers/theme-option-styles.php';

if (!function_exists('dental_care_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function dental_care_setup() {

        // Add WooCommerce support
        add_theme_support('woocommerce');
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Dental Care, use a find and replace
         * to change 'dental-care' to the name of your theme in all the template files.
         */
        load_theme_textdomain('dental-care', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        add_image_size('dental-care-team-single-thumb', 400, 520, true);
        add_image_size('dental-care-block-thumb', 370, 260, true);
        add_image_size('dental-care-featured-thumb', 750, 400, true);
        add_image_size('dental-care-carousel-thumb', 450, 400, true);
        add_image_size('dental-care-brand-thumb', 220, 120, true);
        add_image_size('dental-care-gallery-thumb', 500, 450, true);
        add_image_size('dental-care-product-carousel-thumb', 390, 500, true);
        add_image_size('dental-care-related-thumb', 400, 250, true);
        add_image_size('dental-care-blog-grid-widget-thumb', 480, 420, true);
        add_image_size('dental-care-gallery-std-thumb', 1024, 768, true);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'dental-care'),
            'footer-menu' => esc_html__('Footer Menu', 'dental-care'),
            'mobile-menu' => esc_html__('Mobile Menu', 'dental-care'),
            'top-header-menu' => esc_html__('Top Header Menu', 'dental-care'),
            'one-page-menu' => esc_html__('One Page Menu', 'dental-care')
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support('post-formats', array(
            'video',
            'gallery',
        ));
    }

endif; // dental_care_setup
add_action('after_setup_theme', 'dental_care_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dental_care_content_width() {
    $GLOBALS['content_width'] = apply_filters('dental_care_content_width', 1170);
}

add_action('after_setup_theme', 'dental_care_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dental_care_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Main Sidebar', 'dental-care'),
        'id' => 'dental-care-sidebar-main',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Shop Sidebar', 'dental-care'),
        'id' => 'dental-care-shop-sidebar',
        'description' => esc_html__('Appears on Shop page.', 'dental-care'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Above Shop Sidebar', 'dental-care'),
        'id' => 'dental-care-above-shop-sidebar',
        'description' => esc_html__('Appears above Shop page.', 'dental-care'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="footer-widget-title">',
        'after_title' => '</h5><span class="widget-title-underline"></span>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer Sidebar 1', 'dental-care'),
        'id' => 'dental-care-footer-sidebar-1',
        'description' => esc_html__('Appears in the footer area', 'dental-care'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="footer-widget-title">',
        'after_title' => '</h5><span class="widget-title-underline-footer"></span>',
    ));

    $footer_count = ot_get_option('footer_col_layout');

    if (($footer_count) == ('two-col')) {

        register_sidebar(array(
            'name' => esc_html__('Footer Sidebar 2', 'dental-care'),
            'id' => 'dental-care-footer-sidebar-2',
            'description' => esc_html__('Appears in the footer area', 'dental-care'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h5 class="footer-widget-title">',
            'after_title' => '</h5><span class="widget-title-underline-footer"></span>',
        ));
    }
    if (($footer_count) == ('three-col')) {

        register_sidebar(array(
            'name' => esc_html__('Footer Sidebar 2', 'dental-care'),
            'id' => 'dental-care-footer-sidebar-2',
            'description' => esc_html__('Appears in the footer area', 'dental-care'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h5 class="footer-widget-title">',
            'after_title' => '</h5><span class="widget-title-underline-footer"></span>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Sidebar 3', 'dental-care'),
            'id' => 'dental-care-footer-sidebar-3', 
            'description' => esc_html__('Appears in the footer area', 'dental-care'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h5 class="footer-widget-title">',
            'after_title' => '</h5><span class="widget-title-underline-footer"></span>',
        ));
    }

    if (($footer_count) == ('four-col')) {

        register_sidebar(array(
            'name' => esc_html__('Footer Sidebar 2', 'dental-care'),
            'id' => 'dental-care-footer-sidebar-2',
            'description' => esc_html__('Appears in the footer area', 'dental-care'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h5 class="footer-widget-title">',
            'after_title' => '</h5><span class="widget-title-underline-footer"></span>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Sidebar 3', 'dental-care'),
            'id' => 'dental-care-footer-sidebar-3', 
            'description' => esc_html__('Appears in the footer area', 'dental-care'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h5 class="footer-widget-title">',
            'after_title' => '</h5><span class="widget-title-underline-footer"></span>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer Sidebar 4', 'dental-care'),
            'id' => 'dental-care-footer-sidebar-4', 
            'description' => esc_html__('Appears in the footer area', 'dental-care'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h5 class="footer-widget-title">',
            'after_title' => '</h5><span class="widget-title-underline-footer"></span>',
        ));
    }

    if (!ot_get_option('sidebar-list') == '') {
        $sidebars = ot_get_option('sidebar-list', array());
        if (!empty($sidebars)) {
            foreach ($sidebars as $sidebaritem) {
                if (isset($sidebaritem['title']) && !empty($sidebaritem['title'])) {
                    $title = $sidebaritem['title'];
                } else
                    $title = '';
                if (isset($sidebaritem['sidebar-desc']) && !empty($sidebaritem['sidebar-desc'])) {
                    $desc = $sidebaritem['sidebar-desc'];
                } else
                    $desc = '';
                if (isset($sidebaritem['sidebar-id']) && !empty($sidebaritem['sidebar-id'])) {
                    $id = $sidebaritem['sidebar-id'];
                } else
                    $desc = '';
                if (isset($sidebaritem['title']) && !empty($sidebaritem['title']) && isset($sidebaritem['sidebar-desc']) && !empty($sidebaritem['sidebar-desc'])) {

                    register_sidebar(array(
                        'name' => $title,
                        'id' => $id,
                        'description' => $desc,
                        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                        'after_widget' => '</aside>',
                        'before_title' => '<h5 class="widget-title">',
                        'after_title' => '</h5><span class="widget-title-underline"></span>',
                    ));
                }
            }
        }
    }
}

add_action('widgets_init', 'dental_care_widgets_init');

/**
 * Register Google fonts for Dental Care.
 *
 */
function dental_care_google_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'dental-care' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	if ( 'off' !== _x( 'on', 'Hind font: on or off', 'dental-care' ) ) {
		$fonts[] = 'Hind:400,300,500,600,700';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}


/**
 * Enqueue scripts and styles.
 */
function dental_care_scripts() {
    /**
     * Styles
     */
    
    wp_enqueue_style( 'dental-care-google-fonts', dental_care_google_fonts_url(), array(), null );   
    wp_enqueue_style('dental-care-stylescombinecss', get_template_directory_uri() . '/css/styles-combined.css');
    wp_enqueue_style('dental-care-style', get_stylesheet_uri());
	
	if ( is_rtl() ) {
        wp_enqueue_style('dental-care-rtl', get_template_directory_uri() . '/rtl.css');
    }

    /**
     * Scripts
     */

    wp_enqueue_script('dental-care-scriptsjs', get_template_directory_uri() . '/js/scripts-combined.js', array('jquery'), false, true);
    wp_enqueue_script('dental-care-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), false, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
  
}

add_action('wp_enqueue_scripts', 'dental_care_scripts');

function dental_care_admin_styles() {
    if ( is_admin() ) {				
		if (class_exists('WPBakeryVisualComposerAbstract')) {                   
			wp_enqueue_style('dental-care-admin-style', get_template_directory_uri() .'/css/admin-style.css', false, "1.0", 'all');
		}
    }
}
add_action( 'admin_enqueue_scripts', 'dental_care_admin_styles' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/helpers/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load additional required files
 */
require get_template_directory() . '/inc/helpers/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/helpers/register-plugins.php';
require get_template_directory() . '/inc/helpers/breadcrumbs.php';
require get_template_directory() . '/inc/helpers/meta-boxes.php';
require get_template_directory() . '/inc/helpers/stronghold-mega-menu.php';
require get_template_directory() . '/inc/helpers/demo-import-config.php';
require get_template_directory() . '/inc/widgets/widget_opening_hours.php';
require get_template_directory() . '/inc/widgets/widget_recent_posts.php';
require get_template_directory() . '/inc/widgets/widget_social.php';
require get_template_directory() . '/inc/widgets/widget_company_info.php';
require get_template_directory() . '/inc/widgets/widget_testimonials.php';

/**
 * Breadcrumb
 */
function dental_care_add_breadcumb() {

    breadcrumb_trail(array(
        "container" => "div",
        "separator" => "<i class='fa fa-chevron-right'></i>",
        "show_browse" => false
            )
    )
    ?>
    <?php
}

/**
 * Woocommerce Options
 */
// Remove Woocommerce Breadcrumb
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

// Change number of products per row to 3
add_filter('loop_shop_columns', 'dental_care_loop_columns');
if (!function_exists('loop_columns')) {

    function dental_care_loop_columns() {
        return 3; // 3 products per row
    }
}

//Displays number of products per shop page
function dental_care_products_per_page() {
    if (ot_get_option('num_products')) {
        $num_products = ot_get_option('num_products');
    } else {
        $num_products = 12;
    }
    return $num_products;
}

add_filter('loop_shop_per_page', 'dental_care_products_per_page', 20);

// Sets number of related products
function dental_care_related_products_args($args) {
    $args['posts_per_page'] = 3; // 3 related products
    $args['columns'] = 3; // arranged in 3 columns
    return $args;
}

add_filter('woocommerce_output_related_products_args', 'dental_care_related_products_args');

//Shop title
add_filter('woocommerce_page_title', 'dental_care_shop_page_title');

function dental_care_shop_page_title() {
    return esc_html__('Shop', 'dental-care');
}

/**
 * Add Author Links for author box
 */
function dental_care_social_author_profile($contactmethods) {
    $contactmethods['facebook_profile'] = esc_html__('Facebook Profile URL', 'dental-care');
    $contactmethods['twitter_profile'] = esc_html__('Twitter Profile URL', 'dental-care');
    $contactmethods['google_profile'] = esc_html__('Google Plus Profile URL', 'dental-care');
    $contactmethods['linkedin_profile'] = esc_html__('Linkedin Profile URL', 'dental-care');
    $contactmethods['instagram_profile'] = esc_html__('Instagram Profile URL', 'dental-care');
    $contactmethods['dribbble_profile'] = esc_html__('Dribbble URL', 'dental-care');
    $contactmethods['github_profile'] = esc_html__('Github URL', 'dental-care');
    $contactmethods['youtube_profile'] = esc_html__('Youtube URL', 'dental-care');
    $contactmethods['tumblr_profile'] = esc_html__('Tumblr URL', 'dental-care');
    $contactmethods['pinterest_profile'] = esc_html__('Pinterest URL', 'dental-care');
    $contactmethods['foursquare_profile'] = esc_html__('Foursquare URL', 'dental-care');
    $contactmethods['skype_profile'] = esc_html__('Skype URL', 'dental-care');
    $contactmethods['soundcloud_profile'] = esc_html__('Soundcloud URL', 'dental-care');
    $contactmethods['flickr_profile'] = esc_html__('Flickr URL', 'dental-care');
    $contactmethods['vimeo_profile'] = esc_html__('Vimeo URL', 'dental-care');
    return $contactmethods;
}

add_filter('user_contactmethods', 'dental_care_social_author_profile', 10, 1);

/**
 * Social Menu
 */
function dental_care_add_social_menu() {
    if (!ot_get_option('social-menu') == '') {
        $social_links = ot_get_option('social-menu', array());
        if (!empty($social_links)) {
            echo '<div class="social-menu-wrapper">';
            echo '<ul class="social-menu social-icons-list">';
            foreach ($social_links as $socialnetwork) {
                if (isset($socialnetwork['title']) && !empty($socialnetwork['title'])) {
                    $title = $socialnetwork['title'];
                } else {
                    $title = '';
                }
                if (isset($socialnetwork['social-link']) && !empty($socialnetwork['social-link'])) {
                    $link = $socialnetwork['social-link'];
                } else {
                    $link = '';
                }
                if (isset($socialnetwork['title']) && !empty($socialnetwork['title']) && isset($socialnetwork['social-link']) && !empty($socialnetwork['social-link'])) {
                    echo '<li class="">'
                    . '<a class="" href="' . esc_url($link) . '" target="_blank" title="' . esc_attr($title) . '"></a>'
                    . '</li>';
                }
            }
            echo '</ul></div>';
        }
    }
}

/**
 * Search Form
 */
function dental_care_search_form($form) {
$form = '<form method="get" class="searchform" action="' . esc_url(home_url('/')) . '" >
    <div><label class="screen-reader-text">' . esc_html__('Search for:', 'dental-care') . '</label>
    <input type="text"  placeholder="' . esc_attr__("Search …", "dental-care") . '" value="' . get_search_query() . '" name="s" />
    <button type="submit"><i class="fa fa-search"></i></button>
    </div>
    </form>';

return $form;
}

add_filter('get_search_form', 'dental_care_search_form');


/**
 * Return an ID of an attachment by searching the database with the file URL.
 */
function dental_care_get_attachment_id_by_url($url) {
global $wpdb;
// Get the upload directory paths
$upload_dir_paths = wp_upload_dir();

// Split the $url into two parts with the wp-content directory as the separator
$parsed_url = explode(parse_url($upload_dir_paths['baseurl'], PHP_URL_PATH), $url);
// Get the host of the current site and the host of the $url, ignoring www
$this_host = str_ireplace('www.', '', parse_url(home_url(), PHP_URL_HOST));
$file_host = str_ireplace('www.', '', parse_url($url, PHP_URL_HOST));
// Return nothing if there aren't any $url parts or if the current host and $url host do not match
if (!isset($parsed_url[1]) || empty($parsed_url[1]) || ( $this_host != $file_host )) {
    return;
}
// Now we're going to quickly search the DB for any attachment GUID with a partial path match
// Example: /uploads/2013/05/test-image.jpg
$parsed_url[1] = preg_replace('/-[0-9]{1,4}x[0-9]{1,4}.(jpg|jpeg|png|gif|bmp)$/i', '.$1', $parsed_url[1]);
$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM {$wpdb->prefix}posts WHERE guid RLIKE %s;", $parsed_url[1]));
// Returns null if no attachment is found
return $attachment[0];
}

/**
 * Theme Options Additional Settings
 */
/**
 * Top header list title
 */
function dental_care_filter_list_item_title_label($label, $id) {
    if ($id == 'top_header_info') {
        $label = esc_html__('Top Header Left Column 1 Detail', 'dental-care');
    }
    return $label;
}
add_filter('ot_list_item_title_label', 'dental_care_filter_list_item_title_label', 10, 2);

/**
 * Top header list description
 */
function dental_care_filter_list_item_title_desc($label, $id) {
    if ($id == 'top_header_info') {
        $label = esc_html__('Enter contact detail', 'dental-care');
    }
    return $label;
}
add_filter('ot_list_item_title_desc', 'dental_care_filter_list_item_title_desc', 10, 2);

/**
 * Video gallery url
*/
function dental_care_filter_list_item_title_video($label, $id) {
    if ($id == 'video_gallery_list') {
        $label = esc_html__('Video Link', 'dental-care');
    }
    return $label;
}
add_filter('ot_list_item_title_label', 'dental_care_filter_list_item_title_video', 10, 2);

function dental_care_filter_list_item_title_video_url($label, $id) {
    if ($id == 'video_gallery_list') {
        $label = esc_html__('Enter YouTube/Vimeo Link', 'dental-care');
    }
    return $label;
}
add_filter('ot_list_item_title_desc', 'dental_care_filter_list_item_title_video_url', 10, 2);

add_action('init', 'register_options_pages');

function register_options_pages() {
if (is_admin() && function_exists('ot_register_settings')) {
    ot_register_settings(
        array(
            array(
                'id' => 'import_export',
                'pages' => array(
                    array(
                        'id' => 'import_export',
                        'parent_slug' => 'themes.php',
                        'page_title' => 'Theme Options Backup/Restore',
                        'menu_title' => 'Options Backup',
                        'capability' => 'edit_theme_options',
                        'menu_slug' => 'tmq-theme-backup',
                        'icon_url' => null,
                        'position' => null,
                        'updated_message' => 'Options updated.',
                        'reset_message' => 'Options reset.',
                        'button_text' => 'Save Changes',
                        'show_buttons' => false,
                        'screen_icon' => 'themes',
                        'contextual_help' => null,
                        'sections' => array(
                            array(
                                'id' => 'tmq_import_export',
                                'title' => esc_html__('Import/Export Options', 'dental-care')
                            )
                        ),
                        'settings' => array(
                            array(
                                'id' => 'import_data_text',
                                'label' => 'Import Theme Options',
                                'desc' => esc_html__('Theme Options', 'dental-care'),
                                'std' => '',
                                'type' => 'import-data',
                                'section' => 'tmq_import_export',
                                'rows' => '',
                                'post_type' => '',
                                'taxonomy' => '',
                                'class' => ''
                            ),
                            array(
                                'id' => 'export_data_text',
                                'label' => 'Export Theme Options',
                                'desc' => esc_html__('Theme Options', 'dental-care'),
                                'std' => '',
                                'type' => 'export-data',
                                'section' => 'tmq_import_export',
                                'rows' => '',
                                'post_type' => '',
                                'taxonomy' => '',
                                'class' => ''
                            )
                        )
                    )
                )
            )
        )
    );
}
}

if (!function_exists('ot_type_import_data')) {

function ot_type_import_data() {
    echo '<form method="post" id="import-data-form">';
    wp_nonce_field('import_data_form', 'import_data_nonce');
    echo '<div class="format-setting type-textarea has-desc">';
    echo '<div class="description">';

    if (OT_SHOW_SETTINGS_IMPORT)
        echo '<p>' . esc_html__('Only after you\'ve imported the Settings should you try and update your Theme Options.', 'option-tree') . '</p>';
    echo '<p>' . esc_html__('To import your Theme Options copy and paste what appears to be a random string of alpha numeric characters into this textarea and press the "Import Theme Options" button.', 'option-tree') . '</p>';
    echo '<button class="option-tree-ui-button blue right hug-right">' . esc_html__('Import Theme Options', 'option-tree') . '</button>';
    echo '</div>';
    echo '<div class="format-setting-inner">';
    echo '<textarea rows="10" cols="40" name="import_data" id="import_data" class="textarea"></textarea>';
    echo '</div>';
    echo '</div>';
    echo '</form>';
}

}
if (!function_exists('ot_type_export_data')) {

function ot_type_export_data() {
    echo '<div class="format-setting type-textarea simple has-desc">';
    echo '<div class="description">';
    echo '<p>' . esc_html__('Export your Theme Options data by highlighting this text and doing a copy/paste into a blank .txt file. Then paste the saved text in the Import Theme options field of another site.', 'option-tree') . '</p>';
    echo '</div>';

    $data = get_option('option_tree');
    $data = !empty($data) ? ot_encode(serialize($data)) : '';

    echo '<div class="format-setting-inner">';
    echo '<textarea rows="10" cols="40" name="export_data" id="export_data" class="textarea">' . $data . '</textarea>';
    echo '</div>';
    echo '</div>';
}
}

function ot_type_revslider_select($args = array()) {
extract($args);
$desc = $field_desc ? true : false;
echo '<div class="format-setting type-revslider-select ' . ( $desc ? 'has-desc' : 'no-desc' ) . '">';
echo $desc ? '<div class="description">' . htmlspecialchars_decode($field_desc) . '</div>' : '';
echo '<div class="format-setting-inner">';

if (class_exists('RevSliderAdmin')) {
    echo '<select name="' . esc_attr($field_name) . '" id="' . esc_attr($field_id) . '" class="option-tree-ui-select ' . $field_class . '">';

    $rev_sliders = new RevSlider();
    $all_sliders = $rev_sliders->getArrSlidersShort();

    if (!empty($all_sliders)) {
        echo '<option value="">-- ' . esc_html__('Choose One', 'option-tree') . ' --</option>';
        foreach ($all_sliders as $revslider_id => $rev_slider) {
            echo '<option value="' . esc_attr($revslider_id) . '"' . selected($field_value, $revslider_id, false) . '>' . esc_attr($rev_slider) . '</option>';
        }
    } else {
        echo '<option value="">' . esc_html__('No Sliders Found. Try creating one in the Revolution Slider admin area.', 'option-tree') . '</option>';
    }
    echo '</select>';
} else {
    echo '<span style="color: red;">' . esc_html__('Revolution Slider is not Activated or Installed', 'dental-care') . '</span>';
}
echo '</div>';
echo '</div>';
}

function ot_type_gallery_categories_select($args = array()) {
 
    /* turns arguments array into variables */
    extract( $args );
    
    /* verify a description */
    $has_desc = $field_desc ? true : false;
    
    /* format setting outer wrapper */
    echo '<div class="format-setting type-category-checkbox type-checkbox ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';
      
      /* description */
      echo $has_desc ? '<div class="description">' . htmlspecialchars_decode( $field_desc ) . '</div>' : '';
      
      /* format setting inner wrapper */
      echo '<div class="format-setting-inner">';
        
        /* get category array */
        $categories = get_categories( 
                apply_filters( 'ot_type_category_checkbox_query', 
                        array( 
                            'hide_empty' => false ,
                            'child_of' => 0,
        'parent' => '',
        'orderby' => 'name',
        'order' => 'ASC',       
        'hierarchical' => 1,
        'number' => '9999',
        'taxonomy' => 'gallery-categories',
                            ), $field_id ) );
        
        /* build categories */
        if ( ! empty( $categories ) ) {
          foreach ( $categories as $category ) {
            echo '<p>';
              echo '<input type="checkbox" name="' . esc_attr( $field_name ) . '[' . esc_attr( $category->term_id ) . ']" id="' . esc_attr( $field_id ) . '-' . esc_attr( $category->term_id ) . '" value="' . esc_attr( $category->term_id ) . '" ' . ( isset( $field_value[$category->term_id] ) ? checked( $field_value[$category->term_id], $category->term_id, false ) : '' ) . ' class="option-tree-ui-checkbox ' . esc_attr( $field_class ) . '" />';
              echo '<label for="' . esc_attr( $field_id ) . '-' . esc_attr( $category->term_id ) . '">' . esc_attr( $category->name ) . '</label>';
            echo '</p>';
          } 
        } else {
          echo '<p>' . esc_html__( 'No Categories Found', 'option-tree' ) . '</p>';
        }
      
      echo '</div>';
    
    echo '</div>';
}

/**
 * Set Visual Composer to Theme Mode
 */
add_action('vc_before_init', 'dental_care_vcSetAsTheme');
function dental_care_vcSetAsTheme() {
 vc_set_as_theme();
}

/**
 * Set Revolution Slider to Theme Mode
 */
if (function_exists('set_revslider_as_theme')) {
add_action('init', 'dental_care_set_revslider_as_theme');

function dental_care_set_revslider_as_theme() {
    set_revslider_as_theme(true);
}

}

/**
 * Set Ultimate Addons to Theme Mode
 */
define('BSF_PRODUCTS_NOTICES', false);

/**
 * Misc
 */
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

/**
 * Template for comments and pingbacks.
 */
if (!function_exists('dental_care_comment')) {

function dental_care_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment;
switch ($comment->comment_type) :
    case 'pingback' :
    case 'trackback' :
        // Display trackbacks differently than normal comments.
        ?>
        <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
            <p><?php esc_html_e('Pingback:', 'dental-care'); ?> <?php comment_author_link(); ?> <?php edit_comment_link(esc_html__('(Edit)', 'dental-care'), '<span class="edit-link">', '</span>'); ?></p>
        <?php
        break;
    default :
        // Proceed with normal comments.
        global $post;
        ?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
            <div id="comment-<?php comment_ID(); ?>" class="comment comment-answer">
                <div class="col-md-2 comment-author-img">
        <?php echo get_avatar(get_comment_author_email() ? get_comment_author_email() : $comment, 91); ?>
                </div>
                <!-- .comment-meta -->

        <?php if ('0' == $comment->comment_approved) : ?>
                    <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'dental-care'); ?></p>
                <?php endif; ?>

                    <div class="col-md-10">
                        <div class="comment-body">
                            <span class="comment-name"><?php echo get_comment_author_link() ?></span>
                            <span class="comment-date"><?php echo get_comment_date() ?></span>
                            <span>/<?php comment_reply_link(array_merge($args, array('reply_text' => esc_html__(' Reply', 'dental-care'), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?></span>
                            <div class="comment-reply">
            <?php comment_text(); ?>
                            </div>
                        </div>

        <?php edit_comment_link(esc_html__('Edit', 'dental-care'), '<p class="edit-link">', '</p>'); ?>
                </div>
                <!-- .comment-content -->

            </div>
            <!-- #comment-## -->
        <?php
        break;
endswitch; // end comment_type check
}

}



