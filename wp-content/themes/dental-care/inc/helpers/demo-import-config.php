<?php


/**
 * Demo
 */
function dental_care_ocdi_import_files() {
    return array(
        array(
            'import_file_name'             => 'Demo 1',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/demo1/dental-care-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo/demo1/widgets.json',
            'import_preview_image_url'   => 'http://strongholdthemes.com/demos/dentalcare/images/demo1.jpg',
            'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'dental-care' ),
        ),
        array(
            'import_file_name'             => 'Demo 2',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/demo2/dental-care-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo/demo2/widgets.json',
            'import_preview_image_url'   => 'http://strongholdthemes.com/demos/dentalcare/images/demo2.jpg',
            'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'dental-care' ),
        ),
        array(
            'import_file_name'             => 'Demo 3',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/demo3/dental-care-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo/demo3/widgets.json',
            'import_preview_image_url'   => 'http://strongholdthemes.com/demos/dentalcare/images/demo3.jpg',
            'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'dental-care' ),
        ),
        array(
            'import_file_name'             => 'Demo 4',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/demo4/dental-care-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo/demo4/widgets.json',
            'import_preview_image_url'   => 'http://strongholdthemes.com/demos/dentalcare/images/demo4.jpg',
            'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'dental-care' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'dental_care_ocdi_import_files' );

function dental_care_ocdi_after_import( $selected_import ) {
    
    if ( 'Demo 1' === $selected_import['import_file_name'] ) {
        $file = trailingslashit( get_template_directory() ) . 'demo/demo1/themeoptions.txt';
        
                // Get file contents and decode
                $data = file_get_contents($file);
                
                $func = 'base64' . '_decode';
                $prepared_data = maybe_unserialize($func($data));

                update_option(ot_options_id(), $prepared_data);
              
    }
    elseif ( 'Demo 2' === $selected_import['import_file_name'] ) {
         $file = trailingslashit( get_template_directory() ) . 'demo/demo2/themeoptions.txt';
        
                // Get file contents and decode
                $data = file_get_contents($file);
                
                $func = 'base64' . '_decode';
                $prepared_data = maybe_unserialize($func($data));

                update_option(ot_options_id(), $prepared_data);
        
    }
    elseif ( 'Demo 3' === $selected_import['import_file_name'] ) {
         $file = trailingslashit( get_template_directory() ) . 'demo/demo3/themeoptions.txt';
        
                // Get file contents and decode
                $data = file_get_contents($file);
                
                $func = 'base64' . '_decode';
                $prepared_data = maybe_unserialize($func($data));

                update_option(ot_options_id(), $prepared_data);
        
    }elseif ( 'Demo 4' === $selected_import['import_file_name'] ) {
         $file = trailingslashit( get_template_directory() ) . 'demo/demo4/themeoptions.txt';
        
                // Get file contents and decode
                $data = file_get_contents($file);
                
                $func = 'base64' . '_decode';
                $prepared_data = maybe_unserialize($func($data));

                update_option(ot_options_id(), $prepared_data);
        
    }
}
add_action( 'pt-ocdi/after_import', 'dental_care_ocdi_after_import' );

function dental_care_ocdi_plugin_page_setup( $default_settings ) {
    $default_settings['parent_slug'] = 'themes.php';
    $default_settings['page_title']  = esc_html__( 'One Click Demo Import' , 'pt-ocdi' );
    $default_settings['menu_title']  = esc_html__( 'Dental Care Demo Data Import' , 'pt-ocdi' );
    $default_settings['capability']  = 'import';
    $default_settings['menu_slug']   = 'pt-one-click-demo-import';

    return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'dental_care_ocdi_plugin_page_setup' );