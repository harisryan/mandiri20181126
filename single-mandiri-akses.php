<?php/** * Template Name: Layanan Nasabah: AXA Mandiri Akses */?>
<?php get_header();?>
<div id="page-container">
	<div id="masthead" class="row relative">
		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
		<div id="page-head" class="relative" style="background:url(<?php bloginfo('template_url');?>/images/head-layanan.jpg);">
			<div class="box absolute">
				<h1>Layanan Nasabah</h1>
				<h2 class="f-45 c-blue">AXA Mandiri Akses</h2>
			</div>
		</div>
	</div><!--end masthead-->
	<div class="row p-all-0">
	<div id="page-box" class="sections white clearfix">
		<section id="page-half" class="bg-white">
		<div class="large-8 columns p-all-0">
			<!-- <section id="page-half" class="clearfix"> -->
				<?php if( have_posts() ) : the_post(); ?>
				<?php the_content();?>
				<?php endif;?>
			<!-- </section> -->
		</div>
		</section>

		<aside class="columns widget w-322"> 
			<div class="m-bottom-25">
				<?php get_template_part("widget/sidebar-pengajuan-klaim");?>
			</div>
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
		</div>
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
	<?php get_template_part("widget/hargaunit");?>
</div>
<?php get_footer();?>