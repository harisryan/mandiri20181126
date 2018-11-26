<?php get_header();?>
<div id="page-container">
	<div id="masthead" class="row relative">
		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
		<div id="page-head" class="relative m-top-120" style="background:url(<?php bloginfo('template_url');?>/images/head-single-layanan.jpg) top center;">
			<div class="box absolute top-50 left-80">
				<h1 class="f-20 m-bottom-0">Layanan Nasabah</h1>
				<h2 class="f-45 c-bluemandiri">FAQ Asuransi</h2>
			</div>
		</div>
	</div><!--end masthead-->

	<div class="row p-all-0">
	<div id="page-box" class="sections white clearfix">
		<section id="page-half" class="bg-white">
			<div class="large-8 columns">
				<h2 class="f-24"><?php the_title();?></h2>
				<div class="meta-info m-bottom-20 clearfix"><div class="date left"><?php the_time('j F Y'); ?> | </div>
					<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style addthis_16x16_style left w-135">
						<a class="addthis_button_facebook"></a>
						<a class="addthis_button_twitter"></a>
						<a class="addthis_button_google_plusone_share"></a>
						<a class="addthis_button_email"></a>
						</div>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-52e220892ac1220f"></script>
						<!-- AddThis Button END -->
				 </div>
				<?php if( have_posts() ) : the_post(); ?>
					 <div id="featured-image" class="m-bottom-20"><?php the_post_thumbnail('news_large');?></div>
					 <?php the_content();?>
				<?php endif; wp_reset_postdata();?>
			</div>
			<aside class="columns widget w-322"> 
				<div class="m-bottom-25">
					<div class="klaim-menu">
					<h3 class="f-16">Bukan Layanan yang Anda Cari?</h3>
					<p><?php _e("<!--:en-->Find the service you need from a selection of AXA Mandiri Customer Service<!--:--><!--:id-->Temukan layanan yang Anda butuhkan dari pilihan Layanan Nasabah AXA Mandiri<!--:-->"); ?></p>
					 <?php $layananmenu = array(
				                'theme_location'  => '',
				                'container'       => '',
				                'menu'            => 'Layanan Nasabah',
				                'echo'            => true,
				                'fallback_cb'     => 'wp_page_menu',
				                'items_wrap'      => '<ul id="" class="%2$s service-menu clearfix">%3$s</ul>',
				                'depth'           => 0,
				                'link_before' => '<div class="items"><span></span><p>', 'link_after' => '</p></div>'
				            );
				        wp_nav_menu( $layananmenu );?>
					</div>
				</div>
			</aside>
		</section>
	</div>
	<?php get_template_part("widget/breadcrumbs");?>
	</div>
	<?php get_template_part("widget/hargaunit");?>
</div>
<?php get_footer();?>