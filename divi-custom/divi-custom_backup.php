<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
require_once('helpers.php');

function wp360_dbcm_init(){
    global $pagenow;
    
    $is_admin = is_admin();
    $action_hook = $is_admin ? 'wp_loaded' : 'wp';
    $required_admin_pages = array( 'edit.php', 'post.php', 'post-new.php', 'admin.php', 'customize.php', 'edit-tags.php', 'admin-ajax.php', 'export.php' ); // list of admin pages where we need to load builder files
    $specific_filter_pages = array( 'edit.php', 'admin.php', 'edit-tags.php' );
    $is_edit_library_page = 'edit.php' === $pagenow && isset( $_GET['post_type'] ) && 'et_pb_layout' === $_GET['post_type'];
    $is_role_editor_page = 'admin.php' === $pagenow && isset( $_GET['page'] ) && 'et_divi_role_editor' === $_GET['page'];
    $is_import_page = 'admin.php' === $pagenow && isset( $_GET['import'] ) && 'wordpress' === $_GET['import']; 
    $is_edit_layout_category_page = 'edit-tags.php' === $pagenow && isset( $_GET['taxonomy'] ) && 'layout_category' === $_GET['taxonomy'];
    if ( ! $is_admin || ( $is_admin && in_array( $pagenow, $required_admin_pages ) && ( ! in_array( $pagenow, $specific_filter_pages ) || $is_edit_library_page || $is_role_editor_page || $is_edit_layout_category_page || $is_import_page ) ) ) {
        add_action($action_hook, 'wp360_dbcm_init_modules', 9789);
    }
}
add_action('init', 'wp360_dbcm_init');

function wp360_dbcm_init_modules(){
    if(class_exists("ET_Builder_Module")){

       /*
       ** Child Parent
       */
       include("modules/Manfaat.php");
       include("modules/ManfaatItem.php");

       include("modules/Solutions.php");
       include("modules/Solution.php");

       include("modules/Services.php");
       include("modules/Service.php");

       include("modules/AdvTeaser.php");
       include("modules/AdvTeaserItem.php");

       include("modules/Region3Kolom.php");
       include("modules/Region3KolomItem.php");

       include("modules/ProList.php");
       include("modules/ProListItem.php");

       /*
       ** Single
       */
       include("modules/HargaUnit.php");
       include("modules/Karir.php");
       include("modules/Breadcrumbs.php");
       include("modules/BannerLink.php");
       include("modules/BlueBackground.php");
       include("modules/SlideHome.php");
       include("modules/WidgetInspirasi.php");
       include("modules/ProductListing.php");
       include("modules/TahukahAnda.php");
       include("modules/TentangKami.php");
       include("modules/LaporanKeuangan.php");
       include("modules/TitleText.php");
       include("modules/AxaGroup.php");
    }    
}

/*
** Load Custom CSS
*/
function load_custom_css(){
    wp_enqueue_style( 'custom-css', get_template_directory_uri()."/divi-custom/css/divi-custom.css");
}
add_action( 'wp_enqueue_scripts', 'load_custom_css' );