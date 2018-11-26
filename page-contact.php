<?php/** * Template Name: Contact Us */?>
<?php get_header();?>
<?php
	//$succ=$_GET['succ'];
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
    //header("Cache-Control: no-store, no-cache, must-revalidate");
    // header("Cache-Control: post-check=0, pre-check=0", false);
    // header("Pragma: no-cache");

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
	$result = $wpdb->get_results( "SELECT ip FROM hubungi_kami WHERE ip='$ipaddress' ");
	$num_ip = 1;
	$imagecaptcha=get_bloginfo('template_directory').'/images/captcha.jpg';

	// echo $ipaddress;
    if ($num_ip > 0) {
    	$captcha_form='<div class="fieldset-captcha">
							    <label>Captcha</label><br>
							     <span class="wpcf7-form-control-wrap captcha-karir">
										<span class="wpcf7-form-control-wrap captcha-karir">
											<input type="text"  value="" id="captcha" size="40" class="wpcf7-form-control wpcf7-captchar required" aria-invalid="false">
											<img alt="axa-img" id="img-captcha" src="'.$imagecaptcha.'" class="left m-left-10"/>
										</span>
									</span>
							</div>';
    }else{
    	$captcha_form='';
    }
 ?>
<script src='//pixel.mathtag.com/event/js?mt_id=570183&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php the_field('header_image');?>);"></div>
		<div class="content large-4">
			<h1><?php the_title();?></h1>
			<h2 style="color:<?php the_field('subtitle_text_color');?>"><?php the_field('sub_title');?></h2>
		</div>

		<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
	</div>

	<div id="wrapper" class="row">
		<section id="page-half" class="white clearfix sections radius-all-5">
			<div class="large-8 columns">
					 <?php if( have_posts() ) : the_post(); ?>
						<h3 class="m-bottom-30 f-24"><?php the_title();?></h3>
						<form action="javascript:void(0)" id="form" name="form" method="post" class="wpcf7-form" >
							<div class="cp-display--none">
							<input type="hidden" name="_wpcf7" value="13">
							<input type="hidden" name="_wpcf7_version" value="3.6">
							<input type="hidden" name="_wpcf7_locale" value="id_ID">
							<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f13-p1315-o1">
							<input type="hidden" name="_wpnonce" value="21068c9497">
							<input type="hidden" name="banner_source" value="">
							<input type="hidden" name="utm_source" value="">
							<input type="hidden" name="utm_medium" value="">
							<input type="hidden" name="utm_term" value="">
							<input type="hidden" name="utm_content" value="">
							<input type="hidden" name="utm_campaign" value="">
							<input type="hidden" name="gclid" value="">
							</div>
							<div id="contact-form">
							<div class="fieldset">
							    <label>Nama*</label><br>
							     <span class="wpcf7-form-control-wrap nama"><input id="nama" type="text" name="nama" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" autocomplete="off" ></span>
							  </div>
							<div class="fieldset">
							    <label>Tanggal Lahir*</label><br>
							     <span class="wpcf7-form-control-wrap tgl_lahir"><input type="text" name="tgl_lahir" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required datepicker " aria-required="true" aria-invalid="false" id="tgl_lahir" autocomplete="off"></span>
							  </div>
							<div class="fieldset">
							    <label>Alamat*</label><br>
							     <span class="wpcf7-form-control-wrap alamat"><input type="text" name="alamat" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" autocomplete="off"></span>
							  </div>
							<div class="fieldset">
							    <label>Email*</label><br>
							     <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" autocomplete="off"></span>
							  </div>
							<div class="fieldset">
							    <label>No. HP*</label><br>
							     <span class="wpcf7-form-control-wrap no_hp"><input type="text" name="no_hp" id="no_hp" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" autocomplete="off"></span>
							  </div>
							<div class="fieldset">
							    <label>No. Telp Kantor</label><br>
							     <span class="wpcf7-form-control-wrap no_tlp"><input type="text" id="no_tlp_kantor" name="no_tlp_kantor" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" autocomplete="off"></span>
							  </div>
							<div class="fieldset">
							    <label>No. Telp Rumah</label><br>
							     <span class="wpcf7-form-control-wrap no_tlp"><input type="text" id="no_tlp" name="no_tlp" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" autocomplete="off"></span>
							  </div>
							<div class="fieldset">
							    <label>Fax</label><br>
							     <span class="wpcf7-form-control-wrap fax"><input type="text" name="fax" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" autocomplete="off"></span>
							  </div>
							<div class="fieldset">
							    <label >Tipe Asuransi</label><br>
							    <span class="wpcf7-form-control-wrap kategori">

							    	<select id="pilih-entity" name="entity" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
							    		<option value="">---</option>
							    		<?php
								    		$terms = get_terms("direktori_entity");
											    foreach ( $terms as $term ) {
											    	$slug = $term->slug; ?>
											   <option value="<?php echo $slug; ?>"><?php echo $term->description; ?></option>
											    <?php }
								    	?>
							    	</select>
							    </span>
							  </div>
							<div class="fieldset">
							    <label>Nama Produk</label><br>
							    <span class="wpcf7-form-control-wrap name_product">
									<div id="pilihform-wrap" class="disable relative">
										<select id="pilih-form" name="produk" class="required">
											<option disabled selected><?php /* _e("<!--:en-->Select Product<!--:--><!--:id-->Pilih Produk<!--:-->"); */
																				_e("Pilih Produk"); ?></option>
										</select>
									</div>
								 </span>
							  </div>

							  <script type="text/javascript">
								jQuery(document).ready(function() {
									$('#pilih-entity').on('change', function (e) {
										var valueSelected = this.value;
										var title = $("#pilih-entity option[value='"+valueSelected+"']").text();
										$('#pilih-form option:selected').text("Loading..").attr('disabled','disabled');
										$('#pilih-form').load('<?php bloginfo('template_url');?>/getNamaProduk.php?place='+valueSelected);
										$('#pilihform-wrap').removeClass('disable');
									});
									$('#pilih-form').on('change', function (e) {
										var valueSelected = this.value;
										var title = $("#pilih-form option[value='"+valueSelected+"']").text();
										$("#a").val(title);
										$("#b").val(valueSelected);
									});
								});
							</script>

							<div class="fieldset">
							    <label>No. Polis (jika ada)</label><br>
							     <span class="wpcf7-form-control-wrap no_polis"><input type="text" name="no_polis" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" autocomplete="off"></span>
						  	</div>
							<div class="fieldset">
							    <label>Kategori</label><br>
							    <span class="wpcf7-form-control-wrap kategori">
							    	<select name="kategori" class="wpcf7-form-control wpcf7-select" id="kategori" aria-invalid="false">
							    		<option value="">---</option>
							    		<option value="Pertanyaan Umum">Pertanyaan Umum</option>
							    		<option value="Informasi Produk">Informasi Produk</option>
							    		<option value="Informasi Financial Advisor">Informasi Financial Advisor</option>
							    		<option value="Saran">Saran</option>
							    		<option value="Keluhan">Keluhan</option>
							    		<option value="Pengkinian">Pengkinian Data</option>
							    		<option value="Lainnya">Lainnya</option>
							    	</select>
							    </span>
							  </div>
							<div class="pengkinian"></div>
							<div class="hubungikami"></div>
							<?php echo $captcha_form ;?>
							<div class="fieldset">
							    <label></label><br>
							    <input type="submit" value="Kirim" class="wpcf7-form-control wpcf7-submit button blue m-top-30" />
							  </div>

							</div>
							<div class="wpcf7-response-output wpcf7-display-none cp-display--none"></div>
						<p class="cap_status f-14">*)Harus di isi</p>
						<p class="cap_sukses f-14 cp-display--none"></p>
						</form>
						<!-- form -->


					<?php endif;?>
			</div><!--end large 8-->
			<aside class="columns w-322 m-top-45">
			<div class="widget">
				<strong class="c-blue">AXA Mandiri</strong><br>
				<ul class="office-details">
	           		<li class="address m-bottom-10"><?php the_field('office_address', 'option');?></li>
	           		<li class="phone"><a href="tel:<?php the_field('office_phone', 'option');?>"><?php the_field('office_phone', 'option');?></a></li>
	           		<li class="fax"><?php the_field('office_fax', 'option');?></li>
	           		<li class="email"><a href="mailto:customer@axa-mandiri.co.id"><?php the_field('office_email', 'option');?></a></li>
           		</ul>
			 </div>
			 <div class="widget"><?php get_template_part("widget/sidebar-socmed");?></div>
			 <div class="widget"><?php get_template_part("widget/footer-banner-left");?></div>
			 <div class="widget"><?php get_template_part("widget/footer-banner-right");?></div>
			</aside>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div><!--end row-->
<?php get_template_part("widget/hargaunit");?>
</div><!--end page container-->
<script type="text/javascript">
	var ip='<?php echo $num_ip;?>'
	if (ip > 0) {
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


		var field_pesan='<div class="fieldset subject"><label>Subjek*</label><br><span class="wpcf7-form-control-wrap subjek"><input type="text" name="subjek" value="" size="40" class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></div><div class="fieldset pesan"><label>Pesan Anda*</label><br><span class="wpcf7-form-control-wrap pesan"><textarea name="pesan" cols="40" rows="10" class="required wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span></div>';
		var field_pengkinian='<div class="fieldset nama-tertanggung"><label>Nama Tertanggung*</label><br><span class="wpcf7-form-control-wrap subjek" ><input type="text" name="nama_tertanggung" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required required" aria-required="true" aria-invalid="false" autocomplete="off"></span></div><div class="fieldset cc-bantu"><div id="rekan" class="m-bottom-10 cp-display--none"><p>Saya menyatakan bahwa informasi yang Saya berikan ini adalah benar data pribadi Saya dan bersama ini Saya memberikan persetujuan kepada PT AXA Mandiri Financial Services untuk :</p><ul class="f-14"><li type="a" class="m-bottom-10">Mengungkapkan data pribadi Saya (termasuk data terbaru) kepada pihak ketiga termasuk penyedia jasa untuk mengizinkan PT AXA Mandiri Financial Services dalam memberikan Saya layanan terkait atas produk yang Saya beli dan untuk tujuan komersial lainnya.</li><li type="a">Menggunakan data pribadi Saya hanya untuk tujuan pemasaran, penawaran produk dan aktivitas promosi lainnya. Oleh karena itu, Saya mengizinkan PT AXA Mandiri Financial Services untuk menghubungi Saya dalam rangka memberikan informasi mengenai produk dan layanan melalui sarana telekomunikasi pribadi termasuk namun tidak terbatas pada email, telepon, SMS yang telah Saya berikan ini. </li></ul><span class="inline-block w-80p f-14 m-left-6"><strong>[Penting : Mohon beri tanda √ pada kotak di bawah ini apabila Anda setuju atau tidak setuju dengan penggunaan data pribadi Anda untuk tujuan di atas]</strong></span><div class="m-bottom-10 cp-margin--top20"><label class="cp-contact--label"><input type="checkbox" name="agreement-spaj" value="1"> Saya setuju</label></div><div class="m-bottom-6"><label class="cp-contact--label"><input type="checkbox" name="agreement-spaj" value="2"> Saya tidak setuju</label></div></div></div>';
		$( ".hubungikami" ).append(field_pesan);
		$('#kategori ').change(function() {
				if ($(this).val()=='Pengkinian') {
					$('.hubungikami').children().remove();
					$('.pengkinian').children().remove();
					// $('.pengkinian').children().remove();
					$( ".pengkinian" ).append(field_pengkinian);
					$('#rekan').show();
					$('input[type="checkbox"]').on('change', function() {
			   			$('input[type="checkbox"]').not(this).prop('checked', false);
					});
				}else{
					$('.hubungikami').children().remove();
					$('.pengkinian').children().remove();
					$( ".hubungikami" ).append(field_pesan);
				};

		});

		// $('body').on('change', '.cc-bantu input[type=radio]', function() {
		// 	if ($(this).val()=='1') {
		// 		$('#rekan').show();
		// 	}else{
		// 		$('#rekan').hide();
		// 	};
		// });
 		//captcha check
		$("#form").submit(function(){
		    var asd= $('#kategori option:selected').val();

		    if($("#form").valid()) {
				if (asd=='Pengkinian') {
					var urls="<?=site_url()?>/axamandiri_form/pengkinian/submit_data";
				}else{
					var urls="<?=site_url()?>/axamandiri_form/hubungi_kami/submit_data";
				}
				if (ip > 0) {
					if(capch == $('#captcha').val()){
		                $.ajax({
							type: "POST",
							url: urls,
							data: $(this).serialize(),
							success: function(msg){
								var dataJSON = $.parseJSON(msg);
								if (dataJSON.status=="success") {
									window.history.pushState("Informasi", "Title", "/hubungi-kami/submit");
									$('.cap_sukses').html("Terima kasih, pesan terkirim.").fadeIn(200).show();
									$('.cap_status').fadeOut(200).hide();
									document.forms["form"].reset();
								}else{
									$('.cap_sukses').hide();
									$('.cap_status').html(dataJSON.message).addClass('cap_status_error').fadeIn(200).show();
								}
							}
						});
	                	return true;
	                }
	                else{
	                    $('.cap_status').html("Captcha yang Anda masukkan salah!").addClass('cap_status_error').fadeIn('slow');
	                }
				}else{
					$.ajax({
							type: "POST",
							url: urls,
							data: $(this).serialize(),
							success: function(msg){
								var dataJSON = $.parseJSON(msg);
								// console.log(dataJSON);
								if (dataJSON.status=="success") {
									window.history.pushState("Informasi", "Title", "/hubungi-kami/submit");
									$('.cap_sukses').html("Terima kasih, pesan terkirim.").fadeIn(200).show();
									$('.cap_status').fadeOut(200).hide();
									document.forms["form"].reset();
								}else{
									$('.cap_sukses').hide();
									$('.cap_status').html(dataJSON.message).addClass('cap_status_error').fadeIn(200).show();
								}
							}
						});
				};



		    }else{
				$('.cap_sukses').hide();
		    	$('.cap_status').html("Mohon periksa kembali field yang wajib diisi!").addClass('cap_status_error').fadeIn('slow');

		    }

		    return false;
		 });

 	});
</script>
<style type="text/css">
	div.radio, div.radio input, div.radio span{
		float: none;
		display: inline-block;
	}

	.checker{
		display: inline-block;
		vertical-align: top;
	}
</style>

<?php get_footer();?>
