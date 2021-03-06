
<?php/** * Template Name: Karir: Agent */?>
<?php get_header();?>
<?php /* Template Default */ ?>

<?php
	$categoryTagCommander = wp_get_post_terms($post->ID, 'matrix_category', array("fields" => "names"));
	// //session_start();
	// $cap = 'notEq';
	// //session_start();
	// $ranStr = md5(microtime());
	// $ranStr = substr($ranStr, 0, 6);

	// // $this->session->set_userdata('cap_code', $ranStr);
	// $_SESSION['cap_code']=$ranStr;
	// $newImage = imagecreatefromjpeg(get_bloginfo('template_url').'/images/cap_bg.jpg');
	// $txtColor = imagecolorallocate($newImage, 0, 0, 0);
	// imagestring($newImage, 5, 5, 5, $ranStr, $txtColor);
	// //header("Content-type: image/jpeg");
	// // imagejpeg($newImage, get_bloginfo('template_url').'/images/captcha.jpg');
	// //imagejpeg($newImage, '/Applications/XAMPP/xamppfiles/htdocs/axaone/wp-content/themes/axaindonesia/images/captcha.jpg');
	// imagejpeg($newImage, get_theme_root().'/axamandiri/images/captcha.jpg');

	$slug_product = $post->post_name;
?>

<?php
if (remarketing_health_product($slug_product)) {
?>
	<!-- Google Code for Remarketing Tag -->
	<!--
	Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
	-->
	<script type="text/javascript">
	var google_tag_params = {
		dynx_pagetype: '<?=$slug_product?>',
	};
	</script>
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 944189977;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/944189977/?guid=ON&amp;script=0"/>
	</div>
	</noscript>
<?php
}

$_GET['status'];?>
<div id="page-container">
	<div id="masthead" class="row relative p-all-0">
		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
		<?php endif; ?>
	</div><!--end masthead-->
	<div class="row p-all-0">
	<div id="text-top-solusi" class=" section white clearfix">
		<div class="bghorizontal-yellow large-6 columns p-left-0">
			<div class="c-white header_4_produk_title"> <span class="c-bluemandiri"><?php the_title(); ?></span></div>
		</div>

		<div class="cp-display--none">
			<h2>AXA Mandiri</h2>
		</div>

		<div class="large-4 columns">

			<div id="social-header-content" class="clearfix">
                <!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style addthis_16x16_style share-buttons right cp-addthis--width185"addthis:description="Temukan solusi perlindungan yang tepat sesuai kebutuhan Anda di AXA Mandiri"  addthis:title="Temukan solusi perlindungan yang tepat sesuai kebutuhan Anda di AXA Mandiri">
					<a class="addthis_button_facebook icons facebook fa fa-facebook"></a>
					<a class="addthis_button_twitter icons twitter fa fa-twitter"></a>
					<a class="addthis_button_print icons print fa fa-print"></a>
					<a class="addthis_button_email icons email fa fa-envelope"></a>
				</div>

			</div>
		</div>

	</div>
	<div id="page-box" class="sections white clearfix">
		<section id="body-1" aria-label="body 1">
			<div class="uppercase fw-normal f-17 header3_pengantar"><?php /* _e("<!--:en-->Introduction<!--:--><!--:id-->Pengantar<!--:-->"); */
															_e("Pengantar"); ?></div>
			<h1 class="cp-display--none"><?php the_field('sub_title');?></h1>
			<div class="c-blue f-24 header1_pengantar"><?php the_field('sub_title');?></div>
			<?php if(get_the_title()=="Erection All Risks"): ?>
				<div class="column-1 f-16 c-greylight">
					<?php if( have_posts() ) : the_post(); ?>
						 <?php the_content();?>
					<?php endif;?>
				</div>
			<?else:?>
			<div class="column-2 f-16 c-greylight">
					<?php if( have_posts() ) : the_post(); ?>
						 <?php the_content();?>
					<?php endif;?>
			</div>
			<?php endif;?>
		</section>
	</div>

	<div id="cover-manfaat" class="background-vector clearfix">
		<section id="manfaat" aria-label="manfaat" class="bg-cover-blue sections clearfix">
			<div class="c-white fw-normal uppercase f-17 header3"><?php /* _e("<!--:en-->Benefit<!--:--><!--:id-->Manfaat<!--:-->"); */
																	_e("Manfaat"); ?></div>
			<div class="c-white m-bottom-45 header4"><?php the_field('manfaat_sub_title');?></div>
			<ul id="manfaat-slide" class="manfaat-slider">
				<?php $i = 1; while(has_sub_field('matrix_manfaat')): ?>
					<li class="manfaat-element text-center elements <?php if(($i % 2) == 0) echo 'dark'; ?>">
						<div class="box p-all-20">
							<img class="icon-manfaat" src="<?php the_sub_field("icon");?>" alt="<?php echo (!empty(get_sub_field('alt')))?get_sub_field('alt') : 'manfaat';?>">
							<p><strong><?php the_sub_field("title");?></strong></p>
							<?php the_sub_field("body");?>
						</div>
					</li>
				<?php $i++; endwhile;?>
			</ul>
		</section>
		<?php# if(get_field('matrix_syarat2')!=""):?>
		<section id="syarat" aria-label="syarat" class="sections relative o-hidden">
			<div class="relative cp-position--zindex1000">
			<div class="fw-normal f-17 uppercase m-bottom-40 header3_syarat_ketentuan">Syarat &amp; Ketentuan</div>
			<ul id="list-syarat" class="small-block-grid-1 medium-block-grid-2 large-block-grid-2 clearfix">
				<?php while (has_sub_field('matrix_syarat2')):?>
					<?php if(get_sub_field('usia_masuk')!=""):?>
					<li class="usia-masuk">
						<div class="bg-white radius-all-5">
							<div class="icon-125x100">
								<!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_usia_masuk');?>) right no-repeat;"></span> -->
								<img src="<?php the_sub_field('icon_usia_masuk');?>" class="icon-solusi" alt="usia-masuk">
							</div>
								<div class="details">
									<div class="uppercase f-18 m-bottom-0 produkdetails">Usia Masuk</div>
									<div class="add-details">
										<p class="f-16"><?php the_sub_field('usia_masuk');?></p>
									</div>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('masa_pertanggungan')!=""):?>
					<li class="masa_pertanggungan">
						<div class="bg-white radius-all-5">
							<div class="icon-125x100">
								<img src="<?php the_sub_field('icon_masa_pertanggungan');?>" class="icon-solusi" alt="masa-pertanggungan">
							</div>
								<div class="details">
									<div class="uppercase f-18 m-bottom-0 produkdetails">Masa Pertanggungan</div>
									<div class="add-details">
										<p class="f-16"><?php the_sub_field('masa_pertanggungan');?></p>
									</div>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('mata_uang')!=""):?>
					<li class="mata_uang">
						<div class="bg-white radius-all-5">
							<div class="icon-125x100">
								<img src="<?php the_sub_field('icon_mata_uang');?>" class="icon-solusi" alt="matauang">
							</div>
								<div class="details">
									<div class="uppercase f-18 m-bottom-0 produkdetails">Mata uang</div>
									<div class="add-details">
										<p class="f-16"><?php the_sub_field('mata_uang');?></p>
									</div>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('minimum_premi')!=""):?>
					<li class="minimum_premi">
						<div class="bg-white radius-all-5">
							<div class="icon-125x100">
								<img src="<?php the_sub_field('icon_minimum_premi');?>" class="icon-solusi" alt="minimum-premi">
							</div>
								<div class="details">
								<div class="uppercase f-18 m-bottom-0 produkdetails">Minimum Premi</div>
									<div class="add-details">
										<p class="f-16"><?php the_sub_field('minimum_premi');?></p>
									</div>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('pengembalian_premi')!=""):?>
					<li class="pengembalian_premi">
						<div class="bg-white radius-all-5">
							<div class="icon-125x100">
								<!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_pengambilan_premi');?>) right no-repeat;"></span> -->
								<img src="<?php the_sub_field('icon_pengambilan_premi');?>" class="icon-solusi" alt="pengambilan-premi">
							</div>
								<div class="details">
									<div class="uppercase f-18 m-bottom-0 produkdetails"><?=($slug == 'asuransi-kesehatan')?'Pengembalian':'Pengambilan'?> Premi</div>
									<div class="add-details">
									<p class="f-16"><?php the_sub_field('pengembalian_premi');?></p>
									</div>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('cara_bayar')!=""):?>
					<li class="cara_bayar">
						<div class="bg-white radius-all-5">
							<div class="icon-125x100">
								<!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_cara_bayar');?>) right no-repeat;"></span> -->
								<img src="<?php the_sub_field('icon_cara_bayar');?>" class="icon-solusi" alt="cara-bayar">
							</div>
								<div class="details">
									<div class="uppercase f-18 m-bottom-0 produkdetails">Cara Bayar</div>
									<div class="add-details">
										<p class="f-16"><?php the_sub_field('cara_bayar');?></p>
									</div>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('family_discount')!=""):?>
					<li class="family_discount">
						<div class="bg-white radius-all-5">
							<div class="icon-125x100">
								<!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_family_discount');?>) right no-repeat;"></span> -->
								<img src="<?php the_sub_field('icon_family_discount');?>" class="icon-solusi" alt="family-discount">
							</div>
								<div class="details">
									<div class="uppercase f-18 m-bottom-0 produkdetails">Family Discount</div>
									<div class="add-details">
										<p class="f-16"><?php the_sub_field('family_discount');?></p>
									</div>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('jalur_distribusi')!=""):?>
					<li class="jalur_distribusi">
						<div class="bg-white radius-all-5">
							<div class="icon-125x100">
								<!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_jalur_distribusi');?>) right no-repeat;"></span> -->
								<img src="<?php the_sub_field('icon_jalur_distribusi');?>" class="icon-solusi" alt="jalur-distribusi">
							</div>
								<div class="details">
									<div class="uppercase f-18 m-bottom-0 produkdetails">Jalur Distribusi</div>
									<div class="add-details">
										<p class="f-16"><?php the_sub_field('jalur_distribusi');?></p>
									</div>
								</div>
						</div>
					</li>
					<?php endif;?>
				<?php endwhile;?>
				<?php while (has_sub_field('matrix_syarat_aami')):?>
					<?php if(get_sub_field('pembelian_awal')!=""):?>
						<li class="pembelian_awal">
							<div class="bg-white radius-all-5">
								<span class="icon-125x100"></span>
									<div class="details">
										<div class="uppercase f-18 m-bottom-0 produkdetails"><?php /* _e("<!--:en-->Initial Investment<!--:--><!--:id-->Pembelian Awal<!--:-->"); */
																						_e("Pembelian Awal"); ?></div>
										<div class="add-details">
										<p class="f-16"><?php the_sub_field('pembelian_awal');?></p>
										</div>
									</div>
							</div>
						</li>
					<?php endif;?>
					<?php if(get_sub_field('pembelian_selanjutnya')!=""):?>
						<li class="pembelian_selanjutnya">
							<div class="bg-white radius-all-5">
								<span class="icon-125x100"></span>
									<div class="details">
										<div class="uppercase f-18 m-bottom-0 produkdetails"><?php /* _e("<!--:en-->Top-up<!--:--><!--:id-->Pembelian selanjutnya<!--:-->"); */
																						_e("Pembelian selanjutnya"); ?></div>
										<div class="add-details">
											<p class="f-16"><?php the_sub_field('pembelian_selanjutnya');?></p>
										</div>
									</div>
							</div>
						</li>
					<?php endif;?>
					<?php if(get_sub_field('minimum_penjualan_kembali')!=""):?>
						<li class="minimum_penjualan_kembali">
							<div class="bg-white radius-all-5">
								<span class="icon-125x100"></span>
									<div class="details">
										<div class="uppercase f-18 m-bottom-0 produkdetails"><?php /* _e("<!--:en-->Minimum Redemption<!--:--><!--:id-->Minimum penjualan kembali<!--:-->"); */
																						_e("Minimum penjualan kembali"); ?></div>
										<div class="add-details">
										<p class="f-16"><?php the_sub_field('minimum_penjualan_kembali');?></p>
										</div>
									</div>
							</div>
						</li>
					<?php endif;?>
					<?php if(get_sub_field('minimum_saldo_kepemilikan_unit')!=""):?>
						<li class="minimum_saldo_kepemilikan_unit">
							<div class="bg-white radius-all-5">
								<span class="icon-125x100"></span>
									<div class="details">
										<div class="uppercase f-18 m-bottom-0 produkdetails"><?php /* _e("<!--:en-->Minimum Balance of Ownership<!--:--><!--:id-->Minimum saldo kepemilikan unit<!--:-->"); */
																						_e("Minimum saldo kepemilikan unit"); ?></div>
										<div class="add-details">
										<p class="f-16"><?php the_sub_field('minimum_saldo_kepemilikan_unit');?></p>
										</div>
									</div>
							</div>
						</li>
					<?php endif;?>
				<?php endwhile;?>

				<?php while (has_sub_field('custom_syarat_&_ketentuan')):?>
				<?php if(get_sub_field('content')!=""):?>
				<li class="jalur_distribusi">
					<div class="bg-white radius-all-5">
						<div class="icon-125x100">

							<img src="<?php the_sub_field('icon');?>" class="icon-solusi" alt="syarat-ketentuan">
						</div>
							<div class="details">
							<div class="uppercase f-18 m-bottom-0 produkdetails"><?php the_sub_field('title'); ?></div>
							<div class="add-details">
							<p class="f-16"><?php the_sub_field('content');?></p>
							</div>
						</div>
					</div>
				</li>
				<?php endif;?>
				<?php endwhile;?>

				<?php
					$terms = wp_get_post_terms($post->ID, 'matrix_entity');
					$entity = '';
					foreach($terms as $term){
						$entity = $term->name;
						$slug1=$term->slug;
					}
				?>
				<?php global $post;  ?>
				<li class="ojk">
					<div class="bg-white radius-all-5">
						<div class="icon-125x100">
							<img src="https://axa-mandiri.co.id/wp-content/uploads/2014/08/ojk-blue.png" class="icon-solusi" alt="ojk">
						</div>
							<div class="details">
								<div class="uppercase f-18 m-bottom-0 produkdetails">LEMBAGA PENGAWAS DAN PENGATUR</div>
								<?php if($slug1=='amfs'):?>
								<p class="f-16">AXA Mandiri Financial Services terdaftar dan diawasi oleh Otoritas Jasa Keuangan</p>
								<?php elseif($slug1=='magi'):?>
								<p class="f-16">PT. Mandiri AXA General Insurance terdaftar dan diawasi oleh Otoritas Jasa Keuangan</p>
								<?php endif; ?>
							</div>
					</div>
				</li>
			</ul>
			</div>
		</section>
	</div><!--end cover-manfaat-->

	<?php# endif;?>

	<section id="brochure-download" class="sections bg-blue clearfix" aria-label="brochure download">
		<ul class="pdf-list small-block-grid-2 medium-block-grid-2 large-block-grid-2 clearfix">
			<?php $count = 0; while (has_sub_field('matrix_brochure2')): ?>
			<li>
				<a href="<?php the_sub_field('file');?>" class="bg-white block clearfix" target="_blank" title="Download <?php echo get_sub_field('title') . ' ' . getFileDetail(get_sub_field('file'));?>">
					<span class="icon"></span><strong><?php echo get_sub_field('title') . ' ' . getFileDetail(get_sub_field('file'));?></strong> <i class="fa fa-download right"></i>
				</a>
			</li>
			<?php $count++; endwhile;?>
		</ul>
	</section>

	<section id="ringkasan-informasi" class="sections bg-blue clearfix" aria-label="ringkasan download">
		<ul class="pdf-list small-block-grid-2 medium-block-grid-2 large-block-grid-2 clearfix">
			<?php $count = 0; while (has_sub_field('ringkasan_produk')): ?>
			<li>
				<a href="<?php the_sub_field('file');?>" class="bg-white block clearfix" target="_blank" title="Download <?php echo get_sub_field('title') . ' ' . getFileDetail(get_sub_field('file'));?>">
					<span class="icon"></span><strong><?php echo get_sub_field('title') . ' ' . getFileDetail(get_sub_field('file'));?></strong> <i class="fa fa-download right"></i>
				</a>
			</li>
			<?php $count++; endwhile;?>
		</ul>
	</section>

	<section id="kontak" class="sections white clearfix" aria-label="kontak">
		<div id="floating" class="absolute top-0 right-55">
			<?php 
			$title=get_the_title();
			$jumlah_file = count(get_field("ringkasan_produk"));
			if($jumlah_file > 0){
				?>
				<a href="#" class="button blue" id="download-ringkasan"><?php _e('Ringkasan Informasi Produk'); ?></a>
				<?php
			}

			if($title=="AXA Mandiri Travel*"):?>
			<a href="https://portal.axa.co.id/mandiritravelonline_pentest" class="button c-blue bg-bandingkan" target="_blank" onClick="javascript:return tc_events_2(this,'virtual_page',{virtual_page_name:'belionline::overview',product_label:'GI::BeliOnline',page_status:'sale_payment'});">Beli Online</a>
			<?php endif;?>
			<?php if(!empty(get_field('matrix_brochure2')) && (!in_array("Rencanakan Lebih", $categoryTagCommander))):
				$brochure = get_field('matrix_brochure2');
			?>
				<a href="#" class="button blue brochure-menu2" onClick="javascript:return tc_events_2(this,'interaction',{interaction_name:'file_download',interaction_detail:'independent_<?php echo $post->post_name;?>'});">Download</a>
			<?php else:?>
				<?php if($count > 0):?>
					<a href="#" class="button blue brochure-menu2" onClick="ga('send', 'event', 'button', 'click','Download Button');">Brosur</a>
				<?php endif;?>
			<?php endif;?>
			<a href="<?php echo site_url('bandingkan-produk'); ?>" class="button c-blue bg-bandingkan" onClick="javascript:return tc_events_2(this,'virtual_page',{virtual_page_name:'smarttraveller::overview',product_label:'GI::Travel',page_status:'sale_payment'});">Bandingkan Produk</a>
		</div>
		<div class="fw-normal f-17 uppercase m-bottom-0 m-top-45 header4_kontak">Kontak</div>

		<div class="large-4 columns p-left-0">
			<div class="c-blue header_4_menghubungi">Kami akan menghubungi Anda</div>
			<p class="f-16">Isi formulir berikut untuk mendapatkan informasi yang lebih lengkap tentang produk
dan layanan AXA Mandiri. </p>
 		</div>

		<div class="large-6 columns contact-form">

			<!-- form -->
			<form action="" id="form" name="form" method="post" class="wpcf7-form" novalidate="novalidate">


				<div class="cp-display--none">
				<input type="hidden" name="_wpcf7" value="4">
				<input type="hidden" name="_wpcf7_version" value="3.6">
				<input type="hidden" name="_wpcf7_locale" value="en_US">
				<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-p1330-o1">
				<input type="hidden" name="_wpnonce" value="21955172aa">
				<input type="hidden" name="product_matrix" value="<?php echo $slug1;?>">
				<input type="hidden" name="nama_produk" value="<?php the_title();?>">
				<input type="hidden" name="banner_source" value="<?=(isset($_GET['banner_source'])) ? $_GET['banner_source'] : ''?>">
				<input type="hidden" name="utm_source" value="<?=(isset($_GET['utm_source'])) ? $_GET['utm_source'] : ''?>">
				<input type="hidden" name="utm_medium" value="<?=(isset($_GET['utm_medium'])) ? $_GET['utm_medium'] : ''?>">
				<input type="hidden" name="utm_term" value="<?=(isset($_GET['utm_term'])) ? $_GET['utm_term'] : ''?>">
				<input type="hidden" name="utm_content" value="<?=(isset($_GET['utm_content'])) ? $_GET['utm_content'] : ''?>">
				<input type="hidden" name="utm_campaign" value="<?=(isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : ''?>">
				<input type="hidden" name="gclid" value="<?=(isset($_GET['gclid'])) ? $_GET['gclid'] : ''?>">
				<input type="hidden" name="slug_product" value="<?=$post->post_name?>">
				</div>

				<div class="fieldset">
					<span class="wpcf7-form-control-wrap nama_lengkap">
						<input type="text" name="nama_lengkap" aria-label="Nama Lengkap" id="nama_lengkap" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nama Lengkap">
					</span>
				</div>
				<div class="fieldset">
					<span class="wpcf7-form-control-wrap no_tlp">
						<input type="tel" name="no_tlp" id="no_tlp" value="" size="40" aria-label="No Telp" class="required wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Nomor Telepon cth: +62xxxxxxxxxxx">
					</span>
				</div>
				<div class="fieldset">
					<span class="wpcf7-form-control-wrap email">
						<input type="email" name="email" id="email" value="" size="40" aria-label="email" class="required wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email">
					</span>
				</div>
				<div class="fieldset">
					<span class="wpcf7-form-control-wrap tgl_lahir">
						<input type="text" name="tgl_lahir" value="" size="40" aria-label="tgl lahir" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required birthdate " aria-required="true" aria-invalid="false" placeholder="Tanggal Lahir cth: 2017-01-31" id="dp1392957616851">
					</span>
				</div>

				<?php if( get_field('change_dropdown') ): ?>
					<div class="fieldset cp-form--width98-p">
						<span class="wpcf7-form-control-wrap propinsi">
							<select name="propinsi" id="propinsi" class="required wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false" aria-label="Propinsi">
								<option value="Propinsi">Propinsi and Area</option>
								<option value="Bali Area Denpasar">Bali Area Denpasar</option>
								<option value="Bali Area Kuta Raya">Bali Area Kuta Raya</option>
								<option value="Banda Aceh Area Banda Aceh">Banda Aceh Area Banda Aceh</option>
								<option value="Bandar Lampung Area Bandar Lampung">Bandar Lampung Area Bandar Lampung</option>
								<option value="Bangka Belitung Area Pangkal Pinang">Bangka Belitung Area Pangkal Pinang</option>
								<option value="Banten Area Tangerang Kisamaun">Banten Area Tangerang Kisamaun</option>
								<option value="Banten Area Cilegon">Banten Area Cilegon</option>
								<option value="Banten Area Tangerang Bintaro">Banten Area Tangerang Bintaro</option>
								<option value="Banten Area Tangerang Gading Serpong">Banten Area Tangerang Gading Serpong</option>
								<option value="Batam Area Batam">Batam Area Batam</option>
								<option value="Bengkulu Area Bengkulu">Bengkulu Area Bengkulu</option>
								<option value="DIY Yogyakarta Area Yogyakarta">DIY Yogyakarta Area Yogyakarta</option>
								<option value="DKI Jakarta Area Jakarta Kota">DKI Jakarta Area Jakarta Kota</option>
								<option value="DKI Jakarta Area Jakarta Kyai Tapa">DKI Jakarta Area Jakarta Kyai Tapa</option>
								<option value="DKI Jakarta Area Jakarta Daan Mogot">DKI Jakarta Area Jakarta Daan Mogot</option>
								<option value="DKI Jakarta Area Jakarta Tanjungpriok Enggano">DKI Jakarta Area Jakarta Tanjungpriok Enggano</option>
								<option value="DKI Jakarta Area Jakarta Pulogadung">DKI Jakarta Area Jakarta Pulogadung</option>
								<option value="DKI Jakarta Area Jakarta Green Ville">DKI Jakarta Area Jakarta Green Ville</option>
								<option value="DKI Jakarta Area Jakarta Pluit Selatan">DKI Jakarta Area Jakarta Pluit Selatan</option>
								<option value="DKI Jakarta Area Jakarta Jatinegara Timur">DKI Jakarta Area Jakarta Jatinegara Timur</option>
								<option value="DKI Jakarta Area Jakarta Thamrin">DKI Jakarta Area Jakarta Thamrin</option>
								<option value="DKI Jakarta Area Jakarta Gambir">DKI Jakarta Area Jakarta Gambir</option>
								<option value="DKI Jakarta Area Jakarta Kebon Sirih">DKI Jakarta Area Jakarta Kebon Sirih</option>
								<option value="DKI Jakarta Area Jakarta Imam Bonjol">DKI Jakarta Area Jakarta Imam Bonjol</option>
								<option value="DKI Jakarta Area Jakarta Cikini">DKI Jakarta Area Jakarta Cikini</option>
								<option value="DKI Jakarta Area Jakarta Pasar Rebo">DKI Jakarta Area Jakarta Pasar Rebo</option>
								<option value="DKI Jakarta Area Jakarta Pondok Kelapa">DKI Jakarta Area Jakarta Pondok Kelapa</option>
								<option value="DKI Jakarta Area Bekasi Jatiwaringin">DKI Jakarta Area Bekasi Jatiwaringin</option>
								<option value="DKI Jakarta Area Jakarta Plaza Mandiri">DKI Jakarta Area Jakarta Plaza Mandiri</option>
								<option value="DKI Jakarta Area Jakarta Pondok Indah">DKI Jakarta Area Jakarta Pondok Indah</option>
								<option value="DKI Jakarta Area Jakarta Sudirman">DKI Jakarta Area Jakarta Sudirman</option>
								<option value="DKI Jakarta Area Jakarta Tebet Supomo">DKI Jakarta Area Jakarta Tebet Supomo</option>
								<option value="DKI Jakarta Area Jakarta Falatehan">DKI Jakarta Area Jakarta Falatehan</option>
								<option value="DKI Jakarta Area Jakarta Fatmawati">DKI Jakarta Area Jakarta Fatmawati</option>
								<option value="Jambi Area Jambi">Jambi Area Jambi</option>
								<option value="Jawa Barat Area Bekasi">Jawa Barat Area Bekasi</option>
								<option value="Jawa Barat Area Bogor">Jawa Barat Area Bogor</option>
								<option value="Jawa Barat Area Depok">Jawa Barat Area Depok</option>
								<option value="Jawa Barat Area Bandung Asia-Afrika">Jawa Barat Area Bandung Asia-Afrika</option>
								<option value="Jawa Barat Area Bandung Surapati">Jawa Barat Area Bandung Surapati</option>
								<option value="Jawa Barat Area Bandung Braga">Jawa Barat Area Bandung Braga</option>
								<option value="Jawa Barat Area Cirebon">Jawa Barat Area Cirebon</option>
								<option value="Jawa Barat Area Karawang">Jawa Barat Area Karawang</option>
								<option value="Jawa Barat Area Tasikmalaya">Jawa Barat Area Tasikmalaya</option>
								<option value="Jawa Tengah Area Semarang Pemuda">Jawa Tengah Area Semarang Pemuda</option>
								<option value="Jawa Tengah Area Semarang Pahlawan">Jawa Tengah Area Semarang Pahlawan</option>
								<option value="Jawa Tengah Area Solo">Jawa Tengah Area Solo</option>
								<option value="Jawa Tengah Area Tegal">Jawa Tengah Area Tegal</option>
								<option value="Jawa Tengah Area Purwokerto">Jawa Tengah Area Purwokerto</option>
								<option value="Jawa Timur Area Surabaya Niaga">Jawa Timur Area Surabaya Niaga</option>
								<option value="Jawa Timur Area Surabaya Gentengkali">Jawa Timur Area Surabaya Gentengkali</option>
								<option value="Jawa Timur Area Surabaya Basuki Rahmat">Jawa Timur Area Surabaya Basuki Rahmat</option>
								<option value="Jawa Timur Area Jember">Jawa Timur Area Jember</option>
								<option value="Jawa Timur Area Malang">Jawa Timur Area Malang</option>
								<option value="Jawa Timur Area Kediri">Jawa Timur Area Kediri</option>
								<option value="Jawa Timur Area Gresik">Jawa Timur Area Gresik</option>
								<option value="Kalimantan Barat Area Pontianak">Kalimantan Barat Area Pontianak</option>
								<option value="Kalimantan Selatan Area Banjarmasin">Kalimantan Selatan Area Banjarmasin</option>
								<option value="Kalimantan Tengah Area Palangkaraya">Kalimantan Tengah Area Palangkaraya</option>
								<option value="Kalimantan Timur Area Samarinda">Kalimantan Timur Area Samarinda</option>
								<option value="Kalimantan Timur Area Balikpapan">Kalimantan Timur Area Balikpapan</option>
								<option value="Nusa Tenggara Area Mataram">Nusa Tenggara Area Mataram</option>
								<option value="Papua Area Jayapura">Papua Area Jayapura</option>
								<option value="Papua Area Sorong">Papua Area Sorong</option>
								<option value="Riau Area Pekanbaru">Riau Area Pekanbaru</option>
								<option value="Riau Area Dumai Sudirman">Riau Area Dumai Sudirman</option>
								<option value="Sulawesi Selatan Area Makassar">Sulawesi Selatan Area Makassar</option>
								<option value="Sulawesi Selatan Area Pare Pare">Sulawesi Selatan Area Pare Pare</option>
								<option value="Sulawesi Selatan Area Makassar Sam Ratulangi">Sulawesi Selatan Area Makassar Sam Ratulangi</option>
								<option value="Sulawesi Tengah Area Palu">Sulawesi Tengah Area Palu</option>
								<option value="Sulawesi Tenggara Area Kendari Mesjid Agung">Sulawesi Tenggara Area Kendari Mesjid Agung</option>
								<option value="Sulawesi Utara Area Manado">Sulawesi Utara Area Manado</option>
								<option value="Sumatera Barat Area Padang">Sumatera Barat Area Padang</option>
								<option value="Sumatera Selatan Area Palembang Sudirman">Sumatera Selatan Area Palembang Sudirman</option>
								<option value="Sumatera Selatan Area Palembang Arief">Sumatera Selatan Area Palembang Arief</option>
								<option value="Sumatera Utara Area Medan Imam Bonjol">Sumatera Utara Area Medan Imam Bonjol</option>
								<option value="Sumatera Utara Area Medan Balaikota">Sumatera Utara Area Medan Balaikota</option>
								<option value="Sumatera Utara Area Pematangsiantar">Sumatera Utara Area Pematangsiantar</option>
								</select>
						</span>
					</div>


					<div class="fieldset">
						 <span class="required wpcf7-form-control-wrap area">
						 	<input type="hidden" name="kota" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Kota / Area" value=".">
						 </span>
					</div>

				<?php else : ?>

				<div class="fieldset">
					<span class="wpcf7-form-control-wrap propinsi">
						<select name="propinsi" id="propinsi" aria-label="propinsi" class="required wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
							<option value="Propinsi">Propinsi</option>
							<option value="Aceh">Aceh</option>
							<option value="Sumatera Utara">Sumatera Utara</option>
							<option value="Sumatera Barat">Sumatera Barat</option>
							<option value="Riau Ibukotanya">Riau Ibukotanya</option>
							<option value="Kepulauan Riau">Kepulauan Riau</option>
							<option value="Jambi">Jambi</option>
							<option value="Sumatera Selatan">Sumatera Selatan</option>
							<option value="Bangka Belitung">Bangka Belitung</option>
							<option value="Bengkulu">Bengkulu</option>
							<option value="Lampun">Lampung</option>
							<option value="DKI Jakarta">DKI Jakarta</option>
							<option value="Jawa Barat">Jawa Barat</option>
							<option value="Banten">Banten</option>
							<option value="Jawa Tengah">Jawa Tengah</option>
							<option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
							<option value="Jawa Timur">Jawa Timur</option>
							<option value="Bali">Bali</option>
							<option value="Nusa">Nusa</option>
							<option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
							<option value="Kalimantan Utara">Kalimantan Utara</option>
							<option value="Kalimantan Barat">Kalimantan Barat</option>
							<option value="Kalimantan Tengah">Kalimantan Tengah</option>
							<option value="Kalimantan Selatan">Kalimantan Selatan</option>
							<option value="Kalimantan Timur">Kalimantan Timur</option>
							<option value="Sulawesi Utara">Sulawesi Utara</option>
							<option value="Sulawesi Barat">Sulawesi Barat</option>
							<option value="Sulawesi Tengah">Sulawesi Tengah</option>
							<option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
							<option value="Sulawesi Selatan">Sulawesi Selatan</option>
							<option value="Gorontalo">Gorontalo</option>
							<option value="Maluku">Maluku</option>
							<option value="Maluku Utara">Maluku Utara</option>
							<option value="Papua Barat">Papua Barat</option>
							<option value="Papua">Papua</option>
						</select>
					</span>
				</div>

				<div class="fieldset">
				 <span class="required wpcf7-form-control-wrap area">
				 	<input type="text" name="kota" value="" size="40" aria-label="Kota" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Kota / Area">
				 </span>
				</div>

				<?php endif; ?>

				<div class="cp-clearfix cp-margin--bottom20 cp-form--width96-p">
		            <input id="chk-agreement" type="checkbox" name="agreement" aria-label="Agreement" value="1" class="customcheck left m-left-0" required="" aria-required="true">
		            <label for="chk-agreement" id="agreement" class="left text-left m-right-0 cp-form--width90-p">*Saya bersedia dihubungi untuk mendapatkan informasi selanjutnya dari AXA Mandiri.</label>
		        </div>

				<?php if($slug=='keluarga-hebat-syariah' || $slug=='keluarga-hebat'):?>
				<div class="fieldset clearfix" style="width: 60%;padding-top:15px;">
					<div style="height: 25px;">
					  <label class="left">Apakah Anda nasabah Bank Mandiri?</label><br/>
					  <div class="fieldset">
						  <input type="radio" value="yes" name="nasabah" checked>
						  <label for="yes" class="m-right-0"  style="">Ya</label>
						  <input type="radio" value="no" name="nasabah">
						  <label for="yes" style="">Tidak</label>
					  </div>
					</div>
				  </div>
				<?php endif; ?>

				<div class="cp-clearfix cp-margin--bottom20 cp-form--width96-p">
					<div class="g-recaptcha" data-sitekey="6LfsURsTAAAAAMz1gyL_IbA5vMzM2_qZ_fi3Secr" required></div>
            		<script src="https://www.google.com/recaptcha/api.js?hl=id" async defer></script>
				</div>
				<div class="fieldset">

					<?php if (is_single('asuransi-mandiri-proteksi-kanker')) {?>
						<input type="submit" value="Kirim" class="wpcf7-form-control wpcf7-submit button small blue" onclick="javascript:return tc_events_2(this,'virtual_page',{virtual_page_name:'independent_<?php echo $post->post_name;?>::contact_us::submit', product_label:'GI::<?=str_replace(" ", "_", $categoryTagCommander[1])?>::Proteksi_Kanker',page_status:'lead_completed_autostart'});">
					<?php  } else{  ?>
						<input type="submit" value="Kirim" class="wpcf7-form-control wpcf7-submit button small blue" onclick="javascript:return tc_events_2(this,'virtual_page',{virtual_page_name:'independent_<?php echo $post->post_name;?>::contact_us::submit', product_label:'GI::<?=str_replace(" ", "_", $categoryTagCommander[1])?>::<?=str_replace(" ", "_", get_the_title())?>',page_status:'lead_completed_autostart'});">
					<?php  } ?>
					<div class="ajax-loader"></div>

				</div>

				<div class="wpcf7-response-output wpcf7-display-none"></div>
				<p class="cap_status"></p>
				<p class="cap_sukses cp-display--none"></p>
			</form>
			<!-- form -->

		</div>
	</section>
	<?php get_template_part("widget/breadcrumbs");?>
	</div>
	<?php get_template_part("widget/hargaunit");?>
</div>
<script type="text/javascript">
			$(document).ready(function(){
		 		//captcha check
				//captcha check
		 		$("#no_tlp").keydown(function (e) {
        			// Allow: backspace, delete, tab, escape, enter and .
			        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190,187]) !== -1 ||
			             // Allow: Ctrl+A
			            (e.keyCode == 65 && e.ctrlKey === true) ||
			             // Allow: home, end, left, right
			            (e.keyCode >= 35 && e.keyCode <= 39)) {
			                 // let it happen, don't do anything
			                 return;
			        }
			        // Ensure that it is a number and stop the keypress
			        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			            e.preventDefault();
			        }
			    });

			    $("#download-ringkasan").click(function(){
			        if($("#brochure-download").hasClass("expanded")){
			        	$("#brochure-download").toggleClass("expanded", 500);
			        }
			        $("#ringkasan-informasi").toggleClass("expanded", 500);
			        return false;
		      	});

		      	$(".brochure-menu2").click(function(){
			        if($("#ringkasan-informasi").hasClass("expanded")){
			        	$("#ringkasan-informasi").toggleClass("expanded", 500);
			        }
			        $("#brochure-download").toggleClass("expanded", 500);
			        return false;
			      });

				$("#form").submit(function(){
					$('.submit__click').attr('disabled', 'disabled');

				    if($("#form").valid()) {
						if(validate()){
							$('.ajax-loader').css('visibility', 'visible');
							var name=$('#nama_lengkap').val();
							var email=$('#email').val();
							var mobile=$('#no_tlp').val();
							var location=$('#propinsi').val();
							var dob =$('#dp1392957616851').val();
							var nasabah =  'no';//document.querySelector('input[name="nasabah"]:checked').value;

							$.ajax({
								type: "POST",
								url: "<?=site_url()?>/axamandiri_form/kontak/submit_data?slug=<?php echo $post->post_name;?>",
								data: $('form').serialize(),
								success: function(msg)
								{
									var dataJSON = $.parseJSON(msg);

									if (dataJSON.status=="success") {
										$('.cap_sukses').html("Terima kasih, data terkirim.").fadeIn(200).show();
										$('.cap_status').fadeOut(200).hide();
										tc_events_2(this,'virtual_page',{
											virtual_page_name:'<?=str_replace(" ", "_", get_the_title())?>::form::submit',
											product_label:'GI::<?=str_replace(" ", "_", $categoryTagCommander[1])?>::<?=str_replace(" ", "_", get_the_title())?>',
											page_status:'lead_completed'
										});
										document.forms["form"].reset();

										$.ajax({
											type: "POST",
											url: "<?=site_url()?>/axamandiri_form/kontak/process_leads_to_axist/"+ dataJSON.idl,
											success: function(msg){
												$('.submit__click').removeAttr('disabled');
												var dataJSON = $.parseJSON(msg);
												// console.log(dataJSON);
											}
										});

										//redirect product
										if ('<?php echo $slug_product;?>' == 'asuransi-mandiri-kesehatan-prima') {
											document.location = "<?=site_url()?>" + "/mandiri-kesehatan-prima-terima-kasih";
										} else if ('<?php echo $slug_product;?>' == 'asuransi-mandiri-proteksi-kanker') {
											document.location = "<?=site_url()?>" + "/mandiri-proteksi-kanker-terima-kasih";
										} else if ('<?php echo $slug_product;?>' == 'asuransi-kesehatan') {
											document.location = "<?=site_url()?>" + "/mandiri-hospitalife-terima-kasih";
										} else if ('<?php echo $slug_product;?>' == 'asuransi-mandiri-heart-protection') {
											document.location = "<?=site_url()?>" + "/mandiri-heart-protection-terima-kasih";
										} else if ('<?php echo $slug_product;?>' == 'keluarga-hebat-plus'){
											document.location = "<?=site_url()?>" + "/terima-kasih";
										} else if ('<?php echo $slug_product;?>' == 'muda-mandiri-syariah-plus') {
											document.location = "<?=site_url()?>" + "/terima-kasih?name=";
										} else if ('<?php echo $slug_product;?>' == 'wanita-mandiri-plus') {
											document.location = "<?=site_url()?>" + "/terima-kasih";
										} else if ('<?php echo $slug_product;?>' == 'sejahtera-plus') {
											document.location = "<?=site_url()?>" + "/terima-kasih";
										} else if ('<?php echo $slug_product;?>' == 'gold-i') {
											document.location = "<?=site_url()?>" + "/terima-kasih";
										} else if ('<?php echo $slug_product;?>' == 'asuransi-mandiri-jaminan-kesehatan') {
											document.location = "<?=site_url()?>" + "/terima-kasih?slug=asuransi-mandiri-jaminan-kesehatan";
										} else if ('<?php echo $slug_product;?>' == 'keluarga-hebat') {
											CallSmartTech(name, email, mobile, dob, location, 197, 101);
										} else if ('<?php echo $slug_product;?>' == 'keluarga-hebat-syariah') {
											CallSmartTech(name, email, mobile, dob, location, 198, 102);
										}
									}
									else
									{
										$('.submit__click').removeAttr('disabled');
										$('.cap_sukses').hide();
										$('.cap_status').html(dataJSON.message).addClass('cap_status_error').fadeIn(200).show();
									}
									$('.ajax-loader').css('visibility', 'hidden');
								}
							});
						}else{
							$('.ajax-loader').css('visibility', 'hidden');
							$('.submit__click').removeAttr('disabled');
							$('.cap_sukses').hide();
							$('.cap_status').html("Format tanggal salah! yyyy-MM-dd cth:2017-01-31").addClass('cap_status_error').fadeIn('slow');
						}
				    }else{
						$('.ajax-loader').css('visibility', 'hidden');
				    	$('.submit__click').removeAttr('disabled');
						$('.cap_sukses').hide();
				    	$('.cap_status').html("Mohon periksa kembali field yang wajib diisi!").addClass('cap_status_error').fadeIn('slow');
				    }

				    return false;
				 });

				var char = $('.column-2').text().length;
					if(char<400){
						$(".column-2").attr("class","column-1");
				}else{

				}

				setTimeout(function(){

				},1000)

				if ('<?php echo $slug_product;?>' == 'asuransi-perjalanan') {
					var banner_source="<?=(isset($_GET['banner_source'])) ? $_GET['banner_source'] : ''?>";
					var utm_source="<?=(isset($_GET['utm_source'])) ? $_GET['utm_source'] : 'landingpage'?>";
					var utm_medium="<?=(isset($_GET['utm_medium'])) ? $_GET['utm_medium'] : 'buttonbelionline'?>";
					var utm_term="<?=(isset($_GET['utm_term'])) ? $_GET['utm_term'] : ''?>";
					var utm_content="<?=(isset($_GET['utm_content'])) ? $_GET['utm_content'] : ''?>";
					var utm_campaign="<?=(isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : 'axamandiri'?>";
					var utm_sessionId="<?=(isset($_GET['referrer_session_id'])) ? $_GET['referrer_session_id'] : ''?>";
					var link = $("#link-mandiri-travel").attr("href");
					$("#link-mandiri-travel").attr("href",link + '?utm_source='+utm_source+'&utm_medium='+utm_medium+'&utm_campaign='+utm_campaign+'&referrer_session_id='+utm_sessionId);
					$("#link-mandiri-travel").attr("onclick","ga('send', 'event', 'Havas_Beli_Online_Button', 'Click', 'Kirim');");
				}

		 	});

			function validate(){
				var dateString = $('#dp1392957616851').val();
				var regEx = /^(19|20)\d\d-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])$/;
				var regEx2 = /^\d{4}-[1-12]{1,2}-[1-31]{1,2}$/;

				if(dateString.match(regEx) != null)
				{
					return true;
				}
				else if(dateString.match(regEx2) != null){
					return true
				}

				return false;
			}

		 	// Create Accordion
		 	if ($(window).width() > 640) {


		 	var Additional = $(document.getElementsByClassName('add-details'));

		 		Additional.each(function() {
		 		 	AdditionalH  = $(this).height();

		 		 	if (AdditionalH > 44) {
		 		 		$(this).addClass('widget-dropdown');
		 		 		$(this).parent().addClass('has-dropdown');
		 		 	}
		 		});

		 		$('<a class="click-top-show">Selengkapnya</a>').insertAfter('.has-dropdown h2');
		 		$('.click-top-show').each(function() {
		 			$(this).click(function() {
		 				$('.widget-dropdown').removeClass('active');
		 				$(this).parent().find('.widget-dropdown').toggleClass('active');
		 			});
		 		});
		 	}

			function CallSmartTech(name, email, mobile, dob, location, listID, webActivityId){
				if (nasabah=='yes' && ValidateNumber(typeof mobile == 'undefined' ? "0" : mobile) != "0")
				{
					smartech('contact', listID ,{
					  'pk^email': email,
					  'mobile': mobile,
					  'DOB' : dob,
					  'LOCATION' : location,
					  'NAMA' : name,
					})
					smartech('dispatch', webActivityId, {});
				}
			}

			function ValidateNumber(str) {
				var res = '';
				if(str.length >= 9)
				{
					if(str.substring(0, 2) == '62')
					{
						return str;
					}
					else
					{
						var prefix = str.substring(0, 3);
						if(prefix == '+62')
						{
							return "62" + str.substring(1, str.length);
						}
						else{
							prefix = str.substring(0, 1);
							res =  prefix == "0" ? "62" + str.substring(1, str.length) : "0";

							return res;
						}
					}
				}
				else
				{
					return "0";
				}
			}
		</script>

		<style>
			div.radio, div.radio input, div.radio span {
				width: 17px;
				height: 17px;
				float: left;
				margin-right: 10px;
				margin-top: -1px;
			}
			@media screen and (min-width: 640px) {

					.widget-dropdown {
						display: none;
						margin-top: 30px;
					    background: #dedede;
					    margin-left: -25px;
					    margin-right: -45px;
					    padding: 25px;
					}

					.widget-dropdown.active {
						display: block;
					}

					#list-syarat .bg-white {
						min-height: 100px;
						height: auto;
					}

					#list-syarat .bg-white p {
						margin-bottom: 0;
					}

					#list-syarat li .details{
						padding-bottom: 0;
					}

			}
			#ringkasan-informasi{
			    background: #243B70;
				height: 0;
				overflow: hidden;
				padding: 40px 60px!important;
				margin-bottom: -70px;
				position: relative;
			}
			#ringkasan-informasi.expanded {
			    height: auto;
			    padding: 40px 60px!important;
			    margin-bottom: 0;
			}

		</style>

<?php get_footer();?>
