<?php/** * Template Name: Page Builder : Revamp Solusi */?>
<?php get_header();?>
<?php 
	$slug = "solusi-kesehatan"; //basename(get_permalink());
	//echo($slug);
	$bandingkanSlug = $post->post_name == 'solusirencanakanlebih' ? 'solusi-kesehatan' : $post->post_name;
?>
<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="wrapper" class="row">
		<?php the_content(); ?>	
	
		<?php get_template_part("widget/breadcrumbs");?>
	</div><!--end row-->
	<?php get_template_part("widget/hargaunit");?>
</div><!--end page-container-->
<style>
	/* CF7 Custom radio button */
			.switch-field .switch-title{
				margin-bottom: 10px;
				color: #fff;
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
			    top: -1px;
			    left: 0;
			}
			.switch-field div.radio span.checked{
				
				border:2px solid #fff;
			}
</style>
<script type="text/javascript">
	$(document).ready(function(){
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
			$('.ajax-loader').css('display', 'block');
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

		function validate(parent){
				// var dateString = $('#dp1392957616851').val();
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
			}	
	});
</script>
<style>
	.cap_sukses{
		margin-top: 0;
	}
	.btn-mau-beli-online{
		text-align: center;
		color:#fff;
	}
	.btn-mau-beli-online a{
		color: #f1b007;
	}
</style>
<?php get_footer('revamp');?>
