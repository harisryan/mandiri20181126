<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Revamp_Solusi_Anda extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Revamp Solusi Anda', 'axamandiri' );
        $this->whitelisted_fields = array(
            'title_section',
            'sub_title_section',
            'desc',
        );
        $this->fields_defaults = array(
            'title_section' => array( 'Solusi Anda', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
        $this->slug            = 'et_pb_solusi_anda';
        $this->child_slug      = 'et_pb_solusi_anda_item';
        $this->child_item_text = esc_html__( 'Solusi Anda Item', 'axamandiri' );
    }

    function get_fields () {
        $fields = array(
            'title_section' => array(
                'label' => __( 'Judul', 'axamandiri' ),
                'type' => 'text',
            ),
            'sub_title_section' => array(
                'label' => __( 'Sub Judul', 'axamandiri' ),
                'type' => 'text',
            ),
            'desc' => array(
                'label' => __( 'Description', 'axamandiri' ),
                'type' => 'textarea',
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start();
        ?>
        <div id="advisor-teaser" class="revamp_solusi_anda">
            <div class="row">
                <div class="large-5 columns">
                    <div class="header_solusi_untuk_anda"><span></span><?php echo $this->shortcode_atts['title_section']; ?></div>
                    <div class="cp-display--none"><h2><?php echo $this->shortcode_atts['sub_title_section']; ?></h2></div>
                    <p><?php echo $this->shortcode_atts['desc']; ?></p>
                </div>
                <div class="large-6 columns">
                    <form action="<?php echo site_url('solution-advisor');?>">
                        <div class="large-9 columns p-all-0">
                            <div class="teaser-slider">
                                <?php echo $this->shortcode_content; ?>
                            </div>
                        </div>
                        <!-- <input type="text" id="age" value="25"/> -->
                        <div class="large-3 columns">
                            <input type="submit" value="Mulai" class="button red"/>
                        </div>
                        <input type="hidden" name="age" id="hasil-age" value=""/>
                    </form>
                </div>
            </div>
        </div>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Revamp_Solusi_Anda;