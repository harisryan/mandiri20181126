<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class PMContactFormTanpaBrosur extends ET_Builder_Module {

    function init () {
        $this->name = __( 'PM Contact Form Tanpa Brosur', 'axamandiri' );
        $this->slug = 'et_pb_pm_contact7_tanpa_brosur';
        $this->whitelisted_fields = array(
            'title',
            'contact7',
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
            'contact7' => array(
                'label'              => esc_html__( 'Select Form', 'axamandiri' ),
                'type'               => 'select',
                'option_category'    => 'basic_option',
                'options'            => getAllCF7(),
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start();
        $id = $this->shortcode_atts['contact7']; 
        $lead = get_field( 'contact_form_send_to' );
        ?>
        <section aria-label="Kontak" id="kontak" class="sections white clearfix">
            <div class="c-blue fw-bold f-20 uppercase m-bottom-45"><?php echo $this->shortcode_atts['title']; ?></div>

            <div class="large-12 columns contact-form">
                <?php 
                if($lead == 'lts') {
                    echo do_shortcode('[contact-form-7 id="'.$id.'" html_id="form"]');
                } else {
                    echo do_shortcode('[contact-form-7 id="'.$id.'" ]');
                }
                ?>
            </div>
        </section>
        
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new PMContactFormTanpaBrosur;