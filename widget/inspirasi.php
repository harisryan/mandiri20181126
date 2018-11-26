<div id="inspirasi-section" class="expanded">
<div class="row">
    <div id="intro" class="text-center large-6 columns large-centered">
        <div class="header3_home_inspirasi"><span></span>Inspirasi</div>
        <p>Temukan dunia inspirasi AXA, menghadirkan berbagai artikel mengenai topik seputar kesehatan, gaya hidup, pendidikan dan topik seru lainnya.</p>
    </div>
<?php // Get RSS Feed(s)
include_once( ABSPATH . WPINC . '/feed.php' );

// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed( 'http://feeds.feedburner.com/co/EhwK?format=xml' );

if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity( 2 ); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items( 0, $maxitems );

endif;

//This function will get an image from the feed
 
function returnImage ($text) {
    $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
    $pattern = "/<img[^>]+\>/i";
    preg_match($pattern, $text, $matches);
    $text = $matches[0];
    return $text;
}
 
//This function will filter out image url which we got from previous returnImage() function
function scrapeImage($text) {
    $pattern = '/src=[\'"]?([^\'" >]+)[\'" >]/';     
    preg_match($pattern, $text, $link);
    $link = $link[1];
    $link = urldecode($link);
    return $link;
}
?>
<ul id="article-post" class="large-block-grid-2">
    <?php if ( $maxitems == 0 ) : ?>
        <li>belum ada konten</li>
    <?php else : ?>
        <?php // Loop through each feed item and display each item as a hyperlink. ?>
        <?php $count = 1;  foreach ( $rss_items as $item ) : 
        $category = $item->get_category();
        $enclosure = $item->get_enclosure();
        $feedDescription = $item->get_description();
        $image = returnImage($feedDescription);
        $image = scrapeImage($image);
        ?>

            <li class="post nth-child-<?=$count?> clearfix">
                <div class="large-6 columns thumbnail large-push-6" style="background:url(<?=$image?>) no-repeat top center;">
                    <a href="<?php echo esc_url( $item->get_permalink() ); ?>" aria-label="<?php echo $category->get_label() ?>">
                    <div class="overlay"><img src="<?php bloginfo('template_url');?>/images/widget/separator.png" class="separator" alt="icon-axa"><span>Selengkapnya</span></div>
                    </a>
                </div>
                <div class="details large-6 columns large-pull-6">                          
                    <div class="meta clearfix">
                        <div class="category large-6 small-6 columns">
                            <?=$category->get_label();?>
                            
                        </div>
                        <!-- <div class="date large-6 small-6 columns small-text-right large-text-right" title="<?php echo esc_html( $item->get_date('Y-m-d H:i:s')); ?>"><?php echo esc_html( $item->get_date('Y-m-d H:i:s')); ?></div> -->
                    </div>
                    <div class="header_3_list_inspirasi"><a href="<?php echo esc_url( $item->get_permalink() ); ?>"><span><?php echo esc_html( $item->get_title() ); ?></span></a></div>
                
                </div>
                 
            </li>
        <?php $count++;  endforeach; ?>
    <?php endif; ?>
</ul>
    <div class="toggleNav">
        <a href="#"><span class="tutup c-white">Tutup1 <i class="fa fa-chevron-circle-up"></i></span><span class="buka c-white">Buka <i class="fa fa-chevron-circle-down"></i></span></a>
    </div>
</div>
</div>