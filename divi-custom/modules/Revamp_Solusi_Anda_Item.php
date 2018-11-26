<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Revamp_Solusi_Anda_Item extends ET_Builder_Module {

    function init () {
        $this->name                        = esc_html__( 'Revamp Solusi Anda Item', 'axamandiri' );
        $this->slug                        = 'et_pb_solusi_anda_item';
        $this->fb_support                  = true;
        $this->type                        = 'child';
        $this->child_title_var             = 'title';

        $this->whitelisted_fields = array(
            'title',
            'strong_label',
        );

        $this->advanced_setting_title_text = esc_html__( 'New Tab', 'axamandiri' );
        $this->settings_text               = esc_html__( 'Tab Settings', 'axamandiri' );
        $this->main_css_element = '%%order_class%%';
    }

    function get_fields () {
        $fields = array(
            'title' => array(
                'label' => __( 'Title', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'strong_label' => array(
                'label' => __( 'Description', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start();
        ?>
            <label><?php echo $this->shortcode_atts['title']; ?> <strong><?php echo $this->shortcode_atts['strong_label']; ?></strong></label>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Revamp_Solusi_Anda_Item;