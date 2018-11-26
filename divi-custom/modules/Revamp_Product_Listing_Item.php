<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Revamp_Product_Listing_Item extends ET_Builder_Module {

    function init () {
        $this->name                        = esc_html__( 'Product List item', 'axamandiri' );
        $this->slug                        = 'et_pb_revamp_product_listing_item';
        $this->fb_support                  = true;
        $this->type                        = 'child';
        $this->child_title_var             = 'title';

        $this->whitelisted_fields = array(
            'title',
            'id_post',
            'featured',
        );

        $this->advanced_setting_title_text = esc_html__( 'New Tab', 'axamandiri' );
        $this->settings_text               = esc_html__( 'Tab Settings', 'axamandiri' );
        $this->main_css_element = '%%order_class%%';
    }

    function get_fields () {
        $fields = array(
            'title' => array(
                'label' => __( 'Judul', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'id_post' => array(
                'label'              => esc_html__( 'Select Post', 'axamandiri' ),
                'type'               => 'select',
                'option_category'    => 'basic_option',
                'options'            => getPostProduct(),
            ),
            'featured' => array(
                'label'              => esc_html__( 'Featured Post', 'axamandiri' ),
                'type'               => 'select',
                'option_category'    => 'basic_option',
                'options'            => array(
                                            "no"=>"No",
                                            "yes"=>"Yes"
                                        ),
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start();
        $post = $this->shortcode_atts['id_post'];
        $featured = $this->shortcode_atts['featured'];
        ?>
            <?php $term = wp_get_post_terms( $post, "matrix_section" ); ?>

            <li>
                <div class="box-product <?php echo ($featured == "yes") ? "recommended" : ""; ?>">
                    <div class="bg-thumbnail" style="background:url('<?php echo get_the_post_thumbnail_url($post,'matrix_small') ?>">
                        <?php if($featured == "yes"): ?>
                        <div class="icon-product-rec">
                            <img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-rekomendasi.png" alt="">
                        </div>
                        <?php endif; ?>
                        <a href="#" data-target="modal-<?php echo $post ?>" class="btn-hubungi open-modal button red block bottom"><?php _e('HUBUNGI SAYA'); ?> </a>
                    </div>
                    <div>
                        <div class="title-product">
                            <?php 
                            $tmp_title = get_the_title($post); 
                            $xtitle = explode(" ",$tmp_title);
                            $subtitle = $xtitle[0].' '.$xtitle[1];
                            unset($xtitle[0]);
                            unset($xtitle[1]);
                            $fix_title = implode(' ',$xtitle);
                            ?>
                            <h5 style="font-size:1.063em" class="c-blue"><?php echo $subtitle ?></h5> <p class="c-blue" style="line-height:5px;font-size: 16px;">
                                <?php echo $fix_title; ?>
                            </p>
                            
                        </div>
                        <ul id="list-manfaat">
                            <?php 
                            $manfaat = get_post_meta($post,'matrix_manfaat');
                            for($i = 0; $i < 3; $i++): 
                            ?>
                            <li><?php echo get_post_meta($post,'matrix_manfaat_'.$i.'_body',true); ?></li>
                            <?php endfor; ?>
                        </ul>
                        <a href="<?php echo get_the_permalink($post); ?>" class="c-red" style="font-size:0.8em;line-height:10px;"><?php _e('INFO SELENGKAPNYA'); ?> <span class="fa fa-arrow-right"></span></a>
                    </div>
                </div>
            </li>

            <!-- The Modal -->
            <div id="modal-<?php echo $post ?>" class="leadform">

              <!-- Modal content -->
              <div class="leadform-content">
                <span class="close close-modal" data-id="modal-<?php echo $post ?>">&times;</span>
                <div class="row-col">
                    <div class="col-1 large-6 columns">
                        <h5 class="c-blue">Produk Kesehatan</h5>
                        <img class="icon-product" src="<?php echo bloginfo('template_url');?>/images/revamp/icon-kesehatan.png" alt="" style="top:0px;right:20px"/>
                        <div style="max-width:40px;border-top:4px solid #00529b;margin-top:-10px;margin-bottom:10px;margin-left:1px;"></div>
                        <br/>
                        <h5><?php echo get_the_title($post); ?></h5>
                        <p class="mt-5">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                        </p>
                        <ul class="list-manfaat-lf c-blue f-16">
                            <?php 
                            for($i = 0; $i < 3; $i++): 
                            ?>
                            <li><?php echo get_post_meta($post,'matrix_manfaat_'.$i.'_body',true); ?></li>
                            <?php endfor; ?>                            
                        </ul>
                        
                        <div class="action-footer-lf">
                            <a href="#" class="c-red" style="font-size:0.8em;line-height:10px;">INFO SELENGKAPNYA <span class="fa fa-arrow-right"></span></a>
                            <span class="icon-download-lf">
                                <a href="#"><img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-download.png" alt="" /><br/> Unduh <br/> Informasi ini</a>
                            </span>
                        </div>
                    </div>
                    
                    <div class="col-2 large-6 columns">
                        <h5 class="c-white">FORMULIR DATA DIRI</h5>
                        <?php 
                        $contact = get_field('contact_form',$post);
                        echo do_shortcode('[contact-form-7 id="'.$contact->ID.'" title="'.$contact->page_title.'"]');
                        ?>
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
new Revamp_Product_Listing_Item;