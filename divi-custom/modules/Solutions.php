<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Solutions extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Solutions', 'axamandiri' );
        $this->whitelisted_fields = array(
            'title_section',
            'color',
        );
        $this->fields_defaults = array(
            'title_section' => array( 'Our Solutions', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
        $this->slug            = 'et_pb_solutions';
        $this->child_slug      = 'et_pb_solution';
        $this->child_item_text = esc_html__( 'Solution', 'axamandiri' );
    }

    function get_fields () {
        $fields = array(
            'title_section' => array(
                'label' => __( 'Judul', 'axamandiri' ),
                'type' => 'text',
            ),
            'color' => array(
                'label'              => esc_html__( 'Select Color', 'axamandiri' ),
                'type'               => 'select',
                'option_category'    => 'basic_option',
                'options'            => array("white"=>"White","bg-greylight"=>"Grey"),
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        $color = $this->shortcode_atts['color'];
        ob_start();
        ?>
        <div id="solusi_main" class="<?php echo $color; ?>">
            <div class="row solusiContainer">
                <div id="solusiWidget">
                    <div class="header2judulsolusikami m-bottom-30"><?php echo $this->shortcode_atts['title_section']; ?></div>
                    <ul class="clearfix large-block-grid-4 medium-block-grid-2 small-block-grid-1">
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
new Solutions;