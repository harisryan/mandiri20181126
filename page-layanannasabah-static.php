<?php/** * Template Name: Layanan Nasabah: Static Page */?>
<?php get_header();?>


<?php
global $wp_query;
$post_id = $wp_query->post->ID;

$post = get_post( $post_id );
$slug = $post->post_name; ?>
	<?php if($slug=='perkenalan-asuransi'):?>
		<script src='//pixel.mathtag.com/event/js?mt_id=570163&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
	<?php elseif($slug=='istilah-asuransi'):?>
		<script src='//pixel.mathtag.com/event/js?mt_id=570165&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
	<?php endif;?>
<span class="cp-display--none"><?php echo $slug;?></span>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);"></div>
		<div class="content large-4">
			<h1 class="header1"><?php _e("<!--:en-->Customer Service<!--:--><!--:id-->Layanan Nasabah<!--:-->"); ?></h1>
			<div class="header2" style="color:<?php the_field('subtitle_text_color');?>"><?php _e("<!--:en-->Services to customers around the AXA Mandiri insurance products, policy, premium payments, claims, and others.<!--:--><!--:id-->Layanan untuk nasabah AXA Mandiri seputar produk asuransi, polis, pembayaran premi, klaim, dan lainnya.<!--:-->"); ?></div>
		</div><!--end large 4-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->

	<div id="wrapper" class="row">
		<?php get_template_part("widget/search-premi");?>
		<?php get_template_part("widget/layanan-submenu");?>
		<section id="page-half" class="grey sections clearfix">
			<div class="large-8 columns p-all-0">

				 <?php if( have_posts() ) : the_post(); ?>

				 <article>
				 	<h3 class="f-24 m-bottom-20"><?php the_title();?></h3>
				 	<?php the_content();?>
				 </article>
				 <?php endif;?>
			</div>
			<aside class="columns widget w-322">
				<div class="m-bottom-25">
					<?php get_template_part("widget/sidebar-pengajuan-klaim");?>
				</div>
				<div class="m-bottom-25">
					<?php get_template_part("widget/sidebar-pencarian-form");?>
				</div>
			</aside>

		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div><!--end row-->
<?php get_template_part("widget/hargaunit");?>
</div><!--end page container-->
<?php get_footer();?>
