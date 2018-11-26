<?php/** * Template Name: Layanan Nasabah: Informasi Umum */?>
<?php get_header();?>
<script src='//pixel.mathtag.com/event/js?mt_id=570160&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);"></div>
		<div class="content large-4">
			<h1 class="header1"><?php /* _e("<!--:en-->Customer Service<!--:--><!--:id-->Layanan Nasabah<!--:-->"); */
						 _e("Layanan Nasabah"); ?></h1>
			<div class="header2" style="color:<?php the_field('subtitle_text_color');?>"><?php /* _e("<!--:en-->Services to customers around the AXA Mandiri insurance products, policy, premium payments, claims, and others.<!--:--><!--:id-->Layanan untuk nasabah AXA Mandiri seputar produk asuransi, polis, pembayaran premi, klaim, dan lainnya.<!--:-->"); */
																				 _e("Layanan untuk nasabah AXA Mandiri seputar produk asuransi, polis, pembayaran premi, klaim, dan lainnya."); ?></div>
		</div>

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>

	<div id="wrapper" class="row">
		<?php get_template_part("widget/search-premi");?>
		<?php get_template_part("widget/layanan-submenu");?>

		<section id="premi" class="clearfix sections grey">
			<h3 class="m-bottom-45"><?php /* _e("<!--:en-->General Information!--:--><!--:id-->Informasi Umum<!--:-->"); */
											_e("Informasi Umum"); ?></h3>
			<div id="page-half">
				<div class="large-4 columns clearfix">
					<div class=" h-300 bg-white clearfix relative wid-info-umum">
						<div class="box h-300 p-all-20 clearfix content-widget">
							<h3 class="c-blue f-16 uppercase">Perkenalan Asuransi</h3>
							<p>AXA Mandiri menyediakan informasi seputar asuransi agar Anda mengenal topik-topik asuransi untuk membantu Anda dalam segala proses perlindungan diri Anda</p>
							<a href="<?php echo site_url('layanan-nasabah/informasi-umum/perkenalan-asuransi');?>" class="right button blue small bottom-10 right-10">Perkenalan Asuransi</a>
						</div>
					</div>
				</div>
				<div class="large-4 columns clearfix">
					<div class=" h-300 bg-white clearfix relative wid-info-umum">
						<div class="box h-300 p-all-20 clearfix content-widget ">
							<h3 class="c-blue f-16 uppercase">Istilah Asuransi</h3>
							<p>Pahami lebih dalam arti dari istilah-istilah yangsering digunakan dalam asuransi untuk memudahkan Anda merencanakan perlindungandiri Anda.</p>
							<a href="<?php echo site_url('layanan-nasabah/informasi-umum/istilah-asuransi');?>" class="right button blue small bottom-10 right-10">Istilah Asuransi</a>
						</div>
					</div>
				</div>

				<aside class="large-4 columns clearfixh-300 o-hidden desktop-content">
				<?php get_template_part("widget/sidebar-pengajuan-klaim");?>
			</aside>
			</div>
		</section>

		<?php get_template_part("widget/breadcrumbs");?>
	</div>

	<?php get_template_part("widget/hargaunit");?>
</div>

<?php get_footer();?>
