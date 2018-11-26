<?php
$s = (isset($_GET['s'])) ? $_GET['s'] : '' ;
$keyword = urlencode($s);
$type = ($_GET['t']) ? $_GET['t'] : 'global'; ?>
<?php get_header();?>


<?php
//collect search results and group them by post types
while (have_posts()) : the_post();
	if(get_post_type($post->ID) == 'faq') { //for faq
		$faq[] = $post;
	}elseif(get_post_type($post->ID) == 'form') { //for form
		$form[] = $post;
	}else{ //for others
		$normal[] = $post;
	}
endwhile;

if($type == 'layanan') { ?>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="content large-4">
			<h1><?php /* _e("<!--:en-->Customer Service<!--:--><!--:id-->Layanan Nasabah<!--:-->"); */
						_e("Layanan Nasabah"); ?></h1>
			<h2 class="cp-color--gray"><?php /* _e("<!--:en-->Services to customers around the AXA Mandiri insurance products, policy, premium payments, claims, and others.<!--:--><!--:id-->Layanan untuk nasabah AXA Mandiri seputar produk asuransi, polis, pembayaran premi, klaim, dan lainnya.<!--:-->"); */
												_e("Layanan untuk nasabah AXA Mandiri seputar produk asuransi, polis, pembayaran premi, klaim, dan lainnya."); ?></h2>
		</div><!--end large 4-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->

	<div class="row">
		<?php get_template_part("widget/search-premi");?>
		<?php get_template_part("widget/layanan-submenu");?>
	<section id="page-half" class="grey sections clearfix">
	<h3>Hasil pencarian "<?=$keyword?>"</h3>
	<div class="large-8 columns">
<?php
	//now lets print out the results
	if($normal) { ?>
		<div class="m-bottom-40 clearfix">
		<h3 class="f-16 uppercase m-bottom-20">TOPIK <em>(<?=count($normal)?>)</em></h3>
		<ul class="list-style-none m-all-0">
		<?php $i = 0;
		foreach($normal as $post) {
			if($i<5) { ?>
				<li class="m-bottom-20 p-bottom-20 clearfix bg-white">
					<div class="p-all-10">
						<strong class="block f-18"><a href="<?php the_permalink();?>"><?php the_title();?></a></strong>
						<p class="m-bottom-10"><?php echo string_limit_words(get_the_excerpt(), 20); ?>... <a class="f-13" href="<?php the_permalink();?>">Selengkapnya &raquo;</a></p>
					</div>
					</li>
				<?php $i++; ?>
			<?php }
		} ?>
		</ul>
		<?php if(count($normal) > 4) { ?>
			<a href='?s=<?=$keyword?>&t=normal' class="block clearboth text-right f-14">Lihat semua hasil topik &raquo; </a>
		<?php } ?>
	</div>
	<?php } ?>

	<?php if($faq) { ?>
	<div class="m-bottom-40 clearfix">
		<h3 class="f-16 uppercase m-bottom-20">FAQ Asuransi <em>(<?=count($faq)?>)</em></h3>
		<ul class="two-list-content small-block-grid-2 medium-block-grid-2 large-block-grid-2 clearfix">
		<?php $i = 0;
		foreach($faq as $post) {
			if($i<5) { ?>
				<li class="f-13"><a href="<?php the_permalink();?>"><strong><?php the_title();?></strong></a></li>
				<?php $i++; ?>
			<?php }
		} ?>
		</ul>
		<?php if(count($faq) > 4) { ?>
			<a href='?s="<?=$keyword?>"&t=faq' class="block clearboth text-right f-14">Lihat semua hasil FAQ &raquo;</a>
		<?php } ?>
	</div>
	<?php } ?>

	<?php if($form) { ?>
	<div class="m-bottom-40 clearfix">
		<h3 class="f-16 uppercase m-bottom-20">Formulir <em>(<?=count($form)?>)</em></h3>
		<ul class="pdf-list two-list-content small-block-grid-2 medium-block-grid-2 large-block-grid-2 clearfix">
		<?php $i = 0;
		foreach($form as $post) {
			if($i<5) { ?>
				<li><a href="<?php the_field('forms_upload_file');?>" class="clearfix block white shadow-grey-3" download><span class="icon"></span><strong class="w-80p"><?php the_title();?></strong></a></li>
				<?php $i++; ?>
			<?php }
		} ?>
		</ul>
		<?php if(count($form) > 4) { ?>
			<a href='?s="<?=$keyword?>"&t=form' class="block clearboth text-right f-14">Lihat semua hasil formulir &raquo; </a>
		<?php } ?>
	</div>
	<?php } ?>
	</div>
			<aside class="columns w-322">
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


<?php } elseif($type == 'normal') { ?>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="content large-4">
			<h1><?php /* _e("<!--:en-->Customer Service<!--:--><!--:id-->Layanan Nasabah<!--:-->"); */
						_e("Layanan Nasabah"); ?></h1>
			<h2 class="cp-color--gray"><?php /* _e("<!--:en-->Services to customers around the AXA Mandiri insurance products, policy, premium payments, claims, and others.<!--:--><!--:id-->Layanan untuk nasabah AXA Mandiri seputar produk asuransi, polis, pembayaran premi, klaim, dan lainnya.<!--:-->"); */
												_e("Layanan untuk nasabah AXA Mandiri seputar produk asuransi, polis, pembayaran premi, klaim, dan lainnya."); ?></h2>
		</div><!--end large 4-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->

	<div class="row">
		<?php get_template_part("widget/search-premi");?>
		<?php get_template_part("widget/layanan-submenu");?>
	<section id="page-half" class="grey sections clearfix">
	<div class="large-8 columns">
	<h3 class="f-16 uppercase m-bottom-20">Semua Hasil Pencarian Topik</h3>
	<ul class="list-style-none m-all-0">
	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<li class="m-bottom-20 p-bottom-20 clearfix bg-white">
			<div class="p-all-10">
				<strong class="block f-18"><a href="<?php the_permalink();?>"><?php the_title();?></a></strong>
				<p class="m-bottom-10"><?php echo string_limit_words(get_the_excerpt(), 20); ?>... <a class="f-13" href="<?php the_permalink();?>">Selengkapnya &raquo;</a></p>
			</div>
		</li>
	<?php endwhile; ?>
	<?php else: // Layanan Search Not Found?>
		Not found
	<?php endif; ?>
	</ul>
	</div>
			<aside class="columns w-322">
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
<?php } elseif($type == 'faq') { ?>

<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="content large-4">
			<h1><?php /* _e("<!--:en-->Customer Service<!--:--><!--:id-->Layanan Nasabah<!--:-->"); */
						_e("Layanan Nasabah"); ?></h1>
			<h2 class="cp-color--gray"><?php /* _e("<!--:en-->Services to customers around the AXA Mandiri insurance products, policy, premium payments, claims, and others.<!--:--><!--:id-->Layanan untuk nasabah AXA Mandiri seputar produk asuransi, polis, pembayaran premi, klaim, dan lainnya.<!--:-->"); */
												_e("Layanan untuk nasabah AXA Mandiri seputar produk asuransi, polis, pembayaran premi, klaim, dan lainnya."); ?></h2>
		</div><!--end large 4-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->

	<div class="row">
		<?php get_template_part("widget/search-premi");?>
		<?php get_template_part("widget/layanan-submenu");?>
	<section id="page-half" class="grey sections clearfix">
	<div class="large-8 columns">
	<h3 class="f-16 uppercase m-bottom-20">Semua Hasil Pencarian FAQ Asuransi</h3>
	<ul class="two-list-content small-block-grid-2 medium-block-grid-2 large-block-grid-2 clearfix">
	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<li class="f-13"><a href="<?php the_permalink();?>"><strong><?php the_title();?></strong></a></li>
	<?php endwhile; ?>
	<?php else: // Layanan Search Not Found?>
		Not found
	<?php endif; ?>
	</ul>
	</div>
			<aside class="columns w-322">
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

<?php } elseif($type == 'form') { ?>

<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/head-layanan.jpg);">
	<div id="masthead" class="row relative">
		<div class="content large-4">
			<h1><?php /* _e("<!--:en-->Customer Service<!--:--><!--:id-->Layanan Nasabah<!--:-->"); */
						_e("Layanan Nasabah"); ?></h1>
			<h2 class="cp-color--gray"><?php /* _e("<!--:en-->Services to customers around the AXA Mandiri insurance products, policy, premium payments, claims, and others.<!--:--><!--:id-->Layanan untuk nasabah AXA Mandiri seputar produk asuransi, polis, pembayaran premi, klaim, dan lainnya.<!--:-->"); */
												_e("Layanan untuk nasabah AXA Mandiri seputar produk asuransi, polis, pembayaran premi, klaim, dan lainnya."); ?></h2>
		</div><!--end large 4-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->

	<div class="row">
		<?php get_template_part("widget/search-premi");?>
		<?php get_template_part("widget/layanan-submenu");?>
	<section id="page-half" class="grey sections clearfix">
	<div class="large-8 columns">
	<h3 class="f-16 uppercase m-bottom-20">Semua Hasil Pencarian FAQ Asuransi</h3>
	<ul class="pdf-list two-list-content small-block-grid-2 medium-block-grid-2 large-block-grid-2 clearfix">
	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_field('forms_upload_file');?>" class="clearfix block white shadow-grey-3" download><span class="icon"></span><strong class="w-80p"><?php the_title();?></strong></a></li>
	<?php endwhile; ?>
	<?php else: // Layanan Search Not Found?>
		Not found
	<?php endif; ?>
	</ul>
	</div>
			<aside class="columns w-322">
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
<?php } else { ?>

<!-- GLOBAL SEARCH-->
<div id="page-container">
	<div id="masthead" class="row relative">
		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->
	<div class="row p-all-0">
		<section id="page-half" class="sections clearfix sections bg-white radius-all-5">
			<div class="large-8 columns">
			<h3 class="m-bottom-45">Hasil pencarian "<?php echo $keyword;?>" </h3>
			<ul class="list-style-none m-all-0">
				<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
					<?php if(get_post_type($post->ID) == 'cust_care' || get_post_type($post->ID) == 'rumah_sakit' || get_post_type($post->ID) == 'kantorcabang' || $post->ID == 2381 || $post->ID == 2912 || $post->ID == 3088) : //hide contents from search results TODO: need a better way to do this ?>

					<?php else: ?>
						<li class="m-bottom-20 p-bottom-20 border-bottom-1 clearfix">
							<strong class="block f-18"><a href="<?php the_permalink();?>"><?php the_title();?></a></strong>
							<p class="m-bottom-10"><?php echo string_limit_words(get_the_excerpt(), 20); ?>... <a class="f-13" href="<?php the_permalink();?>">Selengkapnya &raquo;</a></p>

						</li>
					<?php endif; ?>
				<?php endwhile; ?>
				<?php else: // Global Search Not Found?>
					Not found
				<?php endif; ?>
			</ul>
			<div class="pagination text-center m-top-20 block"> <?php wp_pagenavi(); ?></div>
			</div>
			<aside class="columns w-322">
				<div class="widget m-bottom-20"><?php get_template_part("widget/footer-banner-left");?></div>
				<div class="widget m-bottom-20"><?php get_template_part("widget/footer-banner-right");?></div>
			</aside>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
</div>
<?php get_template_part("widget/hargaunit");?>
<?php }?>
<?php get_footer();?>
