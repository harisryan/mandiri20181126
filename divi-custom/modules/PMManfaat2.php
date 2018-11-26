<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class PMManfaat2 extends ET_Builder_Module {

    function init () {
        $this->name = __( 'PM Manfaat dan Contact Form', 'axamandiri' );
        $this->slug = 'et_pb_pm_manfaat2';
        $this->whitelisted_fields = array(
            'title',
            'contact7',
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
             'contact7' => array(
                'label'              => esc_html__( 'Select Form', 'axamandiri' ),
                'type'               => 'select',
                'option_category'    => 'basic_option',
                'options'            => getAllCF7(),
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start(); 
        $id = $this->shortcode_atts['contact7']; 
        $lead = get_field( 'contact_form_send_to' );
        ?>
        
        <div id="cover-manfaat" class="background-vector clearfix">
        <section aria-label="Manfaat" id="manfaat" class="bg-cover-blue sections clearfix">
            <div class="c-white fw-normal uppercase f-17 header3"><?php /* _e("<!--:en-->Benefit<!--:--><!--:id-->Manfaat<!--:-->"); */
                                                                    _e("Manfaat"); ?></div>
            <div class="c-white m-bottom-45 header4"><?php the_field('manfaat_sub_title');?></div>
            <div class="large-6 columns">
                <ul id="manfaat-slide" class="manfaat-slider owl-manfaat">
                    <?php $i = 1; while(has_sub_field('matrix_manfaat')): ?>
                        <li class="manfaat-element text-center elements <?php if(($i % 2) == 0) echo 'dark'; ?>">
                            <div class="box p-all-20">
                                <img class="icon-manfaat" src="<?php the_sub_field("icon");?>" alt="<?php echo (!empty(get_sub_field('alt')))?get_sub_field('alt') : 'manfaat';?>">
                                <p><strong><?php the_sub_field("title");?></strong></p>
                                <?php the_sub_field("body");?>
                            </div>
                        </li>
                    <?php $i++; endwhile;?>
                </ul>
            </div>
            <div class="large-6 columns contact-form">
                <?php 
                if($lead == 'lts') {
                    echo do_shortcode('[contact-form-7 id="'.$id.'" html_id="form"]');
                } else {
                    echo do_shortcode('[contact-form-7 id="'.$id.'" ]');
                }
                ?>
            </div>
        </section>
        <?php# if(get_field('matrix_syarat2')!=""):?>
        <section aria-label="Syarat" id="syarat" class="sections relative o-hidden">
            <div class="relative cp-position--zindex1000">
            <div class="fw-normal f-17 uppercase m-bottom-40 header3_syarat_ketentuan">Syarat &amp; Ketentuan</div>
            <ul id="list-syarat" class="small-block-grid-1 medium-block-grid-2 large-block-grid-2 clearfix">
                <?php while (has_sub_field('matrix_syarat2')):?>
                    <?php if(get_sub_field('usia_masuk')!=""):?>
                    <li class="usia-masuk">
                        <div class="bg-white radius-all-5">
                            <div class="icon-125x100">
                                <!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_usia_masuk');?>) right no-repeat;"></span> -->
                                <img src="<?php the_sub_field('icon_usia_masuk');?>" class="icon-solusi" alt="usia-masuk">
                            </div>
                                <div class="details">
                                    <div class="uppercase f-18 m-bottom-0 produkdetails">Usia Masuk</div>
                                    <div class="add-details">
                                        <p class="f-16"><?php the_sub_field('usia_masuk');?></p>
                                    </div>
                                </div>
                        </div>
                    </li>
                    <?php endif;?>
                    <?php if(get_sub_field('masa_pertanggungan')!=""):?>
                    <li class="masa_pertanggungan">
                        <div class="bg-white radius-all-5">
                            <div class="icon-125x100">
                                <img src="<?php the_sub_field('icon_masa_pertanggungan');?>" class="icon-solusi" alt="masa-pertanggungan">
                            </div>
                                <div class="details">
                                    <div class="uppercase f-18 m-bottom-0 produkdetails">Masa Pertanggungan</div>
                                    <div class="add-details">
                                        <p class="f-16"><?php the_sub_field('masa_pertanggungan');?></p>
                                    </div>
                                </div>
                        </div>
                    </li>
                    <?php endif;?>
                    <?php if(get_sub_field('mata_uang')!=""):?>
                    <li class="mata_uang">
                        <div class="bg-white radius-all-5">
                            <div class="icon-125x100">
                                <img src="<?php the_sub_field('icon_mata_uang');?>" class="icon-solusi" alt="matauang">
                            </div>
                                <div class="details">
                                    <div class="uppercase f-18 m-bottom-0 produkdetails">Mata uang</div>
                                    <div class="add-details">
                                        <p class="f-16"><?php the_sub_field('mata_uang');?></p>
                                    </div>
                                </div>
                        </div>
                    </li>
                    <?php endif;?>
                    <?php if(get_sub_field('minimum_premi')!=""):?>
                    <li class="minimum_premi">
                        <div class="bg-white radius-all-5">
                            <div class="icon-125x100">
                                <img src="<?php the_sub_field('icon_minimum_premi');?>" class="icon-solusi" alt="minimum-premi">
                            </div>
                                <div class="details">
                                <div class="uppercase f-18 m-bottom-0 produkdetails">Minimum Premi</div>
                                    <div class="add-details">
                                        <p class="f-16"><?php the_sub_field('minimum_premi');?></p>
                                    </div>
                                </div>
                        </div>
                    </li>
                    <?php endif;?>
                    <?php if(get_sub_field('pengembalian_premi')!=""):?>
                    <li class="pengembalian_premi">
                        <div class="bg-white radius-all-5">
                            <div class="icon-125x100">
                                <!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_pengambilan_premi');?>) right no-repeat;"></span> -->
                                <img src="<?php the_sub_field('icon_pengambilan_premi');?>" class="icon-solusi" alt="pengambilan-premi">
                            </div>
                                <div class="details">
                                    <div class="uppercase f-18 m-bottom-0 produkdetails"><?=($slug == 'asuransi-kesehatan')?'Pengembalian':'Pengambilan'?> Premi</div>
                                    <div class="add-details">
                                    <p class="f-16"><?php the_sub_field('pengembalian_premi');?></p>
                                    </div>
                                </div>
                        </div>
                    </li>
                    <?php endif;?>
                    <?php if(get_sub_field('cara_bayar')!=""):?>
                    <li class="cara_bayar">
                        <div class="bg-white radius-all-5">
                            <div class="icon-125x100">
                                <!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_cara_bayar');?>) right no-repeat;"></span> -->
                                <img src="<?php the_sub_field('icon_cara_bayar');?>" class="icon-solusi" alt="cara-bayar">
                            </div>
                                <div class="details">
                                    <div class="uppercase f-18 m-bottom-0 produkdetails">Cara Bayar</div>
                                    <div class="add-details">
                                        <p class="f-16"><?php the_sub_field('cara_bayar');?></p>
                                    </div>
                                </div>
                        </div>
                    </li>
                    <?php endif;?>
                    <?php if(get_sub_field('family_discount')!=""):?>
                    <li class="family_discount">
                        <div class="bg-white radius-all-5">
                            <div class="icon-125x100">
                                <!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_family_discount');?>) right no-repeat;"></span> -->
                                <img src="<?php the_sub_field('icon_family_discount');?>" class="icon-solusi" alt="family-discount">
                            </div>
                                <div class="details">
                                    <div class="uppercase f-18 m-bottom-0 produkdetails">Family Discount</div>
                                    <div class="add-details">
                                        <p class="f-16"><?php the_sub_field('family_discount');?></p>
                                    </div>
                                </div>
                        </div>
                    </li>
                    <?php endif;?>
                    <?php if(get_sub_field('jalur_distribusi')!=""):?>
                    <li class="jalur_distribusi">
                        <div class="bg-white radius-all-5">
                            <div class="icon-125x100">
                                <!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_jalur_distribusi');?>) right no-repeat;"></span> -->
                                <img src="<?php the_sub_field('icon_jalur_distribusi');?>" class="icon-solusi" alt="jalur-distribusi">
                            </div>
                                <div class="details">
                                    <div class="uppercase f-18 m-bottom-0 produkdetails">Jalur Distribusi</div>
                                    <div class="add-details">
                                        <p class="f-16"><?php the_sub_field('jalur_distribusi');?></p>
                                    </div>
                                </div>
                        </div>
                    </li>
                    <?php endif;?>
                <?php endwhile;?>
                <?php while (has_sub_field('matrix_syarat_aami')):?>
                    <?php if(get_sub_field('pembelian_awal')!=""):?>
                        <li class="pembelian_awal">
                            <div class="bg-white radius-all-5">
                                <span class="icon-125x100"></span>
                                    <div class="details">
                                        <div class="uppercase f-18 m-bottom-0 produkdetails"><?php /* _e("<!--:en-->Initial Investment<!--:--><!--:id-->Pembelian Awal<!--:-->"); */
                                                                                        _e("Pembelian Awal"); ?></div>
                                        <div class="add-details">
                                        <p class="f-16"><?php the_sub_field('pembelian_awal');?></p>
                                        </div>
                                    </div>
                            </div>
                        </li>
                    <?php endif;?>
                    <?php if(get_sub_field('pembelian_selanjutnya')!=""):?>
                        <li class="pembelian_selanjutnya">
                            <div class="bg-white radius-all-5">
                                <span class="icon-125x100"></span>
                                    <div class="details">
                                        <div class="uppercase f-18 m-bottom-0 produkdetails"><?php /* _e("<!--:en-->Top-up<!--:--><!--:id-->Pembelian selanjutnya<!--:-->"); */
                                                                                        _e("Pembelian selanjutnya"); ?></div>
                                        <div class="add-details">
                                            <p class="f-16"><?php the_sub_field('pembelian_selanjutnya');?></p>
                                        </div>
                                    </div>
                            </div>
                        </li>
                    <?php endif;?>
                    <?php if(get_sub_field('minimum_penjualan_kembali')!=""):?>
                        <li class="minimum_penjualan_kembali">
                            <div class="bg-white radius-all-5">
                                <span class="icon-125x100"></span>
                                    <div class="details">
                                        <div class="uppercase f-18 m-bottom-0 produkdetails"><?php /* _e("<!--:en-->Minimum Redemption<!--:--><!--:id-->Minimum penjualan kembali<!--:-->"); */
                                                                                        _e("Minimum penjualan kembali"); ?></div>
                                        <div class="add-details">
                                        <p class="f-16"><?php the_sub_field('minimum_penjualan_kembali');?></p>
                                        </div>
                                    </div>
                            </div>
                        </li>
                    <?php endif;?>
                    <?php if(get_sub_field('minimum_saldo_kepemilikan_unit')!=""):?>
                        <li class="minimum_saldo_kepemilikan_unit">
                            <div class="bg-white radius-all-5">
                                <span class="icon-125x100"></span>
                                    <div class="details">
                                        <div class="uppercase f-18 m-bottom-0 produkdetails"><?php /* _e("<!--:en-->Minimum Balance of Ownership<!--:--><!--:id-->Minimum saldo kepemilikan unit<!--:-->"); */
                                                                                        _e("Minimum saldo kepemilikan unit"); ?></div>
                                        <div class="add-details">
                                        <p class="f-16"><?php the_sub_field('minimum_saldo_kepemilikan_unit');?></p>
                                        </div>
                                    </div>
                            </div>
                        </li>
                    <?php endif;?>
                <?php endwhile;?>

                <?php while (has_sub_field('custom_syarat_&_ketentuan')):?>
                <?php if(get_sub_field('content')!=""):?>
                <li class="jalur_distribusi">
                    <div class="bg-white radius-all-5">
                        <div class="icon-125x100">

                            <img src="<?php the_sub_field('icon');?>" class="icon-solusi" alt="syarat-ketentuan">
                        </div>
                            <div class="details">
                            <div class="uppercase f-18 m-bottom-0 produkdetails"><?php the_sub_field('title'); ?></div>
                            <div class="add-details">
                            <p class="f-16"><?php the_sub_field('content');?></p>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endif;?>
                <?php endwhile;?>

                <?php
                    $terms = wp_get_post_terms($post->ID, 'matrix_entity');
                    $entity = '';
                    foreach($terms as $term){
                        $entity = $term->name;
                        $slug1=$term->slug;
                    }
                ?>
                <?php global $post;  ?>
                <?php
                if ( get_post_type( $post->ID ) == 'product_matrix' ) :
                ?>
                <li class="ojk">
                    <div class="bg-white radius-all-5">
                        <div class="icon-125x100">
                            <img src="https://axa-mandiri.co.id/wp-content/uploads/2014/08/ojk-blue.png" class="icon-solusi" alt="ojk">
                        </div>
                            <div class="details">
                                <div class="uppercase f-18 m-bottom-0 produkdetails">LEMBAGA PENGAWAS DAN PENGATUR</div>
                                <?php if($slug1=='amfs'):?>
                                <p class="f-16">AXA Mandiri Financial Services terdaftar dan diawasi oleh Otoritas Jasa Keuangan</p>
                                <?php elseif($slug1=='magi'):?>
                                <p class="f-16">PT. Mandiri AXA General Insurance terdaftar dan diawasi oleh Otoritas Jasa Keuangan</p>
                                <?php endif; ?>
                            </div>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
            </div>
        </section>
    </div><!--end cover-manfaat-->

    <?php# endif;?>

        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new PMManfaat2;