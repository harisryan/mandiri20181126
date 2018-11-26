
<?php/** * Template Name: Page Builder : Revamp Product Matrix */?>
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
<script>
	$(document).ready(function(){
		// $('.wpcf7_onclick').on('click',function(){
		// 	<?php if (is_single('asuransi-mandiri-proteksi-kanker')) : ?>
		// 		tc_events_2(this,'virtual_page',{virtual_page_name:'independent_<?php echo $post->post_name;?>::contact_us::submit', product_label:'GI::<?=str_replace(" ", "_", $categoryTagCommander[1])?>::Proteksi_Kanker',page_status:'lead_completed_autostart'});
		// 	<?php else: ?>
		// 		tc_events_2(this,'virtual_page',{virtual_page_name:'independent_<?php echo $post->post_name;?>::contact_us::submit', product_label:'GI::<?=str_replace(" ", "_", $categoryTagCommander[1])?>::<?=str_replace(" ", "_", get_the_title())?>',page_status:'lead_completed_autostart'});
		// 	<?php endif; ?>
		// });
	});
</script>
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

$_GET['status']; ?>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
<?php endif; ?>
<div id="page-container" style="background:#fff url(<?php echo $image[0]; ?>) no-repeat;background-position: -27% 0;">
	<!-- <div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div> -->
	<div class="row" id="row-base">
		<div class="large-8 column m-top-150" id="col-base">
			<div class="row p-all-0">

				<?php the_content();?>

			</div>

		</div>
	</div>
</div>

<?php 
$brochure = have_rows('matrix_brochure2');
$linkBeliOnline = get_field('link_beli_online');
$class = "w100";
if( ($brochure && $linkBeliOnline == "" ) || (!$brochure && $linkBeliOnline != "" ) ){
	$class = "w50";
}elseif($brochure && $linkBeliOnline != ""){
	$class = "w33";
}
?>

<div id="form-sidebar">
	<div class="ctab-wrap">
		<div class="ctab-item <?php echo $class; ?>">
			<a href="#" class="ctab-action active" data-target="ctabform">
				<img src="http://axamandiri.sudahdistaging.com/wp-content/uploads/2017/10/Health-Icons-05-pre-existing-cond.png" alt="Form Tab">
				<span>
					<?php _e('Daftar disini') ?>
				</span>
			</a>
			<?php if( $brochure ): ?>
			<a href="#" class="ctab-action" data-target="ctabdownload">
				<img src="http://axamandiri.sudahdistaging.com/wp-content/uploads/2017/10/Health-Icons-15-rawat-jalan.png" alt="Form Tab">
				<span>
					<?php _e('Unduh Informasi Ini') ?>
				</span>
			</a>
			<?php endif; ?>

			<?php 
			
			if($linkBeliOnline != ""): ?>
			<a href="<?php echo $linkBeliOnline; ?>" class="ctab-link">
				<img src="http://axamandiri.sudahdistaging.com/wp-content/uploads/2017/10/Health-Icons-07-rawat-inap.png" alt="Form Tab">
				<span>
					<?php _e('Beli Online') ?>
				</span>
			</a>
			<?php endif; ?>

			<a href="<?php echo site_url('bandingkan-produk'); ?>" class="ctab-link bg-yellow">
				<img src="http://axamandiri.sudahdistaging.com/wp-content/uploads/2017/10/Health-Icons-07-rawat-inap.png" alt="Form Tab">
				<span>
					<?php _e('Bandingkan Produk') ?>
				</span>
			</a>

			<a href="#" id="liveagent_button_online_5736F0000000FeC" onclick="liveagent.startChat('5736F0000000FeC'); return false;" class="ctab-link bg-yellow">
				<img src="http://axamandiri.sudahdistaging.com/wp-content/uploads/2017/10/Health-Icons-07-rawat-inap.png" alt="Form Tab">
				<span>
					<?php _e('Live Chat') ?>
				</span>
			</a>

			<a href="#" id="liveagent_button_offline_5736F0000000FeC" onclick="liveagent.startChat('5736F0000000FeC'); return false;" class="ctab-link bg-yellow">
				<img src="http://axamandiri.sudahdistaging.com/wp-content/uploads/2017/10/Health-Icons-07-rawat-inap.png" alt="Form Tab">
				<span>
					<?php _e('Live Chat Offline') ?>
				</span>
			</a>
		</div>
	</div>
	<div class="ctab-content <?php echo $class; ?>">
		<a href="#" id="close-ctab-mobile">&times;</a>
		<div class="ctab-pane" id="ctabform" style="display: block;">
			<strong id="title-form-data-diri"><?php _e('FORMULIR DATA DIRI'); ?></strong>
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
            <div class="hubungi-anda">
            	<strong>Kami Akan Menghubungi Anda</strong>
            	isi formulir diatas untuk mendapatkan informasi yang lebih lengkapp tentang produk dan layanan AXA Mandiri
            </div>
		</div>
		<div class="ctab-pane" id="ctabdownload" style="display: none;">
			<?php
			if( have_rows('matrix_brochure2') ):
			    while ( have_rows('matrix_brochure2') ) : the_row();
		    		?>
		    		<a class="link-unduh-informasi" href="<?php echo get_sub_field('file') ?>" download>
		    			<span><?php echo get_sub_field('title') ?></span>
		    			<i class="fa fa-download right"></i>		
	    			</a>
					<?php
			    endwhile;
			else :
			endif;
			?>
		</div>
	</div>
	
</div>

<?php 
get_template_part("widget/hargaunit");
?>

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

			    $('.ajax-loader').css('display', 'none');

				$('input[aria-required=true]').each( function( key, value ) {
					$(this).prop('required',true);				  
				});
				
				$(".wpcf7-form-lts").submit(function(e){	    
			    	e.preventDefault();	
					$('.wpcf7-submit').attr('disabled', 'disabled');
					$('.ajax-loader').css('visibility', 'visible');
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
										$('.ajax-loader').css('visibility', 'hidden');
										$('.wpcf7-submit').removeAttr('disabled');
										$('.cap_sukses').hide();
										if(data.success){
											grecaptcha.reset();
											$('form').each(function() { this.reset() });
											$('.cap_sukses').html("Terima kasih, data terkirim.").fadeIn(200).show();
											$('.cap_status').fadeOut(200).hide();
										}else{
											$('.wpcf7-submit').removeAttr('disabled');
											$('.cap_sukses').hide();
											$('.cap_status').html(data.messages).addClass('cap_status_error').fadeIn(200).show();
										}
										console.log(data);
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
										var dataJSON = $.parseJSON(msg);

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

			.wpcf7 select{
				padding: 9.5px;
			}

			div.wpcf7-response-output,
			.clearfix{
				clear:both;
			}

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

			.fieldset.full-width{
				width: 100% !important;
			}

			.fieldset.full-width.t-radio span.wpcf7-list-item{
				margin:0;
				width: 80px;
				background: #fff;
				box-shadow: none;
			}

			.fieldset.full-width.t-checkbox .wpcf7-form-control-wrap{
			    width: 100%;
				display: inline-block;
			}

			.fieldset.full-width.t-checkbox .wpcf7-form-control-wrap span.wpcf7-list-item{
				margin:0;
				width: 150px;
				background: #fff;
				box-shadow: none;
			}

			.fieldset.full-width.t-checkbox .wpcf7-form-control-wrap span.wpcf7-list-item:nth-child(2){
				margin:0;
				width: 200px;
			}

			.fieldset.full-width.t-checkbox .wpcf7-form-control-wrap span.wpcf7-list-item input[type=checkbox]{
				float: left;
			}

			.fieldset.full-width.t-checkbox .wpcf7-form-control-wrap span.wpcf7-list-item .wpcf7-list-item-label{
				width: 80%;
				margin-left: 10px;
			}
			
			#unitWidget,
			#footer-copyright,
			#footer{
				padding-right: 32%;
			}

			@media screen and (min-width:769px ){
				#unitWidget,
				#footer-copyright,
				#footer{
					padding-left: 8%;
				}
			}

			#unitWidget{
				padding-right: 29%;	
    			background: #fcbd0e;
			    border-top: 1px solid #ddd;
    			border-bottom: 1px solid #ddd;
			}

			#unitWidget .wrap{
				border-top:0;
				border-bottom: 0;
			}
			
			#main-navigation{
				z-index: 99;
			}
			#header{
			    position: relative;
				z-index: 99;
				background: #fff;
			}

			#form-sidebar{
				height: 100vh;
				background: #154a7f;
				color: #fff;
				position: fixed;
				right: 0;
				top:0;
				padding:30px 100px 30px 30px;
				width: 29%;
				padding-top: 225px;
				 -webkit-transition: ease-out 0.2s;
			    -moz-transition: ease-out 0.2s;
			    -o-transition: ease-out 0.2s;
			    transition: ease-out 0.2s;
			}

			#form-sidebar #agreement{
				color: #fff;
			}

			#form-sidebar.on-top{
				padding-top: 100px;
			}
			
			#customerCare{
				right: 30%;
			}
			.liveagent{
				right: 32% !important;	
			}
			#customercare-fixed{
				right: 47%;
			}
			.liveagents{
				right: 32% !important;
			}
			#ulip-product{
				width: 145px;
			}
			@media only screen and (min-width: 47.938em){
				.large-8 {
				    position: relative;
				    width: 75%;
				}
			}

			.ctab-wrap{
				width: 75px;
				position: absolute;
				right: 0;
				top: 0;
				height: 100vh;
				padding-top: 152px;
				z-index: 9;
				background: #03569d;
				 -webkit-transition: ease-out 0.2s;
			    -moz-transition: ease-out 0.2s;
			    -o-transition: ease-out 0.2s;
			    transition: ease-out 0.2s;
			}

			@media screen and (min-width: 768px){
				body.admin-bar .ctab-wrap {
				    padding-top: 184px;
				}
			}

			#title-form-data-diri{
				margin-bottom: 20px;
    			display: inline-block;
			}
			
			body.admin-bar .ctab-wrap.on-top,
			.ctab-wrap.on-top{
				padding-top:66px;
			}

			.ctab-wrap .ctab-link,
			.ctab-wrap .ctab-action{
				display: inline-block;
				text-align: center;
				position: relative;
				color: #fff;
				width: 100%;
				padding: 10px 5px;
				border-bottom: 1px solid #fff;
			}
			.ctab-wrap .ctab-action.active{
				background: #154a7f;
				border-bottom: 1px solid #154a7f;
			}
			.ctab-wrap .ctab-link.bg-yellow{
				background: #ffca0b;
				color: #00539b;
			}

			.ctab-wrap .ctab-link .notif-beli{
			    background-size: 20px 20px !important;
			    font-size: 10px;
			    position: absolute;
			    width: 20px;
			    top: 5px;
			    height: 20px;
			    font-size: 0.7em;
			    right: 6px;
			    padding-top: 4px;
			}

			#page-container .sections {
			    padding: 30px 35px 0;
			}
			.header3,
			.header3_pengantar{
				color: #03569d;
			}
			#list-syarat li .bg-grey.radius-all-5{
				min-height: 100px;
			}
			#list-syarat li{
				padding-bottom: 0px;
			}
			.ctab-wrap .ctab-link span,
			.ctab-wrap .ctab-action span{
				display: block;
				text-align: center;
				font-size: 0.7em;
			}
			.ctab-wrap .ctab-link img,
			.ctab-wrap .ctab-action img{
				width: 45px;
			}
			@media screen and (max-width: 768px) {
				#unitWidget,
				#footer-copyright,
				#footer{
					padding-right: 0;
				}
				.liveagent {
				    right: 3% !important;
				}
				#footer-copyright{
					margin-bottom: 75px;
					padding-bottom: 30px;
					padding-right: 30px;
				}
				.ctab-wrap.on-top{
					padding-top: 0;
					width: 100%;
					height: 100px;
				}
				.ctab-wrap{
				    width: 100%;
    				padding-top: 0;
					-webkit-box-shadow: 0px -2px 50px 0px rgba(21,74,127,1);
					-moz-box-shadow: 0px -2px 50px 0px rgba(21,74,127,1);
					box-shadow: 0px -2px 50px 0px rgba(21,74,127,1);
				}
				.ctab-wrap .ctab-link,
				.ctab-wrap .ctab-action{
					/*width: 33.333333333%;*/
					width: 20%;
					float: left;
					height: 75px;
					border-bottom: 0;
					border-left: 1px solid #fff;
				}

				.ctab-wrap .w100 .ctab-link,
				.ctab-wrap .w100 .ctab-action{
					width: 33.333333333%;
				}

				.ctab-wrap .w50 .ctab-link,
				.ctab-wrap .w50 .ctab-action{
					width: 25%;
				}

				.ctab-wrap .w33 .ctab-link,
				.ctab-wrap .w33 .ctab-action{
					width: 20%;
				}

				.ctab-wrap .ctab-action.active{
					background: transparent;
				}
				.ctab-wrap .ctab-action:first-child{
					border-left: 0;	
				}
				.ctab-wrap .ctab-link img,
				.ctab-wrap .ctab-action img{
					width: 65px;
				}
				.ctab-wrap .ctab-link span,
				.ctab-wrap .ctab-action span{
					display: block;
					text-align: center;
				}
				#form-sidebar{
					bottom: 0;
    				top: inherit;
					width: 100%;
					height: 75px;
				    padding: 30px;
			        padding-top: 70px;
				}
				#form-sidebar{
					padding: 0;
					z-index: 999;
				}
				.liveagent,
				.liveagent.stuck{
					bottom: 85px !important;
				}
				#page-container{
					padding-top: 200px;
					background-position: top center !important;
				}
				
			}
			@media screen and (max-width: 425px) {
				.ctab-wrap .ctab-link img,
				.ctab-wrap .ctab-action img{
					width: 25px;
					margin-bottom: 10px;
				}
				.ctab-wrap .ctab-link span,
				.ctab-wrap .ctab-action span{
					font-size: 0.7em;
				}
				#list-syarat li .icon-125x100{
					display: block;
					margin-bottom: 12px;
				}
			}
			@media screen and (max-width: 320px) {
				#list-syarat li .icon-125x100{
					display: none;
					margin-bottom: 12px;
				}
			}
			.link-unduh-informasi{
			    position: relative;
			    width: 100%;
			    padding: 10px 20px;
			    display: inline-block;
			    background: #fff;
			    margin-bottom: 5px;
			}
			.link-unduh-informasi span{
			    padding-right: 32px;
    			display: block;
			}

			.link-unduh-informasi i{
			    position: absolute;
			    right: 20px;
			    top: 12px;
			}

			.action-active-mobile{
			    display: block;
			    position: fixed;
			    top: 60px;
			    width: 100%;
			    overflow: auto;
			    height: 100%;
			    background: #03569d;
			    padding: 50px 30px;
			    z-index: 9;
			}
			#close-ctab-mobile{
				display: none;
				position: fixed;
			    top: 75px;
			    font-size: 20px;
			    right: 25px;
			    z-index: 10;
			    color: #fff;
			}
			.hubungi-anda strong{
				color: #f1b007;
				display: block;
				text-transform: uppercase;
				margin-bottom: 10px;
			}
			.hubungi-anda{
				color: #fff;
				font-size: .875rem;
			}

			/* CF7 Custom radio button */
			.switch-field .switch-title{
				margin-bottom: 10px;
			}
			.switch-field span.wpcf7-list-item{
				margin:0;
			}
			.switch-field .wpcf7-list-item{
				width: 24%;
			    margin-right: 1% !important;
			    box-shadow: 0 0 0 0;
			    border-radius: 0;
			    padding: 5px 0;
			    background: transparent;
			    overflow: hidden;
			    position: relative;
			}
			.switch-field div.radio{
				position: inherit;
				margin-top: -20px;
			}
			.switch-field .wpcf7-list-item-label{
				width: 100%;
			    text-align: center;
			    color: #fff;
			    position: relative;
			}
			.switch-field div.radio span {
			    background: #a5a5a5;
			    position: absolute;
			    width: 100%;
			    height: 100%;
			    border:2px solid transparent;
			    top: 1px;
			    left: 0;
			}
			.switch-field div.radio span.checked{
				
				border:2px solid #fff;
			}

			@media screen and (min-width: 768px){
				
				#row-base{
					margin-left: 100px;
					max-width: calc(100% - 100px);
				}
				#col-base{
					width: 69%;
				}
				#unitWidget .row{
					margin-left: 0;
				}
				#footer .row{
					margin-left: 0;	
				}
				.large-8.column.m-top-150 .row{
					margin-right: 100px;
				}
				#header .row,
				#fixed-navigation .row,
				#main-navigation .row{
				    margin-left: 100px;
					max-width: calc(100% - 200px);
					margin-right: 100px;
				}
			}

		</style>

<?php get_footer('revamp-product-matrix');?>
