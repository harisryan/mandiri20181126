
<?php/** * Template Name: Page Builder : Product Matrix */?>
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

		<?php the_content();?>

		<?php get_template_part("widget/breadcrumbs");?>
	</div>
	<?php get_template_part("widget/hargaunit");?>
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

				$("#form").submit(function(){
					$('.wpcf7-submit').attr('disabled', 'disabled');
					$('.ajax-loader').css('visibility', 'visible');
					var mobile = $("input[name='no_tlp']").val();
				    if($("#form").valid()) {
				    	if(ValidateNumber(typeof mobile == 'undefined' ? "0" : mobile) != "0"){
				    		if(validate()){
								$.ajax({
									type:"POST",
									url:'<?=admin_url( 'admin-ajax.php' );?>',
									data: {
										action:'send_lead_lts',
										data:$('form').serializeArray()
									},
									dataType:'json',
									success:function(data){
										$('.ajax-loader').css('visibility', 'hidden');
										$('.wpcf7-submit').removeAttr('disabled');
										$('.cap_sukses').hide();
										if(data.success){
											grecaptcha.reset();
											$('#form')[0].reset();
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
								$('.ajax-loader').css('visibility', 'hidden');
								$('.wpcf7-submit').removeAttr('disabled');
								$('.cap_sukses').hide();
								$('.cap_status').html("Format tanggal salah! yyyy-MM-dd cth:2017-01-31").addClass('cap_status_error').fadeIn('slow');
							}
				    	}else{
				    		$('.ajax-loader').css('visibility', 'hidden');
								$('.wpcf7-submit').removeAttr('disabled');
								$('.cap_sukses').hide();
								$('.cap_status').html("Format No Telepon tidak benar").addClass('cap_status_error').fadeIn('slow');
				    	}
				    }else{
						$('.ajax-loader').css('visibility', 'hidden');
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

		</style>

<?php get_footer();?>
