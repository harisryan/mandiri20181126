<?php/** * Template Name: Media:video */?>
<?php $selectedYear = ($_GET['fyear']) ? $_GET['fyear'] : ''; ?>
<?php get_header();?>
<script src='//pixel.mathtag.com/event/js?mt_id=570178&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
<div id="page-container" style="background-image:url(<?php echo bloginfo('template_url');?>/images/header-berita.jpg);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php echo bloginfo('template_url');?>/images/header-berita.jpg);"></div>
		<div class="content large-6">
			<h1 class="header1">Media</h1>
			<div class="header2" class="cp-color--white">Cari tahu informasi dan berita terbaru mengenai AXA Mandiri</div>
			<div class="cp-display--none"><h2>AXA Mandiri</h2></div>
		</div><!--end large 6-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->
	<div id="wrapper" class="row">
		<section class="bg-white3 clearfix radius-top-5">
			<div class="sections">
				<h3 class="f-24"><?php /* _e("<!--:en-->AXA Mandiri News<!--:--><!--:id-->Berita AXA Mandiri<!--:-->"); */
											_e("Berita AXA Mandiri"); ?></h3>
				<form id="tahun-berita" name="tahun-berita" class="clearfix h-35 m-bottom-10">
					<label class="m-right-10 h-35 left">Pilih berdasarkan tahun</label>
				<?php
					$query = "SELECT YEAR(post_date) AS `year` FROM $wpdb->posts WHERE post_type = 'post' GROUP BY YEAR(post_date) ORDER BY post_date DESC";
					$results = $wpdb->get_results($query);
					$currentYear = $results[0]->year;
					?>

					<select id="pilih-tahun-berita" class="w-135 left">
						<option>Pilih Tahun</option>
					<?php
					foreach($results as $result){
					$selected = ($_GET['fyear'] == $result->year) ? 'selected' : '';
					?>
							<option value="<?php echo get_post_type_archive_link( 'media' ).'?fyear='.$result->year; ?>" <?php echo $selected ?> ><?php echo $result->year; ?></option>
					<?php
								}
					?>
						</select>
				</form>
				<ul id="media-nav" class="clearfix small-block-grid-1 medium-block-grid-1 large-block-grid-4">
					<li class="semua uppercase"><a href="<?php echo site_url('media');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline"><?php /* _e("<!--:en-->All<!--:--><!--:id-->Semua<!--:-->"); */
																																																			_e("Semua"); ?></strong></a></li>
					<li class="berita uppercase"><a href="<?php echo site_url('media/berita');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline"><?php /* _e("<!--:en-->News<!--:--><!--:id-->Berita<!--:-->"); */
																																																					_e("Berita"); ?></strong></a></li>
					<li class="press uppercase"><a href="<?php echo site_url('media/press-release');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline"><?php /* _e("<!--:en-->Press Release<!--:--><!--:id-->Siaran Pers<!--:-->"); */
																																																							_e("Siaran Pers"); ?></strong></a></li>
					<li class="video uppercase selected"><a href="<?php echo site_url('media/video');?>" class="block clearfix bg-white radius-all-5"><span class="icon-77x70 left"></span><strong class="inline"><?php /* _e("<!--:en-->video<!--:--><!--:id-->video<!--:-->"); */
																																																						_e("video"); ?></strong></a></li>
				</ul>
				<div class="men-mobile-media">
					<div class="mobile-content p-tb-15">
						<select id="dir-menu">
							<option value="<?php echo site_url('media');?>"  selected="selected">Semua</option>
							<option value="<?php echo site_url('media/berita');?>" >Berita</option>
							<option value="<?php echo site_url('media/press-release');?>">Siaran Pers</option>
							<option value="<?php echo site_url('media/video');?>">Video</option>
						</select>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-white4">
			<div class="sections clearfix">
			<div id="blog" class="celarfix">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array("post_type" => "post","posts_per_page" =>12, 'paged' => $paged, 'category_name'=>'video', "year"=>$selectedYear);
				query_posts( $args );
				if(have_posts()): while(have_posts()):the_post();
				get_template_part('inc/media');
			?>
					<?php $image = ""; endwhile;?>
				</div>

			<?php endif;?>

			<div class="pagination text-center m-top-20 block"> <?php wp_pagenavi(); ?></div>
			</div>
		</section>

		<section id="contact-section" class="clearfix background-vector relative no-border">

			<div class="large-4 columns show-for-large-only first-child">
                <h4>Hubungan Media</h4>
                <p>Untuk informasi serta data lain yang bersifat peliputan media mengenai produk, layanan, maupun aktivitas AXA Mandiri, Anda dapat menghubungi bagian Corporate Communications. <br> Kirim permintaan Anda dan kami akan mengirimkan media kit kami</p>
				<a class="button blue small left" href="<?php echo site_url('hubungi-kami');?>">Hubungi Kami</a>

	        </div>
			<div class="right large-7">
				<div class="large-6 columns bg-greydark radius-all-5 w-48p">
					<div class="box p-all-15">
						<strong class="block m-bottom-10">Asuransi Jiwa</strong>
						<span>Luile Sawitri</span><br/>
						<ul class="clearfix">
							<li class="telepon">+62 21 3005 8888</li>
							<li class="fax">+62 21 3005 8500</li>
							<li class="mail"><a href="mailto:Luile.sawitri@axa-mandiri.co.id" class="c-default">Luile.sawitri@axa-mandiri.co.id</a></li>
						</ul>
					</div>
				</div>
				<div class="large-6 columns bg-greydark radius-all-5 w-48p">
					<div class="box p-all-15">
						<strong class="block m-bottom-10">Asuransi Umum</strong>
						<span>Bonifacio Renanda</span><br/>
						<ul class="clearfix">
							<li class="telepon">+62 21 30057612</li>
							<li class="fax">+62 21 30057600</li>
							<li class="mail"><a href="mailto:bonifacio.renanda@axa-mandiri.co.id " class="c-default">bonifacio.renanda@axa-mandiri.co.id</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
</div>
<?php get_footer();?>
