<?php/** * Template Name: Layanan Nasabah: Bantuan Jalan Raya */?>
<?php get_header();?>
<script src='//pixel.mathtag.com/event/js?mt_id=570151&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);"></div>
		<div class="content large-4">
			<h1 class="header1">Layanan Nasabah</h1>
			<div class="header2" style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></div>
		</div>

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>

	<div id="wrapper" class="row">
		<?php get_template_part("widget/search-premi");?>
		<?php get_template_part("widget/layanan-submenu");?>
		<section id="bantuan" class="clearfix sections grey">
			<div class="large-8 columns p-all-0">
				<div id="archive-premi" class="box clearfix h-300 radius-all-5">
					<div class="archive-content">
					 <?php if( have_posts() ) : the_post(); ?>
					 <?php the_content();?>
					 <?php endif;?>
					</div>
				 <div class="button_left clearfix">
					<a href="<?php echo site_url('layanan-nasabah/bantuan-jalan-raya/bantuan-darurat-di-jalan-raya/');?>" class="left w-full m-bottom-5 f-14"><span class="c-blue"><i class="fa fa-chevron-circle-right f-16"></i>Bantuan di Jalan Raya</span></a>
					<a href="<?php echo site_url('layanan-nasabah/bantuan-jalan-raya/layanan-derek/');?>" class="left w-full m-bottom-5 f-14"><span class="c-blue"><i class="fa fa-chevron-circle-right f-16"></i>Layanan Derek</span></a>
				 </div>
				</div>
			</div>
			<aside class="columns widget w-322">
				<div class="m-bottom-25">
					<?php get_template_part("widget/sidebar-pencarian-form");?>
				</div>
			</aside>
		</section>

		<?php get_template_part("widget/breadcrumbs");?>
	</div>
<?php get_template_part("widget/hargaunit");?>
</div>

<?php get_footer();?>
