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
        <div id="customer-care-footer" class="large-3 columns">
            <div class="main-sites right m-top-15">
                <p id="footer-customer">Customer Care Centre</p>
                <a href="tel:+622130058788" ><p class="headerphone">+62 21 3005 8788</p></a>
                <p id="temukan">Temukan Kami</p>
            </div>
             <div id="social-footer" class="clearfix">
                <?php if(get_field('axa_mandiri_socmed', 'options')): ?>
                    <?php while(has_sub_field('axa_mandiri_socmed', 'options')): ?>
                        <div class="social-icons">
                            <a href="<?php the_sub_field('youtube'); ?>" target="_blank" class="icons youtube" ><i class="fa fa-youtube-play"></i></a>
                            <a href="<?php the_sub_field('facebook'); ?>" target="_blank" class="icons facebook"><i class="fa fa-facebook"></i></a>
                            <a href="<?php the_sub_field('twitter'); ?>" target="_blank" class="icons twitter"><i class="fa fa-twitter"></i></a>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
            </div>
        </div>
    </div>
</footer>

<footer id="footer-copyright" aria-label="footer copyright">
    <p><a href="<?php echo site_url();?>/disclaimer" class="cp-color--yellow" target="_blank">Disclaimer &amp; Ownership.</a> Copyright <?=date('Y')?> AXA Mandiri. <br> AXA Mandiri merupakan perusahaan asuransi yang terdaftar dan diawasi oleh Otoritas Jasa Keuangan</p>

</footer>




    <script type="text/javascript">
        if (!window._laq) { window._laq = []; }
        window._laq.push(function(){liveagent.showWhenOnline('5736F0000000FeC', document.getElementById('liveagent_button_online_5736F0000000FeC'));
        liveagent.showWhenOffline('5736F0000000FeC', document.getElementById('liveagent_button_offline_5736F0000000FeC'));
        });
    </script>
    <script type='text/javascript' src='https://c.la10.salesforceliveagent.com/content/g/js/37.0/deployment.js'></script>
    <script type='text/javascript'>
        liveagent.init('https://d.la10.salesforceliveagent.com/chat', '5726F0000000FC7', '00D90000000zAlz');
    </script>

    <!-- https://servicecloudtrial-155c0807bf-1567dbb608d.force.com/resource/1471492069000/IconChat -->
    <!-- https://servicecloudtrial-155c0807bf-1567dbb608d.force.com/resource/1471492926000/ChatOffline -->

    <a class="exit-off-canvas"></a>
  </div>
</div>
<!-- <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.async=true;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<div id="fb-root"></div>

​<script type="text/javascript">
var addthis_config = addthis_config||{};
addthis_config.data_track_addressbar = false;
addthis_config.data_track_clickback = false;
</script> -->
<?php wp_footer();?>
<!--[if lt IE 9]>
       <script type="text/javascript">
        jQuery(document).ready(function() {
        jQuery(".popup_box").fancybox({
            margin      : 0,
            maxWidth    : 300,
            maxHeight   : 315,
            fitToView   : true,
            scrolling   : "no",
            padding: 0,
            }).trigger('click');
        });
        </script>

        <div class="popup_box cp-popup--ie">
            <h3 class="cp-popup--ie_heading">Selamat Datang di Website AXA Indonesia</h3>
            <p class="cp-popup--ie_help">Mohon untuk melakukan upgrade<br>
                pada web browser Anda<br>
                untuk tampilan optimal.</p>
        </div>
    <![endif]-->
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

        /*livechat*/
        .liveagents{
            position: fixed;
            right: 60px;
            bottom: 18px;
            z-index: 10;
            height: 42px;
            overflow: inherit;
            border-radius: 4px;
            width: 210px;
            padding: 7px 30px;
            transition: all 0.1s ease-in-out 0s;
        }

        .liveagents:hover{
            color: #00539B;
        }

        .liveagent{
            position: fixed;
            right: 20px;
            bottom: 18px;
            z-index: 10000;
            background: #fff;
            height: 42px;
            overflow: hidden;
            border-radius: 4px;
            width: 210px;
            padding: 7px 30px;
            transition: all 0.1s ease-in-out 0s;
        }

        .liveagent label{
            color: #0F2E86;
            display: inline-block;
            font-size: calc(17/16 * 100%);
        }

        .liveagent img{
            height: 30px;
            display: inline-block;
            margin-right: 15px;
        }

        .liveagent i{
            font-size: 100%;
            font-weight: bold;
            color: #145C8F;
            position: absolute;
            bottom: 1px;
            right: 7px;
            z-index: 9;
        }

        .liveagent_online::after{
            height: 0;
            width: 0;
            border: 50px solid transparent;
            border-right: 40px solid #FFD200;
            content: '';
            position: absolute;
            top: -2px;
            right: 0;
        }

        .liveagent_offline::after{
            height: 0;
            width: 0;
            border: 50px solid transparent;
            border-right: 40px solid #DDD;
            content: '';
            position: absolute;
            top: -2px;
            right: 0;
        }

        .stuck{
            bottom: 95px !important;
        }

        #liveagent-details{
            display: none;
            text-align: center;
            background: url("<?php echo bloginfo('template_url');?>/images/bg-details-custcare.jpg") top center no-repeat;
            margin-top: -5px;
            border: 1px solid #E7E7E7;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            margin-top: -150px;
            min-width: 210px;
            margin-left: -30px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
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

    <?php if ( is_page('epolicy') ):?>
    <script>

        $(document).ready(function() {
        $.ajax({
        type: 'POST',
        url: "https://axa-epolicy.visionet.co.id/axamandiriuat/epolicy",
        beforeSend: function () {
        },
        success: function (response) {
        $("#vsn-content").html(response);
        }
        });
        });
    </script>
    <?php endif;?>

  </body>
</html>
