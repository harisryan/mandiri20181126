<!-- The Modal -->
<div id="leadform_<?php echo $post->ID; ?>" class="leadform">

  <!-- Modal content -->
  <div class="leadform-content">
    <span class="close">&times;</span>
    <div class="row-col">
		<div class="col-1 large-6 columns">
			<h5 class="c-blue"><?php ( is_page( 'solusirencanakanlebih' ) ) ? _e("Solusi Khusus untuk Anda") : _e("Produk Kesehatan"); ?></h5>
			<img class="icon-product" src="<?php echo bloginfo('template_url');?>/images/revamp/icon-kesehatan.png" alt="" style="top:0px;right:20px"/>
			<div style="max-width:40px;border-top:4px solid #00529b;margin-top:-10px;margin-bottom:10px;margin-left:1px;"></div>
			<br/>
			<h5><?php the_title(); ?></h5>
			<div class="mt-5 pengantar_revamp">
				<?php echo get_field('pengantar_revamp',$post->ID);?>
			</div>
			<ul class="list-manfaat-lf c-blue f-16">
				<?php $count = 1; 
					while(has_sub_field('matrix_manfaat')): ?>
					<?php if($count < 4): ?>
						<li><?php the_sub_field('title');?></li>
					<?php endif; ?>
					<?php $count++; 
					endwhile;?>
			</ul>
			
			<div class="action-footer-lf">
				<a href="#" class="c-red" style="font-size:0.8em;line-height:10px;">INFO SELENGKAPNYA <span class="fa fa-arrow-right"></span></a>
				<span class="icon-download-lf">
					<a href="#"><img src="<?php echo bloginfo('template_url');?>/images/revamp/icon-download.png" alt="" /><br/> Unduh <br/> Informasi ini</a>
				</span>
			</div>
		</div>
		
		<div class="col-2 large-6 columns">
			<h5 class="c-white">FORMULIR DATA DIRI</h5>
			<form action="" id="form" name="form" method="post" class="wpcf7-form" novalidate="novalidate">
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
				<div class="cp-clearfix cp-margin--bottom20 cp-form--width96-p">
					<input id="chk-agreement" type="checkbox" name="agreement" aria-label="Agreement" value="1" class="customcheck left m-left-0" required="" aria-required="true">
					<span for="chk-agreement" id="agreement" class="left text-left m-right-0 cp-form--width90-p c-white">*Saya bersedia dihubungi untuk mendapatkan informasi selanjutnya dari AXA Mandiri.</span>
				</div>
				<div class="cp-clearfix cp-margin--bottom10 cp-form--width60-p">
					<div class="g-recaptcha" data-sitekey="6LfsURsTAAAAAMz1gyL_IbA5vMzM2_qZ_fi3Secr" required></div>
					<script src="https://www.google.com/recaptcha/api.js?hl=id" async defer></script>
				</div>
				<div class="fieldset">
					<input type="submit" value="Kirim" class="wpcf7-form-control wpcf7-submit button large red">
					<div class="ajax-loader"></div>					
				</div>
			</form>
		</div>
	</div>
  </div>

</div>

<script>
	$(".leadform-content .close").on('click', function(){
		$(".leadform").hide();
	})

</script>


