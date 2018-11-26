<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
// var_dump(get_post_type( get_the_ID() ) , $post->ID);exit();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo title_insert(); ?></title>
        <!-- <title><?php //bloginfo('name'); ?><?php //wp_title('|',true,''); ?></title> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta content="AXA Indonesia" name="author">
        <!-- <meta name="google-site-verification" content="l-nf00HSUyEEzcuKkoq_BTEcsVpfns1tIE6vSZuPKRM" /> -->
        <!-- <meta name="google-site-verification" content="9TvhTcLdwd0jmOu-WX5tG_xC_aSf2U7QXHx50W8xMMA" /> -->
        <!-- <meta name="google-site-verification" content="9TvhTcLdwd0jmOu-WX5tG_xC_aSf2U7QXHx50W8xMMA" /> -->
		<meta name="google-site-verification" content="FFsCT88yPhgNa0GgCB_MfM5G-U6FCRwI8k7XVekMyTs" />
        <?php
        if ($_SERVER['HTTP_HOST'] == 'axamandiri.sudahdistaging.com') {
            echo '<META NAME="robots" CONTENT="noindex,nofollow">';
        }

        description_insert('');// addding meta description
        keyword_insert('');//adding meta keyword
        ?>

        <!-- CSS Styles  -->
        <link href="<?php bloginfo('template_url');?>/css/normalize.css" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet">

        <link href="<?php bloginfo('template_url');?>/css/mobile.css" rel="stylesheet">

        <!-- Favicon and touch icons  -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url');?>/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url');?>/images/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url');?>/images/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php bloginfo('template_url');?>/images/favicon/manifest.json">
        <link rel="mask-icon" href="<?php bloginfo('template_url');?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>

        <![endif]-->

		<!--SmartTech-->
		<script src='//tw.netcore.co.in/smartechclient.js'></script>
		<script>
			smartech('create', 'ADGMOT35CHFLVDHBJNIG50K969I3LV6J55R3QMS3SJD2OELVUIR0');
			smartech('register', '45768f696be7bc1905b4c913b858c631');
			smartech('identify', '');
			smartech('dispatch', 1, {})
		</script>
		 <!--End of SmartTech-->

        <script src="//www.google.com/jsapi?key=AIzaSyCe8_LRA-Qf-w6WvnRYleuAO3V-BfDMJLg"></script>

		<!--Visionet-->
		<meta name="referrer" content="no-referrer-when-downgrade" />

        <?php wp_head();?>
        <script type="text/javascript">
            var bloginfo = '<?php bloginfo('template_url'); ?>';
            var baseurl = '<?php echo site_url();?>';
        </script>

        <?php
            $nullImg = get_template_directory_uri()."/img/null.png";
            // echo $nullImg;
        ?>

        <?php if (!is_front_page()) { ?>
            <?php /* _e("<!--:en--><script src='https://maps.google.com/maps/api/js?sensor=true&amp;language=en' type='text/javascript'></script><!--:-->
            <!--:id--><script src='https://maps.google.com/maps/api/js?sensor=true&amp;language=id' type='text/javascript'></script><!--:-->"); */
                    _e("<script src='https://maps.google.com/maps/api/js?sensor=true&amp;language=id' type='text/javascript'></script>"); ?>
            <script type='text/javascript' src='<?php bloginfo('template_directory') ?>/js/vendor/markerclusterer.js'></script>
            <script src="<?php bloginfo('template_directory') ?>/js/vendor/gmap3.min.js" type="text/javascript" defer></script>
        <?php } ?>
        <?php if( $post->post_name == 'asuransi-mandiri-jaminan-kesehatan' ): ?>
        <script>
            function randomid() {
                var lead = Math.floor(Math.random() * (999999 - 100000 + 1)) + 100000;
                return lead;
            }

            var idlead = document.getElementsByName("leadid")[0].value;

            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push [{
                'leadid': idlead
            }];
        </script>
        <?php endif; ?>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TGT2VSR');</script>
		<!-- End Google Tag Manager -->
        <?php
            $additional_class = '';
            $number = "";
            $imgNotif = plugins_url( 'techno-development-axa/assets/notif.png', 'techno-development-axa'  );
            $imgNotifBiru = plugins_url( 'techno-development-axa/assets/notif-biru.png', 'techno-development-axa'  );
            $imgNotifPutih = plugins_url( 'techno-development-axa/assets/notif-putih.png', 'techno-development-axa'  );
            if( function_exists('axa_get_ballon_class')) {
                $additional_class = axa_get_ballon_class();
                $number = get_option('ballon_number');
            }
        ?>
        <style>
            .ballon-active .ballon-menu > a{
                position: relative;
            }

            .ballon-active #fixed-navigation .ballon-menu > a:after,
            .ballon-active .ballon-menu > a:after{
                content: "";
                position: absolute;
                top: -15px;
                text-align: center;
                width: 25px;
                z-index: 2;
                height: 25px;
                background: url('<?php echo $imgNotif ?>') no-repeat;
            }

            .ballon-active #fixed-navigation .ballon-menu > a:after{
                background: url('<?php echo $imgNotif ?>') no-repeat;
            }

            .ballon-active #fixed-navigation .ballon-menu > a:before,
            .ballon-active .ballon-menu > a:before{
                content: "<?php echo $number; ?>";
                position: absolute;
                top: -14px;
                font-size: 13px;
                right: -15px;
                z-index: 3;
            }

            .ballon-active #fixed-navigation .ballon-menu > a:before{
                color: #fff;
            }

            .ballon-active .ballon-menu > a:before{
                color: #fff;
            }

            .ballon-active .ballon-menu{
                background: #fff !important;
            }

            .ballon-active .ballon-menu > a{
                color: #00539B !important;
            }

            .ballon-active .ballon-menu.expanded > a{
                color: #fff !important;
            }

            .ballon-active #fixed-navigation .ballon-menu{
                background: #00539B !important;
            }

            .ballon-active #fixed-navigation .ballon-menu > a .title-menu.fix,
            .ballon-active #fixed-navigation .ballon-menu > a{
                color: #fff !important;
            }

            .ballon-active #fixed-navigation .sub-menu .ballon-menu > a,
            .ballon-active .sub-menu .ballon-menu > a{
                position: relative;
            }

            .ballon-active #fixed-navigation .sub-menu .ballon-menu > a:before,
            .ballon-active .sub-menu .ballon-menu > a:before{
                content: "<?php echo $number; ?>";
                position: absolute;
                top: -16px;
                font-size: 13px;
                right: -14px;
                z-index: 3;
            }

            .ballon-active #fixed-navigation .ballon-menu > a:before{
                top: -23px;
            }

            .ballon-active #fixed-navigation .sub-menu .ballon-menu > a:after,
            .ballon-active .sub-menu .ballon-menu > a:after{
                content: "";
                position: absolute;
                right: 0;
                top: -4px;
                right: -23px;
                text-align: center;
                width: 25px;
                height: 25px;
            }

            .ballon-active .sub-menu .ballon-menu{
                background: #0e46a3 !important;
            }

            .ballon-active .sub-menu .ballon-menu.hovered{
                background: #073b91 !important
            }

            .ballon-active .sub-menu .ballon-menu a{
                color: #fff !important;
            }

            .ballon-active #fixed-navigation .sub-menu .ballon-menu > a:after{
                background: url('<?php echo $imgNotif ?>') no-repeat;
            }

            .ballon-active #fixed-navigation .sub-menu .ballon-menu > a:before{
                color: #fff;
            }

            .ballon-active #fixed-navigation .ballon-menu{
                position: relative;
            }

            .ballon-active #fixed-navigation .ballon-menu.expanded .sub-menu .ballon-menu,
            .ballon-active #fixed-navigation .ballon-menu.expanded{
                position: inherit;
            }

            .ballon-active #fixed-navigation .ballon-menu:after{
                content: "";
                width: 100%;
                bottom: -1px;
                left: 0;
                height: 1px;
                background: #00539b;
                position: absolute;
            }

            .ballon-active #fixed-navigation .ballon-menu.expanded .sub-menu .ballon-menu:after{
                height: 0;
            }

            .ballon-active #fixed-navigation .ballon-menu.expanded .sub-menu .ballon-menu{
                background: #0e46a3 !important;
            }

            .ballon-active #fixed-navigation .ballon-menu.expanded .sub-menu .ballon-menu.hovered{
                background: #073b91 !important
            }

            .ballon-active #fixed-navigation .ballon-menu.expanded .sub-menu .ballon-menu a{
                color: #fff !important;
            }

            .ballon-active .off-canvas-list .ballon-menu > a{
                position: relative;
            }

            .ballon-active .off-canvas-list .ballon-menu > a:after{
                right: 0;
                font-size: 12px;
                background: none;
            }

            .ballon-active .off-canvas-list .ballon-menu > a:before{
                content: "";
                right: 10px;
            }

            .ballon-active .off-canvas-list .ballon-menu > a > span{
                position: relative;
            }

            .ballon-active .off-canvas-list .ballon-menu > a > span:after {
                content: "";
                background: url('<?php echo $imgNotif ?>') no-repeat;
                height: 25px;
                width: 25px;
                position: absolute;
                top: -13px;
                right: -27px;
            }

            .ballon-active .off-canvas-list .ballon-menu > a > span:before{
                content:"<?php echo $number; ?>";
                position: absolute;
                top: -14px;
                right: -18px;
                z-index: 3;
                color: #fff;
            }

            .ballon-active .off-canvas-list .ballon-menu{
                background: inherit !important;
            }

            .ballon-active .off-canvas-list .ballon-menu a{
                color: rgba(255, 255, 255, 0.7) !important;
            }
        </style>
    </head>
    <body <?php body_class($additional_class); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe title="googletagmanager" src="https://www.googletagmanager.com/ns.html?id=GTM-TGT2VSR"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!-- TAG Conversion -->
	<script type="text/javascript">
		(function() {
			if('<?=get_the_title()?>' == "Terima Kasih")
			{
				var MTBADVS = window.MTBADVS = window.MTBADVS || {}; MTBADVS.ConvContext = MTBADVS.ConvContext || {}; MTBADVS.ConvContext.queue = MTBADVS.ConvContext.queue || [];
				MTBADVS.ConvContext.queue.push({
					"advertiser_id": 5897,
					"price": 0,
					"convtype": 4,
					"dat": ""
				});
				var el = document.createElement('script'); el.type = 'text/javascript'; el.async = true;
				el.src = (('https:' == document.location.protocol) ? 'https://' : 'http://') + 'js.mtburn.com/advs-conversion.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(el, s);
			}
		})();
	</script>
	<!-- END -->

    <div class="off-canvas-wrap">
    <div class="inner-wrap">
    <header id="header" class="desktop-content" aria-label="header">
        <div class="row">
                <div id="topSection" class="clearfix">
                    <div id="menuLeft" class="left">
                        <div id="left_menu">
                            <ul class="clearfix">
                                <li><a href="<?php echo site_url('hubungi-kami');?>">Hubungi kami</a></li>
                                <li><a href="<?php echo site_url('media');?>">Media</a></li>
                                <!-- <li><?php// echo qtrans_generateLanguageSelectCode('both'); ?></li> -->
                            </ul>
                        </div>

                        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                            <input type="text" value="" name="s" id="s" placeholder="<?php /* _e("<!--:en-->Search...<!--:--><!--:id-->Cari...<!--:-->"); */
                                                                                                _e("Cari..."); ?>" autocomplete="off" aria-label="Cari Content"/>
                            <button type="submit" id="searchsubmit"></button>
                        </form>
                    </div>
                    <div id="logo" class="right"><a href="<?php echo site_url('');?>">AXA Mandiri</a></div>
                </div>
            </div>
        </div>
        <div id="main-navigation">
             <div class="row">
                <?php
                $image = (!empty(get_field('mega_menu_banner_solusi', 'options')))? get_field('mega_menu_banner_solusi', 'options') : " ";
                $url = (!empty(get_field('banner_solusi_url', 'options')))? get_field('banner_solusi_url', 'options') : " ";

                $mainmenu = array(
                        'theme_location'  => 'primary_menu',
                        'container'       => 'nav',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="mainmenu" data-image = "'.$image.'" data-url = "'.$url.'" class="%2$s main-nav clearfix">%3$s</ul>',
                        'depth'           => 0,
                        'walker'         => new axa_sublevel
                    );
                wp_nav_menu( $mainmenu );?>
            <div id="solution-nav">
                <a href="<?php echo site_url('solusi-untuk-anda'); ?>" class="btn-primary">Solusi untuk Anda <i class="fa fa-angle-right"></i></a>
            </div>

            </div>
        </div>
    </header>
    <div id="fixed-navigation" class="revamp-fixed-nav" style="display:none;">
        <div class="row">
            <?php
            $image = (!empty(get_field('mega_menu_banner_solusi', 'options')))? get_field('mega_menu_banner_solusi', 'options') : " ";
            $url = (!empty(get_field('banner_solusi_url', 'options')))? get_field('banner_solusi_url', 'options') : " ";

            $mainmenu = array(
                        'theme_location'  => 'primary_menu',
                        'container'       => 'nav',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="mainmenu" data-image = "'.$image.'" data-url = "'.$url.'" class="%2$s main-nav clearfix">%3$s</ul>',
                        'depth'           => 0,
                        'walker'         => new axa_sublevel
                    );
                wp_nav_menu( $mainmenu );?>
                <ul class="other">
                    <li class="search-menu">
                        <a href="javascript:void(0)"><span class="cp-display--none">search menu</span></a>
                        <div id="search-wrap" class="clearfix">
                            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                                <input type="text" value="" name="s" id="s" placeholder="<?php _e("Cari..."); ?>" autocomplete="off" aria-label="Cari Content" />
                                <input type="submit" class="cp-display--none" value="Car..." />
                            </form>
                        </div>
                    </li>
                    <li class="logo-fix-nav"><a href="<?php echo site_url('');?>"><span class="cp-display--none">logo nav</span></a></li>
                </ul>

        </div>

    </div>

    <div class="off-canvas-wrap">
    <div class="inner-wrap">


<div id="mobile-navigation"  class="mobile-content">
        <nav class="tab-bar">
          <section class="left-small" aria-label="Left Small">
            <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
          </section>

          <section class="middle tab-bar-section" aria-label="Middle">
                <span id="logo"><a href="<?php echo site_url('');?>" class="block">AXA Mandiri</a></span>
          </section>

         <section class="right-small" aria-label="Right Small">
            <a class="right-off-canvas-toggle" ><i class="fa fa-phone"></i></a>
          </section>
        </nav>

        <?php
        $header_menu = menu('primary-menu');
        unset($header_menu[0]);
        ?>
        <aside class="left-off-canvas-menu" aria-label="Off Canvas">
          <ul class="off-canvas-list">
            <div class="dark">
                <li class="menu-item home"><a href="<?php echo site_url('');?>">Home</a></li>
                <li class="menu-search">   <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                                <input type="text" value="" name="s" id="s" placeholder="<?php /* _e("<!--:en-->Search...<!--:--><!--:id-->Cari...<!--:-->"); */
                                                                                                    _e("Cari..."); ?>" autocomplete="off" aria-label="Cari Content" />
                                <button type="submit" id="searchsubmit"></button>
                    </form>
                </li>

                <?php foreach ($header_menu as $key => $row) :
                    $mParentClass = get_post_meta($row['id_menu'],'_menu_item_classes',true) != "" ? get_post_meta($row['id_menu'],'_menu_item_classes',true) : array();
                    if ( $row[ 'hasChild' ] ) {
                ?>
                        <li class="menu-item parent-menu mitem-<?php echo $row['id_menu']." ".implode(" ", $mParentClass); ?>"><a href="#"><?=$row['title']?> <span class="arrow"><i class="fa fa-angle-down arrow-down"></i> <i class="fa fa-angle-up arrow-up"></i></span></a>
                        <?php
                        if ( $row[ 'hasChild' ] ) {
                        ?>
                            <ul class="sub-menu-first">
                            <?php foreach ( $row[ 'child' ] as $index => $child ):
                                $mChildClass = get_post_meta($child['id_menu'],'_menu_item_classes',true) != "" ? get_post_meta($child['id_menu'],'_menu_item_classes',true) : array();
                            ?>
                                <li class="sub-parent mitem-<?php echo $child['id_menu']." ".implode(" ", $mChildClass); ?>"><a href="<?=$child['url'];?>"><i class="fa fa-angle-down arrows-down"></i> <i class="fa fa-angle-up arrows-up"></i> <?=$child['title'];?></a>
                                <?php
                                if ( $row[ 'hasSubChild' ] ) :
                                    foreach ( $row['sub_children'][$index] as $sub_child ):
                                        $mSubChildClass = get_post_meta($sub_child['id_menu'],'_menu_item_classes',true) != "" ? get_post_meta($sub_child['id_menu'],'_menu_item_classes',true) : array();
                                ?>
                                    <ul class="sub-menu-second mitem-<?php echo $sub_child['id_menu']." ".implode(" ", $mSubChildClass); ?>">
                                        <li class="kesehatan"><a href="<?php echo $sub_child['url'] ?>"><span></span><?php echo $sub_child['title'] ?></a></li>

                                    </ul>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        <?php
                        }
                        ?>
                        </li>
                <?php
                    } else {
                ?>
                    <li class="menu-item mitem-<?php echo $row['id_menu'] ?>"><a href="<?php echo $row['url']?>"><?=$row['title']?></a></li>
                <?php
                    }
                ?>
            <?php endforeach; ?>
            </div>
            <li class="other-menu first-child"><a href="<?php echo site_url('hubungi-kami');?>">Hubungi Kami</a></li>
            <li class="other-menu"><a href="<?php echo site_url('media');?>">Media</a></li>
            <div id="solution-nav">
                <a href="<?php echo site_url('solusi-untuk-anda'); ?>" class="btn-primary">Solusi untuk Anda <i class="fa fa-angle-right"></i></a>
            </div>
        </ul>
        </aside>

    <aside class="right-off-canvas-menu" aria-label="right off canvas">
        <?php get_template_part('widget/customer-care');?>
    </aside>
</div>
