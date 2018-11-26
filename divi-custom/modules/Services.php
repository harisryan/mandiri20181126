<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Services extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Services', 'axamandiri' );
        $this->whitelisted_fields = array(
            'title_section',
        );
        $this->fields_defaults = array(
            'title_section' => array( 'Our Services', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
        $this->slug            = 'et_pb_services';
        $this->child_slug      = 'et_pb_service';
        $this->child_item_text = esc_html__( 'Service', 'axamandiri' );
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
        <div id="layanan" class="background-vector">
            <div class="row">
                <div class="large-11 column centered">
                    <div class="header2_home_layanan"><?php echo $this->shortcode_atts['title_section']; ?></div>
                    <ul class="clearfix">
                        <?php echo $this->shortcode_content; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Services;