<?php 
    //Get current page slug
    $slug = basename(get_permalink());
    $arr_slug=explode('-',$slug);

    // Get RSS Feed(s)
    include_once( ABSPATH . WPINC . '/feed.php' );

    // Get a SimplePie feed object from the specified feed source.
    // if ($slug=='solusi-kesehatan') {
    //      $rss = fetch_feed( "http://feeds.feedburner.com/InspirasiKesehatan?format=xml" );    
    // }elseif($slug=='solusi-investasi'){
    //      $rss = fetch_feed( "http://feeds.feedburner.com/InspirasiInvestasi?format=xml" );    
    // }
    // elseif($slug=='solusi-kendaraan'){
    //     $rss = fetch_feed( "http://feeds.feedburner.com/InspirasiKendaraan?format=xml" );    
    // }
    // elseif($slug=='solusi-finansial'){
    //     $rss = fetch_feed( "http://feeds.feedburner.com/InspirasiFinansial?format=xml" );    
    // }
    // elseif($slug=='solusi-lifestyle'){
    //     $rss = fetch_feed( "http://feeds.feedburner.com/InspirasiLifestyle?format=xml" );    
    // }
    // elseif($slug=='solusi-pendidikan'){
    //     $rss = fetch_feed( "http://feeds.feedburner.com/InspirasiPendidikan?format=xml" );    
    // }
    // elseif($slug=='solusi-pensiun'){
    //     $rss = fetch_feed( "http://feeds.feedburner.com/InspirasiPensiun?format=xml" );    
    // } 
    // elseif($slug=='solusi-proteksi'){
    //     $rss = fetch_feed( "http://feeds.feedburner.com/InspirasiProteksi?format=xml" );    
    // }   
    // elseif($slug=='solusi-umum'){
    //     $rss = fetch_feed( "http://feeds.feedburner.com/InspirasiUmum?format=xml" );    
    // } 
    // elseif($slug=='solusi-travel'){
    //     $rss = fetch_feed( "http://feeds.feedburner.com/InspirasiTravel?format=xml" );    
    // }
    // else{
    //      $rss = fetch_feed( "http://feeds.feedburner.com/co/kIrU?format=xml" );   
    // }       

   // $rss = fetch_feed( "http://feeds.feedburner.com/co/kIrU?format=xml" ); 
    $rss = fetch_feed( "https://axa.co.id/inspirasi/?feed=short" ); 
    if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

        // Figure out how many total items there are, but limit it to 5. 
        $maxitems = $rss->get_item_quantity( 1 ); 

        // Build an array of all the items, starting with element 0 (first element).
        $rss_items = $rss->get_items( 0, $maxitems );

    endif;

    //This function will get an image from the feed
     
    // function returnImage ($text) {
    //     $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
    //     $pattern = "/<img[^>]+\>/i";
    //     preg_match($pattern, $text, $matches);
    //     $text = $matches[0];
    //     return $text;
    // }
     
    // //This function will filter out image url which we got from previous returnImage() function
    // function scrapeImage($text) {
    //     $pattern = '/src=[\'"]?([^\'" >]+)[\'" >]/';     
    //     preg_match($pattern, $text, $link);
    //     $link = $link[1];
    //     $link = urldecode($link);
    //     return $link;
    // }

    
?>


 <?php if (!empty($rss_items)) {
  foreach ( $rss_items as $items ) :
        $categorys = $items->get_category();
 ?>
<?php endforeach;
}?>

<div id="inspirasi-section" class="small">
<div class="row">
    <div id="intro" class="large-10 columns medium-text-center">
       
        <div class="header3_home_inspirasi"><span></span>Inspirasi <strong><?=$categorys->get_label();?></strong></div>
        <div id="article-list">
            <?php if ( $maxitems == 0 ) : ?>
               <div class="post nth-child-<?=$count?> clearfix">Maaf, konten belum tersedia</div>
            <?php else : ?>
                <?php // Loop through each feed item and display each item as a hyperlink. ?>
                <?php $count = 1;  foreach ( $rss_items as $item ) : 
                
                $enclosure = $item->get_enclosure();
                $feedDescription = $item->get_description();
                // $image = returnImage($feedDescription);
                // $image = scrapeImage($image);
                ?>

                <div class="post nth-child-<?=$count?> clearfix">
                    <h4><a href="<?php echo esc_url( $item->get_permalink() ); ?>" target="_blank"><?php echo esc_html( $item->get_title() ); ?></a></h4>
                </div>
                     
            <?php $count++;  endforeach; ?>
        <?php endif; ?>
        </div><!--END ARTICLE LIST-->
    </div>
    <div id="lihat-pilihan" class="large-2 columns large-text-right">
        <a href="https://axa.co.id/inspirasi" target="_blank">Lihat Pilihan Artikel <i class="fa fa-angle-down"></i></a>
    </div>
    </div><!--end row-->
</div>
