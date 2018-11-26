
<?php/** * Template Name: Produk Inverse */?>
<?php get_header();?>

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

<style>
	.bghorizontal-yellow {
		background: #8f8e8a !important;
	}

	.bghorizontal-yellow * {
		color: #fff !important;
	}

	#list-syarat li .icon-125x100 {
		background: url(../../wp-content/themes/axamandiri/images/bg-singleicon-solusi-gray.png) no-repeat;
	}

	.bg-cover-dark-gray {
		background: url("../../wp-content/themes/axamandiri/images/bg-cover-dark-gray.jpg") top center no-repeat;
    	background-size: cover !important;
	}

	#manfaat-slide .icon-manfaat {
		background: #8f8e8a;
	}

	#page-head .box.set-1{
		z-index: 1;
	}

	@media screen and (max-width : 640px){
		#page-head:after {
    		content: "";
		    background: rgba(0, 0, 0, 0.3);
		    position: absolute;
		    top: 0;
		    width: 100%;
		    height: 100%;
		}
	}
</style>

<?php $_GET['status'];?>
<div id="page-container">
	<div id="masthead" class="row relative p-all-0">
		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
		<?php endif; ?>
		<div id="page-head" class="relative m-top-150" style="background:#fcfdff url(<?php echo $image[0]; ?>) no-repeat;background-size: cover;">
			<!-- <div class="separate-left-product absolute"></div> -->
			<div class="box absolute set-1 large-5">
				<?php $category = wp_get_post_terms($post->ID, 'matrix_category', array("fields" => "names")); ?>
				<p class="c-white f-18"><?php echo $category[1];?></p>
				<?php $slug = $post->post_name; ?>
				<?php if($slug=='asuransi-mandiri-kesehatan-prima'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570052&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-kesehatan-global'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570054&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-jaminan-kesehatan'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570056&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-proteksi-kanker'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570059&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-corporate-health-plan-2'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=571617&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-corporate-saving-2'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570063&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-secure-plan'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570066&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-jiwa-sejahtera'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570069&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-income-replacement'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570071&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-tabungan-rencana'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570074&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-proteksi-kanker'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570076&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-sejahtera-mapan'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570078&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-sejahtera-mapan-syariah'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570080&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-rencana-sejahtera-syariah-plus'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570082&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-investasi-sejahtera-plus'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570085&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-investasi-sejahtera-syariah'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570087&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-kecelakaan-diri'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570089&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-prima-proteksi'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570091&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-proteksi-kesehatan-syariah'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570093&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='protected-money-rupiah'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570096&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-jiwa-prioritas-3'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570098&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-kecelakaan-diri'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570100&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-mandiri-protection'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570103&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='axa-mandiri-proteksi-diri'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570105&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='axa-mandiri-proteksi-diri-plus'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=571618&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='axa-mandiri-properti'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570109&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='axa-mandiri-mobil-2'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570113&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='axa-mandiri-travel'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570115&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='axa-mandiri-rti-gap'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570117&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='contractors-all-risks'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570120&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='erection-all-risks'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570122&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='electronic-equipment-insurance'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570124&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='heavy-equipment'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570126&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='marine-cargo'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570129&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='asuransi-kendaraan-bermotor'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570131&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='property-industrial-all-risk'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570133&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
				<?php elseif($slug=='money-insurance'):?>
					<script src='//pixel.mathtag.com/event/js?mt_id=570135&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>

				<?php endif;?>

				<!-- <h1 class="f-45 lh-1"><?php the_title();?></h1> -->

				<div class="addthis_toolbox addthis_default_style addthis_16x16_style share-buttons left cp-addthis--width180">
					<a class="addthis_button_facebook icons facebook fa fa-facebook"></a>
					<a class="addthis_button_twitter icons twitter fa fa-twitter"></a>
					<a class="addthis_button_print icons print fa fa-print"></a>
					<a class="addthis_button_email icons email fa fa-envelope"></a>
				</div>

				<script type="text/javascript">//var addthis_config = {"data_track_addressbar":false};</script>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52e88dff717990fa"></script>
				<script type="text/javascript">
				  var addthis_config = addthis_config||{};
				  addthis_config.data_track_addressbar = false;
				  addthis_config.data_track_clickback = false;
				</script>
				<!-- AddThis Button END -->
			</div>

			<!-- <div class="separate-right-product absolute"></div> -->
		</div>
	</div><!--end masthead-->
	<div class="row p-all-0">
	<div id="text-top-solusi" class=" section white clearfix">
		<div class="bghorizontal-yellow large-6 columns p-left-0">
			<h4 class="c-white"> <span class="c-bluemandiri"><?php the_title(); ?></span></h4>
		</div>

		<div class="cp-display--none">
			<h2>AXA Mandiri</h2>
		</div>

		<div class="large-4 columns">

			<div id="social-header-content" class="clearfix">
                <!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style addthis_16x16_style share-buttons right cp-addthis--width185" addthis:description="Temukan solusi perlindungan yang tepat sesuai kebutuhan Anda di AXA Mandiri"  addthis:title="Temukan solusi perlindungan yang tepat sesuai kebutuhan Anda di AXA Mandiri">
					<a class="addthis_button_facebook icons facebook fa fa-facebook"></a>
					<a class="addthis_button_twitter icons twitter fa fa-twitter"></a>
					<a class="addthis_button_print icons print fa fa-print"></a>
					<a class="addthis_button_email icons email fa fa-envelope"></a>
				</div>

			</div>
		</div>

	</div>
	<div id="page-box" class="sections white clearfix">
		<section id="body-1">
			<h3 class="uppercase fw-normal f-17"><?php _e("<!--:en-->Introduction<!--:--><!--:id-->Pengantar<!--:-->"); ?></h3>
			<h2 class="c-blue f-24"><?php the_field('sub_title');?></h2>
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
		<section id="manfaat" class="bg-cover-dark-gray sections clearfix">
			<h3 class="c-white fw-normal uppercase f-17"><?php _e("<!--:en-->Benefit<!--:--><!--:id-->Manfaat<!--:-->"); ?></h3>
			<h4 class="c-white m-bottom-45"><?php the_field('manfaat_sub_title');?></h4>
			<ul id="manfaat-slide" class="manfaat-slider">
				<?php $i = 1; while(has_sub_field('matrix_manfaat')): ?>
					<li class="manfaat-element text-center elements <?php if(($i % 2) == 0) echo 'dark'; ?>">
						<div class="box p-all-20">
							<img class="icon-manfaat" src="<?php the_sub_field("icon");?>" alt="manfaat">
							<p><strong><?php the_sub_field("title");?></strong></p>
							<?php the_sub_field("body");?>
						</div>
					</li>
				<?php $i++; endwhile;?>
			</ul>
		</section>
		<?php# if(get_field('matrix_syarat2')!=""):?>
		<section id="syarat" class="sections relative o-hidden">
			<div class="relative cp-position--zindex1000">
			<h3 class="fw-normal f-17 uppercase m-bottom-40">Syarat &amp; Ketentuan</h3>
			<ul id="list-syarat" class="small-block-grid-1 medium-block-grid-2 large-block-grid-2 clearfix">
				<?php while (has_sub_field('matrix_syarat2')):?>
					<?php if(get_sub_field('usia_masuk')!=""):?>
					<li class="usia-masuk">
						<div class="bg-white o-hidden radius-all-5">
							<div class="icon-125x100">
								<!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_usia_masuk');?>) right no-repeat;"></span> -->
								<img src="<?php the_sub_field('icon_usia_masuk');?>" class="icon-solusi" alt="usia-masuk">
							</div>
								<div class="details">
									<h2 class="uppercase f-18 m-bottom-0">Usia Masuk</h2>
									<p class="f-16"><?php the_sub_field('usia_masuk');?></p>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('masa_pertanggungan')!=""):?>
					<li class="masa_pertanggungan">
						<div class="bg-white o-hidden radius-all-5">
							<div class="icon-125x100">
								<img src="<?php the_sub_field('icon_masa_pertanggungan');?>" class="icon-solusi" alt="masa-pertanggungan">
							</div>
								<div class="details">
									<h2 class="uppercase f-18 m-bottom-0">Masa Pertanggungan</h2>
									<p class="f-16"><?php the_sub_field('masa_pertanggungan');?></p>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('mata_uang')!=""):?>
					<li class="mata_uang">
						<div class="bg-white o-hidden radius-all-5">
							<div class="icon-125x100">
								<img src="<?php the_sub_field('icon_mata_uang');?>" class="icon-solusi" alt="matauang">
							</div>
								<div class="details">
									<h2 class="uppercase f-18 m-bottom-0">Mata uang</h2>
									<p class="f-16"><?php the_sub_field('mata_uang');?></p>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('minimum_premi')!=""):?>
					<li class="minimum_premi">
						<div class="bg-white o-hidden radius-all-5">
							<div class="icon-125x100">
								<img src="<?php the_sub_field('icon_minimum_premi');?>" class="icon-solusi" alt="minimum-premi">
							</div>
								<div class="details">
								<h2 class="uppercase f-18 m-bottom-0">Minimum Premi</h2>
									<p class="f-16"><?php the_sub_field('minimum_premi');?></p>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('pengembalian_premi')!=""):?>
					<li class="pengembalian_premi">
						<div class="bg-white o-hidden radius-all-5">
							<div class="icon-125x100">
								<!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_pengambilan_premi');?>) right no-repeat;"></span> -->
								<img src="<?php the_sub_field('icon_pengambilan_premi');?>" class="icon-solusi" alt="pengambilan-premi">
							</div>
								<div class="details">
									<h2 class="uppercase f-18 m-bottom-0"><?=($slug == 'asuransi-kesehatan')?'Pengembalian':'Pengambilan'?> Premi</h2>
									<p class="f-16"><?php the_sub_field('pengembalian_premi');?></p>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('cara_bayar')!=""):?>
					<li class="cara_bayar">
						<div class="bg-white o-hidden radius-all-5">
							<div class="icon-125x100">
								<!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_cara_bayar');?>) right no-repeat;"></span> -->
								<img src="<?php the_sub_field('icon_cara_bayar');?>" class="icon-solusi" alt="cara-bayar">
							</div>
								<div class="details">
									<h2 class="uppercase f-18 m-bottom-0">Cara Bayar</h2>
									<p class="f-16"><?php the_sub_field('cara_bayar');?></p>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('family_discount')!=""):?>
					<li class="family_discount">
						<div class="bg-white o-hidden radius-all-5">
							<div class="icon-125x100">
								<!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_family_discount');?>) right no-repeat;"></span> -->
								<img src="<?php the_sub_field('icon_family_discount');?>" class="icon-solusi" alt="family-discount">
							</div>
								<div class="details">
									<h2 class="uppercase f-18 m-bottom-0">Family Discount</h2>
									<p class="f-16"><?php the_sub_field('family_discount');?></p>
								</div>
						</div>
					</li>
					<?php endif;?>
					<?php if(get_sub_field('jalur_distribusi')!=""):?>
					<li class="jalur_distribusi">
						<div class="bg-white o-hidden radius-all-5">
							<div class="icon-125x100">
								<!-- <span class="icon-solusi" style="background: url(<?php the_sub_field('icon_jalur_distribusi');?>) right no-repeat;"></span> -->
								<img src="<?php the_sub_field('icon_jalur_distribusi');?>" class="icon-solusi" alt="jalur-distribusi">
							</div>
								<div class="details">
									<h2 class="uppercase f-18 m-bottom-0">Jalur Distribusi</h2>
									<p class="f-16"><?php the_sub_field('jalur_distribusi');?></p>
								</div>
						</div>
					</li>
					<?php endif;?>
				<?php endwhile;?>
				<?php while (has_sub_field('matrix_syarat_aami')):?>
					<?php if(get_sub_field('pembelian_awal')!=""):?>
						<li class="pembelian_awal">
							<div class="bg-white o-hidden radius-all-5">
								<span class="icon-125x100"></span>
									<div class="details">
										<h2 class="uppercase f-18 m-bottom-0"><?php _e("<!--:en-->Initial Investment<!--:--><!--:id-->Pembelian Awal<!--:-->"); ?></h2>
										<p class="f-16"><?php the_sub_field('pembelian_awal');?></p>
									</div>
							</div>
						</li>
					<?php endif;?>
					<?php if(get_sub_field('pembelian_selanjutnya')!=""):?>
						<li class="pembelian_selanjutnya">
							<div class="bg-white o-hidden radius-all-5">
								<span class="icon-125x100"></span>
									<div class="details">
										<h2 class="uppercase f-18 m-bottom-0"><?php _e("<!--:en-->Top-up<!--:--><!--:id-->Pembelian selanjutnya<!--:-->"); ?></h2>
										<p class="f-16"><?php the_sub_field('pembelian_selanjutnya');?></p>
									</div>
							</div>
						</li>
					<?php endif;?>
					<?php if(get_sub_field('minimum_penjualan_kembali')!=""):?>
						<li class="minimum_penjualan_kembali">
							<div class="bg-white o-hidden radius-all-5">
								<span class="icon-125x100"></span>
									<div class="details">
										<h2 class="uppercase f-18 m-bottom-0"><?php _e("<!--:en-->Minimum Redemption<!--:--><!--:id-->Minimum penjualan kembali<!--:-->"); ?></h2>
										<p class="f-16"><?php the_sub_field('minimum_penjualan_kembali');?></p>
									</div>
							</div>
						</li>
					<?php endif;?>
					<?php if(get_sub_field('minimum_saldo_kepemilikan_unit')!=""):?>
						<li class="minimum_saldo_kepemilikan_unit">
							<div class="bg-white o-hidden radius-all-5">
								<span class="icon-125x100"></span>
									<div class="details">
										<h2 class="uppercase f-18 m-bottom-0"><?php _e("<!--:en-->Minimum Balance of Ownership<!--:--><!--:id-->Minimum saldo kepemilikan unit<!--:-->"); ?></h2>
										<p class="f-16"><?php the_sub_field('minimum_saldo_kepemilikan_unit');?></p>
									</div>
							</div>
						</li>
					<?php endif;?>
				<?php endwhile;?>

				<?php while (has_sub_field('custom_syarat_&_ketentuan')):?>
				<?php if(get_sub_field('content')!=""):?>
				<li class="jalur_distribusi">
					<div class="bg-white o-hidden radius-all-5">
						<div class="icon-125x100">

							<img src="<?php the_sub_field('icon');?>" class="icon-solusi" alt="syarat-ketentuan">
						</div>
							<div class="details">
							<h2 class="uppercase f-18 m-bottom-0"><?php the_sub_field('title'); ?></h2>
							<p class="f-16"><?php the_sub_field('content');?></p>
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
					<div class="bg-white o-hidden radius-all-5">
						<div class="icon-125x100">
							<img src="<?php bloginfo('template_directory'); ?>/images/ojk-white.png" class="icon-solusi cp-position--top30 cp-position--relative cp-position--right5" alt="ojk">
						</div>
							<div class="details">
								<h2 class="uppercase f-18 m-bottom-0">LEMBAGA PENGAWAS DAN PENGATUR</h2>
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
		<?php if(get_field('matrix_brochure2')!=""):?>
		<section id="brochure-download" class="sections bg-blue clearfix">
			<ul class="pdf-list small-block-grid-2 medium-block-grid-2 large-block-grid-2 clearfix">
				<?php $count = 0; while (has_sub_field('matrix_brochure2')):?>
					<li><a href="<?php the_sub_field('file');?>" class="bg-white block clearfix" target="_blank" title="Download <?php echo get_sub_field('title') ?>"><span class="icon"></span><?php echo get_sub_field('title') . ' ' . getFileDetail(get_sub_field('file'));?></strong> <i class="fa fa-download right"></i></a></li>
				<?php $count++; endwhile;?>
			</ul>
		</section>
		<?php endif;?>
	<section id="kontak" class="sections white clearfix">
		<div id="floating" class="absolute top-0 right-55">
			<?php $title=get_the_title();
			if($title=="AXA Mandiri Travel*"):?>
			<a href="http://axamandiritravel.appspot.com/" class="button c-blue bg-bandingkan" target="_blank">Beli Online</a>
			<?php endif;?>
			<a href="<?php echo site_url('bandingkan-produk'); ?>" class="button c-blue bg-bandingkan">Bandingkan Produk</a>
			<?php if($count > 0):?>
				<button  class="button blue brochure-menu">Download</button>
			<?php endif;?>
		</div>
		<h3 class="fw-normal f-17 uppercase m-bottom-0 m-top-45">Kontak</h3>

		<div class="large-4 columns p-left-0">
			<h4 class="c-blue">Kami akan menghubungi Anda</h4>
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
				<input type="hidden" name="banner_source" value="">
				<input type="hidden" name="utm_source" value="">
				<input type="hidden" name="utm_medium" value="">
				<input type="hidden" name="utm_term" value="">
				<input type="hidden" name="utm_content" value="">
				<input type="hidden" name="utm_campaign" value="">
				<input type="hidden" name="gclid" value="">
				</div>

				<div class="fieldset">
					<span class="wpcf7-form-control-wrap nama_lengkap">
						<input type="text" name="nama_lengkap" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nama Lengkap">
					</span>
				</div>
				<div class="fieldset">
					<span class="wpcf7-form-control-wrap no_tlp">
						<input type="tel" name="no_tlp" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Nomor Telepon">
					</span>
				</div>
				<div class="fieldset">
					<span class="wpcf7-form-control-wrap email">
						<input type="email" name="email" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email">
					</span>
				</div>
				<div class="fieldset">
					<span class="wpcf7-form-control-wrap tgl_lahir">
						<input type="text" name="tgl_lahir" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required birthdate " aria-required="true" aria-invalid="false" placeholder="Tanggal Lahir" id="dp1392957616851">
					</span>
				</div>

				<?php if( get_field('change_dropdown') ): ?>
					<div class="fieldset" style="width: 98%">
						<span class="wpcf7-form-control-wrap propinsi">
							<select name="propinsi" class="required wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
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
						<select name="propinsi" class="required wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
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
				 	<input type="text" name="kota" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Kota / Area">
				 </span>
				</div>

				<?php endif; ?>

				<div class="cp-clearfix cp-margin--bottom20 cp-form--width96-p">
		            <input id="chk-agreement" type="checkbox" name="agreement" value="1" class="customcheck left m-left-0" required="" aria-required="true">
		            <label for="chk-agreement" id="agreement" class="left text-left m-right-0 cp-form--width90-p">*Saya bersedia dihubungi untuk mendapatkan informasi selanjutnya dari AXA Mandiri.</label>
		        </div>

		        <div class="cp-clearfix cp-margin--bottom20 cp-form--width96-p">
					<div class="g-recaptcha" data-sitekey="6LfsURsTAAAAAMz1gyL_IbA5vMzM2_qZ_fi3Secr" required></div>
            		<script src="https://www.google.com/recaptcha/api.js?hl=id" async defer></script>
				</div>

				<div class="fieldset">
					<?php if (is_single('asuransi-mandiri-proteksi-kanker')) {?>
						<input type="submit" value="Kirim" class="wpcf7-form-control wpcf7-submit button small blue submit__click">
					<?php  } else{  ?>
						<input type="submit" value="Kirim" class="wpcf7-form-control wpcf7-submit button small blue submit__click">
					<?php  } ?>

				</div>

				<div class="wpcf7-response-output wpcf7-display-none"></div>
				<p class="cap_status"></p>
				<p class="cap_sukses cp-display--none"></p>
			</form>
			<script src='//pixel.mathtag.com/event/js?mt_id=569865&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>

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
				$("#form").submit(function() {
					$('.submit__click').attr('disabled', 'disabled');

				    if($("#form").valid()) {
						$.ajax({
							type: "POST",
							url: "<?=site_url()?>/axamandiri_form/kontak/submit_data?slug=<?php echo $post->post_name;?>",
							data: $('form').serialize(),
							success: function(msg) {
								var dataJSON = $.parseJSON(msg);

								if (dataJSON.status=="success") {
									$('.cap_sukses').html("Terima kasih, data terkirim.").fadeIn(200).show();
									$('.cap_status').fadeOut(200).hide();
									document.forms["form"].reset();
								} else {
									$('.submit__click').removeAttr('disabled');
									$('.cap_sukses').hide();
									$('.cap_status').html(dataJSON.message).addClass('cap_status_error').fadeIn(200).show();
								}
							}
							});

				    } else {
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

		 	});
		</script>

<?php get_footer();?>
