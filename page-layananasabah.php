<?php/** * Template Name: Layanan Nasabah */?>
<?php get_header();?>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);"></div>
		<div class="content large-4">
        <!--<h1><?php the_title(); ?></h1>-->
            <h1 class="header1"><?php /* _e("<!--:en-->Customer Service<!--:--><!--:id-->Layanan Nasabah<!--:-->"); */
						_e("Layanan Nasabah"); ?></h1>

			<!--<h2 style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></h2>-->
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

		<section id="premi" class="clearfix sections background-vector">
			<div class="m-bottom-45 header3_layanan_terpopuler"><?php /* _e("<!--:en-->Popular Service<!--:--><!--:id-->Layanan Terpopuler<!--:-->"); */
											 _e("Layanan Terpopuler"); ?></div>
			<div  id="page-half">
			<div class="large-8 columns clearfix">

				<div id="archive-premi" class="box clearfix h-300">
					<div class="img_archive left m-bottom-10">
						<img src="<?php echo bloginfo('template_url');?>/images/premi-archive.png" alt="premi-archive"/>
					</div>
					<div class="content-arcive clearfix">
						<div class="f-16 c-blue header5_pembayaran_premi"><?php /* _e("<!--:en-->PREMIUM PAYMENT<!--:--><!--:id-->PEMBAYARAN PREMI<!--:-->"); */
														 _e("PEMBAYARAN PREMI"); ?></div>
						<p><?php the_field('archive_premi');?></p>
					</div>

					<a href="<?php echo site_url('layanan-nasabah/pembayaran-premi/');?>" class="button blue small right"><?php /* _e("<!--:en-->Premium Payment Method<!--:--><!--:id-->Cara Pembayaran Premi<!--:-->"); */
																																	_e("Cara Pembayaran Premi"); ?></a>
				</div>
			</div>


			<aside class="columns w-322 desktop-content">
				<?php get_template_part("widget/sidebar-pengajuan-klaim");?>
			</aside>
			</div>
		</section>

		<section id="page-half" class="sections clearfix grey-3">
			<div class="large-8 columns p-all-0">
				<div class="f-16 header5_faq_asuransi"><?php /* _e("<!--:en-->INSURANCE FAQ<!--:--><!--:id-->FAQ ASURANSI<!--:-->"); */
											_e("FAQ ASURANSI"); ?></div>
				<p><?php /* _e("<!--:en-->Find answers to questions about the most popular insurance services and other general information<!--:--><!--:id-->Temukan jawaban dari pertanyaan-pertanyaan terpopuler seputar layanan asuransi dan informasi lainnya<!--:-->"); */
							_e("Temukan jawaban dari pertanyaan-pertanyaan terpopuler seputar layanan asuransi dan informasi lainnya"); ?>
				<ul id="faq-list" class="desktop-content two-list-content small-block-grid-1 medium-block-grid-1 large-block-grid-1 clearfix">
				<?php
					$args = array("post_type" => "faq","posts_per_page" =>4);
					query_posts( $args );
					if(have_posts()): while(have_posts()):the_post();
				?>
					<li><a href="<?php the_permalink();?>" title="<?php the_title();?>" class="f-13"><strong><?php if (strlen($post->post_title) > 60) {
echo substr(the_title($before = '', $after = '', FALSE), 0, 60) . '...'; } else {
the_title();
} ?></strong></a></li>
					<?php endwhile;?>
				</ul>
				<?php endif;?>
				<?php wp_reset_query(); ?>
				<a href="<?php echo site_url('layanan-nasabah/faq-asuransi/');?>" class="right"><span class="c-blue"><i class="fa fa-chevron-circle-right"></i><?php /* _e("<!--:en-->See all questions & answers<!--:--><!--:id-->Lihat semua pertanyaan & jawaban<!--:-->"); */
																																										_e("Lihat semua pertanyaan & jawaban"); ?></i></a>
			</div>

			<aside class="columns w-322 desktop-content">
				<?php get_template_part("widget/layanan-derek");?>
			</aside>
		</section>

		<section  id="page-half" class="sections clearfix grey">
			<aside class="large-4 columns desktop-content">
				<?php get_template_part("widget/mandiri-care-corner");?>
			</aside>

			<aside class="large-4 columns desktop-content">
				<?php get_template_part("widget/mobile-service");?>
			</aside>

			<aside class="large-4 columns desktop-content">
				<?php get_template_part("widget/sidebar-pencarian-form");?>
			</aside>
		</section>

		<?php get_template_part("widget/breadcrumbs");?>
	</div>
<?php get_template_part("widget/hargaunit");?>
</div>
<?php get_footer();?>
