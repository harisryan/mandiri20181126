<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: ".site_url(''));

exit();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?><?php wp_title('|',true,''); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="definite.co.id" name="author">

        <!-- CSS Styles  -->
        <link href="<?php bloginfo('template_url');?>/css/normalize.css" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet">

        <link href="<?php bloginfo('template_url');?>/css/mobile.css" rel="stylesheet">

        <!-- Favicon and touch icons  -->
        <link href="<?php bloginfo('template_url');?>/favicon.png" rel="shortcut icon">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
      	<script src="<?php bloginfo('template_url');?>/js/html5shiv.min.js"></script>
    	<![endif]-->

        <?php wp_head();
        description_insert('');// addding meta description
        ?>
        <script type="text/javascript">
            var bloginfo = '<?php bloginfo('template_url'); ?>';
            function bodyHeight(){
                height = $(window).height();
                $('body').css("height",height+"px");
                 console.log (height);
            }

              $(window).resize(bodyHeight);
              $(window).load(bodyHeight);


        </script>
    </head>
    <body class="separationpage">
        <div class="cp-display--none">
          <h1>AXA Indonesia</h1>
          <h2>Redefining Insurance</h2>
        </div>
        <a href="http://sudahdistaging.com/axaone/home/" title="axa" class="axa-left"></a>
        <a href="<?php echo site_url('home/');?>" title="axa mandiri" class="axa-right"></a>
        <div id="wrapper">
            <div id="panel">
                <div class="box p-all-30">
                    <div class="left">
                        <a href="http://sudahdistaging.com/axaone/home/"><img src="<?php bloginfo('template_url');?>/images/logo-axa.png" alt="logo-axa"></a>
                        <p class="c-blue m-top-40"><strong>AXA</strong> beroperasi dengan fokus pada asuransi jiwa, asuransi umum dan manajemen aset melalui beragam jalur distribusi.</p>

                        <a href="http://sudahdistaging.com/axaone/home/" class="btn f-18 c-white block block absolute bottom-15 left-25 block cp-panel--padding">AXA</a>
                    </div>
                    <div class="right">
                        <div class="text-right">
                             <a href="<?php echo site_url('home/');?>"><img src="<?php bloginfo('template_url');?>/images/logo-axa-mandiri.png" alt="logo-axa-mandiri"></a>
                         </div>
                            <p class="c-blue m-top-20"><strong>AXA Mandiri</strong> berkomitmen untuk memberikan solusi perlindungan terbaik di setiap tahap kehidupan nasabah. </p>

                            <a href="<?php echo site_url('home/');?>" class="btn f-18 c-white block absolute bottom-15 right-20 cp-panel--heading">AXA MANDIRI</a>
                    </div>
                 </div>
                <div class="bottomSection cp-display--none">
                    <a class="btn left"  href="http://sudahdistaging.com/axaone/home/"><span class="fa fa-angle-double-left"></span> &nbsp; &nbsp; AXA</a>
                    <a class="btn right" href="<?php echo site_url('home/');?>">AXA MANDIRI &nbsp; &nbsp;  <span class="fa fa-angle-double-right"></span></a>
                </div>
            </div>
            <footer id="footer-copyright">
                <p><a href="<?php echo site_url();?>/disclaimer" class="cp-color--yellow" target="_blank">Disclaimer &amp; Ownership.</a> Copyright <?=date('Y')?> AXA Mandiri Financial Services</p>

            </footer>
         </div>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-33864921-7']);
            _gaq.push(['_trackPageview']);
            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>
