<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class TahukahAnda extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Tahukah Anda', 'axamandiri' );
        $this->slug = 'et_pb_tahukah_anda';
        $this->whitelisted_fields = array(
            'title',
            'image',
            'desc',
            'desc_right',
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
                'type' => 'tiny_mce',
                'option_category' => 'basic_option',
            ),
            'desc_right' => array(
                'label' => __( 'Desciption Right', 'axamandiri' ),
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
        <section aria-label="Content Details" id="content-details" class="clearfix">
            <div class="large-9 columns f-16"> <?php echo $this->shortcode_content; ?></div>
            <div class="large-3 columns slides">
                <h3 class="c-blue"><?php echo $this->shortcode_atts['title']; ?></h3>
                <div id="tahukah-anda">
                    <div class="elements">
                        <img src="<?php echo $this->shortcode_atts['image']; ?>" class="block" alt="tahukah-anda"><br>
                        <p><?php echo $this->shortcode_atts['desc_right']; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new TahukahAnda;