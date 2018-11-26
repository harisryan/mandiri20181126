<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Revamp_Layanan_Item extends ET_Builder_Module {

    function init () {
        $this->name                        = esc_html__( 'Layanan', 'axamandiri' );
        $this->slug                        = 'et_pb_revamp_layanan_item';
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
            <div class="columns revamp-layanan-item">
                <div class="icon">
                    <img src="<?php echo $this->shortcode_atts['image']; ?>" alt="<?php echo $this->shortcode_atts['title']; ?>">
                </div>
                <div class="details">
                    <div class="rl-item-title"><?php echo $this->shortcode_atts['title']; ?></div>
                    <p><?php echo $this->shortcode_atts['desc']; ?></p>
                    <a href="<?php echo $this->shortcode_atts['btn_link']; ?>" class="c-red"><?php echo $this->shortcode_atts['btn_text']; ?> <span class="fa fa-long-arrow-right"></span> </a>
                </div>
            </div>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Revamp_Layanan_Item;