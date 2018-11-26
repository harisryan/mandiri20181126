<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class PMContactForm72 extends ET_Builder_Module {

    function init () {
        $this->name = __( 'PM Brosur dan Bandingkan Produk', 'axamandiri' );
        $this->slug = 'et_pb_pm_contact72';
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
        <section aria-label="Brochure Download" id="brochure-download" class="sections bg-blue clearfix">
            <ul class="pdf-list small-block-grid-2 medium-block-grid-2 large-block-grid-2 clearfix">
                <?php $count = 0; while (has_sub_field('matrix_brochure2')): ?>
                <li>
                    <a href="<?php the_sub_field('file');?>" class="bg-white block clearfix" target="_blank" title="Download <?php echo get_sub_field('title') . ' ' . getFileDetail(get_sub_field('file'));?>">
                        <span class="icon"></span><strong><?php echo get_sub_field('title') . ' ' . getFileDetail(get_sub_field('file'));?></strong> <i class="fa fa-download right"></i>
                    </a>
                </li>
                <?php $count++; endwhile;?>
            </ul>
        </section>

        <section aria-label="Kontak" id="kontak" class="sections white clearfix">
            <div id="floating" class="absolute top-0 right-55">
                <?php $title=get_the_title();
                if($title=="AXA Mandiri Travel*"):?>
                <a href="https://portal.axa.co.id/mandiritravelonline_pentest" class="button c-blue bg-bandingkan" target="_blank" onClick="javascript:return tc_events_2(this,'virtual_page',{virtual_page_name:'belionline::overview',product_label:'GI::BeliOnline',page_status:'sale_payment'});">Beli Online</a>
                <?php endif;?>
                <?php if(!empty(get_field('matrix_brochure2')) && (!in_array("Rencanakan Lebih", $categoryTagCommander))):
                $brochure = get_field('matrix_brochure2');
                ?>
                    <!-- <a href="<?=$brochure[0]['file']?>" target="_blank" class="button blue" onClick="ga('send', 'event', 'button', 'click','Download Button');">Download</a> -->
                    <a href="#" class="button blue brochure-menu" onClick="javascript:return tc_events_2(this,'interaction',{interaction_name:'file_download',interaction_detail:'independent_<?php echo $post->post_name;?>'});">Download</a>
                    <!-- <section id="brochure-download" class="sections bg-blue clearfix">
                        <ul class="pdf-list small-block-grid-2 medium-block-grid-2 large-block-grid-2 clearfix">
                            <?php $count = 0; while (has_sub_field('matrix_brochure2')):?>
                                <li><a href="<?php the_sub_field('file');?>" class="bg-white block clearfix" target="_blank" ><span class="icon"></span><strong><?php the_sub_field('title');?></strong> <i class="fa fa-download right"></i></a></li>
                            <?php $count++; endwhile;?>
                        </ul>
                    </section> -->
                <?php endif;?>
                <?php //if($count > 0):?>
                    <a href="#" class="button blue brochure-menu" onClick="ga('send', 'event', 'button', 'click','Download Button');">Brosur</a>
                <?php //endif;?>
                <a href="<?php echo site_url('bandingkan-produk'); ?>" class="button c-blue bg-bandingkan" onClick="javascript:return tc_events_2(this,'virtual_page',{virtual_page_name:'smarttraveller::overview',product_label:'GI::Travel',page_status:'sale_payment'});">Bandingkan Produk</a>
            </div>
            
        </section>
        
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new PMContactForm72;