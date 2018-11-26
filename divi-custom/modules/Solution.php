<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Solution extends ET_Builder_Module {

    function init () {
        $this->name                        = esc_html__( 'Solusi Kami Item', 'axamandiri' );
        $this->slug                        = 'et_pb_solution';
        $this->fb_support                  = true;
        $this->type                        = 'child';
        $this->child_title_var             = 'title';

        $this->whitelisted_fields = array(
            'title',
            'image',
            'icon',
            'description',
            'link',
            'btn_text',
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
            'image' => array(
                'label'              => esc_html__( 'Image Link / Upload', 'axamandiri' ),
                'type'               => 'upload',
                'option_category'    => 'basic_option',
                'upload_button_text' => esc_attr__( 'Upload an image', 'axamandiri' ),
                'choose_text'        => esc_attr__( 'Choose an Image', 'axamandiri' ),
                'update_text'        => esc_attr__( 'Set As Image', 'axamandiri' ),
            ),
            'icon' => array(
                'label'              => esc_html__( 'Icon Link / Upload', 'axamandiri' ),
                'type'               => 'upload',
                'option_category'    => 'basic_option',
                'upload_button_text' => esc_attr__( 'Upload an image', 'axamandiri' ),
                'choose_text'        => esc_attr__( 'Choose an Image', 'axamandiri' ),
                'update_text'        => esc_attr__( 'Set As Image', 'axamandiri' ),
            ),
            'description' => array(
                'label' => __( 'Description', 'axamandiri' ),
                'type' => 'textarea',
                'option_category' => 'basic_option',
            ),
            'link' => array(
                'label' => __( 'Link', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'btn_text' => array(
                'label' => __( 'Button', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start();
        ?>
        <li>
            <a href="<?php echo $this->shortcode_atts['link']; ?>">
                <div id="solusi-kesehatan" class="img_background lazy" data-src="<?php echo $this->shortcode_atts['image']; ?>">
                    <div class="title header2home1"><?php echo $this->shortcode_atts['title']; ?></div>
                    <span class="icon-solusi-index" style="background-image:url(<?php echo $this->shortcode_atts['icon']; ?>);background-repeat: no-repeat;"></span>
                    <span class="bg-cover-right-solusiindex"></span>
                </div>
            </a>

            <p class="show-for-large-only"><?php echo $this->shortcode_atts['description']; ?></p>
            <a href="<?php echo $this->shortcode_atts['link']; ?>">
                <div class="solusi_button">
                    <span class="f-14">
                        <i class="fa fa-chevron-circle-right"></i><?php echo $this->shortcode_atts['btn_text']; ?>
                    </span>
                </div>
            </a>
        </li>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Solution;