<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class TentangKami extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Tentang Kami', 'axamandiri' );
        $this->slug = 'et_pb_tentang_kami';
        $this->whitelisted_fields = array(
            'title',
            'content',
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
            'content' => array(
                'label' => __( 'Content', 'axamandiri' ),
                'type' => 'tiny_mce',
                'option_category' => 'basic_option',
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start(); 
        ?>
        <section aria-label="Content Details" id="content-details" class="clearfix">
            <?php echo $this->shortcode_content; ?>
            <ul id="icons" class="clearfix">
                <li class="karyawan"></li>
                <li class="pemasaran"></li>
                <li class="nasabah"></li>
            </ul>
        </section>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new TentangKami;