<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class ProListItem extends ET_Builder_Module {

    function init () {
        $this->name                        = esc_html__( 'Product List item', 'axamandiri' );
        $this->slug                        = 'et_pb_pro_list_item';
        $this->fb_support                  = true;
        $this->type                        = 'child';
        $this->child_title_var             = 'title';

        $this->whitelisted_fields = array(
            'title',
            'id_post',
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
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start();
        $post = $this->shortcode_atts['id_post'];
        ?>
            <?php $term = wp_get_post_terms( $post, "matrix_section" ); ?>
            <li class="clearfix elements <?=$term[0]->slug?>" data-category="<?=$term[0]->slug?>">
                <div class="citem-drpwn" style="display: none" data-value="<?php echo get_the_title($post); ?>" data-id="<?php echo get_permalink( $post ); ?>"></div>
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
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new ProListItem;