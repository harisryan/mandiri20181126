<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
}
class Revamp_Solusi_Widget extends ET_Builder_Module {

    function init () {
        $this->name = __( 'Revamp Solusi Widget', 'axamandiri' );
        $this->whitelisted_fields = array(
            'title_section',
        );
        $this->fields_defaults = array(
            'title_section' => array( 'Solusi Kami', 'add_default_setting' ),
        );
        $this->fullwidth  = true;
        $this->slug            = 'et_pb_revamp_solusi_widget';
    }

    function get_fields () {
        $fields = array(
            'title_section' => array(
                'label' => __( 'Judul', 'axamandiri' ),
                'type' => 'text',
            ),
        );
        return $fields;
    }

    function shortcode_callback ( $atts, $content = null, $function_name ) {
        ob_start();
        ?>
        <div class="revamp_solusi_kami">

            <div class="row box">
                <div class="large-11 cont-separate">
                    <ul id="separate" class="personal">
                        <li><a href="#" class="revamp-home-pb" data-target="revamp-home-content-personal">Personal</a></li>
                        <li><a href="#" class="revamp-home-pb" data-target="revamp-home-content-bisnis">Bisnis</a></li>
                    </ul>
                </div>
            </div>

            <div class="row solusiContainer">

                <div id="revamp-home-content-personal" class="revamp-home-content active">
                    <div id="solusiWidget">
                        <div class="header2judulsolusikami m-bottom-30">
                            <?php echo $this->shortcode_atts['title_section']; ?>
                        </div>
                        <div class="row">
                            <?php 
                            $data = get_field('solusi_personal');
                            
                            foreach($data as $value){
                                $url = "#";
                                $class = $value['additional_class'];
                                $tmp = explode(' ',$class);
                                $beliOnline = false;
                                if(in_array("beli-online", $tmp)){
                                    $beliOnline = true;
                                } 
                                switch ($value['type_personal']) {
                                    case 'page':
                                        $url =  $value['page_personal'];
                                        break;

                                    case 'matrix':
                                        $url =  $value['product_matrix_personal'];
                                        break;    
                                    
                                    default:
                                        $url =  $value['link_personal'];
                                        break;
                                }
                                ?>
                                <div class="large-2 small-6 columns text-center">
                                    <a href="<?php echo $url; ?>" class="link-icon-home <?php echo $class; ?>">
                                        <?php if($beliOnline): ?>
                                            <div class="label-beli-online">
                                                <div class="content-beli-online">
                                                    <img src="<?php echo get_template_directory_uri() ?>/divi-custom/images/notif.png" alt="Notif Icon">
                                                    <span>
                                                    <?php 
                                                    $number = get_option('ballon_number');
                                                    echo $number;
                                                    ?>
                                                    </span>    
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="icon-solution-home">
                                            <img src="<?php echo $value['icon_personal']; ?>" alt="<?php echo $value['judul_personal']; ?>" />
                                        </div><br/><?php echo $value['judul_personal']; ?>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div id="revamp-home-content-bisnis" class="revamp-home-content cp-display--none">
                    <div id="solusiWidget">
                        <div class="header2judulsolusikami m-bottom-30">
                            <?php echo $this->shortcode_atts['title_section']; ?>
                        </div>
                        <div class="row">
                            <?php 
                            $data = get_field('solusi_bisnis');
                            
                            foreach($data as $value){
                                $url = "#";
                                $class = $value['additional_class'];
                                $tmp = explode(' ',$class);
                                $beliOnline = false;
                                if(in_array("beli-online", $tmp)){
                                    $beliOnline = true;
                                } 
                                switch ($value['type_bisnis']) {
                                    case 'page':
                                        $url =  $value['page_bisnis'];
                                        break;

                                    case 'matrix':
                                        $url =  $value['product_matrix_bisnis'];
                                        break;    
                                    
                                    default:
                                        $url =  $value['link_bisnis'];
                                        break;
                                }
                                ?>
                                <div class="large-2 small-6 columns text-center">
                                    <a href="<?php echo $url; ?>" class="link-icon-home <?php echo $class; ?>">
                                        <?php if($beliOnline): ?>
                                            <div class="label-beli-online">
                                                <div class="content-beli-online">
                                                    <img src="<?php echo get_template_directory_uri() ?>/divi-custom/images/notif.png" alt="Notif Icon">
                                                    <span>
                                                    <?php 
                                                    $number = get_option('ballon_number');
                                                    echo $number;
                                                    ?>
                                                    </span>    
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="icon-solution-home">
                                            <img src="<?php echo $value['icon_bisnis']; ?>" alt="<?php echo $value['judul_bisnis']; ?>" />
                                        </div><br/><?php echo $value['judul_bisnis']; ?>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
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
new Revamp_Solusi_Widget;