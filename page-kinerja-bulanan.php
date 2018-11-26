<?php/** * Template Name: Laporan Kinerja Bulanan */?>
<?php $selectedYear = ($_GET['fyear']) ? $_GET['fyear'] : ''; ?>
<?php $selectedMonth = ($_GET['fmonth']) ? $_GET['fmonth'] : ''; ?>
<?php get_header();?>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/header-laporan.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/header-berita.jpg);"></div>
		<div class="content large-6">
			<h1>Laporan Kinerja Bulanan</h1>
			<h2 class="cp-color--gray">Memberikan informasi keuangan untuk kepuasaan dan kepercayaan nasabah</h2>
		</div><!--end large 6-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->
	<div id="wrapper" class="row">
		<section class="bg-white clearfix radius-top-5">
			<div class="sections">
				<h3 class="f-24 m-bottom-25"><?php /* _e("<!--:en-->Select the reports you need<!--:--><!--:id-->Pilih laporan yang Anda butuhkan<!--:-->"); */
														_e("Pilih laporan yang Anda butuhkan"); ?></h3>
				<ul id="media-nav" class="clearfix small-block-grid-1 medium-block-grid-1 large-block-grid-3">
					<li class="laporan-tahunan uppercase"><a href="<?php echo site_url('laporan-tahunan');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline uppercase"><?php /* _e("<!--:en-->Annual reports<!--:--><!--:id-->Laporan tahunan<!--:-->"); */
																																																											_e("Laporan tahunan"); ?></strong></a></li>
					<li class="kinerja-bulanan uppercase"><a href="<?php echo site_url('laporan-kinerja-bulanan');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline uppercase"><?php /* _e("<!--:en-->Financial Reports<!--:--><!--:id-->Laporan Keuangan<!--:-->"); */
																																																													_e("Laporan Keuangan"); ?></strong></a></li>
					<li class="kinerja-bulanan selected"><a href="<?php echo site_url('kinerja-bulanan');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline uppercase"><?php /* _e("<!--:en-->Monthly Performance Reports<!--:--><!--:id-->laporan kinerja bulanan<!--:-->"); */
																																																										 _e("laporan kinerja bulanan"); ?></strong></a></li>

				</ul>
			</div>
		</section>
		<section class="grey">
			<div class="sections clearfix">
				<form id="kinerja-bulanan" name="kinerja-bulanan" class="clearfix h-35 m-bottom-10" action="<?php the_permalink(); ?>" method="GET">
					<select id="kinerja-bulan" class="w-135 left" name="fmonth">
						<option value="" selected>Pilih Bulan </option>
						<option value="1"> Januari </option>
						<option value="2"> Februari </option>
						<option value="3"> Maret </option>
						<option value="4"> April </option>
						<option value="5"> Mei </option>
						<option value="6"> Juni </option>
						<option value="7"> Juli </option>
						<option value="8"> Agustus </option>
						<option value="9"> September </option>
						<option value="10"> Oktober </option>
						<option value="11"> November </option>
						<option value="12"> Desember </option>
					</select>

					<?php
						$query = "SELECT YEAR(post_date) AS `year` FROM $wpdb->posts WHERE post_type = 'laporan_bulanan' GROUP BY YEAR(post_date) ORDER BY post_date DESC";
						$results = $wpdb->get_results($query);
						$currentYear = $results[0]->year;
						?>

						<select id="kinerja-tahun" class="w-135 left m-left-10" disabled="disabled" name="fyear">
							<option>Pilih Tahun</option>
						<?php
						foreach($results as $result){
						$selected = ($_GET['fyear'] == $result->year) ? 'selected' : '';
						?>
								<option value="<?php echo get_post_type_archive_link( 'media' ).$result->year; ?>"><?php echo $result->year; ?></option>
						<?php
									}
						?>
					</select>
					<button type="submit" class="button left m-left-10">Cari</button>
				</form>
				<div id="page-half" class="clearfix">
					<div class="large-8 columns p-left-0">
						<dl class="accordion" data-accordion>
						<?php
							$args = array("post_type" => "laporan_bulanan","posts_per_page" => -1, "year"=>$selectedYear, "monthnum" => $selectedMonth);
							query_posts( $args );
							$a = 0;
							if(have_posts()): while(have_posts()):the_post();
						?>
							<dd>
								<a class="p-tb-15" href="#post-<?php echo $a ?>"><?php the_title() ?></a>
								<div class="content" id="post-<?php echo $a ?>">
									<ul class="pdf-list small-block-grid-1 medium-block-grid-1 large-block-grid-1 clearfix">
										<?php while(has_sub_field('laporan_product')) : ?>
											<li class="p-bottom-0"><a href="<?php the_sub_field('laporan_upload');?>" class="clearfix block white shadow-grey-3" download><span class="icon"></span><strong><?php the_sub_field('name');?></strong><i class="fa fa-download right"></i></a></li>
										<?php endwhile; ?>
									</ul>
								</div>
							</dd>
							<?php $a++; ?>
						<?php endwhile;?>
						<?php else:?>
							Not Found
						<?php endif; ?>
						</dl>
						<?php wp_reset_query(); ?>
					</div>
					<aside class="columns w-322">
					 	<div class="widget"><?php get_template_part("widget/footer-banner-left");?></div>
					</aside>

				</div>
			</div>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
</div>
<?php get_footer();?>
