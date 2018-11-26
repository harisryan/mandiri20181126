<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Revamp_PM_Manfaat extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Revamp PM Manfaat', 'axamandiri' );
        $this->slug = 'et_pb_revamp_pm_manfaat';
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
        ?>
        
        <div class="sections white clearfix">
            <section class="revamp-pm-manfaat">
                <div class="fw-normal header3" style="font-size: 22px;">
                    <?php echo $this->shortcode_atts['title']; ?>
                </div>
                <ul class="rpm-cont product-matrix-manfaat owl-carousel">
                    <?php $i = 1; while(has_sub_field('matrix_manfaat')): ?>
                        <li class="rpm-item text-center elements <?php if(($i % 2) == 0) echo 'dark'; ?>">
                            <div class="box p-all-20">
                                <img class="rpm-icon" src="<?php the_sub_field("icon");?>" alt="<?php echo (!empty(get_sub_field('alt')))?get_sub_field('alt') : 'manfaat';?>">
                                <p><strong><?php the_sub_field("title");?></strong></p>
                                <?php // the_sub_field("body"); ?>
                            </div>
                        </li>
                    <?php $i++; endwhile;?>
                </ul>
            </section>
        </div><!--end cover-manfaat-->

        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Revamp_PM_Manfaat;