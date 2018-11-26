<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Revamp_Inspirasi_Widget extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Revamp Inspirasi Widget', 'axamandiri' );
        $this->whitelisted_fields = array(
            'title_section',
        );
        $this->fields_defaults = array(
            'title_section' => array( 'Inspirasi', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
        $this->slug            = 'et_pb_revamp_inspirasi_widget';
    }

    function get_fields () {
        $fields = array(
            'title_section' => array(
                'label' => __( 'Judul', 'axamandiri' ),
                'type' => 'text',
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        $title = $this->shortcode_atts['title_section'];
        global $wpdb;
        $temp = $wpdb->get_results("SELECT * FROM wp_feed  ORDER BY id DESC LIMIT 4");
        ob_start();
        ?>
        <div class="revamp-inspirasi-widget">
            <div class="riw-heading text-center">
                <?php echo $title; ?>
            </div>
            <div class="riw-content">
                <div class="row">
                    <div class="large-4 column">
                        <div class="featured-image">
                            <a href="<?php echo $temp[0]->link; ?>">
                                <img src="<?php echo $temp[0]->image; ?>" alt="<?php echo $temp[0]->title; ?>">
                            </a>
                        </div>
                        <div class="riw-title"><?php echo $temp[0]->title; ?></div>
                        <a class="button-info c-red" href="<?php echo $temp[0]->link; ?>"><?php _e('Info Selengkapnya'); ?> <span class="fa fa-long-arrow-right"></span> </a>
                    </div>
                    <div class="large-4 column">
                        <?php for($i = 1; $i < 4; $i++): ?>
                            <div class="riw-item-loop">
                                <a href="<?php echo $temp[0]->link; ?>">
                                    <div class="riw-title"><?php echo $temp[$i]->title; ?></div>
                                </a>
                                <a class="c-red button-info" href="<?php echo $temp[$i]->link; ?>"><?php _e('Info Selengkapnya'); ?> <span class="fa fa-long-arrow-right"></span> </a>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="large-4 column">
                        <!-- <div class="widget-profile-user">
                            <div class="wpu-image">
                                <img src="http://axamandiri.sudahdistaging.com/wp-content/uploads/2016/09/menjaga-kesehatan-kulit-anda.jpg" alt="sample">
                            </div>
                            <div class="wpu-content">
                                <div class="wpu-name">NANCY PRAWIRNA</div>
                                <div class="wpu-title">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit tincidunt ut laoreet
                                </div>
                                <a class="c-red button-info" href="<?php echo $temp[$i]->link; ?>"><?php _e('Info Selengkapnya'); ?> <span class="fa fa-long-arrow-right"></span> </a>
                            </div>
                        </div> -->
                        <div class="widget-karir-bottom">
                            <div class="wkb-image">
                               
                            </div>
                            <div class="wkb-content">
                                <div class="wpu-title">
                                    Jadi Bagian dari AXA Mandiri.
                                </div>
                                <a class="c-red button-info" href="<?php echo $temp[$i]->link; ?>"><?php _e('Info Selengkapnya'); ?> <span class="fa fa-long-arrow-right"></span> </a>
                            </div>
                        </div>
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
new Revamp_Inspirasi_Widget;