<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Karir extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Karir', 'axamandiri' );
        $this->slug = 'et_pb_karir';
        $this->whitelisted_fields = array(
            'small_title',
            'title',
            'desc',
            'btn_link',
            'btn_text',
            'wold_text',
            'innovation_text',
            'environments_text',
            'ladder_text',
        );
        $this->fields_defaults = array(
            'small_title' => array( 'Karir', 'add_default_setting' ),
            'title' => array( 'Jadi Bagian dari AXA Mandiri', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
    }

    function get_fields () {
        $fields = array(
            'small_title' => array(
                'label' => __( 'Small Title', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'title' => array(
                'label' => __( 'Title', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'desc' => array(
                'label' => __( 'Desciption', 'axamandiri' ),
                'type' => 'textarea',
                'option_category' => 'basic_option',
            ),
            'btn_link' => array(
                'label' => __( 'Button Link', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'btn_text' => array(
                'label' => __( 'Button Text', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'wold_text' => array(
                'label' => __( 'Wold Text', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'innovation_text' => array(
                'label' => __( 'Innovation Text', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'environments_text' => array(
                'label' => __( 'Environments Text', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'ladder_text' => array(
                'label' => __( 'Ladder Text', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start(); 
        ?>
        <section aria-label="Karir Section" id="karir-section" class="clearfix">
            <h3 class="small-title"><?php echo $this->shortcode_atts['small_title']; ?></h3>
            <div class="large-6 column first-child">
            <h4><?php echo $this->shortcode_atts['title']; ?></h4>
                <p><?php echo $this->shortcode_atts['desc']; ?></p>
                <a href="<?php echo $this->shortcode_atts['btn_link']; ?>" class="button">
                    <?php echo $this->shortcode_atts['btn_text']; ?></a>
            </div>
            <div class="large-5 column">
                <ul class="career-list">
                    <li class="world"><span><h6><?php echo $this->shortcode_atts['wold_text']; ?></h6></span></li>
                    <li class="innovation"><span><h6><?php echo $this->shortcode_atts['innovation_text']; ?></h6></span></li>
                    <li class="environments"><span><h6><?php echo $this->shortcode_atts['environments_text']; ?></h6></span></li>
                    <li class="ladder"><span><h6><?php echo $this->shortcode_atts['ladder_text']; ?></h6></span></li>
                </ul>
            </div>
        </section><!--end karir-->
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Karir;