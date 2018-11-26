<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Revamp_PM_Pengantar extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Revamp PM Pengantar', 'axamandiri' );
        $this->slug = 'et_pb_revamp_pm_pengantar';
        $this->whitelisted_fields = array(
            'title',
            'sub_title',
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
        <div class="sections white clearfix">
			<section class="revamp-pm-pengantar">
				<div class="fw-normal header3_pengantar" style="font-size: 22px;">
                    <?php 
                    // echo $this->shortcode_atts['title']; 
                    echo get_the_title();
                    ?>
                </div>
                <div class="f-16">
				    <?php echo $this->shortcode_content; ?>
                </div>
			</section>
		</div>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Revamp_PM_Pengantar;