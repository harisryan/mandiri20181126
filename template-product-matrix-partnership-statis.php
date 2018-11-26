
<?php/** * Template Name: Page Builder: Partnership Statis */?>
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

	$full_url = get_the_permalink();
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

?>
<!-- Partnership -->

<div class="expanded row main no-padding">

	<div class="small-12 medium-12 large-8 columns no-padding content">
					<?php 
					$imageView = '';
					if (has_post_thumbnail( $post->ID ) ): ?>
						<?php 
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); 
						$imageView = 'style="background:url('.$image[0].') no-repeat;min-height:300px;";';
						?>
					<?php endif; ?>
					<div class="section__masterhead section__large" style="padding-top: 0;">
						<div class="container-content-custom" <?php echo $imageView ?>>
							<div class="row" data-equalizer data-equalize-on="large">							

								<div class="large-12 columns" >
									<div class="masterhead__content">
										<h1 class="masterhead__title"><?php echo strtolower( get_field('product_title') );?></h1>
										<h1><strong><?php echo strtolower( the_field('product_sub_title') );?></strong></h1>
										<div class="masterhead__description">
											<?php 
											$takjh = strip_tags(get_field('manfaat_sub_title'));
											?>
											<p>
												<img src="<?php echo get_template_directory_uri(); ?>/img/Supergrafis.png" alt="text-identity">
												<?php echo $takjh ?>
											</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="section__article section__large">
						<div class="container-content-custom">

							<div class="row" style="margin-bottom:15px;">								
								<div class="large-3 columns no-padding">
									<div class="content-left-top">
										<?php the_content(); ?>
									</div>
								</div>
								<div class="large-9 columns">
									<table class="table-plan empat">
										<tbody>
											<tr>
												<td>
													<div class="tp-title">
														<p class="yellow"><em>plan</em> I</p>
														<span class="small-label">Bulanan No NCB:</span>
														<strong class="harga">Rp 100 Ribu</strong>

														<span class="small-label">Tahunan No NCB:</span>
														<strong class="harga through">Rp 1,2 Juta</strong>
														<strong class="harga">Rp 1 Juta</strong>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<p class="yellow"><em>plan</em> II</p>
														<span class="small-label">Bulanan No NCB:</span>
														<strong class="harga">Rp 140 Ribu</strong>

														<span class="small-label">Tahunan No NCB:</span>
														<strong class="harga through">Rp 1,680 Juta</strong>
														<strong class="harga">Rp 1,4 Juta</strong>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<p class="yellow"><em>plan</em> III</p>
														<span class="small-label">Bulanan No NCB:</span>
														<strong class="harga">Rp 175 Ribu</strong>

														<span class="small-label">Tahunan No NCB:</span>
														<strong class="harga through">Rp 2,1 Juta</strong>
														<strong class="harga">Rp 1,75 Juta</strong>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<p class="yellow"><em>plan</em> IV</p>
														<span class="small-label">Bulanan No NCB:</span>
														<strong class="harga">Rp 200 Ribu</strong>

														<span class="small-label">Tahunan No NCB:</span>
														<strong class="harga through">Rp 2,4 Juta</strong>
														<strong class="harga">Rp 2 Juta</strong>
													</div>
												</td>
												
											</tr>
										</tbody>
									</table>

									<a href="#" id="open-popup"  style="width: 100%;" class="cbutton medium">
										LIHAT DETAIL RINCIAN PREMI
									</a>

									<div id="popup-usia" style="display:none">
										<div id="close-pu">
											&times; Tutup
										</div>
										<div class="table-container">										
											<table class="table-plan stripped">
												<thead>
													<tr>
														<td class="tleft">Premi*</td>
														<td>
															<div class="tp-title">
																<p class="yellow"><em>plan</em> I</p>
															</div>
														</td>
														<td>
															<div class="tp-title">
																<p class="yellow"><em>plan</em> II</p>
															</div>
														</td>
														<td>
															<div class="tp-title">
																<p class="yellow"><em>plan</em> III</p>
															</div>
														</td>
														<td>
															<div class="tp-title">
																<p class="yellow"><em>plan</em> IV</p>
															</div>
														</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="tleft">
															No NCB
														</td>
														<td>
															<div class="tp-title">
																<strong class="harga">Rp 1.000.000</strong>
															</div>
														</td>
														<td>
															<div class="tp-title">
																<strong class="harga">Rp 1.400.000</strong>
															</div>
														</td>
														<td>
															<div class="tp-title">
																<strong class="harga">Rp 1.750.000</strong>
															</div>
														</td>
														<td>
															<div class="tp-title">
																<strong class="harga">Rp 2.000.000</strong>
															</div>
														</td>
													</tr>
													
													<tr>
														<td class="tleft">
															NCB
														</td>
														<td>
															<div class="tp-title">
																<strong class="harga">Rp 1.300.000</strong>
															</div>
														</td>
														<td>
															<div class="tp-title">
																<strong class="harga">Rp 1.850.000</strong>
															</div>
														</td>
														<td>
															<div class="tp-title">
																<strong class="harga">Rp 2.300.000</strong>
															</div>
														</td>
														<td>
															<div class="tp-title">
																<strong class="harga">Rp 2.600.000</strong>
															</div>
														</td>
													</tr>

													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>


							<div class="row with-divider">								
								<div class="large-3 columns no-padding">
									<div class="lp-title">
										Manfaat penggantian biaya rawat inap Rumah Sakit
									</div>
								</div>
								<div class="large-9 columns">
									<table class="table-plan empat">
										<tbody>
											<tr>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 250 Ribu</strong>
														<span class="normal-label">/Hari</span>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 500 Ribu</strong>
														<span class="normal-label">/Hari</span>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 750 Ribu</strong>
														<span class="normal-label">/Hari</span>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 1 Juta</strong>
														<span class="normal-label">/Hari</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="row with-divider">								
								<div class="large-3 columns no-padding">
									<div class="lp-title">
										Total Penggantian biaya harian kamar rawat inap Rumah Sakit
									</div>
								</div>
								<div class="large-9 columns">
									<table class="table-plan empat">
										<tbody>
											<tr>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 10 Juta</strong>
														<span class="normal-label">/Tahun</span>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 20 Juta</strong>
														<span class="normal-label">/Tahun</span>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 30 Juta</strong>
														<span class="normal-label">/Tahun</span>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 50 Juta</strong>
														<span class="normal-label">/Tahun</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							
							<div class="row with-divider">								
								<div class="large-3 columns no-padding">
									<div class="lp-title">
										Cash Benefit
									</div>
								</div>
								<div class="large-9 columns">
									<table class="table-plan empat">
										<tbody>
											<tr>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 250 Ribu</strong>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 500 Ribu</strong>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 750 Ribu</strong>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 1 Juta</strong>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="row with-divider">								
								<div class="large-3 columns no-padding">
									<div class="lp-title">
										Room Charges
									</div>
								</div>
								<div class="large-9 columns">
									<table class="table-plan empat">
										<tbody>
											<tr>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 250 Ribu</strong>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 500 Ribu</strong>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 750 Ribu</strong>
													</div>
												</td>
												<td>
													<div class="tp-title">
														<strong class="harga">Rp 1 Juta</strong>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="row with-divider">								
								<div class="large-3 columns no-padding">
									<div class="lp-title">
										Manfaat pengembalian Premi (khusus untuk Plan NCB)
									</div>
								</div>
								<div class="large-9 columns">
									<table class="table-plan">
										<tbody>
											<tr>
												<td>
													<div class="tp-title">
														<strong class="harga">30%</strong>
														<span class="normal-label">
															dari total penambahan Pembayaran Premi dan dapat di klaim setiap akhir tahun ke-3
														</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							



						</div>
					</div>

			

					<div class="section__footer__section__large">
						<p><a href="<?php echo home_url() . "/disclaimer"?>" class="cp-color--yellow" target="_blank">Disclaimer &amp; Ownership.</a> Copyright 2018 AXA Mandiri. <br> AXA Mandiri merupakan perusahaan asuransi yang terdaftar dan diawasi oleh Otoritas Jasa Keuangan</p>
					</div>

	</div>

	<div class="small-12 medium-12 large-4 columns no-padding form">

					<div class="form__wrapper text-center">
						<h2>DAFTAR SEKARANG</h2>
						<?php
			            $lead = get_field( 'contact_form_send_to');
			            $contact = get_field('contact_form');
			            if($lead == 'lts'){
			                echo do_shortcode('[contact-form-7 id="'.$contact->ID.'" title="'.$contact->page_title.'" html_class="wpcf7-form-lts"]');
			            }elseif($lead == 'lms'){
			            	echo do_shortcode('[contact-form-7 id="'.$contact->ID.'" title="'.$contact->page_title.'" html_class="wpcf7-form-lms"]');
			            }else{
			            	echo do_shortcode('[contact-form-7 id="'.$contact->ID.'" title="'.$contact->page_title.'"]');
			            }
			            ?>
			            <div class="form__information text-center">
			            	<span class="cp-color--yellow">KAMI AKAN MENGHUBUNGI ANDA </span>
							Isi formulir diatas untuk mendapatka informasi yang lebih lengkap tentang produk dan layanan AXA Mandiri
			            </div>
						<div id="result" class="result text-center" style="display: none">
					    	<span>Yth.</span>

					    	<p>Terima kasih atas ketertarikan Anda. Kami akan menghubungi Anda dalam waktu maksimal, 7 hari kerja. Untuk mengetahui lebih lanjut mengenai Asuransi Mandiri Jaminan Kesehatan, kunjungi website dan akun media sosial AXA Mandiri dan AXA.</p>

					    	<label>&copy; AXA Indonesia</label>

					    	<ul class="list list--custom">
					    		<li>
					    			<div class="list__share list__result">
					    				<a href="https://id-id.facebook.com/axamandiri/" target="_blank">
	    									<div class="icon--social">
	    										<i class="fa fa-facebook" aria-hidden="true"></i>
	    									</div>
	    								</a>
					    			</div>
					    		</li>
					    		<li>
					    			<div class="list__share list__result">
					    				<a href="https://twitter.com/AXA_Mandiri?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank">
					    					<div class="icon--social">
					    						<i class="fa fa-twitter" aria-hidden="true"></i>
					    					</div>
					    				</a>
					    			</div>
					    		</li>
					    		<li>
					    			<div class="list__share list__result">
					    				<a href="https://www.youtube.com/user/axamandiri" target="_blank">
					    					<div class="icon--social">
					    						<i class="fa fa-youtube" aria-hidden="true"></i>
					    					</div>
					    				</a>
					    			</div>
					    		</li>
					    	</ul>

					    </div>

					</div>

	</div>

</div>


<script type="text/javascript">
			$(document).ready(function(){
		 		//captcha check
				//captcha check
		 		$("input[name='no_tlp']").keydown(function (e) {
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

			    $('#open-popup').on('click',function(e){
			    	e.preventDefault();
			    	$('#popup-usia').fadeIn();
			    });

			    $('#close-pu').on('click',function(e){
			    	e.preventDefault();
			    	$('#popup-usia').fadeOut();
			    });

			    $('.ajax-loader').css('display', 'none');

				$('input[aria-required=true]').each( function( key, value ) {
					$(this).prop('required',true);
				});

				$(".wpcf7-form-lts").submit(function(e){
			    	e.preventDefault();
					$('.wpcf7-submit').attr('disabled', 'disabled');
					$('.ajax-loader').css('visibility', 'visible');
					$('.ajax-loader').css('display', 'inline-block');
					var mobile = $(this).find("input[name='no_tlp']").val();
				    if($(this).valid()) {
				    	if(ValidateNumber(typeof mobile == 'undefined' ? "0" : mobile) != "0"){
				    		if(validate(this)){
								$.ajax({
									type:"POST",
									url:'<?=admin_url( 'admin-ajax.php' );?>',
									data: {
										action:'send_lead_lts',
										data:$(this).serializeArray()
									},
									dataType:'json',
									success:function(data){
										if(data.success){
											if ('<?php echo $slug_product;?>' == 'mjk-partner-om') {
												document.location = "<?=site_url()?>" + "/terima-kasih?slug=mjk-partner-om";
											}else{
												grecaptcha.reset();
												$('.ajax-loader').css('visibility', 'hidden');
												$('.ajax-loader').css('display', 'none');
												$('.wpcf7-submit').removeAttr('disabled');
												$('.cap_sukses').hide();

												$('form').each(function() { this.reset() });
												$('.cap_sukses').html("Terima kasih, data terkirim.").fadeIn(200).show();
												$('.cap_status').fadeOut(200).hide();
											}
										}else{
											$('.wpcf7-submit').removeAttr('disabled');
											$('.cap_sukses').hide();
											$('.cap_status').html(data.messages).addClass('cap_status_error').fadeIn(200).show();
										}
										// console.log(data);
									}
								});
							}else{
								$('.ajax-loader').css('display', 'none');
								$('.wpcf7-submit').removeAttr('disabled');
								$('.cap_sukses').hide();
								$('.cap_status').html("Format tanggal salah! yyyy-MM-dd cth:2017-01-31").addClass('cap_status_error').fadeIn('slow');
							}
				    	}else{
				    			$('.ajax-loader').css('display', 'none');
								$('.wpcf7-submit').removeAttr('disabled');
								$('.cap_sukses').hide();
								$('.cap_status').html("Format No Telepon tidak benar").addClass('cap_status_error').fadeIn('slow');
				    	}
				    }else{
						$('.ajax-loader').css('display', 'none');
				    	$('.wpcf7-submit').removeAttr('disabled');
						$('.cap_sukses').hide();
				    	$('.cap_status').html("Mohon periksa kembali field yang wajib diisi!").addClass('cap_status_error').fadeIn('slow');
				    }

				    return false;
				});




				$("form.wpcf7-form-lms").submit(function(e){
			    	// e.preventDefault();
			    	// $('.wpcf7-form-lms').validate();
					$('.wpcf7-submit').attr('disabled', 'disabled');
					$('.ajax-loader').css('display', 'block');
					$('.ajax-loader').css('visibility', 'visible');
					var mobile = $(this).find("input[name='no_tlp']").val();
				    if($(this).valid()) {
				    	if(ValidateNumber(typeof mobile == 'undefined' ? "0" : mobile) != "0"){
				    		if(validate(this)){
								$.ajax({
									type:"POST",
									url: "<?=site_url()?>/axamandiri_form/kontak/submit_data?slug=<?php echo $post->post_name;?>",
									data: $(this).serialize(),
									dataType:'json',
									success:function(msg){
										// var dataJSON = $.parseJSON(msg);
										var dataJSON = msg;

										$('.ajax-loader').css('visibility', 'hidden');
										$('.wpcf7-submit').removeAttr('disabled');
										$('.cap_sukses').hide();
										if(dataJSON.status=="success"){
											grecaptcha.reset();
											$('form').each(function() { this.reset() });
											$('.cap_sukses').html("Terima kasih, data terkirim.").fadeIn(200).show();
											$('.cap_status').fadeOut(200).hide();
										}else{
											$('.wpcf7-submit').removeAttr('disabled');
											$('.cap_sukses').hide();
											$('.cap_status').html(dataJSON.messages).addClass('cap_status_error').fadeIn(200).show();
										}
									}
								});
							}else{
								$('.ajax-loader').css('display', 'none');
								$('.wpcf7-submit').removeAttr('disabled');
								$('.cap_sukses').hide();
								$('.cap_status').html("Format tanggal salah! yyyy-MM-dd cth:2017-01-31").addClass('cap_status_error').fadeIn('slow');
							}
				    	}else{
				    			$('.ajax-loader').css('display', 'none');
								$('.wpcf7-submit').removeAttr('disabled');
								$('.cap_sukses').hide();
								$('.cap_status').html("Format No Telepon tidak benar").addClass('cap_status_error').fadeIn('slow');
				    	}
				    }else{
						$('.ajax-loader').css('display', 'none');
				    	$('.wpcf7-submit').removeAttr('disabled');
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

				$(window).scroll(function (event) {
					var width = $(window).width();
					if(width > 768){
						var scroll = $(window).scrollTop();
					    if(scroll > 100){
					    	$('#form-sidebar').addClass('on-top');
					    	$('.ctab-wrap').addClass('on-top');
					    }else{
					    	$('#form-sidebar').removeClass('on-top');
					    	$('.ctab-wrap').removeClass('on-top');
					    }
					}

				});

				$('#close-ctab-mobile').hide();

				$('.ctab-action').on('click',function(e){
					e.preventDefault();
					var width = $(window).width();
					if(width > 768){
						$('.ctab-pane').hide();
						$('.ctab-action').removeClass('active');
						$(this).addClass('active');
						$('#'+$(this).data('target')).show();
					}else{
						$('.ctab-pane').hide();
						$('.ctab-pane').removeClass('action-active-mobile');
						$('#'+$(this).data('target')).show();
						$('#'+$(this).data('target')).addClass('action-active-mobile');
						$('.liveagent').hide();
						$('#close-ctab-mobile').show();
					}
				});

				$('#close-ctab-mobile').on('click',function(e){
					e.preventDefault();
					$('.ctab-pane').hide();
					$('.ctab-pane').removeClass('action-active-mobile');
					$(this).hide();
					$('.liveagent').show();
				});

		 	});

			function validate(parent){
				// var dateString = $('#dp1392957616851').val();
				if($(parent).find('.birthdate').length > 0){
					var dateString = $(parent).find('.birthdate').val();
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
				}else{
					return true
				}
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

			#main-navigation{
				display: none;
			}


.section__masterhead {
  background-color: white;
  height: auto; }
  @media screen and (min-width: 64em) {
    .section__masterhead {
      height: auto;
      overflow: hidden; } }

    .section__large {
  padding: 20px 0; }
  @media screen and (min-width: 40em) {
    .section__large {
      padding: 30px 0; } }

.section__masterhead {
  background-color: white;
  height: auto; }
  @media screen and (min-width: 64em) {
    .section__masterhead {
      height: auto;
      overflow: hidden; } }

.section__article {
  height: auto; }
  @media screen and (min-width: 64em) {
    .section__article {
      height: auto;
      overflow: hidden; } }

.section__listicon {
  overflow-y: auto;
  height: auto; }
  @media screen and (min-width: 64em) {
    .section__listicon {
      height: auto;
      overflow: hidden;
      overflow-y: auto;} }

      .form {
  background: #154a7f;
  background-size: cover;
  color: white;
  right: 0;
  top: 0;
  height: 100%;
  position: relative; }
  @media screen and (min-width: 64em) {
    .form {
      position: fixed;
      top: 90px; } }
  .form__wrapper {
    position: relative;
    height: 100%;
    margin: 30px 10px; }
    @media screen and (min-width: 64em) {
      .form__wrapper {
        margin: 40px 30px;
        }
    }
    @media screen and (min-width: 64em) {
      .form__wrapper form {
        position: relative;

         } }
  .form h2 {
    font-size: 20px;
    color: #fff;
    margin-bottom: 30px; }
  .form--explanation {
    font-size: 14px;
    margin: 0 20px 30px 20px; }

input[type="text"],
input[type="number"],
input[type="email"] {
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
  border: 1px solid #b2b2b2;
  margin-bottom: 20px;
  box-shadow: 0 0 0;
  font-size: 14px; }
  input[type="text"].error,
  input[type="number"].error,
  input[type="email"].error {
    border: 1px solid #b50000; }
  input[type="text"]:hover, input[type="text"]:focus, input[type="text"]:active,
  input[type="number"]:hover,
  input[type="number"]:focus,
  input[type="number"]:active,
  input[type="email"]:hover,
  input[type="email"]:focus,
  input[type="email"]:active {
    box-shadow: 0 0 0; }

input[type="checkbox"] {
  position: absolute;
  margin-left: -20px;
  margin-top: 6px;
  box-shadow: 0 0 0; }

.inline {
  color: #FFD200; }
  .inline_first {
    margin-right: 15px;
    display: block !important;
    margin-bottom: 0; }
    @media screen and (min-width: 40em) {
      .inline_first {
        display: inline !important; } }
  .inline label {
    color: white; }

.checkbox-inline {
  font-size: 14px;
  font-weight: 300;
  width: 85%;
  margin: 0 auto;
  color: white;
  cursor: pointer; }
  @media screen and (min-width: 40em) {
    .checkbox-inline {
      width: 90%; } }

label {
  margin-top: -20px;
  text-align: left;
  color: red;
  font-size: 12px;
  margin-bottom: 5px; }

.list {
  margin: 0;
  padding: 0;
  display: inline-block; }
  .list li {
    display: inline-block; }
  .list__custom {
    margin: 10px 0; }
    .list__custom li:last-child {
      margin-top: 20px; }
      @media screen and (min-width: 40em) {
        .list__custom li:last-child {
          margin-top: 0; } }
  .list__share {
    background-color: #EDF7FF;
    height: 30px;
    width: 30px;
    margin: 0 3px;
    text-align: center;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px; }
    .list__share a {
      color: #00539B;
      -webkit-transition: all 0.3s ease 0s;
      -o-transition: all 0.3s ease 0s;
      transition: all 0.3s ease 0s;
      text-align: center;
      display: -webkit-inline-box;
      vertical-align: middle; }
      .list__share a:hover, .list__share a:focus, .list__share a:active {
        color: #00539B;
        opacity: 0.5; }
  .list__social {
    color: #00539B;
    text-transform: uppercase;
    font-weight: bold;
    margin-left: 10px;
    font-family: "MyriadProSemibold", sans-serif; }
    .list__social span {
      color: #FFD200; }
  .list__icon {
    margin: 0;
    padding: 0; }
    .list__icon li {
      list-style: none; }

.masterhead__content {
  position: relative;
  text-align: right;
}
  .masterhead__content h1 {
    color: #00539B;
    font-family: "MyriadProSemibold", sans-serif;
    line-height: 1;
    font-size: 30px;
    margin: 10px 0; }
    @media screen and (min-width: 40em) {
      .masterhead__content h1 {
        line-height: 42px;
        font-size: 36px;
        font-family: "MyriadProSemibold", sans-serif;
        margin: 0; } }
  .masterhead__content p {
    color: #00539B;
    line-height: 26px;
    font-size: 16px;
    margin-left: 20px;
    margin-bottom: 5px;
    font-family: "MyriadProLight", sans-serif; }
    @media screen and (min-width: 40em) {
      .masterhead__content p {
        font-size: 18px; } }

.masterhead__icon {
  position: absolute;
  margin-left: -20px;
}

.media__icon {
  width: 55px;
  height: 55px;
  margin-right: 5px;
  text-align: center;
  vertical-align: middle;
  padding: 0 !important;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px; }
  .media__icon span {
    font-size: 50px;
    color: #00539B; }

.media__description {
  padding-left: 15px;
  vertical-align: middle; }
  .media__description h3 {
    font-size: 16px; }

#header{
	z-index: 9;
	position: relative;
	height: 90px;
	overflow: hidden;
	background: #fff;
}

#main-navigation{
	z-index: 10;
	position: relative;
}

#footer{
	z-index: 9;
	position: relative;
}

.wpcf7-submit.button.small.blue{
	background: #ff3739;
    display: inline-block;
    color: white;
    font-size: 18px;
    padding: 14px 30px;
    border: 0;
    outline: none;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
}

#agreement{
	font-size: 14px;
    font-weight: 300;
    width: 85%;
    margin: 0 auto;
    color: white;
    margin-left: 10px;
    cursor: pointer;
}

.liveagent,
#footer-copyright,
#liveagent_button_online_5736F0000000FeC,
#footer{
	display: none;
}

img.rpm-icon{
	max-height: 55px;
}

#menuLeft{
	display: none;
}

#topSection{
	padding: 0;
	padding-top: 12px;
}

#header{
	border-bottom: 4px solid #FFD200;
}

#header > .row{
	max-width: 100%;
}

.no-padding {
  padding: 0 !important;
      margin: 0;
    max-width: 100%;
}

.no-padding-top {
  padding-top: 0; }

.no-padding-left {
  padding-left: 0; }

.no-padding-right {
  padding-right: 0; }

.no-padding-bottom {
  padding-bottom: 0; }

.media-object.media{
	display:inline-block;
	width: 100%;
}

.media-object.media .media-object-section.media__icon{
	float: left;
}

.media-object.media .media-object-section.media__description{
	float: left;
	padding-top: 20px;
	max-width: 92%;
}

.liveagents.stuck{
	display: none !important;
}

.liveagents{
	display: none;
}

.small-12.medium-12.large-8.columns.no-padding.content{
	overflow-y: auto;
	height: calc(100vh - 90px);
}

.small-12.medium-12.large-8.columns.no-padding.content::-webkit-scrollbar {
    width: 5px;
    margin-right: 10px;
}

.small-12.medium-12.large-8.columns.no-padding.content::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
}

.small-12.medium-12.large-8.columns.no-padding.content::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
}

.section__footer__section__large{
	background:#03569d;
	text-align: center;
	padding:30px;
	color:#fff;
}

.section__footer__section__large p{
	margin-bottom: 0;
}

.container-content-custom{
	padding-left: 45px;
	padding-right:45px;
}



.masterhead__content{
	margin-top: 80px;
}

div.masterhead__description{
	width:300px;
	float: right;
}

.bg-grey.radius-all-5{
	height: 100px;
}

ul.list__manfaat{
    display: inline-block;
    width: 100%;
    list-style: none;
    padding: 0;
    margin: 0;
}

li.list__manfaat_item{
    width: 50%;
    float: left;
}

.list__manfaat_content{
	display: inline-block;
	width: 100%;
}

img.list__manfaat_icon {
    border-radius: 50%;
    border: 2px solid #154a7f;
	width: 80px;
	height: 80px;
	padding:10px;
	float: left;
}

.list__manfaat_content p {
    width: calc(100% - 80px);
    float: left;
    padding: 10px 20px;
}

.title-content-custom{
    color: #1b3d6d;
    position: relative;

    margin-bottom: 30px;
    margin-top: 20px;
    display: block;
}

.title-content-custom:before{
	position: absolute;
    content: "";
    width: 50px;
    height: 3px;
    background-color: #1b3d6d;
    bottom: -10px;
    left: 0;
}

.form__information{
	color: #fff;
	font-size: 0.9rem;
}

.form__information span{
    margin-bottom: 5px;
    display: block;
}

.section__article{
	padding:0;
}
.content__article p{
	margin-bottom: 0;
}

.section__manfaat,
.section__syarat_ketentuan{
	margin-top: 30px;
}

.section__syarat_ketentuan{
	margin-bottom: 30px;
}

.cap_sukses{
	background-color: transparent;
}

.content-left-top{
    background: #dce5f4;
    padding: 15px 20px;
    font-size: 13px;
    color: #676767;
}

.content-left-top p{
    font-size: 13px;
    margin-bottom: 0;
    color: #676767;
    line-height: initial;
}

.content-left-top a{
	display:block;
	margin-top: 30px;
	color: #e1244c;
}

table.table-plan{
	width:100%;
	border:none;
}

table.table-plan tbody td{	
	text-align: center;
	padding: 0 10px;
}

table.table-plan,
table.table-plan tbody,
table.table-plan thead{
	background:transparent;
}

table.table-plan.empat tbody td{	
	width: 25%;
}

table.table-plan.lima tbody td{	
	width: 20%;
}

table.table-plan.stripped td{
	padding:10px;
	text-align: center;
}

table.table-plan.stripped td.tleft{
	text-align: left;
}

table.table-plan.stripped tbody tr:nth-child(even){
	background-color:#e6eef5;
}

.tp-title strong,
.tp-title span.small-label{
	display:block;
}

.tp-title p.yellow{
	color: #fdc239;
    font-size: 15px;
    font-family: MyriadPro-semibold,"Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif;
}

.tp-title strong.harga{
	color: #205384;
	font-weight: 600;
    font-family: MyriadPro-light,"Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif;
}

.tp-title strong.harga.through{
	text-decoration: line-through;
	text-decoration-color: #fdc239;
	font-weight: 600;
	font-family: MyriadPro-light,"Helvetica Neue",Helvetica,Helvetica,Arial,sans-serif;
}

.tp-title span.small-label{
	margin-top: 12px;
	font-weight: 100;
    font-size: 9px;
    line-height: 8px;
    color: #676767;
}

.tp-title span.normal-label{    
    color: #676767;
}

.row.with-divider{
	padding: 15px;
	border-top:1px solid #eee;
}

.lp-title{
	color: #144a7e;
}

#popup-usia{
    position: absolute;
    z-index: 999;
    background: #fff;   
    width: 100%;
    margin-top: -40px;
    margin-left: -8px;
    border: 1px solid #144a7e;
    border-radius: 5px;
    padding:20px;
    -webkit-box-shadow: 10px 10px 20px -10px rgba(0,0,0,0.59);
    -moz-box-shadow: 10px 10px 20px -10px rgba(0,0,0,0.59);
    box-shadow: 10px 10px 20px -10px rgba(0,0,0,0.59);
}

#close-pu{
	position: absolute;
	bottom: 13px;
	cursor:pointer;
	font-size: 12px;
    left: 50%;
    margin-left: -10px;
}

table.table-plan.stripped .tp-title p.yellow{
    margin-bottom: 0;
}

.table-container{
	width: 100%;
    overflow-y: auto;
    overflow: auto;
    margin: 0 0 1em;
}

div.wpcf7 .ajax-loader{
	display:inline-block !important;
    margin-top: -28px !important;
	background-repeat: no-repeat;
    background-size: 48px 48px;
    background-image: url(<?php echo get_template_directory_uri() ?>/images/loader-blue-bg.gif) !important;
    width: 48px !important;
    height: 48px !important;
}

@media screen and (max-width: 768px){
	table.table-plan.stripped .tp-title p.yellow,
	table.table-plan.stripped td{
		font-size: 10px;
	}
}

@media screen and (min-width: 64em) {
  	.form__wrapper {
    	margin: 40px 55px;
    }
}

@media screen and (min-width: 1920px) {

	.form__wrapper {
    	margin: 120px 95px;
    }

    .container-content-custom{
		padding-left: 95px;
		padding-right:95px;
	}

	.masterhead__content{
		margin-top: 80px;
	}
}

@media screen and (max-width: 425px){
	.container-content-custom{
		padding-left: 30px;
		padding-right:30px;
	}
	.form__wrapper {
    	margin: 40px 45px;
    }
}

 @media screen and (max-width: 768px){
  	.no-padding{
  		margin:0;
  		background: #fff;
  	}
  	.small-12.medium-12.large-8.columns.no-padding.content{
  		background: #fff;
  	}
  	.form h2{
  		margin-top: 0;
  	}
  	.form__wrapper{
		margin: 0;
		padding: 30px;
		background:#00509a;
  	}

  	.small-12.medium-12.large-8.columns.no-padding.content{
  		height: auto;
  	}
  	.section__footer__section__large{
  		display: none;
  	}
  	li.list__manfaat_item{
  		width: 100%;
  	}
}

  	@media only screen and (max-width: 800px){
		.large-6 {
			left: 0;
		    padding: 10px 30px 0 !important;
		}

		.section__masterhead .large-6.large-push-6.columns.no-padding{
			padding:0 !important;
		}
		.section__listicon{
			padding:30px;
		}
		#mobile-navigation{
			display: none;
		}
		.desktop-content{
			display: block !important;
		}
		#header{
			width: 100%;
			position: fixed;
		}
		.expanded.row.main.no-padding{
			margin-top:60px;
		}
	}

	@media only screen and (max-width: 425px){
		.media-object.media .media-object-section.media__description{
			max-width: 80%;
		}
	}


	/* ***** */
/* cbutton */
/* ***** */

.cbutton {
    display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-pack: center;
            justify-content: center;    
    position: relative;
    overflow: hidden;
    padding-left: 20px;
    padding-right: 20px;
    min-height: 30px;
    text-decoration: none;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    cursor: pointer;
    outline: none;
    border-style: solid;
    user-select: none;
}

.cbutton.blue {
    background-color: #00008f;
    border: 0;
    color: #fff;
}

.cbutton.white {
    background-color: #fff;
    border-color: #00008f;
    color: #00008f;
}

.cbutton.ghost {
    background-color: transparent;
    border-color: #00008f;
    color: #00008f;
    margin:0;
    -webkit-transition: border-color 0.29s cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -moz-transition: border-color 0.29s cubic-bezier(0.455, 0.030, 0.515, 0.955);
             transition: border-color 0.29s cubic-bezier(0.455, 0.030, 0.515, 0.955);
}

.cbutton.ghost-white {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
}

.cbutton.ghost-blue {
    background-color: transparent;
    border-color: #00008f;
    color: #00008f;
}

.cbutton.large {
    height: 40px;
    border-width: 2px;
}

.cbutton.medium {
    height: 30px;
    border-width: 2px;
}

.cbutton.small {
    height: 30px;
    border-width: 1px;
}

@media(min-width: 768px) {

    .cbutton.large {
        height: 50px;
    }

    .cbutton.medium {
        height: 40px;
    }

    .cbutton.small {
        height: 30px;
    }

}


/* animations  */
.cbutton:after {
    position: absolute;
    content: '';
    z-index: 0;
    -webkit-transition: height 0.29s cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -moz-transition: height 0.29s cubic-bezier(0.455, 0.030, 0.515, 0.955);
             transition: height 0.29s cubic-bezier(0.455, 0.030, 0.515, 0.955);
}

.cbutton:after {
    width: 100%;
    height: 0;
    top: 50%;
    left: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(-45deg);
    -moz-transform: translateX(-50%) translateY(-50%) rotate(-45deg);
    -ms-transform: translateX(-50%) translateY(-50%) rotate(-45deg);
    transform: translateX(-50%) translateY(-50%) rotate(-45deg);
     -webkit-backface-visibility: hidden; 
                     backface-visibility: hidden; 
}

/* specific case on blue cbutton  */
.cbutton.blue:before {
    content: '';
    position: absolute;
    z-index: 0;
    background: #00005b;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
}

.cbutton.blue:after {
    background-color: #00005b;
}

/* specific case on blue cbutton  */
.cbutton.red:before {
    content: '';
    position: absolute;
    z-index: 0;
    background: #ff0000;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
}

.cbutton.red:after {
    background-color: #ff0000;
}

.cbutton.white:after {
    background-color: #00008f;
}

.cbutton.ghost:after {
    background-color: transparent;
}

.cbutton.ghost-white:after {
    background-color: #fff;
}

.cbutton.ghost-blue:after {
    background-color: #00008f;
}

.cbutton.large:active:after,
.cbutton.large:hover:after {
    height: 800%;
}

.cbutton.medium:active:after,
.cbutton.medium:hover:after {
    height: 620%;
}

.cbutton.small:active:after,
.cbutton.small:hover:after {
    height: 880%;
}

.cbutton span {
    z-index: 20;
    -webkit-transition: color 0.29s cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -moz-transition: color 0.29s cubic-bezier(0.455, 0.030, 0.515, 0.955);
             transition: color 0.29s cubic-bezier(0.455, 0.030, 0.515, 0.955);
}

.cbutton:active.blue span,
.cbutton:hover.blue span {
    color: #fff;
}

.cbutton:active.white span,
.cbutton:hover.white span {
    color: #fff;
}

.cbutton:active.ghost,
.cbutton:hover.ghost {
    color: #00005b;
    border-color: #00005b;
}

.cbutton:active.ghost-white,
.cbutton:hover.ghost-white {
    color: #00008f;
}

.cbutton:active.ghost-blue,
.cbutton:hover.ghost-blue {
    color: #fff;
}

/* ***** */
/* / cbutton */
/* ***** */

/* ***** */
/* / cbutton PICTO */
/* ***** */

.cbutton.picto .icon {
    position: relative;
    width: 16px;
    height: 16px;
}

.cbutton.picto .icon.right {
    margin-left: 10px;
}

.cbutton.picto .icon.left {
    margin-right: 10px;
}

@media(min-width: 768px) {

    .cbutton.picto .icon {
        margin-top: 2px;
    }

    .cbutton.picto .icon.right {
        margin-left: 15px;
    }

    .cbutton.picto .icon.left {
        margin-right: 15px;
    }

}

.cbutton.picto svg path {
    -webkit-transition: fill 0.29s cubic-bezier(0.455, 0.030, 0.515, 0.955);
    -moz-transition: fill 0.29s cubic-bezier(0.455, 0.030, 0.515, 0.955);
             transition: fill 0.29s cubic-bezier(0.455, 0.030, 0.515, 0.955);
}


.cbutton.picto.blue svg {
    fill: #fff;
}

.cbutton.picto.white svg {
    fill: #00008f;
}

.cbutton.picto.white:active svg,
.cbutton.picto.white:hover svg {
    fill: #fff;
}

.cbutton.picto.ghost svg {
    fill: #00008f;
}

.cbutton.picto.ghost:active svg,
.cbutton.picto.ghost:hover svg {
    fill: #00005b;
}

.cbutton.picto.ghost-white svg {
    fill: #fff;
}

.cbutton.picto.ghost-white:active svg,
.cbutton.picto.ghost-white:hover svg {
    fill: #00008f;
}

.cbutton.picto.ghost-blue svg {
    fill: #00008f;
}

.cbutton.picto.ghost-blue:active svg,
.cbutton.picto.ghost-blue:hover svg {
    fill: #fff;
}



/* ***** */
/* cbutton ARROW */
/* ***** */

.cbutton.arrow .icon {
    position: relative;
    width: 16px;
    height: 16px;
    margin-left: 4px;
    margin-top: 2px;
}

.cbutton.arrow svg {
    position: absolute;
    left: 0;
    top: 0;
}

.cbutton.arrow.blue svg{
    fill: #fff;
}

.cbutton.arrow.blue svg:nth-child(2) {
    fill: #fff;
    opacity: 0;
}

.cbutton.arrow.white svg {
    fill: #00008f;
}

.cbutton.arrow.white svg:nth-child(2) {
    fill: #fff;
    opacity: 0;
}

.cbutton.arrow.ghost svg {
    fill: red;
}

.cbutton.arrow.ghost svg:nth-child(2) {
    fill: red;
    opacity: 0;
}

.cbutton.arrow.ghost-white svg {
    fill: #fff;
}

.cbutton.arrow.ghost-white svg:nth-child(2) {
    fill: #00008f;
    opacity: 0;
}

.cbutton.arrow.ghost-blue svg {
    fill: #00008f;
}

.cbutton.arrow.ghost-blue svg:nth-child(2) {
    fill: #fff;
    opacity: 0;
}
		</style>

<?php get_footer();?>
