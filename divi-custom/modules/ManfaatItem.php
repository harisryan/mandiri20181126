<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class ManfaatItem extends ET_Builder_Module {

    function init () {
        $this->name                        = esc_html__( 'Manfaat Item', 'axamandiri' );
        $this->slug                        = 'et_pb_manfaat_item';
        $this->fb_support                  = true;
        $this->type                        = 'child';
        $this->child_title_var             = 'title';

        $this->whitelisted_fields = array(
            'title',
            'icon',
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
            'icon' => array(
                'label'              => esc_html__( 'Icon Link / Upload', 'axamandiri' ),
                'type'               => 'upload',
                'option_category'    => 'basic_option',
                'upload_button_text' => esc_attr__( 'Upload an image', 'axamandiri' ),
                'choose_text'        => esc_attr__( 'Choose an Image', 'axamandiri' ),
                'update_text'        => esc_attr__( 'Set As Image', 'axamandiri' ),
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start();
        ?>
            <li>
                <div class="clearfix h-85 o-hidden">
                    <div class="bg-manfaat-right icon-95x86">
                        <span class="" style="background: url(<?php echo $this->shortcode_atts['icon']; ?>) right no-repeat;"></span>
                    </div>
                    <h3 class="m-all-0 p-top-25"><?php echo $this->shortcode_atts['title']; ?></h3>
                </div>
            </li>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new ManfaatItem;