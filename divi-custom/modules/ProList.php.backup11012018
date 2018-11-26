<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class ProList extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Product List', 'axamandiri' );
        $this->whitelisted_fields = array(
            'title',
            'sub_title',
            'btn_bandingkan',
        );
        $this->fields_defaults = array(
            'title' => array( 'Title', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
        $this->slug            = 'et_pb_pro_list';
        $this->child_slug      = 'et_pb_pro_list_item';
        $this->child_item_text = esc_html__( 'Product List Item', 'axamandiri' );
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
            <ul id="listing-items" class="clearfix desktop-content">
                <?php echo $this->shortcode_content; ?>
            </ul>

            <form id="product-listing-mobile" class="mobile-content" action="">
                <select name="" class="" tabindex="1">

                    <option value="0"><?php /* _e("<!--:en-->Choose Product<!--:--><!--:id-->Pilih Produk<!--:-->"); */
                                                _e("Pilih Produk"); ?></option>
                </select>
                 <button type="submit" class="button blue">Lihat Produk</button>
                 <a href="<?php echo site_url('bandingkan-produk');?>" class="button bg-bandingkan"><?php /* _e("<!--:en-->Compare<!--:--><!--:id-->Bandingkan<!--:-->"); */
                                                                                                            _e("Bandingkan"); ?></a>
            </form>

        </section>

        <script type="text/javascript">
            
            $(document).ready(function(){
                $(".citem-drpwn").map(function() {
                    $('#product-listing-mobile select').append($('<option>', {
                        value: $(this).data("id"),
                        text: $(this).data("value")
                    }));
                });
            });

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
new ProList;