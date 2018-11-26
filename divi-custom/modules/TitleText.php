<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class TitleText extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Title Text', 'axamandiri' );
        $this->slug = 'et_pb_title_text';
        $this->whitelisted_fields = array(
            'title',
            'content'
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
            )
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start(); 
        ?>
        <section aria-label="Data Tenaga Pemasaran" id="data-tenaga-pemasar-section" class="bg-white3 sections clearfix relative o-hidden">
            <div class="large-12 column">
                <h4><?php echo $this->shortcode_atts['title']; ?></h4>
                <?php echo $this->shortcode_content; ?>
            </div>          
        </section>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new TitleText;