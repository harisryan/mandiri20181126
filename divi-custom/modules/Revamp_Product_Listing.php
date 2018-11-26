<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly

}
class Revamp_Product_Listing extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Revamp Product Listing', 'axamandiri' );
        $this->whitelisted_fields = array(
            'title',
            'sub_title',
            'icon',
        );
        $this->fields_defaults = array(
            'title' => array( 'Title', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
        $this->slug            = 'et_pb_revamp_product_listing';
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
            'icon' => array(
                'label'              => esc_html__( 'Image Link / Upload', 'axamandiri' ),
                'type'               => 'upload',
                'option_category'    => 'basic_option',
                'upload_button_text' => esc_attr__( 'Upload an image', 'axamandiri' ),
                'choose_text'        => esc_attr__( 'Choose an Image', 'axamandiri' ),
                'update_text'        => esc_attr__( 'Set As Image', 'axamandiri' ),
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        $title = $this->shortcode_atts['title'];
        $icon = $this->shortcode_atts['icon'];
        $subtitle = $this->shortcode_atts['sub_title'];
        ob_start();
        ?>
        <section id="product-listing-new" aria-label="Product Listing" class="clearfix sections bg-white2 radius-bottom-5">
            <div>
                <h3 class="c-blue"><?php echo $title; ?></h3>
                <img class="icon-product" src="<?php echo $icon ?>" alt="" />
            </div>
            <div style="max-width:40px;border-top:4px solid #00529b;margin-top:-10px;margin-bottom:10px;margin-left:1px;"></div>
            <h4 class="small-title m-bottom-45">
                <?php
                    echo $subtitle;
                ?>
            </h4>
            <div class="row list-inline-product" class="list-inline-product">
                <?php
                if( have_rows('product_matrix') ):
                    while ( have_rows('product_matrix') ) : the_row();
                        $temp = get_sub_field('product');
                        $featured = get_sub_field('featured');
                        $post = $temp->ID;
                        $m_image_square = get_field('image_square',$post);
                        ?>
                        <div class="large-3 column">
                            <div class="box-product <?php echo ($featured) ? "recommended" : ""; ?>">
                                <div class="bg-thumbnail" style="background:url('<?php echo $m_image_square; ?>">
                                    <?php if($featured): ?>
                                    <div class="icon-product-rec">
                                        <img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-rekomendasi.png" alt="">
                                    </div>
                                    <?php endif; ?>
                                    <a href="#" data-target="modal-<?php echo $post ?>" class="open-modal btn-hubungi cbutton ghost-white medium"><span><?php _e('HUBUNGI SAYA'); ?></span> </a>
                                </div>
                                <div class="content-product-list">
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
                                    <ul class="list-manfaat">
                                        <?php
                                        $manfaat = get_post_meta($post,'matrix_manfaat');
                                        for($i = 0; $i < 2; $i++):
                                        ?>
                                        <?php 
                                        $listTitle = get_post_meta($post,'matrix_manfaat_'.$i.'_title',true); 
                                            if($listTitle != ""):
                                                ?>
                                                <li><?php echo $listTitle ?></li>
                                                <?php 
                                            endif;
                                        endfor; 
                                        if(count(get_field('matrix_manfaat',$post)) > 2):
                                        ?>
                                        <li style="list-style-type: none;">...</li>
                                        <?php endif; ?>
                                    </ul>
                                    <a href="<?php echo get_the_permalink($post); ?>" class="cbutton arrow arrow-animated ghost small btn-selengkapnya" style="font-size:0.8em;line-height:10px;border:none;color:red">
                                    <span><?php _e('INFO SELENGKAPNYA') ?></span>
                                    <span class="icon" style="color: red">
                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 32 32" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><path d="M18.8 5.733c-0.8 0.8-0.8 2.067 0 2.8l5.467 5.467h-21.333c-2.6 0-2.6 4 0 4h21.333l-5.467 5.467c-1.8 1.8 1 4.667 2.8 2.8l8.867-8.867c0.8-0.733 0.8-2.067 0-2.8l-8.867-8.867c-0.733-0.8-2-0.8-2.8 0z"></path></svg>
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 32 32" style="opacity: 0; transform: matrix(1, 0, 0, 1, 15, 0);"><path d="M18.8 5.733c-0.8 0.8-0.8 2.067 0 2.8l5.467 5.467h-21.333c-2.6 0-2.6 4 0 4h21.333l-5.467 5.467c-1.8 1.8 1 4.667 2.8 2.8l8.867-8.867c0.8-0.733 0.8-2.067 0-2.8l-8.867-8.867c-0.733-0.8-2-0.8-2.8 0z"></path></svg></span>
                                  </a>
                                </div>
                            </div>

                            <!-- The Modal -->
                            <?php
                            $m_subtitle = get_field('sub_title_revamp',$post);
                            $m_pengantar = get_field('pengantar_revamp',$post);
                            $m_product_icon = get_field('product_icon',$post);
                            ?>
                            <div id="modal-<?php echo $post ?>" class="leadform">

                              <!-- Modal content -->
                              <div class="leadform-content">
                                <span class="close close-modal" data-id="modal-<?php echo $post ?>">&times;</span>
                                <div class="row-col">
                                    <div class="col-1 large-6 columns">
                                        <h5 class="c-blue title-lead"><?php echo get_the_title($post); ?></h5>
                                        <img class="icon-product" src="<?php echo $m_product_icon; ?>" alt="" style="top:0px;right:20px"/>
                                        <div style="max-width:40px;border-top:4px solid #00529b;margin-top:-10px;margin-bottom:10px;margin-left:1px;"></div>
                                        <br/>
                                        <h5><?php echo $m_subtitle; ?></h5>
                                        <p class="mt-5">
                                            <?php
                                            $string = strip_tags($m_pengantar);
                                            if (strlen($string) > 100) {
                                                $stringCut = substr($string, 0, 100);
                                                $endPoint = strrpos($stringCut, ' ');
                                                $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                                            }
                                            echo $m_pengantar;
                                            ?>
                                        </p>
                                        <ul class="list-manfaat-lf c-blue f-16">
                                            <?php
                                            for($i = 0; $i < 3; $i++):
                                            ?>
                                            <?php 
                                            $listTitle = get_post_meta($post,'matrix_manfaat_'.$i.'_title',true); 
                                                if($listTitle != ""):
                                                    ?>
                                                    <li><?php echo $listTitle ?></li>
                                                    <?php 
                                                endif;
                                            endfor; 
                                            ?>
                                        </ul>

                                        <div class="action-footer-lf">
                                              <a href="<?php echo get_the_permalink($post); ?>" class="cbutton arrow arrow-animated ghost small btn-selengkapnya" style="font-size:0.8em;line-height:10px;border:none;color:red;    width: initial;">
                                    <span><?php _e('INFO SELENGKAPNYA') ?></span>
                                    <span class="icon" style="color: red">
                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 32 32" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><path d="M18.8 5.733c-0.8 0.8-0.8 2.067 0 2.8l5.467 5.467h-21.333c-2.6 0-2.6 4 0 4h21.333l-5.467 5.467c-1.8 1.8 1 4.667 2.8 2.8l8.867-8.867c0.8-0.733 0.8-2.067 0-2.8l-8.867-8.867c-0.733-0.8-2-0.8-2.8 0z"></path></svg>
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 32 32" style="opacity: 0; transform: matrix(1, 0, 0, 1, 15, 0);"><path d="M18.8 5.733c-0.8 0.8-0.8 2.067 0 2.8l5.467 5.467h-21.333c-2.6 0-2.6 4 0 4h21.333l-5.467 5.467c-1.8 1.8 1 4.667 2.8 2.8l8.867-8.867c0.8-0.733 0.8-2.067 0-2.8l-8.867-8.867c-0.733-0.8-2-0.8-2.8 0z"></path></svg></span>
                                  </a>
                                            <span class="icon-download-lf">
                                                <?php 
                                                $fileDownload = get_post_meta($post,'matrix_brochure2_0_file',true);
                                                if($fileDownload != ""):
                                                    $file = wp_get_attachment_url($fileDownload);
                                                ?>        
                                                <a href="<?php echo $file; ?>" download>
                                                <img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-download.png" alt="" /><br/> <?php _e('Unduh'); ?> <br/> <?php _e('Informasi ini') ?></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-2 large-6 columns">
                                        <h5 class="c-white">FORMULIR DATA DIRI</h5>
                                        <?php
                                        global $product_matrix, $slug_product, $product_title;

                                        $terms = wp_get_post_terms($temp->ID, 'matrix_entity');
                                        $entity = '';

                                        foreach($terms as $term){
                                            $entity = $term->name;
                                            $slug1 = $term->slug;
                                        }

                                        $product_matrix = $slug1;

                                        $slug_product = get_post_field('post_name', $temp->ID);
                                        $product_title = get_the_title($temp->ID);


                                        $lead = get_field( 'contact_form_send_to',$post);
                                        $contact = get_field('contact_form',$post);
                                        if($lead == 'lts'){
                                            echo do_shortcode('[contact-form-7 id="'.$contact->ID.'" title="'.$contact->page_title.'" html_class="wpcf7-form-lts"]');
                                        }elseif($lead == 'lms'){
                                            echo do_shortcode('[contact-form-7 id="'.$contact->ID.'" title="'.$contact->page_title.'" html_class="wpcf7-form-lms"]');
                                        }else{
                                            echo do_shortcode('[contact-form-7 id="'.$contact->ID.'" title="'.$contact->page_title.'"]');
                                        }

                                        $linkBeliOnline = get_field('link_beli_online');
                                        if($linkBeliOnline != ""):
                                        ?>
                                        <div class="btn-mau-beli-online">
                                            <?php _e('Mau Beli Online?'); ?> <a href="#"><?php _e('Klik disini'); ?> 
                                                <span class="icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 32 32" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"><path d="M18.8 5.733c-0.8 0.8-0.8 2.067 0 2.8l5.467 5.467h-21.333c-2.6 0-2.6 4 0 4h21.333l-5.467 5.467c-1.8 1.8 1 4.667 2.8 2.8l8.867-8.867c0.8-0.733 0.8-2.067 0-2.8l-8.867-8.867c-0.733-0.8-2-0.8-2.8 0z"></path></svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 32 32" style="opacity: 0; transform: matrix(1, 0, 0, 1, 15, 0);"><path d="M18.8 5.733c-0.8 0.8-0.8 2.067 0 2.8l5.467 5.467h-21.333c-2.6 0-2.6 4 0 4h21.333l-5.467 5.467c-1.8 1.8 1 4.667 2.8 2.8l8.867-8.867c0.8-0.733 0.8-2.067 0-2.8l-8.867-8.867c-0.733-0.8-2-0.8-2.8 0z"></path></svg></span>
                                            </a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                              </div>

                            </div>

                        </div>

                        <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
        </section>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new Revamp_Product_Listing;