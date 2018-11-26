<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Region3KolomItem extends ET_Builder_Module {

    function init () {
        $this->name                        = esc_html__( 'Region Item', 'axamandiri' );
        $this->slug                        = 'et_pb_region_item';
        $this->fb_support                  = true;
        $this->type                        = 'child';
        $this->child_title_var             = 'title';

        $this->whitelisted_fields = array(
            'title',
            'widget',
        );

        $this->advanced_setting_title_text = esc_html__( 'New Tab', 'axamandiri' );
        $this->settings_text               = esc_html__( 'Tab Settings', 'axamandiri' );
        $this->main_css_element = '%%order_class%%';
    }

    function get_fields () {
        $fields = array(
            'title' => array(
                'label' => __( 'Judul', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'widget' => array(
                'label'           => esc_html__( 'Widget', 'axamandiri' ),
                'type'            => 'select',
                'option_category' => 'basic_option',
                'options'         => array(
                    'widget/berita-terbaru'     => esc_html__( 'Berita Terbaru', 'axamandiri' ),
                    'widget/footer-direktori'   => esc_html__( 'Footer Directori', 'axamandiri' ),
                    'widget/karir'              => esc_html__( 'Widget Karir', 'axamandiri' ),
                    'widget/bandingkan'              => esc_html__( 'Widget Bandingkan', 'axamandiri' ),
                ),
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start();
        ?>
            <div class="large-4 columns">
                <?php get_template_part($this->shortcode_atts['widget']);?>
            </div>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Region3KolomItem;