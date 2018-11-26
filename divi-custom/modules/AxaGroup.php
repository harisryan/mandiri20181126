<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class AxaGroup extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Axa Group', 'axamandiri' );
        $this->slug = 'et_pb_axa_group';
        $this->whitelisted_fields = array(
            'title',
            'content',
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
            'content' => array(
                'label' => __( 'Content', 'axamandiri' ),
                'type' => 'tiny_mce',
                'option_category' => 'basic_option',
            )
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start(); 

        $terms = get_terms( array(
            'taxonomy' => 'organisasi_kategori',
            'orderby'=>'meta_value_num',
            'hide_empty' => false,
            'order'=>'ASC',
            'meta_query' => array(
                 array(
                    'key' => '_term_order',
                    'value' => 0,
                    'compare' => '>='
                ),
            ),
        ) );

        /*
         $terms = get_terms( array(
            'taxonomy' => 'organisasi_kategori',
            'orderby'=>'term_id',
            'hide_empty' => false,
        ) );
        */
        ?>
        
        <section aria-label="Axa Group" id="axa-group" class="clearfix background-vector">

            <div id="logo-axa" class="logo-branding left">
                <img src="https://axa.co.id/ingatsehat/img/logo-axa.png" alt="Logo AXA Indonesia" />
            </div><!-- #logo-axa  -->
            <div id="logo-mandiri" class="logo-branding right">
                <img src="https://axa.co.id/ingatsehat/img/logo-axamandiri.png" alt="Logo AXA Mandiri" class="cp-margin--bottom15"  />
            </div>
            <div class="clearfix"></div>
            <?php echo $this->shortcode_content; ?>
            <br>
            <div class="group-tabs">
                <dl class="tabs" data-tab>
                    <?php foreach($terms as $value): ?>
                        <dd class="dd-item" data-entity="<?php echo $value->slug; ?>"><a href="#<?php echo $value->slug; ?>"><?php echo $value->name; ?></a></dd>        
                    <?php endforeach; ?>
                </dl>
                <div class="tabs-content">                
                    <?php 
                    foreach($terms as $value): 
                    $data = getFeatured($value->slug);
                    ?>
                      <div class="content" id="<?php echo $value->slug;?>">
                        <?php
                            if($data[0]->post_title != ""): ?>
                        <div class="large-6 columns">
                        <?php else:?>
                            <div class="large-12 columns">
                        <?php endif;?>
                             <h4></span><?php echo $value->name; ?></h4>
                            <?php echo wpautop($value->description); ?>
                        </div>

                        <?php if(count($data) > 0): ?>
                        <?php
                            if($data[0]->post_title != ""): ?>
                            <div class="large-6 columns">
                                <div class="ceo-section bg-grey o-hidden radius-all-5">
                                    <?php foreach($data as $v): 
                                    $jabatan = get_post_meta($v->ID,'jabatan',true);
                                    setup_postdata($v->ID);
                                    ?>
                                        <div class="large-3 columns text-center">
                                            <img src="<?php echo get_the_post_thumbnail_url($v->ID);?>" alt="<?php echo $v->post_title;?> - <?php echo $jabatan;?>">
                                        </div>
                                        <div class="large-9 columns">
                                            <h4><?php echo $v->post_title;?></h4>
                                            <h5><?php echo $jabatan;?></h5>
                                        </div>
                                        <div class="description clearfix">
                                            <?php the_content(); ?>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <?php endif;?>
                        <?php endif;?>
                      </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!--end axa group test-->

        <?php foreach($terms as $z): ?>
            <?php for($i = 4; $i >= 2; $i--): ?>
                <?php $post = getFeatured($z->slug,$i); ?>
                <?php if(count($post) > 0): ?>
                    <section aria-label="Axa Group <?php echo $z->slug ?>" class="board-director <?php echo $z->slug ?>"> 
                        <div class="<?php echo $z->slug ?>" data-entity2="<?php echo $z->slug ?>">
                            <h3 class="text-center f-18">
                                <?php 
                                if($i == 2){
                                    echo "BOARD OF COMMISSIONER";
                                }elseif($i == 3){
                                    echo "BOARD OF DIRECTORS";
                                }else{
                                    echo "Struktur Organisasi Dewan Komisaris dan Direksi";
                                }
                                ?>
                            </h3>
                            <ul class="bod-section clearfix cp-margin--zero">
                                <?php 
                                foreach ($post as $temp): 
                                $jabatan = get_post_meta($temp->ID,'jabatan',true);    
                                ?>
                                        <li class="cp-margin--10">
                                        <div class="panel bg-greydark o-hidden p-all-25 m-all-10 radius-all-5">
                                            <div class="large-3 columns p-left-0"><img src="<?php echo get_the_post_thumbnail_url($temp->ID) ?>" alt="<?php echo $temp->post_title; ?> - <?php echo $jabatan; ?>"/></div>
                                            <div class="large-9 columns p-all-0 m-top-20">
                                                <h4><?php echo $temp->post_title; ?></h4>
                                                <h5><?php echo $jabatan; ?></h5>
                                            </div>
                                            <div class="details p-top-20 clearfix">
                                                <p><?php echo $temp->post_content; ?></p>
                                            </div>
                                        </div>
                                        </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endfor; ?>
        <?php endforeach; ?>

        <?php
        $output_string = ob_get_contents();
        ob_end_clean();
        return $output_string;
    }
}
new AxaGroup;