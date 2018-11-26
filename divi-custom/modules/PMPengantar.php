<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class PMPengantar extends ET_Builder_Module {

    function init () {
        $this->name = __( 'PM Pengantar', 'axamandiri' );
        $this->slug = 'et_pb_pm_pengantar';
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
            'sub_title' => array(
                'label' => __( 'Sub Title', 'axamandiri' ),
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
        <div id="page-box" class="sections white clearfix">
			<section aria-label="Body 1" id="body-1">
				<div class="uppercase fw-normal f-17 header3_pengantar"><?php echo $this->shortcode_atts['title']; ?></div>
				<h1 class="cp-display--none"><?php echo $this->shortcode_atts['sub_title']; ?></h1>
				<div class="c-blue f-24 header1_pengantar"><?php echo $this->shortcode_atts['sub_title']; ?></div>
				<?php if($this->shortcode_atts['title']=="Erection All Risks"): ?>
					<div class="column-1 f-16 c-greylight">
						<?php if( have_posts() ) : the_post(); ?>
							 <?php echo $this->shortcode_content; ?>
						<?php endif;?>
					</div>
				<?else:?>
				<div class="column-2 f-16 c-greylight">
						<?php if( have_posts() ) : the_post(); ?>
							 <?php echo $this->shortcode_content; ?>
						<?php endif;?>
				</div>
				<?php endif;?>
			</section>
		</div>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new PMPengantar;