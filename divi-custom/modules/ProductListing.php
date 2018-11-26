<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class ProductListing extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Product Listing', 'axamandiri' );
        $this->slug = 'et_pb_product_listing';
        $this->whitelisted_fields = array(
            'title',
            'sub_title',
            'btn_bandingkan',
            'posts',
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
                'type' => 'textarea',
                'option_category' => 'basic_option',
            ),
            'btn_bandingkan' => array(
                'label' => __( 'Btn Bandingkan', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
            'posts' => array(
                'label' => __( 'ID Post', 'axamandiri' ),
                'type' => 'text',
                'option_category' => 'basic_option',
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start(); 
        ?>
        <section aria-label="Product Listing" id="product-listing" class="clearfix sections bg-white2 radius-bottom-5">
            <a href="<?php echo site_url('bandingkan-produk');?>" class="button blue floating">
                <?php echo $this->shortcode_atts['btn_bandingkan']; ?>
            </a>
            <h3><?php echo $this->shortcode_atts['title']; ?></h3>
            <h4 class="small-title m-bottom-45"><?php echo $this->shortcode_atts['sub_title']; ?></h4>
            <?php
            $posts = explode(",",$this->shortcode_atts['posts']);
            if( $posts ): ?>
                <ul id="listing-items" class="clearfix desktop-content">
                <?php foreach( $posts as $post):?>
                    <?php //setup_postdata($post); ?>
                    <?php $term = wp_get_post_terms( $post, "matrix_section" ); ?>
                    <li class="clearfix elements <?=$term[0]->slug?>" data-category="<?=$term[0]->slug?>">
                        <div class="box w-244 h-315 radius-all-5 bg-white relative">
                        <a href="<?php echo get_the_permalink($post); ?>" class="postThumbnail h-80 block relative">
                            <span class="separate-small absolute"></span>
                            <?php echo get_the_post_thumbnail($post,'matrix_small');?>
                        </a>
                        <div class="title">
                            <h2 class="f-14 c-blue"><a href="<?php echo get_the_permalink($post); ?>"><?php echo get_the_title($post); ?></a></h2>
                        </div>

                        <div class="details p-all-20">
                            <ul class="list-grey">
                                <?php 
                                $manfaat = get_post_meta($post,'matrix_manfaat');
                                for($i = 0; $i < 3; $i++): 
                                ?>
                                <li class="f-12"><?php echo get_post_meta($post,'matrix_manfaat_'.$i.'_title',true); ?></li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                        <a href="<?php echo get_the_permalink($post); ?>" class="view-more bg-greylight4 block text-center p-all-10 f-13 absolute" onclick="javascript:return tc_events_2(this,'interaction',{interaction_name:'Havas_Lebih_lanjut_<?=$post->post_name?>',interaction_detail:'click'});"><i class="fa fa-chevron-circle-right"></i>Lebih Lanjut</a>
                    </div>
                    </li>
                <?php endforeach; ?>
                </ul>
                <?php wp_reset_postdata();?>
            <?php endif; ?>

            <form id="product-listing-mobile" class="mobile-content" action="">
                <?php
                    $posts = explode(",",$this->shortcode_atts['posts']);
                    if( $posts ): ?>
                <select name="" class="" tabindex="1">

                    <option value="0"><?php /* _e("<!--:en-->Choose Product<!--:--><!--:id-->Pilih Produk<!--:-->"); */
                                                _e("Pilih Produk"); ?></option>
                    <?php foreach( $posts as $post):?>
                        <?php //setup_postdata($post); ?>
                        <?php $term = wp_get_post_terms( $post, "matrix_section" ); ?>
                    <option value="<?php echo get_the_permalink($post); ?>"><?php echo get_the_title($post); ?></option>
                    <?php endforeach; ?>
                </select>
                 <?php wp_reset_postdata();?>
                 <button type="submit" class="button blue">Lihat Produk</button>
                 <a href="<?php echo site_url('bandingkan-produk');?>" class="button bg-bandingkan"><?php /* _e("<!--:en-->Compare<!--:--><!--:id-->Bandingkan<!--:-->"); */
                                                                                                            _e("Bandingkan"); ?></a>
            </form>
            <?php endif; ?>

        </section><!--end product listing-->
        <script type="text/javascript">
            $("#product-listing-mobile select").change(function(){
                $("#product-listing-mobile").attr("action", this.value);
            });
        </script>
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new ProductListing;