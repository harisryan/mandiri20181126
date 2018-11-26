
<?php/** * Template Name: Karir: Agent */?>
<?php get_header();?>

<?php
	//session_start();
	$cap = 'notEq';
	//session_start();
	$ranStr = md5(microtime());
	$ranStr = substr($ranStr, 0, 6);

	// $this->session->set_userdata('cap_code', $ranStr);
	$_SESSION['cap_code']=$ranStr;
	$newImage = imagecreatefromjpeg('/var/www/html/axamandiri/wp-content/themes/axamandiri/images/cap_bg.jpg');
	$txtColor = imagecolorallocate($newImage, 0, 0, 0);
	imagestring($newImage, 5, 5, 5, $ranStr, $txtColor);
	//header("Content-type: image/jpeg");
	// imagejpeg($newImage, get_bloginfo('template_url').'/images/captcha.jpg');
	//imagejpeg($newImage, '/Applications/XAMPP/xamppfiles/htdocs/axaone/wp-content/themes/axaindonesia/images/captcha.jpg');
	imagejpeg($newImage, get_theme_root().'/axaindonesia/images/captcha.jpg');

?>

<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php the_field('header_image');?>);"></div>
		<div class="content large-6">
			<h1><?php the_title(); ?></h1>
			<h2 style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></h2>
			<ul id="separate" class="bisnis relative cp-position--top0">
				<?php $slug = basename(get_permalink());?>
				<li class="selected"><a href="<?php echo site_url('/karir') ;?>">Corporate</a></li>
				<li><a href="<?php echo site_url('/') . $slug;?>-agent">Agent</a></li>
			</ul>
		</div><!--end large 6-->

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div><!--end masthead-->
	<div id="wrapper" class="row">
		<section class="bg-white clearfix radius-top-5">
			<div class="sections">
				<h3 class="f-24"><?php /* _e("<!--:en-->Why Join the AXA?<!--:--><!--:id-->Mengapa Bergabung dengan AXA?<!--:-->"); */
											_e("Mengapa Bergabung dengan AXA?"); ?></h3>
				<?php if( have_posts() ) : the_post(); ?>
					<div class="column-2 f-16">
						 <?php the_content();?>
					 </div>
				<?php endif; wp_reset_postdata();?>
			</div>
		</section>
		<section class="bg-karir clearfix bg-bluedark">
			<div class="sections p-all-60">
				<h3 class="f-24 c-white"><?php /* _e("<!--:en-->Career With AXA Mandiri<!--:--><!--:id-->Menjadi Agen AXA Mandiri<!--:-->"); */
													_e("Menjadi Agen AXA Mandiri"); ?></h3>
				<p class="c-white f-16"><?php /* _e("<!--:en-->Take the opportunity to have a business with unlimited potential with the support of world leaders role in the field of Financial Protection<!--:--><!--:id-->Raih kesempatan memiliki sebuah bisnis dengan potensi yang tak terbatas dengan dukungan dari pemimpin dunia dalan bidang Perlindungan Keuangan<!--:-->"); */
												 _e("Raih kesempatan memiliki sebuah bisnis dengan potensi yang tak terbatas dengan dukungan dari pemimpin dunia dalan bidang Perlindungan Keuangan"); ?></p>
				<ul class="clearfix small-block-grid-1 medium-block-grid-2 large-block-grid-4">
					<?php $count = 1; while(has_sub_field('karir_group')): ?>
						<li class="text-center h-220 <?=$count%2 == 0? 'bg-blue-2' : ''?>">
							<div class="p-all-15 block">
								<img src="<?php the_sub_field('image');?>"/>
								<strong class="block c-white m-top-15 f-14"><?php the_sub_field('body');?></strong>
							</div>
						</li>
					<?php $count++; endwhile;?>
				</ul>
			</div>
		</section>
		<section id="kontak" class="sections grey clearfix o-hidden">
			<div class="transparent-separate absolute cp-position--top0 cp-position--left-m25"><img src="<?php bloginfo('template_url'); ?>/images/separate-transparent.png"/></div>
			<h3 class="fw-normal f-17 uppercase m-bottom-0 m-top-45">Kontak</h3>

			<div class="large-4 columns p-left-0">
				<h4 class="c-blue">Kirim CV Anda </h4>
				<p class="f-16">kunjungi halaman AXA Mandiri E-Recruitment untuk mengetahui informasi terkini tentang lowongan pekerjaan di AXA Mandiri, atau langsung upload CV Anda.</p>
			</div>
			<div class="large-7 columns contact-form">

				<!-- form -->
				<form action="<?=site_url()?>/axaone_form/karir/submit_data" id="form" method="post" class="wpcf7-form" enctype="multipart/form-data" novalidate="novalidate">
					<div class="cp-display--none">
						<input type="hidden" name="_wpcf7" value="2058">
						<input type="hidden" name="_wpcf7_version" value="3.6">
						<input type="hidden" name="_wpcf7_locale" value="id_ID">
						<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2058-p3263-o1">
						<input type="hidden" name="_wpnonce" value="dee286a3e7">
						<input type="hidden" name="type" value="Agent"/>
						<input type="hidden" name="banner_source" value="">
						<input type="hidden" name="utm_source" value="">
						<input type="hidden" name="utm_medium" value="">
						<input type="hidden" name="utm_term" value="">
						<input type="hidden" name="utm_content" value="">
						<input type="hidden" name="utm_campaign" value="">
						<input type="hidden" name="gclid" value="">

					</div>
					<div class="fieldset">
						<span class="wpcf7-form-control-wrap nama">
							<input type="text" name="nama_lengkap" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nama Lengkap">
						</span>
					</div>
					<div class="fieldset">
						<span class="wpcf7-form-control-wrap notelp">
							<input type="text" name="no_tlp" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Nomor Telepon">
						</span>
					</div>
					<div class="fieldset">
						<span class="wpcf7-form-control-wrap email">
							<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email">
						</span>
					</div>
					<div class="fieldset">
						<span class="wpcf7-form-control-wrap tanggallahir">
							<input type="text" name="tgl_lahir" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required datepicker " aria-required="true" aria-invalid="false" placeholder="Tanggal Lahir" id="dp1392899738518">
						</span>
					</div>
					<div class="fieldset">
						<span class="wpcf7-form-control-wrap referral">
							<input type="text" name="no_referral" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="No. Referral">
						</span>
					</div>
					<div class="fieldset">
						<span class="wpcf7-form-control-wrap upload-cv">
							<div class="NFI-wrapper wpcf7-form-control wpcf7-file" id="NFI-wrapper-13928997386852315">
								<div class="NFI-button NFI13928997386852315 button red right">
									Browse<input type="file" name="file_name" value="1" size="40" class="wpcf7-form-control wpcf7-file NFI-current" aria-invalid="false" data-styled="true">
								</div>
							<input type="text"  readonly="readonly" class="NFI-filename NFI13928997386852315" placeholder="Upload CV">
						</div>
					</span>
					</div>
					<div class="fieldset">
						<span class="wpcf7-form-control-wrap captcha-karir">
							<input type="text" name="captcha-karir" id="captcha" value="" size="40" class="wpcf7-form-control wpcf7-captchar" aria-invalid="false">
							<img alt="axa-img" id="img-captcha" src="<?php bloginfo('template_directory'); ?>/images/captcha.jpg?v=<?=rand(111,999)?>" class="left m-left-10"/>
						</span>
						<input type="submit" value="Kirim" class="wpcf7-form-control wpcf7-submit button red">
					</div>

						<!-- <div class="fieldset">
							<span class="left m-top-10 f-13 block">atau</span>
							<a href="http://www.linkedin.com/company/pt.-axa-services-indonesia" class="block left btn-linkedin"></a>
						</div> -->

					<div class="wpcf7-response-output wpcf7-display-none"></div>
				<p class="cap_status"></p>
				</form>
				<!-- form -->

			</div>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
</div>
<script type="text/javascript">
			var capch = '<?php echo ($_SESSION['cap_code']); ?>' ;
			if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				$('#img-captcha').hide();
				$('#captcha').attr('type', 'hidden');
				$('#captcha').val(capch);
			}
			$(document).ready(function(){
		 		//captcha check
				$("#form").submit(function(){

				    if($("#form").valid()) {
				    	console.log('1234');
	                    if(capch == $('#captcha').val()){
	                    	console.log('test');
	                    	return true;

	                    }else{
	                        $('.cap_status').html("Captcha yang Anda masukkan salah!").addClass('cap_status_error').fadeIn('slow');
	                    }
				    }else{
				    	$('.cap_status').html("Mohon periksa kembali field yang wajib diisi!").addClass('cap_status_error').fadeIn('slow');
				    }

				    return false;
				 });
		 	});
		</script>

<?php get_footer();?>
