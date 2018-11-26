<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Manfaat extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Manfaat', 'axamandiri' );
        $this->whitelisted_fields = array(
            'title_section',
        );
        $this->fields_defaults = array(
            'title_section' => array( 'Manfaat', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
        $this->slug            = 'et_pb_manfaat';
        $this->child_slug      = 'et_pb_manfaat_item';
        $this->child_item_text = esc_html__( 'Manfaat Item', 'axamandiri' );
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
        <section aria-label="Manfaat Luas" id="manfaat-luas" class="clearfix sections background-vector">
            <h3 class="m-bottom-45"><?php echo $this->shortcode_atts['title_section']; ?></h3>
            <ul class="list-with-icon small-block-grid-1 medium-block-grid-2 large-block-grid-3 clearfix">
                <?php echo $this->shortcode_content; ?>
            </ul>
        </section><!--end manfaat luas-->
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Manfaat;