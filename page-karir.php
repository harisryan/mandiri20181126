<?php/** * Template Name: Karir */?>
<?php get_header();?>

<?php
	//session_start();
	$cap = 'notEq';
	//session_start();
	$ranStr = md5(microtime());
	$ranStr = substr($ranStr, 0, 6);

	// $this->session->set_userdata('cap_code', $ranStr);
	$_SESSION['cap_code']=$ranStr;
	$newImage = imagecreatefromjpeg(get_theme_root().'/axamandiri/images/cap_bg.jpg');
	$txtColor = imagecolorallocate($newImage, 0, 0, 0);
	imagestring($newImage, 5, 5, 5, $ranStr, $txtColor);
	//header("Content-type: image/jpeg");
	// imagejpeg($newImage, get_bloginfo('template_url').'/images/captcha.jpg');
	//imagejpeg($newImage, '/Applications/XAMPP/xamppfiles/htdocs/axaone/wp-content/themes/axaindonesia/images/captcha.jpg');
	imagejpeg($newImage, get_theme_root().'/axamandiri/images/captcha.jpg');
	$status=$_GET['succ'];
	$fail=$_GET['fail'];
	//ip detect
	$ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';


    global $wpdb;
	$result = $wpdb->get_results( "SELECT ip FROM karir WHERE ip='$ipaddress' ");
	$num_ip=$wpdb->num_rows;
	$imagecaptcha=get_bloginfo('template_directory').'/images/captcha.jpg';

	// echo $ipaddress;
    if ($num_ip > 4) {
    	$captcha_form='<div class="fieldset">
							     <span class="wpcf7-form-control-wrap captcha-karir">
										<span class="wpcf7-form-control-wrap captcha-karir">
											<input type="text" placeholder="Captcha" value="" id="captcha" size="40" class="wpcf7-form-control wpcf7-captchar required" aria-invalid="false">
											<img alt="axa-img" id="img-captcha" src="'.$imagecaptcha.'" class="left m-left-10" />
										</span>
									</span>
							</div>';
    }else{
    	$captcha_form='';
    }
?>

<script src='//pixel.mathtag.com/event/js?mt_id=570181&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php the_field('header_image');?>);"></div>
		<div class="content large-6">
			<h1><?php the_title(); ?></h1>
			<h2 style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></h2>
		</div>

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>
	<div id="wrapper" class="row">
		<section class="bg-white3 clearfix">
			<div class="sections">
				<h3 class="f-24"><?php /* _e("<!--:en-->Why Join the AXA Mandiri?<!--:--><!--:id-->Mengapa Bergabung dengan AXA Mandiri?<!--:-->"); */
											_e("Mengapa Bergabung dengan AXA Mandiri?"); ?></h3>
				<?php if( have_posts() ) : the_post(); ?>
					<div class="column-2 f-16">
						 <?php the_content();?>
					 </div>
				<?php endif; wp_reset_postdata();?>
			</div>
		</section>
		<!-- <section class="bg-cover-blue clearfix bg-bluedark hide">
			<div class="sections p-all-60">
				<h3 class="f-24 c-white"><?php /* _e("<!--:en-->Career With AXA Mandiri<!--:--><!--:id-->Berkarir Bersama AXA Mandiri<!--:-->"); */
													_e("Berkarir Bersama AXA Mandiri"); ?></h3>
				<p class="c-white f-16"><?php /* _e("<!--:en-->Dynamic workplace to help optimize your potential in developing a career<!--:--><!--:id-->Tempat kerja yang dinamis untuk membantu mengoptimalkan potensi Anda dalam mengembangkan karir<!--:-->"); */
												 _e("Tempat kerja yang dinamis untuk membantu mengoptimalkan potensi Anda dalam mengembangkan karir"); ?></p>
				<ul class="switch-color clearfix small-block-grid-1 medium-block-grid-2 large-block-grid-4">
					<?php $count = 1; while(has_sub_field('karir_group')): ?>
						<li class="text-center h-220  <?=$count%2 == 0? 'bg-blue-3' : ''?>">
							<div class="p-all-15 block">
								<img src="<?php the_sub_field('image');?>" alt="image-karir <?php echo $count; ?>"/>
								<strong class="block c-white m-top-15 f-14"><?php the_sub_field('body');?></strong>
							</div>
						</li>
					<?php $count++; endwhile;?>
				</ul>
			</div>
		</section> -->

		<?php if( have_rows('karir_banner') ) : ?>
				<section class="new-banner">
					<div class="sections p-all-60">
						<div class="new-banner-meta">
							<h3>Karena hidup saya begitu berarti</h3>
							<h5 role="heading" aria-level="5"><img src="<?php bloginfo('template_directory') ?>/images/red-switch-large.png" width="15px" alt="Jemput mimpi AXA Mandiri"> Jemput mimpi AXA Mandiri</h5>
						</div>

						<div id="new-banner-slides">
						  <?php while( have_rows('karir_banner') ) : the_row(); ?>
							  <div class="item">
							  		<img src="<?php the_sub_field('image'); ?>" alt="">
							  		<?php if (get_sub_field('url')): ?>
							  			<div class="slide-meta">
							  				<a href="mailto:<?php the_sub_field('url'); ?>" class="slide-button button blue">Klik Disini</a>
							  			</div>
							  		<?php endif ?>

							  </div>
						  <?php endwhile; ?>
						</div>


					</div>
				</section>
		<?php endif; ?>

		<section class="bg-grey-tipe clearfix">
			<div class="sections p-all-60 pilihan-karir">
				<h3 class="f-24 c-blue"><?php /* _e("<!--:en-->Career choices<!--:--><!--:id-->Pilihan Karir<!--:-->"); */
												_e("Pilihan Karir");?></h3>
				<p class="f-16"><?php /* _e("<!--:id-->AXA Mandiri berkomitmen untuk menciptakan tempat kerja yang baik di mana orang-orang dapat mengembangkan karir dan lingkungan kerja yang dinamis dapat berkembang dengan cepat. Cari posisi karir yang sesuai dengan minat dan keterampilan Anda.<!--:-->"); */
										_e("AXA Mandiri berkomitmen untuk menciptakan tempat kerja yang baik di mana orang-orang dapat mengembangkan karir dan lingkungan kerja yang dinamis dapat berkembang dengan cepat. Cari posisi karir yang sesuai dengan minat dan keterampilan Anda."); ?></p>
				<ul class="pilih">
					<li class="tipe-karir"><a href="http://job-search.jobstreet.co.id/CompanyProfile/company-profile.php?dm=http%3a%2f%2fsiva-id.jsstatic.com&p=%2f_ads%2f_static%2fxml%2fID%2f&token=7a6255a9e00637c05da3c5fb6e23164e89910e56730247f6&rnd=73046890#.U60hXNOSwi6" target='_blank'><span class="button blue ">Financial Advisor</span></li>
					<li class="tipe-karir"><a href="https://axa.co.id/karir/" target='_blank'><span class="button blue ">Corporate</span></a></li>
				</ul>
			</div>
		</section>
		<section id="kontak" class="sections grey clearfix o-hidden" style="display: none;">
			<div class="transparent-separate absolute cp-karir--kontak"><img alt="separate-transparent" src="<?php bloginfo('template_url'); ?>/images/separate-transparent.png"/></div>
			<div class="large-4 columns p-left-0">
				<h4 class="c-blue">Kirim CV Anda </h4>
				<p class="f-16">kunjungi halaman AXA Mandiri E-Recruitment untuk mengetahui informasi terkini tentang lowongan pekerjaan di AXA Mandiri, atau langsung upload CV Anda.</p>
			</div>
			<div class="large-7 columns contact-form">

				<!-- form -->
				<form action="<?=site_url()?>/axamandiri_form/karir/submit_data" name="form" method="post" id="form" class="wpcf7-form" enctype="multipart/form-data" novalidate="novalidate">
					<div class="cp-display--none">
						<input type="hidden" name="tipe_karir" id="tipe_karir" value="AMFS">
						<input type="hidden" name="_wpcf7" value="2058">
						<input type="hidden" name="_wpcf7_version" value="3.6">
						<input type="hidden" name="_wpcf7_locale" value="id_ID">
						<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2058-p3263-o1">
						<input type="hidden" name="_wpnonce" value="dee286a3e7">
						<!-- <input type="hidden" name="type" value="Corporate"/> -->
						<input type="hidden" name="banner_source" value="">
						<input type="hidden" name="utm_source" value="">
						<input type="hidden" name="utm_medium" value="">
						<input type="hidden" name="utm_term" value="">
						<input type="hidden" name="utm_content" value="">
						<input type="hidden" name="utm_campaign" value="">
						<input type="hidden" name="gclid" value="">

					</div>
					<ul id="selectEntity" class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
						<div class="fieldset">
							<li class="karir-radio"><span class="checked yellow "><input type="radio" name="entity"  value="AMFS" checked></span><label for="AMFS">AXA Mandiri Financial Services</label></li>
						</div>
						<div class="fieldset">
							<li class="karir-radio"><span class="yellow"><input type="radio" name="entity" value="MAGI"></span><label for="MAGI">PT. Mandiri AXA General Insurance</label></li>
						</div>
					</ul>

					<div class="fieldset">
						<span class="wpcf7-form-control-wrap nama">
							<input type="text" id="nama" name="nama_lengkap" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nama Lengkap" autocomplete="off">
						</span>
					</div>
					<div class="fieldset">
						<span class="wpcf7-form-control-wrap notelp">
							<input type="text" name="no_tlp" id="no_tlp" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Nomor Telepon" autocomplete="off">
						</span>
					</div>
					<div class="fieldset">
						<span class="wpcf7-form-control-wrap email">
							<input type="email" name="email" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" autocomplete="off">
						</span>
					</div>
					<div class="fieldset">
						<span class="wpcf7-form-control-wrap tanggallahir">
							<input type="text" name="tgl_lahir" id="tgl_lahir" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required datepicker " aria-required="true" aria-invalid="false" placeholder="Tanggal Lahir"  autocomplete="off">
						</span>
					</div>

					<?=$captcha_form?>
					<div class="fieldset">

						<div class="button-center">
							<input type="submit" value="submit" class="wpcf7-form-control wpcf7-submit button blue kirim-karir">
						</div>
					</div>



					<div class="wpcf7-response-output wpcf7-display-none"></div>
					<p class="cap_status" style="display:none;"><?php echo $fail; ?></p>
					<p class="cap_sukses" style="display:none;">Data Tersimpan</p>
				</form>


			</div>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
</div>

<script type="text/javascript">
			var ip='<?php echo $num_ip;?>'
			if (ip > 4) {
				var capch = '<?php echo ($_SESSION['cap_code']); ?>' ;
			}else{
				var capch ='';
			};
		$(document).ready(function(){
			$("#no_tlp, #no_hp, #no_tlp_kantor").keydown(function (e) {
				// Allow: backspace, delete, tab, escape, enter and .
		        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
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
		    $('#nama').bind('keyup blur',function(){
			    var node = $(this);
			    node.val(node.val().replace(/[^A-z\s]/g,'') ); }
			);

				function readURL(input) { //function read file extension
					if (input.files && input.files[0]) {
						var mimeFile = input.files[0]['type']; //variabel file mimes
						if(mimeFile=='application/pdf' || mimeFile=='application/msword'){
							$('.cap_status').hide();
						}else{
				    		$('.cap_status').html("Format file harus pdf atau ms.word! ").addClass('cap_status_error').fadeIn('slow');
						}

					}
				}
				$("#file").change(function () {
					readURL(this);
				});

				$("#form").submit(function(){ //TODO: fungsi validasi

					if($("#form").valid()) {
						if (ip > 4) {
							if(capch == $('#captcha').val()){
		                    	console.log('test');
		                    	return true;
		                    }else if($('#captcha').val()==undefined){
								return true;
		                    }
		                    else
		                    {
		                        $('.cap_status').html("Captcha yang Anda masukkan salah!").addClass('cap_status_error').fadeIn('slow');
		                    }
						}else{
							return true;
						}
				    }else{
						$('.cap_sukses').hide();
				    	$('.cap_status').html("Mohon periksa kembali field yang wajib diisi!").addClass('cap_status_error').fadeIn('slow');

				    }


				    return false;
				 });

			$('input[name=entity]').change(function(){
      			var tax = new Array();
      			// console.log(tax);
      			$('input[name=entity]:checked').each(function(){
      				tax.push(this.value);
      			});
      			tax = tax.join(",");
      			console.log(tax);
      			$('#tipe_karir').val(tax);
      		});

      		var thisURLSuccess = '<?php echo site_url();?>/karir-axa-mandiri/?succ=Data%20Tersimpan';
				if (window.location.href == thisURLSuccess ) {
					$('.cap_sukses').show();
				}

			var thisURLSuccess = '<?php echo site_url();?>/karir-axa-mandiri/?fail=File+harus+berformat+doc,+docx,+dan+pdf,+Mohon+upload+ulang';
				if (window.location.href == thisURLSuccess ) {
					$('.cap_status').html('<?php echo $fail?>').addClass('cap_status_error').fadeIn('slow');
				}
		 } );


// just for the demos, avoids form submit

			//owl init
			$(document).ready(function() {

				$("#new-banner-slides").owlCarousel({

					// autoPlay: 3000, //Set AutoPlay to 3 seconds

					items : 4,
					itemsDesktop : [1199,3],
					itemsDesktopSmall : [979,3]

				});
				
			});

		</script>

		<style type="text/css">
			.new-banner {
				background-color: #F8F8F8;
			}

			.new-banner-meta {
				text-align: right;
			}

			.new-banner .owl-pagination{
				position: relative;
				margin-top: 20px;
			}

			.new-banner .owl-page span {
				background: #00539b;
			}

			.new-banner-meta h3,
			.new-banner-meta h5 {
				font-family: 'MyriadProRegular', "Helvetica Neue", Helvetica, Helvetica, Arial, sans-serif;
				color: #00529b;
				margin-bottom: 0;
			}

			.new-banner-meta {
				margin-bottom: 40px;
				text-transform: lowercase;
			}

			.slide-meta {
				position: absolute;
				bottom: 15px;
				left: 0;
				right: 0;
				padding: 0 15px;
				margin: auto;
			}

			.slide-meta .button {
				margin-bottom: 0;
			}

			@media screen and (min-width: 950px) {

			}
		</style>

<?php get_footer();?>
