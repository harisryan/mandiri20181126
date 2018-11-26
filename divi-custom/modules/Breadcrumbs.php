<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Breadcrumbs extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Breadcrumbs', 'axamandiri' );
        $this->slug = 'et_pb_breadcrumbs';
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
        get_template_part("widget/breadcrumbs");
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Breadcrumbs;