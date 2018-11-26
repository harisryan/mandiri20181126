<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class TopLead extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Top Description', 'axamandiri' );
        $this->slug = 'et_pb_top_lead';
        $this->whitelisted_fields = array(
            'title',
            'button_text',
            'button_link',
            'background_image',
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
            'button_text' => array(
                'label' => __( 'Button Text', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'button_link' => array(
                'label' => __( 'Button Link', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'background_image' => array(
                'label' => __( 'Backgound Image', 'axamandiri' ),
                'type' => 'upload',
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
            <div class="medium-8 large-9 column">
                <?php echo $this->shortcode_content; ?>
            </div>
            <div class="medium-4 large-3 column">
                <a id="btn-top-lead" class="button alert" href="<?php echo $this->shortcode_atts['button_link']; ?>"><?php echo $this->shortcode_atts['button_text']; ?></a>
            </div>          
        </section>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new TopLead;