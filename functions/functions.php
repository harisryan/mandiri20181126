<?php
/*======================================================
 Register Script
======================================================*/
//Related Post
function related_posts_shortcode( $atts ) {
  extract(shortcode_atts(array(
      'limit' => '1',
  ), $atts));

  global $wpdb, $post, $table_prefix;

 // var_dump($post->post_date);
  if ($post->ID) {
    $retval = '';

    $this_post = $post;
    $category = get_the_category();
    $category = $category[0];
    $category = $category->cat_ID;

    if($category == 1214) {

      $args = [
                'numberposts' => $limit,
                'offset' => 0,
                'orderby' => rand,
                'order' => DESC,
                'category' => $category,
                'date_query' => array(
                  'before' => $post->post_date
                ),
              ];
      $posts = get_posts($args);


      if ( $posts ) {
        foreach ( $posts as $post ) {
          $retval .= '<center><a title="'.get_the_title().'" href="'.get_the_permalink().'">'.get_the_title().'</a></center></br>';
        }
      };
      return $retval;
    }
    return;
  }
}
add_shortcode('related_posts', 'related_posts_shortcode');

// Async load
function ikreativ_async_scripts($url)
{
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
    return str_replace( '#asyncload', '', $url )."' async='async";
    }
add_filter( 'clean_url', 'ikreativ_async_scripts', 11, 1 );

// Enqueue scripts
function ikreativ_theme_scripts()
{
    // wp_enqueue_script() syntax, $handle, $src, $deps, $version, $in_footer(boolean)
    // wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.min.js#asyncload', 'jquery', '', true );
    // wp_enqueue_script( 'application', get_template_directory_uri() . '/assets/js/application.min.js#asyncload', 'jquery', '', true );

    // wp_enqueue_script( 'load_city', get_template_directory_uri() . '/js/load_city.js#asyncload', 'jquery', '', true );

    if( !is_admin()){
      wp_deregister_script('jquery');
      // wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js#asyncload"), true, '1.10.2');
      wp_register_script('jquery',   get_template_directory_uri().'/js/jquery.min.js','jquery', '1', false);
      // wp_register_script('jquery',   get_template_directory_uri().'/js/vendor/jquery.js','jquery', '1', false );
      wp_enqueue_script('jquery');
    }
}
add_action( 'wp_enqueue_scripts', 'ikreativ_theme_scripts');



function theme_name_scripts() {
    wp_enqueue_script('modernizr', get_template_directory_uri().'/js/modernizr.custom.91763.js','jquery', '1', false );
    wp_enqueue_script('plugins', get_template_directory_uri().'/js/foundation.min.js','jquery', '1', true );
    wp_enqueue_script('lazy-load', get_template_directory_uri().'/js/libs/lazyload/jquery.lazy.min.js','jquery', '1', true );
    wp_enqueue_script('lazy-load-scroll', get_template_directory_uri().'/js/libs/lazyload/jquery.scrollstop.min.js','jquery', '1', true );
    wp_enqueue_script('library', get_template_directory_uri().'/js/lib.js','jquery', '1', true );
    wp_enqueue_script('init', get_template_directory_uri().'/js/script.js','jquery', '1', true );
    //wp_enqueue_script('advisor', get_template_directory_uri().'/js/advisor.js','jquery', '1', true );

    if (is_front_page()) {
      wp_deregister_script( 'contact-form-7' );
    }

 }

 add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

//Defer parsing of javascript
if (!(is_user_logged_in() )) {
  function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.min.js' ) ) return $url;
    return "$url' defer ";
  }
  add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}

//auto complete off
function wpse_159462_login_form() {
?>
<script>
    document.getElementById( "user_pass" ).autocomplete = "off";
    document.getElementById( "user_login" ).autocomplete = "off";
</script>
<?php
}

add_action( 'login_form', 'wpse_159462_login_form' );


/*======================================================
 Register Menu
======================================================*/
 register_nav_menus( array(
	'primary_menu' => 'Primary navigation menu',
	'footer_menu' => 'Footer menu',
    'layanan_menu' => 'Layanan Menu'
) );

/* Walker: add wrap before sub-menu*/
 class axa_sublevel extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='sub-menu-wrap'><div class='row'><ul class='sub-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div></div>\n";
    }

    function start_el(&$output, $item, $depth, $args) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= '<span class="title-menu">'.$args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after .'</span>';
        $item_output .= '</a>';
        if ($item->description) $item_output .= '<p class="menu-description">' . $item->description . '</p>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu{

    // don't output children opening tag (`<ul>`)
    public function start_lvl(&$output, $depth){}

    // don't output children closing tag
    public function end_lvl(&$output, $depth){}

    public function start_el(&$output, $item, $depth, $args){

      // add spacing to the title based on the current depth
      $item->title = str_repeat("&nbsp;", $depth * 4) . $item->title;

      // call the prototype and replace the <li> tag
      // from the generated markup...
      parent::start_el($output, $item, $depth, $args);
      $output = str_replace('<li', '<option value="'.$item->url.'"', $output);
    }

    // replace closing </li> with the closing option tag
    public function end_el(&$output, $item, $depth){
      $output .= "</option>\n";
    }
}

/*======================================================
 POST THUMBNAILS
======================================================*/
add_theme_support('post-thumbnails');
add_image_size('matrix_small', 244,80, TRUE);
add_image_size('matrix_large', 775,250, TRUE);
add_image_size('news_large', 650,0);
add_image_size('news_small', 500,341, TRUE);

 /*======================================================
 Register Post Type
======================================================*/
 //Post Type : Unit Price
function unit_price_init() {
  $labels = array(
    'name' => _x('Harga Unit Harian', 'post type general name', 'axa_financial'),
    'singular_name' => _x('Unit', 'post type singular name', 'axa_financial'),
    'add_new' => _x('Add New', 'Unit', 'axa_financial'),
    'add_new_item' => __('Add New Unit', 'axa_financial'),
    'edit_item' => __('Edit Unit', 'axa_financial'),
    'new_item' => __('New Unit', 'axa_financial'),
    'all_items' => __('All Units', 'axa_financial'),
    'view_item' => __('View Unit', 'axa_financial'),
    'search_items' => __('Search Units', 'axa_financial'),
    'not_found' =>  __('No Units found', 'axa_financial'),
    'not_found_in_trash' => __('No Units found in Trash', 'axa_financial'),
    'parent_item_colon' => '',
    'menu_name' => __('Units', 'axa_financial')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title','editor' )
  );

  register_post_type('unit', $args);
}

add_action( 'init', 'unit_price_init' );

//Post Type : Branch
// function branch_pt_init() {
//   $labels = array(
//     'name' => _x('Branch Locater', 'post type general name', 'axa_financial'),
//     'singular_name' => _x('Branch', 'post type singular name', 'axa_financial'),
//     'add_new' => _x('Add New', 'branch', 'axa_financial'),
//     'add_new_item' => __('Add New Branch', 'axa_financial'),
//     'edit_item' => __('Edit Branch', 'axa_financial'),
//     'new_item' => __('New Branch', 'axa_financial'),
//     'all_items' => __('All Branches', 'axa_financial'),
//     'view_item' => __('View Branch', 'axa_financial'),
//     'search_items' => __('Search Branches', 'axa_financial'),
//     'not_found' =>  __('No branches found', 'axa_financial'),
//     'not_found_in_trash' => __('No branches found in Trash', 'axa_financial'),
//     'parent_item_colon' => '',
//     'menu_name' => __('Branch Locator', 'axa_financial')

//   );
//   $args = array(
//     'labels' => $labels,
//     'public' => true,
//     'publicly_queryable' => true,
//     'show_ui' => true,
//     'show_in_menu' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => _x( 'branch', 'URL slug', 'axa_financial' ) ),
//     'capability_type' => 'post',
//     'has_archive' => true,
//     'hierarchical' => false,
//     'menu_position' => null,
//     'supports' => array( 'title' )
//   );
//   register_post_type('branch', $args);
// }

// add_action( 'init', 'branch_pt_init' );


//Post Type : FAQ
function faq_pt_init() {
  $labels = array(
    'name' => _x('FAQ', 'post type general name', 'axa_financial'),
    'singular_name' => _x('FAQ', 'post type singular name', 'axa_financial'),
    'add_new' => _x('Add New', 'faq', 'axa_financial'),
    'add_new_item' => __('Add New FAQ', 'axa_financial'),
    'edit_item' => __('Edit Branch', 'axa_financial'),
    'new_item' => __('New FAQ', 'axa_financial'),
    'all_items' => __('All FAQ', 'axa_financial'),
    'view_item' => __('View FAQ', 'axa_financial'),
    'search_items' => __('Search FAQ', 'axa_financial'),
    'not_found' =>  __('No FAQ found', 'axa_financial'),
    'not_found_in_trash' => __('No FAQ found in Trash', 'axa_financial'),
    'parent_item_colon' => '',
    'menu_name' => __('FAQ', 'axa_financial')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => _x( 'faq', 'URL slug', 'axa_financial' ) ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor' )
  );
  register_post_type('faq', $args);
}

add_action( 'init', 'faq_pt_init' );

//Post Type : Formulir
function form_pt_init() {
  $labels = array(
    'name' => _x('Formulir', 'post type general name', 'axa_financial'),
    'singular_name' => _x('Formulir', 'post type singular name', 'axa_financial'),
    'add_new' => _x('Add New', 'formulir', 'axa_financial'),
    'add_new_item' => __('Add New Formulir', 'axa_financial'),
    'edit_item' => __('Edit Branch', 'axa_financial'),
    'new_item' => __('New Formulir', 'axa_financial'),
    'all_items' => __('All Formulir', 'axa_financial'),
    'view_item' => __('View Formulir', 'axa_financial'),
    'search_items' => __('Search Formulir', 'axa_financial'),
    'not_found' =>  __('No Formulir found', 'axa_financial'),
    'not_found_in_trash' => __('No Formulir found in Trash', 'axa_financial'),
    'parent_item_colon' => '',
    'menu_name' => __('Formulir', 'axa_financial')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => _x( 'form', 'URL slug', 'axa_financial' ) ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title' )
  );
  register_post_type('form', $args);
}

add_action( 'init', 'form_pt_init' );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/* ********************
* Limit post excerpts. Within theme files used as
* print string_limit_words(get_the_excerpt(), 20);
******************************************************************** */
function string_limit_words($string, $word_limit) {
$words = explode(' ', $string, ($word_limit + 1));
if(count($words) > $word_limit)
array_pop($words);
return implode(' ', $words);
}

/*Filter Search by Title*/

function __search_by_title_only( $search, &$wp_query )
{
    global $wpdb;
    if ( empty( $search ) )
        return $search; // skip processing - no search term in query
    $q = $wp_query->query_vars;
    $n = ! empty( $q['exact'] ) ? '' : '%';
    $search =
    $searchand = '';
    foreach ( (array) $q['search_terms'] as $term ) {
        $term = esc_sql( like_escape( $term ) );
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if ( ! empty( $search ) ) {
        $search = " AND ({$search}) ";
        if ( ! is_user_logged_in() )
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
add_filter( 'posts_search', '__search_by_title_only', 500, 2 );

 /*======================================================
 Custom Taxonomy Translation
======================================================*/
function qtranslate_edit_taxonomies(){
   $args=array(
      'public' => true ,
      '_builtin' => false
   );
   $output = 'object'; // or objects
   $operator = 'and'; // 'and' or 'or'

   $taxonomies = get_taxonomies($args,$output,$operator);

   if  ($taxonomies) {
     foreach ($taxonomies  as $taxonomy ) {
         add_action( $taxonomy->name.'_add_form', 'qtrans_modifyTermFormFor');
         add_action( $taxonomy->name.'_edit_form', 'qtrans_modifyTermFormFor');

     }
   }

}
add_action('admin_init', 'qtranslate_edit_taxonomies');

 /*======================================================
 Custom Post Type UI
======================================================*/
add_action('init', 'cptui_register_my_cpt_slide_personal');
function cptui_register_my_cpt_slide_personal() {
register_post_type('slide_personal', array(
    'label' => 'Slider Personal',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'slide_personal', 'with_front' => true),
    'query_var' => true,
    'supports' => array('title','editor'),
    'labels' => array (
      'name' => 'Slider Personal',
      'singular_name' => 'Slider Personal',
      'menu_name' => 'Slider Personal',
      'add_new' => 'Add Slider Personal',
      'add_new_item' => 'Add New Slider Personal',
      'edit' => 'Edit',
      'edit_item' => 'Edit Slider Personal',
      'new_item' => 'New Slider Personal',
      'view' => 'View Slider Personal',
      'view_item' => 'View Slider Personal',
      'search_items' => 'Search Slider Personal',
      'not_found' => 'No Slider Personal Found',
      'not_found_in_trash' => 'No Slider Personal Found in Trash',
      'parent' => 'Parent Slider Personal',
)
) ); }

add_action('init', 'cptui_register_my_cpt_slide_bisnis');
function cptui_register_my_cpt_slide_bisnis() {
register_post_type('slide_bisnis', array(
    'label' => 'Slider Bisnis',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'slide_bisnis', 'with_front' => true),
    'query_var' => true,
    'supports' => array('title','editor'),
    'labels' => array (
      'name' => 'Slider Bisnis',
      'singular_name' => 'Slider Bisnis',
      'menu_name' => 'Slider Bisnis',
      'add_new' => 'Add Slider Bisnis',
      'add_new_item' => 'Add New Slider Bisnis',
      'edit' => 'Edit',
      'edit_item' => 'Edit Slider Bisnis',
      'new_item' => 'New Slider Bisnis',
      'view' => 'View Slider Bisnis',
      'view_item' => 'View Slider Bisnis',
      'search_items' => 'Search Slider Bisnis',
      'not_found' => 'No Slider Bisnis Found',
      'not_found_in_trash' => 'No Slider Bisnis Found in Trash',
      'parent' => 'Parent Slider Bisnis',
    )
    ) ); }

add_action('init', 'cptui_register_my_cpt_slide_banner');
function cptui_register_my_cpt_slide_banner() {
register_post_type('slide_banner', array(
    'label' => 'Slider Banner',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'slide_banner', 'with_front' => true),
    'query_var' => true,
    'supports' => array('title','editor'),
    'labels' => array (
      'name' => 'Slider Banner',
      'singular_name' => 'Slider Banner',
      'menu_name' => 'Slider Banner',
      'add_new' => 'Add Slider Banner',
      'add_new_item' => 'Add New Slider Banner',
      'edit' => 'Edit',
      'edit_item' => 'Edit Slider Banner',
      'new_item' => 'New Slider Banner',
      'view' => 'View Slider Banner',
      'view_item' => 'View Slider Banner',
      'search_items' => 'Search Slider Banner',
      'not_found' => 'No Slider Banner Found',
      'not_found_in_trash' => 'No Slider Banner Found in Trash',
      'parent' => 'Parent Slider Banner',
)
) ); }

add_action('init', 'cptui_register_my_cpt_klaim');
function cptui_register_my_cpt_klaim() {
register_post_type('klaim', array(
    'label' => 'Pengajuan Klaim',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'klaim', 'with_front' => true),
    'query_var' => true,
    'supports' => array('title','editor'),
    'labels' => array (
      'name' => 'Pengajuan Klaim',
      'singular_name' => 'Pengajuan Klaim',
      'menu_name' => 'Pengajuan Klaim',
      'add_new' => 'Add Pengajuan Klaim',
      'add_new_item' => 'Add New Pengajuan Klaim',
      'edit' => 'Edit',
      'edit_item' => 'Edit Pengajuan Klaim',
      'new_item' => 'New Pengajuan Klaim',
      'view' => 'View Pengajuan Klaim',
      'view_item' => 'View Pengajuan Klaim',
      'search_items' => 'Search Pengajuan Klaim',
      'not_found' => 'No Pengajuan Klaim Found',
      'not_found_in_trash' => 'No Pengajuan Klaim Found in Trash',
      'parent' => 'Parent Pengajuan Klaim',
    )
    ) ); }

add_action('init', 'cptui_register_my_cpt_cust_care');
function cptui_register_my_cpt_cust_care() {
register_post_type('cust_care', array(
    'label' => 'Customer Care',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'cust_care', 'with_front' => true),
    'query_var' => true,
    'supports' => array('title'),
    'labels' => array (
      'name' => 'Customer Care',
      'singular_name' => 'Customer Care',
      'menu_name' => 'Customer Care',
      'add_new' => 'Add Customer Care',
      'add_new_item' => 'Add New Customer Care',
      'edit' => 'Edit',
      'edit_item' => 'Edit Customer Care',
      'new_item' => 'New Customer Care',
      'view' => 'View Customer Care',
      'view_item' => 'View Customer Care',
      'search_items' => 'Search Customer Care',
      'not_found' => 'No Customer Care Found',
      'not_found_in_trash' => 'No Customer Care Found in Trash',
      'parent' => 'Parent Customer Care',
    )
    ) ); }

add_action('init', 'cptui_register_my_cpt_rumah_sakit');
function cptui_register_my_cpt_rumah_sakit() {
register_post_type('rumah_sakit', array(
    'label' => 'Rumah Sakit',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'rumah_sakit', 'with_front' => true),
    'query_var' => true,
    'menu_position' => '5',
    'menu_icon' => 'https://www.axa-mandiri.co.id/wp-content/themes/axamandiri/images/icon-rs.png',
    'supports' => array('title'),
    'labels' => array (
      'name' => 'Rumah Sakit',
      'singular_name' => 'Rumah Sakit',
      'menu_name' => 'Rumah Sakit',
      'add_new' => 'Add Rumah Sakit',
      'add_new_item' => 'Add New Rumah Sakit',
      'edit' => 'Edit',
      'edit_item' => 'Edit Rumah Sakit',
      'new_item' => 'New Rumah Sakit',
      'view' => 'View Rumah Sakit',
      'view_item' => 'View Rumah Sakit',
      'search_items' => 'Search Rumah Sakit',
      'not_found' => 'No Rumah Sakit Found',
      'not_found_in_trash' => 'No Rumah Sakit Found in Trash',
      'parent' => 'Parent Rumah Sakit',
    )
    ) ); }

add_action('init', 'cptui_register_my_cpt_bengkel');
function cptui_register_my_cpt_bengkel() {
register_post_type('bengkel', array(
    'label' => 'Bengkel',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'bengkel', 'with_front' => true),
    'query_var' => true,
    'menu_position' => '6',
    'menu_icon' => 'https://www.axa-mandiri.co.id/wp-content/themes/axamandiri/images/icon-bengkel.png',
    'supports' => array('title'),
    'labels' => array (
      'name' => 'Bengkel',
      'singular_name' => 'Bengkel',
      'menu_name' => 'Bengkel',
      'add_new' => 'Add Bengkel',
      'add_new_item' => 'Add New Bengkel',
      'edit' => 'Edit',
      'edit_item' => 'Edit Bengkel',
      'new_item' => 'New Bengkel',
      'view' => 'View Bengkel',
      'view_item' => 'View Bengkel',
      'search_items' => 'Search Bengkel',
      'not_found' => 'No Bengkel Found',
      'not_found_in_trash' => 'No Bengkel Found in Trash',
      'parent' => 'Parent Bengkel',
    )
    ) ); }

add_action('init', 'cptui_register_my_cpt_kinerja_bulanan');
function cptui_register_my_cpt_kinerja_bulanan() {
register_post_type('kinerja_bulanan', array(
    'label' => 'Laporan Tahunan',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'laporan_tahunan', 'with_front' => true),
    'query_var' => true,
    'supports' => array('title','editor'),
    'labels' => array (
      'name' => 'Laporan Tahunan',
      'singular_name' => 'Laporan Tahunan',
      'menu_name' => 'Laporan Tahunan',
      'add_new' => 'Add Laporan Tahunan',
      'add_new_item' => 'Add New Laporan Tahunan',
      'edit' => 'Edit',
      'edit_item' => 'Edit Laporan Tahunan',
      'new_item' => 'New Laporan Tahunan',
      'view' => 'View Laporan Tahunan',
      'view_item' => 'View Laporan Tahunan',
      'search_items' => 'Search Laporan Tahunan',
      'not_found' => 'No Laporan Tahunan Found',
      'not_found_in_trash' => 'No Laporan Tahunan Found in Trash',
      'parent' => 'Parent Laporan Tahunan',
    )
    ) ); }

add_action('init', 'cptui_register_my_cpt_laporan_keuangan');
function cptui_register_my_cpt_laporan_keuangan() {
register_post_type('laporan_keuangan', array(
  'label' => 'Lap. Keuangan',
  'description' => '',
  'public' => true,
  'show_ui' => true,
  'show_in_menu' => true,
  'capability_type' => 'post',
  'map_meta_cap' => true,
  'hierarchical' => false,
  'rewrite' => array('slug' => 'laporan_keuangan', 'with_front' => true),
  'query_var' => true,
  'supports' => array('title','editor'),
  'labels' => array (
    'name' => 'Lap. Keuangan',
    'singular_name' => 'Lap. Keuangan',
    'menu_name' => 'Lap. Keuangan',
    'add_new' => 'Add Lap. Keuangan',
    'add_new_item' => 'Add New Lap. Keuangan',
    'edit' => 'Edit',
    'edit_item' => 'Edit Lap. Keuangan',
    'new_item' => 'New Lap. Keuangan',
    'view' => 'View Lap. Keuangan',
    'view_item' => 'View Lap. Keuangan',
    'search_items' => 'Search Lap. Keuangan',
    'not_found' => 'No Lap. Keuangan Found',
    'not_found_in_trash' => 'No Lap. Keuangan Found in Trash',
    'parent' => 'Parent Lap. Keuangan',
  )
  ) ); }

add_action('init', 'cptui_register_my_cpt_product_matrix');
function cptui_register_my_cpt_product_matrix() {
register_post_type('product_matrix', array(
    'label' => 'Product Matrix',
    'description' => '',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => true,
    'rewrite' => array('slug' => 'produk', 'with_front' => 1),
    'query_var' => true,
    'has_archive' => true,
    'supports' => array('title','editor','thumbnail'),
    'labels' => array (
      'name' => 'Product Matrix',
      'singular_name' => 'Product Matrix',
      'menu_name' => 'Product Matrix',
      'add_new' => 'Add Product Matrix',
      'add_new_item' => 'Add New Product Matrix',
      'edit' => 'Edit',
      'edit_item' => 'Edit Product Matrix',
      'new_item' => 'New Product Matrix',
      'view' => 'View Product Matrix',
      'view_item' => 'View Product Matrix',
      'search_items' => 'Search Product Matrix',
      'not_found' => 'No Product Matrix Found',
      'not_found_in_trash' => 'No Product Matrix Found in Trash',
      'parent' => 'Parent Product Matrix',
    )
    ) ); }

add_action('admin_enqueue_scripts','axamandiri_load_admin_script');
function axamandiri_load_admin_script( $hook ){
    wp_enqueue_script(
        'axamandiri_script', //unique handle
        get_template_directory_uri().'/js/admin_script.js', //location
        array('jquery')  //dependencies
     );
}
//Load Direktori
function directory_search_join( $join )
{
  global $wpdb;
  $join .= " LEFT JOIN directory_search ON " .
    $wpdb->posts . ".ID = " . "directory_search" .
    ".id ";
  return $join;
}

// Adding function all in one SEO to get description on page or post
// function to insert All-in-One SEO Pack description
function description_insert() {
  global $post; // VERY important!

  // Retrieve description meta data from the SEO Pack
  $seodesc = stripslashes(get_post_meta($post->ID, '_aioseop_description', true));

  // Default description in case none is specified for the page
  // Output the html code
  if (empty($seodesc)) {
    $seodesc = "Asuransi jiwa, kesehatan, pendidikan, dan perjalanan terbaik dari AXA Mandiri. Solusi proteksi untuk masa depan Anda &amp; keluarga";
    $seodesc_block = "<meta name=\"description\" content=\"".$seodesc."\"/>\n";
    echo $seodesc_block;
  }
}

// function to insert All-in-One SEO Pack keywords
function keyword_insert() {
 global $post; // VERY important!

 // Retrieve keyword meta data from the SEO Pack
 $seokeywords = stripslashes(get_post_meta($post->ID, '_aioseop_keywords', true));

 // Default keywords in case none are specified for the page
 // $seokeywords = (empty($seokeywords))? "<meta name=\"keywords\" content=\"AXA Mandiri Asuransi, AXA Mandiri, insurance\"/>\n" : "";
 $seokeywords = (empty($seokeywords))? "" : "";

 // Output the html code
 echo $seokeywords;
}

// function to insert All-in-One SEO Pack keywords
function title_insert() {
 global $post; // VERY important!

 // Retrieve keyword meta data from the SEO Pack
 $seokeywords = stripslashes(get_post_meta($post->ID, '_aioseop_title', true));

 // Default keywords in case none are specified for the page
 if (empty($seokeywords)) $seokeywords = wp_title('|',true,'');
 else $seokeywords .= wp_title('|',true,'');

 return $seokeywords;
}
// Adding function all in one SEO to get description on page or post

function directory_search_where( $where )
{
  global $wpdb,$keyword,$t,$tax;
  if($t == ''){
    $where .= " OR (directory_search.rs_alamat LIKE '%".$keyword."%' AND wp_posts.post_type IN ('rumah_sakit','kantorcabang')) OR (directory_search.wilayah LIKE '%".$keyword."%' AND wp_posts.post_type IN ('rumah_sakit','kantorcabang')) ";
  }elseif($t == 'rumah_sakit'){
    if($tax == 'agi') {
      $where .= " OR (directory_search.rs_alamat LIKE '%".$keyword."%' AND wp_posts.post_type IN ('rumah_sakit') AND  ( wp_term_relationships.term_taxonomy_id IN (1160) ) ) OR (directory_search.wilayah LIKE '%".$keyword."%' AND wp_posts.post_type IN ('rumah_sakit') AND  ( wp_term_relationships.term_taxonomy_id IN (1160) ))";
    }elseif($tax == 'amfs'){
      $where .= " OR (directory_search.rs_alamat LIKE '%".$keyword."%' AND wp_posts.post_type IN ('rumah_sakit') AND  ( wp_term_relationships.term_taxonomy_id IN (1150) ) ) OR (directory_search.wilayah LIKE '%".$keyword."%' AND wp_posts.post_type IN ('rumah_sakit') AND  ( wp_term_relationships.term_taxonomy_id IN (1150) ))";
    }elseif ($tax=='copsol') {
      $where .= " OR (directory_search.rs_alamat LIKE '%".$keyword."%' AND wp_posts.post_type IN ('rumah_sakit') AND ( wp_term_relationships.term_taxonomy_id IN (1199) )) OR (directory_search.wilayah LIKE '%".$keyword."%' AND wp_posts.post_type IN ('rumah_sakit') AND ( wp_term_relationships.term_taxonomy_id IN (1199) ))";
    } else {
      $where .= " OR (directory_search.rs_alamat LIKE '%".$keyword."%' AND wp_posts.post_type IN ('rumah_sakit')) OR (directory_search.wilayah LIKE '%".$keyword."%' AND wp_posts.post_type IN ('rumah_sakit'))";
    }

  }
  elseif($t == 'kantorcabang'){
    if($tax == 'agi') {
      $where .= " OR (directory_search.rs_alamat LIKE '%".$keyword."%' AND wp_posts.post_type IN ('kantorcabang') AND ( wp_term_relationships.term_taxonomy_id IN (1160) )) OR (directory_search.wilayah LIKE '%".$keyword."%' AND wp_posts.post_type IN ('kantorcabang') AND ( wp_term_relationships.term_taxonomy_id IN (1160) ))";
    }elseif($tax == 'amfs'){
      $where .= " OR (directory_search.rs_alamat LIKE '%".$keyword."%' AND wp_posts.post_type IN ('kantorcabang') AND ( wp_term_relationships.term_taxonomy_id IN (1150) )) OR (directory_search.wilayah LIKE '%".$keyword."%' AND wp_posts.post_type IN ('kantorcabang') AND ( wp_term_relationships.term_taxonomy_id IN (1150) ))";
    }else {
      $where .= " OR (directory_search.rs_alamat LIKE '%".$keyword."%' AND wp_posts.post_type IN ('kantorcabang')) OR (directory_search.wilayah LIKE '%".$keyword."%' AND wp_posts.post_type IN ('kantorcabang'))";
    }

  }
  elseif($t == 'bengkel'){
      $where .= " OR (directory_search.rs_alamat LIKE '%".$keyword."%' AND wp_posts.post_type IN ('bengkel')) OR (directory_search.wilayah LIKE '%".$keyword."%' AND wp_posts.post_type IN ('bengkel'))";
  }
  else
  {
    $where .= " OR (directory_search.rs_alamat LIKE '%".$keyword."%') OR (directory_search.wilayah LIKE '%".$keyword."%')";
  }
  return $where;
}
//Load Direktori

add_filter('body_class','add_category_to_single');
function add_category_to_single($classes) {
  if (is_single() ) {
    global $post;
    foreach((get_the_category($post->ID)) as $category) {
      // add category slug to the $classes array
      $classes[] = $category->category_nicename;
    }
  }
  // return the $classes array
  return $classes;
}

//function add alt img
function add_alt_tags($content)
{
        global $post;
        preg_match_all('/<img (.*?)\/>/', $content, $images);
        if(!is_null($images))
        {
                foreach($images[1] as $index => $value)
                {
                        if(!preg_match('/alt=/', $value))
                        {
                                $new_img = str_replace('<img', '<img alt="'.$post->post_title.'"', $images[0][$index]);
                                $content = str_replace($images[0][$index], $new_img, $content);
                        }
                }
        }
        return $content;
}
add_filter('the_content', 'add_alt_tags', 99999);

if (!function_exists('wp_normalize_path')):
function wp_normalize_path( $path ) {
  $path = str_replace( '\\', '/', $path );
  $path = preg_replace( '|/+|','/', $path );
  return $path;
}
endif;

//max upload size
function upload_size_limit_filterw( $size )
{
  return 34000000;//Size in Kb
}
add_filter( 'upload_size_limit', 'upload_size_limit_filterw',12 );

require_once __DIR__ . '/functions/custom_url.php';
require_once __DIR__ . '/functions/menu.php'; // menu helpers
require_once __DIR__ . '/functions/file_detail.php';
require_once __DIR__ . '/functions/widget_livechat.php';
require_once __DIR__ . '/functions/remarketing_health_product.php';

?>
