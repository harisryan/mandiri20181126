<section id="layanan-submenu" class="clearfix sections white">
    <h3 role="heading" aria-level="3"><?php /* _e("<!--:en-->Select the service you need<!--:--><!--:id-->Pilih layanan yang Anda butuhkan<!--:-->"); */
                 _e("Pilih layanan yang Anda butuhkan"); ?></h3>
    <p class="f-16">Kami siap membantu Anda dalam setiap tahap mewujudkan keamanan finansial.</p>
     <?php $layananmenu = array(
                'theme_location'  => '',
                'container'       => '',
                'menu'            => 'Layanan Nasabah',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'items_wrap'      => '<ul id="service-menu" class="%2$s desktop-content clearfix small-block-grid-2 medium-block-grid-2 large-block-grid-4">%3$s</ul>',
                'depth'           => 0,
                'link_before' => '<div class="items"><span></span><h2>', 'link_after' => '</h2></div>'
            );
        wp_nav_menu( $layananmenu );?>

        <div class="mobile-content">
        <?php 
            wp_nav_menu(array(
              'theme_location' => 'layanan_menu', // your theme location here
              'walker'         => new Walker_Nav_Menu_Dropdown(),
              'items_wrap'     => '<select id="layanan-submenu-mobile" class="mobile-content"><option>Pilih Layanan</option>%3$s</select>',
            ));
        ?>
        </div>
</section>

