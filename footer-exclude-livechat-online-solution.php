<!--additional field-->
<?php the_field('scripts'); ?>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 944189977;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/944189977/?guid=ON&amp;script=0"/>
</div>
</noscript>

<footer id="footer" class="" aria-label="footer">
    <div class="row">
        <div id="link-cepat-footer" class="large-6  columns clearfix">
            <div class="footer-menu">
            <h5 role="heading" aria-level="5"><?php /* _e("<!--:en-->Quick Menu<!--:--><!--:id-->Link Cepat<!--:-->"); */
                        _e("Link Cepat"); ?></h5>
              <?php $quickmenu = array(
                        'theme_location'  => '',
                        'container'       => '',
                        'menu'            => 'Link Cepat',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                    );
                wp_nav_menu( $quickmenu );?>
                <?php $linkcepat2 = array(
                        'theme_location'  => '',
                        'container'       => '',
                        'menu'            => 'Link Cepat 2',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                    );
                wp_nav_menu( $linkcepat2 );?>
            </div>
        </div>
        
    </div>
</footer>

<footer id="footer-copyright" aria-label="footer copyright">
    <p><a href="<?php echo site_url();?>/disclaimer" class="cp-color--yellow" target="_blank">Disclaimer &amp; Ownership.</a> Copyright <?=date('Y')?> AXA Mandiri. <br> AXA Mandiri merupakan perusahaan asuransi yang terdaftar dan diawasi oleh Otoritas Jasa Keuangan</p>

</footer>
   
    <a class="exit-off-canvas"></a>
  </div>
</div>

<?php wp_footer();?>
    <style type="text/css">
        img[width="1"] {display: none;}
        #fixed-navigation .row {
            max-width: 73.75em;
        }

        .search-menu {
            position: relative;
        }

        #search-wrap {
            position: absolute;
            bottom: -71px;
            left: 0;
            padding: 20px 15px;
            background: white;
            display: none;
            border: 1px solid #ecf1fc;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        #fixed-navigation ul.other.active #search-wrap {
            display: block;
        }

        .stuck{
            bottom: 95px !important;
        }

        @media screen and (min-width: 640px) {
            .liveagent{
                right: 60px;
            }
        }
    </style>
   
    <script>
      $(document).ready(function() {
        $(document).foundation();
      });
    </script>

  </body>
</html>
