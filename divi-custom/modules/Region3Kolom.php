<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Region3Kolom extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Region', 'axamandiri' );
        $this->whitelisted_fields = array(
            'title_section',
        );
        $this->fields_defaults = array(
            'title_section' => array( 'Region', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
        $this->slug            = 'et_pb_region';
        $this->child_slug      = 'et_pb_region_item';
        $this->child_item_text = esc_html__( 'Region Item', 'axamandiri' );
    }

    function get_fields () {
        $fields = array(
            'title_section' => array(
                'label' => __( 'Judul', 'axamandiri' ),
                'type' => 'text',
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start();
        ?>
        <div id="region-1">
            <div class="row">
                <?php echo $this->shortcode_content; ?>
            </div>
        </div>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Region3Kolom;