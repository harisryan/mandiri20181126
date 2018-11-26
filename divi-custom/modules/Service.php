<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Service extends ET_Builder_Module {

    function init () {
        $this->name                        = esc_html__( 'Service', 'axamandiri' );
        $this->slug                        = 'et_pb_service';
        $this->fb_support                  = true;
        $this->type                        = 'child';
        $this->child_title_var             = 'title';

        $this->whitelisted_fields = array(
            'title',
            'image',
            'icon',
            'desc',
            'btn_link',
            'btn_text',
        );

        $this->advanced_setting_title_text = esc_html__( 'New Tab', 'axamandiri' );
        $this->settings_text               = esc_html__( 'Tab Settings', 'axamandiri' );
        $this->main_css_element = '%%order_class%%';
    }

    function get_fields () {
        $fields = array(
            'image' => array(
                'label'              => esc_html__( 'Image Link / Upload', 'axamandiri' ),
                'type'               => 'upload',
                'option_category'    => 'basic_option',
                'upload_button_text' => esc_attr__( 'Upload an image', 'axamandiri' ),
                'choose_text'        => esc_attr__( 'Choose an Image', 'axamandiri' ),
                'update_text'        => esc_attr__( 'Set As Image', 'axamandiri' ),
            ),
            'title' => array(
                'label' => __( 'Title', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'desc' => array(
                'label' => __( 'Description', 'axamandiri' ),
                'type' => 'textarea',
                'option_category' => 'basic_option',
            ),
            'btn_text' => array(
                'label' => __( 'Btn Text', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'btn_link' => array(
                'label' => __( 'Btn Link', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start();
        ?>
            <li class="large-4 columns premi">
                <div class="icon lazy" data-src="<?php echo $this->shortcode_atts['image']; ?>"></div>
                <div class="details">
                    <div class="header2_list_home_layanan"><?php echo $this->shortcode_atts['title']; ?></div>
                    <p class="show-for-large-only"><?php echo $this->shortcode_atts['desc']; ?></p>
                    <a href="<?php echo $this->shortcode_atts['btn_link']; ?>" class="button blue"><?php echo $this->shortcode_atts['btn_text']; ?></a>
                </div>
            </li>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Service;