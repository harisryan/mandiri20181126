<?php/** * Template Name: Laporan Kinerja Bulanan */?>
<?php $selectedYear = ($_GET['fyear']) ? $_GET['fyear'] : ''; ?>
<?php $selectedMonth = ($_GET['fmonth']) ? $_GET['fmonth'] : ''; ?>
<?php $selectedEntity = ($_GET['fentity']) ? $_GET['fentity'] : ''; ?>
<?php get_header();?>

<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/header-laporan.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/header-berita.jpg);"></div>
		<div class="content large-6">
			<h1>Laporan Keuangan</h1>
			<h2 class="cp-color--gray">Memberikan informasi keuangan untuk kepuasaan dan kepercayaan nasabah</h2>
		</div>

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>
	<div id="wrapper" class="row">
		<section class="bg-white clearfix radius-top-5">
			<div class="sections">
				<h3 class="f-24 m-bottom-25"><?php /* _e("<!--:en-->Select the reports you need<!--:--><!--:id-->Pilih laporan yang Anda butuhkan<!--:-->"); */
														_e("Pilih laporan yang Anda butuhkan"); ?></h3>
				<ul id="media-nav" class="clearfix small-block-grid-1 medium-block-grid-1 large-block-grid-3">
					<li class="kinerja-bulanan selected"><a href="<?php echo site_url('laporan-kinerja-bulanan');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline uppercase"><?php /* _e("<!--:en-->Annua Reports<!--:--><!--:id-->Laporan Tahunan<!--:-->"); */
																																																												 _e("Laporan Tahunan"); ?></strong><span class="check-icon right"><i class="fa fa-check-circle"></i></span></a></li>
					<li class="laporan-tahunan uppercase"><a href="<?php echo site_url('laporan-tahunan');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline uppercase"><?php /* _e("<!--:en-->Financial Reports<!--:--><!--:id-->Laporan Keuangan<!--:-->"); */
																																																										_e("Laporan Keuangan"); ?></strong></a></li>
					<li class="kinerja-bulanan "><a href="<?php echo site_url('kinerja-bulanan');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline uppercase"><?php /* _e("<!--:en-->Monthly Performance Reports<!--:--><!--:id-->laporan kinerja bulanan<!--:-->"); */
																																																								_e("laporan kinerja bulanan"); ?></strong></a></li>
				</ul>
			</div>
		</section>
		<section class="grey">
			<div class="sections clearfix">
				<form id="kinerja-bulanan" name="kinerja-bulanan" class="clearfix h-35 m-bottom-10" action="<?php the_permalink(); ?>" method="GET">
					<?php
						$args1 = array(
							'hide_empty'               => 0,
							'hierarchical'             => 1,
							'taxonomy'                 => 'laporan_entity',

						);
					  $categories = get_categories($args1);

					  $select = "<select id='kinerja-bulan' class='w-135 left m-left-10' name='fentity'>";
					  $select.= "<option  disabled selected>Pilih Tipe Asuransi</option>";

					  foreach($categories as $category){
					    if($category->count > 0){
					        $select.= "<option value='".$category->slug."'>".$category->description."</option>";
					    }
					  }

					  $select.= "</select>";

					  echo $select;
					?>

					<?php
						$query = "SELECT YEAR(post_date) AS `year` FROM $wpdb->posts WHERE post_type = 'kinerja_bulanan' GROUP BY YEAR(post_date) ORDER BY post_date DESC";
						$results = $wpdb->get_results($query);
						$currentYear = $results[0]->year;
						?>

						<select id="kinerja-tahun" class="w-135 left m-left-10" disabled="disabled" name="fyear">
							<option>Pilih Tahun</option>
						<?php
						foreach($results as $result){
						$selected = ($_GET['fyear'] == $result->year) ? 'selected' : '';
						?>
								<option value="<?php echo $result->year; ?>"><?php echo $result->year; ?></option>
						<?php
									}
						?>
					</select>


					<button id="button" type="submit" class="button left m-left-10" disabled="disabled">Cari</button>
				</form>
				<div id="page-half" class="clearfix">
					<div class="large-8 columns p-left-0">
						<dl class="accordion" data-accordion>
						<?php
							if ($selectedYear=='' && $selectedEntity=='') {
							$args = array("post_type" => "kinerja_bulanan",
											"posts_per_page" =>-1,
											'tax_query'=> array(
												array('taxonomy'=>"laporan_entity",
														'field'=>'slug',
													   	'terms'=>array("axa-mandiri-financial-services","mandiri-axa-general-insurance"))
												));
							}
							elseif ($selectedYear=="Pilih Tahun") {
							$args = array("post_type" => "kinerja_bulanan",
											"posts_per_page" =>-1,
											'tax_query'=> array(
												array('taxonomy'=>"laporan_entity",
														'field'=>'slug',
													   	'terms'=>array("axa-mandiri-financial-services","mandiri-axa-general-insurance"))
												));
							}
							else{
							$args = array("post_type" => "kinerja_bulanan",
											"posts_per_page" =>-1,
											"year"=>$selectedYear,
											'tax_query'=> array(
												array('taxonomy'=>"laporan_entity",
														'field'=>'slug',
													   	'terms'=>$selectedEntity)
												));
							}
							// query_posts( $args );
							$result = new wp_query($args);
							// echo $result->request;
							// var_dump($args);
							$a = 0;

							if($result->have_posts()): while($result->have_posts()):$result->the_post();

						?>
						<dd>
							<a class="p-tb-15" href="#post-<?php echo $a ?>"><?php the_title() ?></a>
							<?php
							$lap=get_field('laporan_product');
							if(count($lap)==1):
								?>
								<div class="content active" id="post-<?php echo $a ?>">
								<ul class="pdf-list small-block-grid-1 medium-block-grid-1 large-block-grid-1 clearfix">
									<?php while(has_sub_field('laporan_product')) : ?>
										<li><a href="<?php the_sub_field('laporan_upload');?>" class="clearfix block white shadow-grey-3" download><span class="icon"></span><strong><?php echo get_sub_field('name') . ' ' . getFileDetail(get_sub_field('laporan_upload'));?></strong><i class="fa fa-download right"></i></a></li>
									<?php endwhile; ?>
								</ul>
								</div>
							<?php else:?>
								<div class="content" id="post-<?php echo $a ?>">
								<ul class="pdf-list small-block-grid-1 medium-block-grid-1 large-block-grid-1 clearfix">
									<?php while(has_sub_field('laporan_product')) : ?>
										<li><a href="<?php the_sub_field('laporan_upload');?>" class="clearfix block white shadow-grey-3" download><span class="icon"></span><strong><?php echo get_sub_field('name') . ' ' . getFileDetail(get_sub_field('laporan_upload'));?></strong><i class="fa fa-download right"></i></a></li>
									<?php endwhile; ?>
								</ul>
								</div>
							<?php endif;?>
						</dd>
						<?php $a++; ?>
						<?php endwhile;?>
						<?php else:?>
							Not Found
						 	<?php endif; ?>
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
