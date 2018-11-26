<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class BannerLink extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Banner Link', 'axamandiri' );
        $this->slug = 'et_pb_banner_link';
        $this->whitelisted_fields = array(
            'title',
            'description',
            'color',
        );
        $this->fields_defaults = array(
            'title' => array( 'Solusi Kami', 'add_default_setting' ),
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

            'description' => array(
                'label' => __( 'Description', 'axamandiri' ),
                'type' => 'textarea',
                'option_category' => 'basic_option',
            ),

            'color' => array(
                'label'              => esc_html__( 'Select Color', 'axamandiri' ),
                'type'               => 'select',
                'option_category'    => 'basic_option',
                'options'            => array("white"=>"White","bg-greylight"=>"Grey"),
            ),

        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        $color = $this->shortcode_atts['color'];
        ob_start(); 
        ?>

        <div id="sliderBanner" class="<?php echo $color; ?> p-all-30">
            <div class="row">
                <div class="box_slide">
                    <ul id="main_slidebanner" class="clearfix">
                        <?php
                            $args = array("post_type" => "slide_banner","posts_per_page" =>5);
                            query_posts( $args );
                            if(have_posts()): while(have_posts()):the_post();
                        ?>
                        <li class="box_images" class="large-3 columns">
                            <div class="box_slide">
                                <a href="<?php the_field("slide_url") ?>"><img class="img_banner lazy" data-src="<?php the_field('slider_image');?>" alt="img-banner"></a>
                            </div>
                        </li>
                        <?php endwhile;?>
                    </ul>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new BannerLink;