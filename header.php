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
        <link href="<?php bloginfo('template_url');?>/css/normalize.css?nocache=fixed" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet">

        <link href="<?php bloginfo('template_url');?>/css/mobile.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url');?>/css/revamp.css" rel="stylesheet">

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
    <?php if(get_the_title() == "Terima Kasih" ):  ?>
        <?php if( isset($_GET['slug']) ): ?>
            <?php if( $_GET['slug'] == "mjk-partner-om" ): ?>
                <img src="https://track.omguk.com/e/si/?APPID=<?php echo cf7_generate_leadid(); ?>&MID=1270388&PID=32834&Status=" border="0" height="1" width="1">
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
    <div class="off-canvas-wrap main-body">
    <div class="inner-wrap hidden">
    <header id="header" class="desktop-content old" aria-label="header">
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
        <div id="main-navigation" class="nav-fixed">
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
            <div class="right-container">
				<div class="search-container">
					<img class="search-monocrom" src="<?php echo bloginfo('template_url');?>/images/revamp/search-monocrom.png"/>
					<form class="inline-form-search" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
						<input type="text" value="" name="s" id="s" placeholder="<?php _e("Cari..."); ?>" autocomplete="off" aria-label="Cari Content" />
						<input type="submit" class="cp-display--none" value="Car..." />
					</form>
				</div>
				<a href="<?php echo site_url('');?>">
					<img class="logo-monocrom" src="<?php echo bloginfo('template_url');?>/images/revamp/logo-monocrom.png"/>
				</a>
            </div>

            </div>
        </div>
    </header>
    <div id="fixed-navigation"  class="hidden">
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


	<div id="mobile-navigation" class="mobile-content">
        <nav class="tab-bar">
          <section class="left-small" aria-label="Left Small">
            <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
          </section>

          <section class="middle tab-bar-section" aria-label="Middle">
                <a href="<?php echo site_url('');?>">
					<img class="logo-monocrom" src="<?php echo bloginfo('template_url');?>/images/revamp/logo-monocrom.png"/>
				</a>
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
	
	<div class="sticky-button-container">
		<div id="solution_detail" class="detail_liveagent">
			<p class="title">Selamat Datang di AXA Mandiri Online Solution</p>
			<p class="m-bottom-5">Pilih layanan yang Anda butuhkan</p>
			<div class="clearfix"></div>
			<ul class="list_pembelianonline m-all-0 list-blue text-left f-14">
				<li><a href="https://portal.axa.co.id/mandiritravelonline?utm_source=landingpage&amp;utm_medium=onlinesolution&amp;utm_campaign=axamandiri&amp;utm_term=&amp;utm_content=&amp;referrer_session_id=" class="block" target="_blank">AXA Mandiri Travel</a></li>
				<li><a href="https://axa-mandiri.force.com/corporatesolutions/LoginScreen" class="block" target="_blank"> AXA Mandiri e-Access</a></li>
				<li><a href="https://axa-mandiri.co.id/belionline" class="block" target="_blank">AXA Mandiri e-Commerce</a></li>
				<li><a href="https://beli.axa-mandiri.co.id" class="block" target="_blank">AXA Mandiri Mobil</a></li>
			</ul>


			<div class="footer-widget-custcare">

			</div>
		</div>	
		<div id="chat_operational" class="detail_liveagent">			
                <p class="title">Maaf Layanan kami sedang offline</p>
                <p class="m-bottom-5">Jam kerja kami senin - jumat pukul 08.00-17.00</p>
		</div>
		<div id="mobile_solution" class="col-md-6 col-xs-6 left-section">
			<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-solution.png"/> <br/>
			<span>Temukan Kebutuhan Anda</span>
		</div>		
		<!--ONLINE-->
		<div id="mobile_liveagent_button_online_5736F0000000FeC" onclick="liveagent.startChat('5736F0000000FeC');" class="col-md-6 col-xs-6 right-section">
			<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-chat-new.png"/> <br/>
			<span>Live Chat</span>
		</div>
		<!--OFFLINE-->
		<div id="mobile_liveagent_button_offline_5736F0000000FeC" class="col-md-6 col-xs-6 right-section mobile_liveagent_offline">
			<img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-chat-new.png"/> <br/>
			<span>Live Chat</span>
		</div>
	</div>
	
	