<?php/** * Template Name: Layanan Nasabah: Reksa Dana */?>
<?php get_header();?>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);"></div>
		<div class="content large-4">
			<h1>Layanan Nasabah</h1>
			<h2 style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></h2>
		</div><!--end large 4-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->

	<div id="wrapper" class="row">  
		<?php get_template_part("widget/search-premi");?>
		<?php get_template_part("widget/layanan-submenu");?>

		<section id="premi" class="clearfix sections grey">
			<h3 class="m-bottom-45">Reksa Dana</h3>
			<div id="page-half">
			<div class="large-8 columns clearfix">
				<div class="content-box clearfix m-bottom-20 bg-white">
					<h5 class="f-16 c-blue">PEMBELIAN REKSA DANA</h5>
					<p>AXA Mandiri menawarkan berbagai produk reksa dana sebagai solusi investasi bagi kebutuhan finansial Anda. Temukan tata cara pembelian produk reksa dana dari AXA Mandiri, dengan tata cara pembelian awal maupun pembelian lanjutan.</p>
					<ul class="list-with-arrow">
						<li><a href="<?php echo site_url('layanan-nasabah/reksa-dana/cara-pembelian/');?>">Cara Pembelian Awal</a></li>
						<li><a href="<?php echo site_url('layanan-nasabah/reksa-dana/cara-pembelian/');?>">Cara Pembelian Lanjutan</a></li>
					</ul>
					<a href="<?php echo site_url('layanan-nasabah/reksa-dana/cara-pembelian/');?>" class="button blue small right">Cara Pembelian</a>
				</div><!--end content box-->

				<div class="large-6 columns h-215 bg-white clearfix w-48p">
					<div class="box  p-all-15 clearfix">
						<h3 class="c-blue f-16 uppercase">PENJUALAN KEMBALI REKSA DANA</h3>
						<p>Bagaimana cara menjual produk reksa dana yang Anda miliki? Baca prosedur dan persyaratan penjualan kembali reksa dana dari AXA Mandiri.</p>
						<a href="<?php echo site_url('layanan-nasabah/reksa-dana/cara-penjualan-kembali/');?>" class="right button blue">Cara Penjualan Kembali</a>
					</div>
				</div>

				<div class="large-6 columns h-215 bg-white clearfix  w-48p">
					<div class="box  p-all-15 clearfix">
						<h3 class="c-blue f-16 uppercase">PENGALIHAN REKSA DANA</h3>
						<p>Bagaimana cara mengalihkan produk reksa dana yang Anda miliki? Baca prosedur dan persyaratan pengalihan reksa dana dari AXA Mandiri.</p>
						<a href="<?php echo site_url('layanan-nasabah/reksa-dana/cara-pengalihan/');?>" class="right button blue">Cara Pengalihan</a>
					</div>
				</div>
			</div><!--end large 8-->

			<aside class="columns w-322">
				<?php get_template_part("widget/sidebar-pengajuan-klaim");?>
			</aside>
			</div>
		</section>

		<?php get_template_part("widget/breadcrumbs");?>
	</div><!--end row-->
<?php get_template_part("widget/hargaunit");?>
</div><!--end page container-->
<?php get_footer();?>