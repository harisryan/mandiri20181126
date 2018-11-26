<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Revamp_Layanan extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Revamp Layanan', 'axamandiri' );
        $this->whitelisted_fields = array(
            'title_section',
            'custom_bg_color',
        );
        $this->fields_defaults = array(
            'title_section' => array( 'Revamp Layanan', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
        $this->slug            = 'et_pb_revamp_layanan';
        $this->child_slug      = 'et_pb_revamp_layanan_item';
        $this->child_item_text = esc_html__( 'Layanan Item', 'axamandiri' );
    }

    function get_fields () {
        $fields = array(
            'title_section' => array(
                'label' => __( 'Judul', 'axamandiri' ),
                'type' => 'text',
            ),
            'custom_bg_color' => array(
                'label'              => esc_html__( 'Custom Background Color', 'axamandiri' ),
                'type'               => 'select',
                'option_category'    => 'basic_option',
                'options'            => array(
                                            "bg-greylight"=>'Greylight',
                                            "bg-white"=>'White',
                                            'bg-bluelight'=>'Blue Light'
                                        ),
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        $bgColor = $this->shortcode_atts['custom_bg_color'];
        $title = $this->shortcode_atts['title_section'];
        ob_start();
        ?>
        <div class="revamp-layanan <?php echo $bgColor ?>">
            <div class="row">
                <div class="large-12 column centered">
                    <div class="rl-title"><?php echo $title; ?></div>
                    <div class="revamp-slider owl-carousel">
                        <?php echo $this->shortcode_content; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Revamp_Layanan;