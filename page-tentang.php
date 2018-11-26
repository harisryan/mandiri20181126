<?php/** * Template Name: Tentang AXA Mandiri */?>
<?php get_header();?>
<script src='//pixel.mathtag.com/event/js?mt_id=570167&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="masthead" class="row relative">
		<div class="content large-4">
			<!--<h1><?php the_title(); ?></h1>-->
            <h1 class="header1"><?php the_title(); ?></h1>

			<!--<h2 style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></h2>-->
			<div class="header2" style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></div>
		</div><!--end large 4-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->

	<div id="wrapper" class="row">
		<section id="content-details" class="clearfix">
			<?php if( have_posts() ) : the_post(); ?>
				<?php the_content();?>
			<?php endif;?>

			<ul id="icons" class="clearfix">
				<li class="karyawan"></li>
				<li class="pemasaran"></li>
				<li class="nasabah"></li>
			</ul>
		</section>

		<section id="nilai-axa" class="blue-sections clearfix" style="background-image:url(<?php the_field('blue_sections_images');?>);">
			<span class="blue-sections-cover-left"></span>
			<!-- <span class="blue-sections-cover"></span> -->
			<?php if(get_field('nilai_axa')): ?>
				<?php while(has_sub_field('nilai_axa')): ?>
					<h3 role="heading" aria-level="3"><?php /* _e("<!--:en-->POINTS OF AXA Mandiri<!--:--><!--:id-->NILAI-NILAI AXA Mandiri<!--:-->"); */
								_e("NILAI-NILAI AXA Mandiri"); ?></h3>
					<div class="large-6 column first-child">
						<h2 class="f-24 c-white"><?php the_sub_field('title');?></h2>
						<?php the_sub_field('content');?>
					</div>
					<!-- <ul id="icons" class="relative large-6 column">
						<li class="profesionalism">
							<span class="tooltip absolute">
							<strong>Professionalism</strong>
								Kami berkomitmen untuk memberikan pelayanan yang optimal dan berstandar tinggi.
							</span>
						</li>

						<li class="integrity">
							<span class="tooltip absolute">
							<strong>Integrity</strong>
								Kami mengambil langkah nyata untuk memenuhi kebutuhan nasabah dan karyawan secara efisien, akurat, dan terpercaya.
							</span>
						</li>

						<li class="pragmatism">
							<span class="tooltip absolute profesionalism">
							<strong>Pragmatism</strong>
								Kami mengimplementasikan ide ke dalam langkah nyata,<br/>serta mengomunikasikannya secara jelas dan terbuka.
							</span>
						</li>

						<li class="innovation">
							<span class="tooltip absolute profesionalism">
							<strong>Innovation</strong>
								Kami juga secara konsisten menciptakan inovasi baru sebagai nilai tambah bagi semua pemangku kepentingan.
							</span>
						</li>

						<li class="spirit">
							<span class="tooltip absolute profesionalism">
							<strong>Spirit</strong>
								Kami lakukan dengan menjunjung team spirit, semangat kebersamaan sebagai satu perusahaan, AXA.
							</span>
						</li>
					</ul> -->
				<?php endwhile;?>
			<?php endif;?>
			<span class="blue-sections-cover-right"></span>
		</section>

		<section id="axa-group" class="clearfix background-vector">


			<div id="logo-axa" class="logo-branding left">
				<img src="https://axa.co.id/ingatsehat/img/logo-axa.png" alt="Logo AXA Indonesia" />
			</div><!-- #logo-axa  -->
			<div id="logo-mandiri" class="logo-branding right">
				<img style="height: 80px; margin-top: -10px" src="https://axa-mandiri.co.id/wp-content/uploads/2018/09/magi-logo-high.png" alt="Logo AXA Mandiri" class="cp-margin--bottom15"  />
			</div>
			<div class="clearfix"></div>


			<?php the_field('tentang'); ?>
			<br>
			<?php if(get_field('axa_indonesia_group')): ?>
			<div class="group-tabs">
				<dl class="tabs" data-tab>
					<?php while(has_sub_field('axa_indonesia_group')): ?>
						<?php $string = str_replace(' ','', get_sub_field('title'));?>
				  		<dd class="" data-entity="<?php echo $string; ?>"><a href="#<?php echo $string;?>"><?php the_sub_field('title');?></a></dd>
				  	<?php endwhile;?>
				</dl>
				<div class="tabs-content">
					<?php while(has_sub_field('axa_indonesia_group')): ?>
					<?php $string = str_replace(' ','', get_sub_field('title'));?>
					  <div class="content" id="<?php echo $string;?>">
					  	<?php
					   		$nama = get_sub_field("ceo");
					   		if($nama[0]['nama'] != ""): ?>
					    <div class="large-6 columns">
					    <?php else:?>
					    	<div class="large-12 columns">
						<?php endif;?>
					    	 <h4></span><?php the_sub_field('title');?></h4>
					    	<?php the_sub_field('content');?>
					    </div>

					    <?php if(get_sub_field('ceo')): ?>
					   	<?php
					   		$nama = get_sub_field("ceo");
					   		if($nama[0]['nama'] != ""): ?>
						    <div class="large-6 columns">
						    	<div class="ceo-section bg-grey o-hidden radius-all-5">
						    		<?php while(has_sub_field('ceo')): ?>
						    			<div class="large-3 columns text-center">
						    				<img src="<?php the_sub_field('photo');?>" alt="<?php the_sub_field('nama');?> - <?php the_sub_field('jabatan');?>">
						    			</div>
						    			<div class="large-9 columns">
						    				<h4><?php the_sub_field('nama');?></h4>
						    				<h5><?php the_sub_field('jabatan');?></h5>
						    			</div>
						    			<div class="description clearfix">
						    				<?php the_sub_field('deskripsi');?>
						    			</div>
						    		<?php endwhile;?>
						    	</div>
						    </div>
						    <?php endif;?>
						<?php endif;?>
					  </div>
				  	<?php endwhile;?>
				</div>
			</div>
			<?php endif;?>
		</section><!--end axa group test-->

		<section id="board-director" class="clearfix" <?php if (get_field('hide_bod_section')) {
			echo "class=\"cp-display--none\"";
		} ?>>
			<?php while(has_sub_field('axa_indonesia_group')): ?>
				<?php if(get_sub_field('board_of_director')): ?>
				<?php $string = str_replace(' ','', get_sub_field('title'));?>
				<div class="filter <?php echo $string; ?>" data-entity2="<?php echo $string; ?>">
					<h3 class="text-center f-18"><?php echo (!empty(get_sub_field('change_title_bod'))) ? get_sub_field('change_title_bod') : 'Struktur Organisasi Dewan Komisaris dan Direksi' ?></h3>
					<ul class="bod-section clearfix cp-margin--zero">
						<?php while(has_sub_field('board_of_director')): ?>
						<li class="cp-margin--10">
						<div class="panel bg-greydark o-hidden p-all-25 m-all-10 radius-all-5">
							<div class="large-3 columns p-left-0"><img src="<?php the_sub_field('photo');?>" alt="<?php the_sub_field('nama');?> - <?php the_sub_field('jabatan');?>"/></div>
							<div class="large-9 columns p-all-0 m-top-20">
								<h4><?php the_sub_field('nama');?></h4>
								<h5><?php the_sub_field('jabatan');?></h5>
							</div>
							<div class="details p-top-20 clearfix">
								<p><?php the_sub_field('deskripsi');?></p>
							</div>
						</div>
						</li>
						<?php endwhile;?>
					</ul>
				</div>
				<?php endif;?>
			<?php endwhile; ?>
		</section> <!--end board of director-->

		<?php while (has_sub_field('axa_indonesia_group')) : ?>
			<?php if (get_sub_field('title')!='') : ?>
				<?php $string = str_replace(' ','', get_sub_field('title'));?>
				<?php if (!empty(get_sub_field('add_new_section'))) : ?>

					<?php
					$list_new_section = get_sub_field('add_new_section');
					foreach ($list_new_section as $section) {
					?>
						<section id="board-director" class="clearfix"> 
								<div class="filter <?php echo $string; ?>" data-entity="<?php echo $string; ?>">
									<h3 class="text-center f-18"><?php echo $section['title'] ?></h3>
									<ul class="bod-section clearfix" style="margin:0;">
										<?php foreach ($section['list_bod'] as $bod) { ?>
											<li style="margin:10px;">
												<div class="panel bg-greydark o-hidden p-all-25 m-all-10 radius-all-5">
													<div class="large-3 columns p-left-0"><img src="<?php echo $bod['photo'] ?>" alt="AXA Indonesia"/></div>
													<div class="large-9 columns p-all-0 m-top-20">
														<h4><?php echo $bod['nama'] ?></h4>
														<h5><?php echo $bod['jabatan'] ?></h5>
													</div>
													<div class="details p-top-20" style="clear:both;">
														<p><?php echo $bod['deskripsi'] ?></p>
													</div>
												</div> 
											</li>
										<?php } ?>
									</ul>
								</div>		
						</section><!--end board of director dummy-->
					<?php
					}
					?>
				<?php endif; ?>
			<?php endif;?>
		<?php endwhile; ?>

		<section id="data-tenaga-pemasar-section" class="bg-white3 sections clearfix relative o-hidden">
			<div class="large-12 column">
				<h4><?php _e("AXA Mandiri Financial Services"); ?></h4>
				<p><?php _e("PT AXA Mandiri Financial Services didukung oleh lebih dari 2.300 Financial Advisor di lebih dari 1.300 cabang Bank Mandiri dan 200 cabang Bank Syariah Mandiri di seluruh Indonesia, serta lebih dari 500 Sales Officer pada jalur telemarketing dan korporasi. PT AXA Mandiri Financial Services terdaftar dan diawasi Otoritas Jasa Keuangan (OJK). Berikut adalah data tenaga pemasar:");?></p>
				<a href="<?php echo  site_url();?>/wp-content/uploads/datapemasar/Data_Tenaga_Pemasar.pdf" target="_blank" style="text-decoration:underline!mportant" > <?php _e("Daftar Tenaga Pemasaran Bancassurance"); ?></a><br/>
				<a href="<?php echo  site_url();?>/wp-content/uploads/surat-pengantar-ke-ojk-juni-2017.pdf" target="_blank" style="text-decoration:underline!mportant;line-height: 25px;" > <?php _e("Nama Kepala Kantor di Luar Kantor Pusat (BM)"); ?></a><br/>
				<a href="<?php echo  site_url();?>/wp-content/uploads/dokumen-ojk-sharia-penggantian-aick-ke-herri-januar.pdf" target="_blank" style="text-decoration:underline!mportant" > <?php _e("Nama Kepala Kantor di Luar Kantor Pusat (BSM)"); ?></a>
				
			</div>			
		</section><!--end karir-->
		<section id="karir-section" class="clearfix">
			<h3 class="small-title"><?php /* _e("<!--:en-->CAREER<!--:--><!--:id-->KARIR<!--:-->"); */
											 _e("KARIR"); ?></h3>
			<div class="large-6 column first-child">
			<h4><?php /* _e("<!--:en-->Be Part of AXA Mandiri <!--:--><!--:id-->Jadi Bagian dari AXA Mandiri <!--:-->"); */
						_e("Jadi Bagian dari AXA Mandiri"); ?></h4>
				<p><?php /* _e("<!--:en-->To be the company of choice for employees, AXA Mandiri always create a comfortable working environment and ensures that each employee obtain various facilities to improve their competence. AXA Mandiri improve employee engagement success led the company won the award for Best Employer in Indonesia 2011 from Aon Hewitt Consulting Asia Pacific.<!--:-->
							<!--:id-->Untuk menjadi perusahaan pilihan bagi karyawan, AXA Mandiri senantiasa menciptakan lingkungan kerja yang nyaman dan memastikan bahwa setiap karyawan memperoleh berbagai fasilitas untuk meningkatkan kompetensi mereka. Keberhasilan AXA Mandiri meningkatkan employee engagement membawa perusahaan meraih penghargaan sebagai Best Employer in Indonesia 2011 dari Aon Hewitt Consulting Asia Pacific.<!--:-->"
				);  */
							_e("Untuk menjadi perusahaan pilihan bagi karyawan, AXA Mandiri senantiasa menciptakan lingkungan kerja yang nyaman dan memastikan bahwa setiap karyawan memperoleh berbagai fasilitas untuk meningkatkan kompetensi mereka. Keberhasilan AXA Mandiri meningkatkan employee engagement membawa perusahaan meraih penghargaan sebagai Best Employer in Indonesia 2011 dari Aon Hewitt Consulting Asia Pacific."
				);?></p>
				<a href="<?php echo  site_url('karir');?>" class="button">
					<?php /* _e("<!--:en-->Join with AXA Mandiri<!--:--><!--:id-->Bergabung dengan AXA Mandiri<!--:-->"); */
							_e("Bergabung dengan AXA Mandiri"); ?></a>
			</div>
			<div class="large-5 column">
				<ul class="career-list">
					<li class="world"><span><h6>Miliki kesempatan memimpin dalam perusahaan bertaraf internasional</h6></span></li>
					<li class="innovation"><span><h6>Ciptakan produk-produk inovatif dan pelayanan yang lebih baik</h6></span></li>
					<li class="environments"><span><h6>Bekerja di lingkungan yang terbuka terhadap pengembangan diri Anda</h6></span></li>
					<li class="ladder"><span><h6>Miliki kesempatan bekerja dan belajar serta mengembangkan karir</h6></span></li>
				</ul>
			</div>
		</section><!--end karir-->

		<section id="kontak" class="bg-white3 sections clearfix relative o-hidden">
			<!-- <div class="transparent-separate absolute about-separate"><img src="<?php bloginfo('template_url'); ?>/images/separate-transparent.png" alt="AXA Mandiri"/></div> -->
			<!-- <a href="" class="button floating">Download Company Profile</a> -->
			<!-- <h3 class="small-title"></h3> -->
			<h4><?php /* _e("<!--:en-->Financial Statements<!--:--><!--:id-->Laporan Keuangan<!--:-->"); */
						_e("Laporan Keuangan");?></h4>


	        <div class="large columns">
	        		<div class="bg-greydark clearfix large-5 columns radius-all-5 cp-margin--bottom10">
	        			<div class="box p-all-10">
	        				<h5>Laporan Triwulan</h5>
	        				<form id="laporan-tahunan" action="<?php echo get_permalink(3326) ?>" method="GET">
								<?php
									$query = "SELECT YEAR(post_date) AS `year` FROM $wpdb->posts WHERE post_type = 'laporan_keuangan' GROUP BY YEAR(post_date) ORDER BY post_date DESC";
									$results = $wpdb->get_results($query);
									$currentYear = $results[0]->year;
									?>

									<select id="laporan-tahun" class="required w-48p  columns" name="fyear">
										<option disabled selected value="">Pilih Tahun</option>
									<?php
									foreach($results as $result){
									$selected = ($_GET['fyear'] == $result->year) ? 'selected' : '';
									?>
											<option value="<?php echo $result->year; ?>"><?php echo $result->year; ?></option>
									<?php
												}
									?>
								</select>

								<select id='periode-keuangan' class='required right w-48p columns' name='fperiode'>
									<option disabled selected >Pilih Tipe periode</option>
									<option value="triwulan-i">Triwulan I</option>
									<option value="triwulan-ii">Triwulan II</option>
									<option value="triwulan-iii">Triwulan III</option>
									<option value="triwulan-iv">Triwulan IV</option>
									<option value="tahunan">Tahunan</option>

								</select>
								<!-- <select id="periode-keuangan" class="required w-48p right columns">
									<option disabled selected>Pilih Periode</option>

								</select> -->

								<div class="clearfix"></div>

								<?php
									$args2 = array(
										'hide_empty'               => 0,
										'hierarchical'             => 1,
										'taxonomy'                 => 'jenis-laporan');
								  $jenislaporan = get_categories($args2);

								  $select = "<select id='laporan-keuangan' class='required w-48p columns' name='fjenis'>";
								  $select.= "<option disabled selected>Jenis Laporan Keuangan</option>";

								  foreach($jenislaporan as $jenis){
								    if($jenis->count > 0){
								        $select.= "<option value='".$jenis->slug."'>".$jenis->name."</option>";
								    }
								  }

								  $select.= "</select>";

								  echo $select;
								?>
								<!-- <select id="jenis-keuangan" class="required w-48p columns">
									<option disabled selected>Jenis Laporan Keuangan</option>
								</select> -->


								<?php
									$args = array(
										'hide_empty'               => 0,
										'hierarchical'             => 1,
										'taxonomy'                 => 'laporan_entity');
								  $categories = get_categories($args);

								  $select = "<select id='laporan-entity' class='required right w-48p columns' name='fentity'>";
								  $select.= "<option disabled selected>Pilih Tipe Asuransi</option>";

								  foreach($categories as $category){
								    if($category->count > 0){
								        $select.= "<option value='".$category->slug."'>".$category->description."</option>";
								    }
								  }

								  $select.= "</select>";

								  echo $select;
								?>
								<!-- <small class="form-requirements">* Semua field wajib diisi.</small> -->
		        				<button type="submit" class="button right">Cari</button>
	        				</form>
	        			</div>
	        		</div>
	        		<div class="large-7 columns">
	        		<!-- Laporan Kinerja Bulanan -->
	        		<div class="large-6 columns">
	        			<div class="bg-greydark clearfix   radius-all-5 box p-all-20">
	        				<h5>Laporan Kinerja Bulanan</h5>
	        				<form id="kinerja-bulanan" action="<?php echo site_url('kinerja-bulanan');?>">
					        	<select id="kinerja-bulan" name='fmonth'>
									<option>Pilih Bulan </option>
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

									<select id="kinerja-tahun"  disabled="disabled" name="fyear">
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

		        				<button type="submit" class="button right">Cari</button>
	        				</form>
	        			</div>
	        		</div>
	        		<!-- end Laporan Kinerja Bulanan -->

	        		<div class="large-6 columns">
	        			<div class="bg-greydark clearfix radius-all-5 box p-all-20">
	        				<h5>Laporan Tahunan</h5>
	        				<form id="kinerja-bulanan" action="<?php echo site_url('laporan-kinerja-bulanan');?>">
					        	<!-- <select id="kinerja-bulan">
									<option>Pilih Bulan </option>
									<option value="fmonth=1"> Januari </option>
									<option value="fmonth=2"> Februari </option>
									<option value="fmonth=3"> Maret </option>
									<option value="fmonth=4"> April </option>
									<option value="fmonth=5"> Mei </option>
									<option value="fmonth=6"> Juni </option>
									<option value="fmonth=7"> Juli </option>
									<option value="fmonth=8"> Agustus </option>
									<option value="fmonth=9"> September </option>
									<option value="fmonth=10"> Oktober </option>
									<option value="fmonth=11"> November </option>
									<option value="fmonth=12"> Desember </option>
								</select> -->

								<?php
									$query1 = "SELECT YEAR(post_date) AS `year` FROM $wpdb->posts WHERE post_type = 'kinerja_bulanan' GROUP BY YEAR(post_date) ORDER BY post_date DESC";
									$results1 = $wpdb->get_results($query1);
									$currentYear1 = $results1[0]->year;
									?>

									<select id="kinerja-tahun" name="fyear">
										<option>Pilih Tahun</option>
									<?php
									foreach($results1 as $result1){
									$selected1 = ($_GET['fyear'] == $result1->year) ? 'selected' : '';
									?>
											<option value="<?php echo $result1->year; ?>"><?php echo $result1->year; ?></option>
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
								  $categories1 = get_categories($args1);

								  $select1 = "<select id='laporan-entity' name='fentity'>";
								  $select1.= "<option  disabled selected>Pilih Tipe Asuransi</option>";

								  foreach($categories1 as $category1){
								    if($category1->count > 0){
								        $select1.= "<option value='".$category1->slug."'>".$category1->description."</option>";
								    }
								  }

								  $select1.= "</select>";

								  echo $select1;
								?>
		        				<button type="submit" class="button right">Cari</button>
	        				</form>
	        			</div>
	        		</div>
	        	</div><!--end large 6-->
	       <!-- <div class="large-4 columns branch">
	                <strong><?php /* _e("<!--:en-->Branch Office<!--:--><!--:id-->Kantor Cabang<!--:-->"); */
	                				_e("Kantor Cabang"); ?></strong>
            		<p><?php /* _e("<!--:en-->Find the nearest AXA Mandiri branch office in the your city<!--:--><!--:id-->Cari kantor cabang AXA terdekat di kota Anda<!--:-->"); */
            					_e("Cari kantor cabang AXA terdekat di kota Anda"); ?></p>
        		<select id="kantor-cabang">
					<option>Pilih Kota</option>
				</select>
				<button type="input" class="button red">Cari</button>
	        </div>-->
		</section><!--end section contact us-->

		<?php get_template_part("widget/breadcrumbs");?>
	</div><!--end row-->
<?php get_template_part("widget/hargaunit");?>
</div><!--end page-container-->


<?php get_footer();?>
<script type="text/javascript">
	$(document).ready(function(){
		$(".group-tabs dd:first-child").addClass("active");
		$(".tabs-content .content:first-child").addClass("active");
		var en=$('dd:first-child').data('entity');
		console.log(en);
		$("#board-director .owl-item .filter."+en).addClass('active');
		$("div.filter."+en).show();
		$( "div.filter" ).not( $('.'+en)).hide();
	});
		$('dd').click(function(){
			$("#board-director .owl-item").removeClass('active');
			var href=$(this).data('entity');
			$( "div.filter" ).not( $('.'+href)).hide();
			$("div.filter."+href).addClass('active');
			$("div.filter."+href+".active").show();

			$("#board-director .owl-item .filter."+href).each(function() {
				var entity=$("#board-director .owl-item .active").attr('class');
				var en_arr=entity[1];
				console.log(en_arr);

			});
		});
		// $(document).ready(function(){$("#axa-group > p:nth-of-type(1)").append("<a href='https://www.axa-mandiri.co.id/wp-content/uploads/2015/12/Struktur-Organisasi-AXA-Indonesia.pdf' target='_blank' style='text-decoration:underline'><strong>Lihat Struktur Organisasi AXA Indonesia</strong></a>"); });
		// $(document).ready(function(){$("#axa-group > p:nth-of-type(2)").append("<a href='https://www.axa-mandiri.co.id/wp-content/uploads/2015/12/Struktur-Organisasi-AXA-Mandiri.pdf' target='_blank' style='text-decoration:underline'><strong>Lihat Struktur Organisasi AXA Mandiri</strong></a>"); });
</script>


<style>
	@media screen and (max-width: 640px) {
		.logo-branding{
			display: none;
		}
	}
</style>
