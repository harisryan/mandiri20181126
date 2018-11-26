<?php/** * Template Name: Laporan Tahunan */?>
<?php $selectedYear = ($_GET['fyear']) ? $_GET['fyear'] : ''; ?>
<?php $selectedEntity = ($_GET['fentity']) ? $_GET['fentity'] : ''; ?>
<?php $jenis = ($_GET['fjenis']) ? $_GET['fjenis'] : ''; ?>
<?php $periode = ($_GET['fperiode']) ? $_GET['fperiode'] : ''; ?>
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
				<h3 class="f-24 m-bottom-25"><?php /* _e("<!--:en-->Select the reports you need<!--:--><!--:id-->Pilih laporan yang Anda butuhkan<!--:-->");*/
														_e("Pilih laporan yang Anda butuhkan"); ?></h3>
				<ul id="media-nav" class="clearfix small-block-grid-1 medium-block-grid-1 large-block-grid-3">
					<li class="kinerja-bulanan"><a href="<?php echo site_url('laporan-kinerja-bulanan');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline uppercase"><?php /* _e("<!--:en-->Annual Reports<!--:--><!--:id-->Laporan Tahunan<!--:-->"); */
																																																										_e("Laporan Tahunan"); ?></strong></a></li>
					<li class="laporan-tahunan selected uppercase"><a href="<?php echo site_url('laporan-tahunan');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline uppercase"><?php /* _e("<!--:en-->Financial Reports<!--:--><!--:id-->Laporan keuangan<!--:-->"); */
																																																													_e("Laporan keuangan"); ?></strong><span class="check-icon right"><i class="fa fa-check-circle"></i></span></a></li>
					<li class="kinerja-bulanan "><a href="<?php echo site_url('kinerja-bulanan');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline uppercase"><?php /* _e("<!--:en-->Monthly Performance Reports<!--:--><!--:id-->laporan kinerja bulanan<!--:-->"); */
																																																								_e("laporan kinerja bulanan"); ?></strong></a></li>
				</ul>
			</div>
		</section>
		<section class="grey">
			<div class="sections clearfix">
				<form id="laporan-tahunan"  class="clearfix h-35 m-bottom-10" action="<?php the_permalink(); ?>" method="GET">
					<?php
						$query = "SELECT YEAR(post_date) AS `year` FROM $wpdb->posts WHERE post_type = 'laporan_keuangan' GROUP BY YEAR(post_date) ORDER BY post_date DESC";
						$results = $wpdb->get_results($query);
						$currentYear = $results[0]->year;
						?>

						<select id="laporan-tahun" class="w-135 left required" name="fyear" >
							<option disabled  selected>Pilih Tahun</option>
						<?php
						foreach($results as $result){
						$selected = ($_GET['fyear'] == $result->year) ? 'selected' : '';
						?>
								<option value="<?php echo $result->year; ?>"><?php echo $result->year; ?></option>
						<?php
									}
						?>
					</select>
					<?php
							$args1 = array(
								'hide_empty'               => 0,
								'hierarchical'             => 1,
								'taxonomy'                 => 'laporan_entity',

							);
						  $categories = get_categories($args1);

						  $select = "<select id='laporan-entity' class='w-135 left m-left-10 required' name='fentity'>";
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
									$args2 = array(
										'hide_empty'               => 0,
										'hierarchical'             => 1,
										'taxonomy'                 => 'jenis-laporan');
								  $jenislaporan = get_categories($args2);

								  $select = "<select id='laporan-keuangan' class='w-135 left m-left-10 required' name='fjenis'>";
								  $select.= "<option disabled selected>Jenis Laporan Keuangan</option>";

								  foreach($jenislaporan as $jenis){
								    if($jenis->count > 0){
								        $select.= "<option value='".$jenis->slug."'>".$jenis->name."</option>";
								    }
								  }

								  $select.= "</select>";

								  echo $select;
						?>
						<select id='periode-keuangan' class='w-135 left m-left-10 required' name='fperiode'>
							<option disabled selected >Pilih Tipe periode</option>
							<option value="triwulan-i">Triwulan I</option>
							<option value="triwulan-ii">Triwulan II</option>
							<option value="triwulan-iii">Triwulan III</option>
							<option value="triwulan-iv">Triwulan IV</option>
							<option value="tahunan">Tahunan</option>
						</select>

					<button id="button" type="submit" class="button blue left m-left-10">Cari</button>
					<small class="form-requirements">* Semua field wajib diisi.</small>
				</form>
				<div id="page-half" class="clearfix">
					<div class="large-8 columns p-left-0">
						<?php
						if($selectedEntity!='' && $_GET['fjenis']!='' && $selectedYear!=''):
							$args = array("post_type" => "laporan_keuangan",
								"posts_per_page" =>-1,
								"year"=>$selectedYear,
								'tax_query'=>array(
										array('taxonomy'=>"laporan_entity",
												'field'=>'slug',
											   	'terms'=>$selectedEntity),
										array('taxonomy'=>"jenis-laporan",
												'field'=>'slug',
											   	'terms'=>$_GET['fjenis'])
										)

								);
							query_posts( $args );
							// var_dump($args);
							$results = new WP_Query( $args );
							// echo $results->request;
							if(have_posts()): while(have_posts()):the_post();
							// var_dump($results->the_post());
						?>


						<?php if(get_field('file_tahunan') != "" && $_GET['fperiode']=="tahunan"): ?>
						<div class="accordion">
							<dd><a class="p-tb-15">Laporan Tahunan</a></dd>
						</div>
						<ul class="pdf-list small-block-grid-1 medium-block-grid-1 large-block-grid-1 clearfix">
							<li><a href="<?php the_field('file_tahunan');?>" class="clearfix block white shadow-grey-3" download><span class="icon"></span><strong><?php the_title();?></strong><i class="fa fa-download right"></i></a></li>
						</ul>
						<?php elseif($_GET['fperiode']!='tahunan'): ?>
						<?php else:?>
						<ul class="pdf-list small-block-grid-1 medium-block-grid-1 large-block-grid-1 clearfix">
							<li><strong>Laporan tahunan tidak ditemukan</strong></li>
						</ul>
						<?php endif; ?>

						<?php while(has_sub_field('file_triwulan')) : ?>
							<?php if(get_sub_field('periode')==$periode): ?>
						<div class="accordion">
							<dd><a class="p-tb-15">Laporan Triwulan</a></dd>
						</div>
								<ul class="pdf-list small-block-grid-1 medium-block-grid-1 large-block-grid-1 clearfix">
									<li class="p-bottom-0"><a href="<?php the_sub_field('file');?>" class="clearfix block white shadow-grey-3" download><span class="icon"></span><strong><?php the_sub_field('name');?></strong><i class="fa fa-download right"></i></a></li><?php get_sub_field('file');?>
								</ul>
							<?php elseif($_GET['fperiode']=='tahunan'):?>

							<?php endif; ?>
						<?php endwhile; ?>


						<?php endwhile;?>
						<?php else:?>
							Not Found
						<?php endif; ?>


					<?php else: ?>
					<dl class="accordion" data-accordion>
					<?php
							$args = array("post_type" => "laporan_keuangan","posts_per_page" => -1);
							query_posts( $args );
							$a = 0;
							if(have_posts()): while(have_posts()):the_post();
						?>
							<dd>

								<a class="p-tb-15" href="#post-<?php echo $a ?>"><?php the_title() ?></a>
								<div class="content" id="post-<?php echo $a ?>">
									<ul class="pdf-list small-block-grid-1 medium-block-grid-1 large-block-grid-1 clearfix">
										<?php if(get_field('file_tahunan')!=''):?>
											<li><a href="<?php the_field('file_tahunan');?>" class="clearfix block white shadow-grey-3" download><span class="icon"></span><strong><?php the_title();?></strong><i class="fa fa-download right"></i></a></li>
										<?php else:?>
										<?php endif;?>

										<?php while(has_sub_field('file_triwulan')) :?>
											<?php if(get_sub_field('file')!=""):?>
												<li class="p-bottom-0"><a href="<?php the_sub_field('file');?>" class="clearfix block white shadow-grey-3" download><span class="icon"></span><strong><?php the_sub_field('name');?></strong><i class="fa fa-download right"></i></a></li><?php get_sub_field('file');?>
											<?php else:?>
											<?php endif;?>
										<?php endwhile;?>
									</ul>
								</div>
							</dd>
							<?php $a++; ?>
						<?php endwhile;?>
						<?php else:?>
							Not Found
						<?php endif; ?>
						</dl>

					<?php endif; ?>
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
