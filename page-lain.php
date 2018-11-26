<?php/** * Template Name: Layanan Nasabah: Lain-lain */?>
<?php get_header();?>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);"></div>
		<div class="content large-4">
			<h1>Layanan Nasabah</h1>
			<h2 style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></h2>
		</div>

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>

	<div id="wrapper" class="row">  
		<?php get_template_part("widget/search-premi");?>
		<?php get_template_part("widget/layanan-submenu");?>

		<section id="premi" class="clearfix sections grey">
			<h3 class="m-bottom-45">Informasi Umum</h3>
			<div id="page-half">
			<div class="large-4 columns clearfix">
				<div class=" h-300 bg-white clearfix relative wid-info-umum">
					<div class="box  p-all-20 clearfix content-widget ">
						<h3 class="c-blue f-16 uppercase">Perkenalan Asuransi</h3>
						<p>AXA Mandiri menyediakan informasi seputar asuransi agar Anda mengenal topik-topik asuransi untuk membantu Anda dalam segala proses perlindungan diri Anda</p>
						<a href="" class="right button blue small absolute bottom-10 right-10">Perkenalan Asuransi</a>
					</div>
				</div>
			</div>
			<div class="large-4 columns clearfix">
				<div class=" h-300 bg-white clearfix relative wid-info-umum">
					<div class="box  p-all-20 clearfix content-widget ">
						<h3 class="c-blue f-16 uppercase">Istilah Asuransi</h3>
						<p>Pahami lebih dalam arti istilah-istilah yang sering digunakan dalam asuransi untuk memudahkan Anda merencanakan perlindungan diri anda</p>
						<a href="" class="right button blue small absolute bottom-10 right-10">Istilah Asuransi</a>
					</div>
				</div>
			</div>
			<aside class="large-4 columns clearfixh-300 o-hidden desktop-content">
				<?php get_template_part("widget/sidebar-pengajuan-klaim");?>
			</aside>
		</section>

		<?php get_template_part("widget/breadcrumbs");?>
	</div><!--end row-->
<?php get_template_part("widget/hargaunit");?>
</div><!--end page container-->
<?php get_footer();?>