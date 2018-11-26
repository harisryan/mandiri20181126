<?php/** * Template Name: Layanan Nasabah: Customer Quick Service*/?>
<?php get_header();?>
<script src='//pixel.mathtag.com/event/js?mt_id=570153&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);"></div>
		<div class="content large-4">
			<h1 class="header1"><?php /* _e("<!--:en-->Customer Service<!--:--><!--:id-->Layanan Nasabah<!--:-->"); */
						_e("Layanan Nasabah"); ?></h1>
			<div class="header2" style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></div>
			<div class="cp-display--none">
				<h2>AXA Mandiri</h2>
			</div>
		</div>

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>

	<div id="wrapper" class="row">
		<?php get_template_part("widget/search-premi");?>
		<?php get_template_part("widget/layanan-submenu");?>
		<section id="custcare-center" class="grey clearfix sections">
			<div class="small-12 columns">
				<img src="<?php bloginfo('template_url') ?>/images/QR.jpg" alt="">
			</div>

		</section>


		<?php get_template_part("widget/breadcrumbs");?>
	</div>
<?php get_template_part("widget/hargaunit");?>
</div>
<?php get_footer();?>
