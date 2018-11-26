<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class BlueBackground extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Blue Background', 'axamandiri' );
        $this->slug = 'et_pb_blue_background';
        $this->whitelisted_fields = array(
            'title',
            'image',
            'desc',
        );
        $this->fields_defaults = array(
            'title' => array( 'Title', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
    }

    function get_fields () {
        $fields = array(
            'title' => array(
                'label' => __( 'Title', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'desc' => array(
                'label' => __( 'Desciption', 'axamandiri' ),
                'type' => 'textarea',
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
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start(); 
        ?>
        <section aria-label="Body 2" id="body-2" class="blue-sections clearfix text-white" style="background-image:url(<?php echo $this->shortcode_atts['image']; ?>);">
            <span class="blue-sections-cover-left"></span>
                <div class="large-6 columns">
                    <h2><?php echo $this->shortcode_atts['title']; ?></h2>
                    <p><?php echo $this->shortcode_atts['desc']; ?></p>
                </div>
                <div class="large-6 columns text-center">
                    
                </div>
            <span class="blue-sections-cover-right"></span>
        </section>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new BlueBackground;