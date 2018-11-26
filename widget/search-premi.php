<div id="search-premi" class="clearfix">
    <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
            <input type="text" value="" name="s" id="premi-polis" placeholder="<?php _e("<!--:en-->What can we help you? (ex. premium payment or diversion policy).<!--:--><!--:id-->Apa yang bisa kami bantu? (cth. pembayaran premi atau pengalihan polis)<!--:-->"); ?>" />
            <input type="hidden" name="t" value="layanan">
            <div class="buttonContainer desktop-content">
            	<button type="submit" id="premisearch" class="button"><?php _e("<!--:en-->Search<!--:--><!--:id-->Cari<!--:-->"); ?></button>
            	<span>atau</span>
            	<a href="<?php echo site_url('hubungi-kami/');?>" class="button"><?php _e("<!--:en-->Contact Us<!--:--><!--:id-->Hubungi Kami<!--:-->"); ?></a>
            </div>

</div>
    </form>