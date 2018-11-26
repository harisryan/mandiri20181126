<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class WidgetInspirasi extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Widget Inspirasi', 'axamandiri' );
        $this->slug = 'et_pb_widget_inspirasi';
        $this->whitelisted_fields = array(
            'title',
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
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start(); 
        ?>
        <?php echo do_shortcode('[widget_inspirasi][/widget_inspirasi]'); ?>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new WidgetInspirasi;