<style>
	/* The Modal (background) */
	.leadform {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1000001; /* Sit on top */
		padding-top: 100px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}

	/* Modal Content */
	.leadform-content {
		position:relative;
		background-color: #020569;
		margin: auto;		
		border: 1px solid #888;
		width: 65%;
		min-height:480px;
		max-height:480px;
	}
	.list-manfaat-lf{
		margin-left:30px;
		margin-top:-10px;
		font-size:1.063em!important;
		max-width:224px;
		margin-bottom:10px;
	}
	/* The Close Button */
	.close {
		position:absolute;
		color: #aaaaaa;
		float: right;
		font-size: 70px;
		font-weight: bold;
		right:-53px;
		top:0px;
		background-color:#000000ab;
		padding:5px;
	}

	.close:hover,
	.close:focus {
		color: #FFF!important;
		text-decoration: none;
		cursor: pointer;
	}
	.col-1{
		/* position:relative;
		width:50%;
		float:left; */
		background-color: #fefefe;
		min-height:478px;
		max-height:480px;
	}
	.col-1, .col-2{
		padding:30px;
	}
	.mt-5{
		margin-top:5px;
	}
	.action-footer-lf{
		bottom: 30px;
		position: absolute;
		width: 90%;
	}
	.icon-download-lf{
		text-align: center;
		float: right;
		right: 15px;
		top:-50px;
		position: absolute;
		font-size: smaller;
	}
	.icon-download-lf img{
		width:40px;
	}
	.wpcf7-form-control-wrap input{
		border-radius:0px!important;
	}
	#ui-datepicker-div{
		z-index:1000004!important;
	}
	.g-recaptcha {
		transform:scale(0.77);
		transform-origin:0 0;
	}
	#form{
		padding:10px;
	}
	#agreement{
		font-size:small;
		font-style:italic;
	}
</style>

<!-- The Modal -->
<div id="leadform" class="leadform">

  <!-- Modal content -->
  <div class="leadform-content">
    <span class="close">&times;</span>
    <div class="row-col">
		<div class="col-1 large-6 columns">
			<h5 class="c-blue">Produk Kesehatan</h5>
			<img class="icon-product" src="<?php echo bloginfo('template_url');?>/images/revamp/icon-kesehatan.png" alt="" style="top:0px;right:20px"/>
			<div style="max-width:40px;border-top:4px solid #00529b;margin-top:-10px;margin-bottom:10px;margin-left:1px;"></div>
			<br/>
			<h5>Mandiri Jaminan Kesehatan</h5>
			<p class="mt-5">
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
				sed diam nonummy nibh euismod tincidunt ut laoreet dolore
				magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
			</p>
			<ul class="list-manfaat-lf c-blue f-16">
				<li>Manfaat Ipsum Dolor Amet</li>
				<li>Diskon 10%</li>
				<li>Manfaat Lorem Ipsum</li>
				<li>Manfaat Ipsum</li>
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
	// Get the modal
	var modal = document.getElementById('leadform');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
		modal.style.display = "block";
		document.body.style.overflow = "hidden";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
		document.body.style.overflow = "visible";
	}	
</script>


