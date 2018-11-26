<section id="menu-direktori" class="bg-direktori m-bottom-25 clearfix relative radius-all-5">
	<div class="mobile-content p-lr-15 p-tb-15">
		<h3 class="f-16 c-blue m-bottom-10">Pilih jasa bantuan yang Anda butuhkan</h3>
		<select id="dir-menu">
			<option value="<?php echo site_url('direktori');?>">Seluruh Direktori</option>
			<option value="<?php echo site_url('direktori/rumah-sakit');?>">Rumah Sakit</option>
			<option value="<?php echo site_url('direktori/kantorcabang');?>">Kantor Cabang</option>
			<option value="<?php echo site_url('direktori/direktori-bengkel');?>">Bengkel</option>
		</select>
	</div>
	<ul id="chooseDir" class="desktop-content clearfix p-lr-10 p-tb-30 small-block-grid-1 medium-block-grid-1 large-block-grid-4">
		<li class="clearfix semua">
			<a href="<?php echo site_url('direktori');?>">
				<span class="icon left"></span>
				<div class="details left m-left-10">
					<strong class="f-20 block <?php if($_GET['t']==''){ echo 'selected'; }?>">Seluruh Direktori</strong>
					<p class="f-12">Temukan Rumah Sakit dan Kantor Cabang AXA Mandiri di sekitar Anda</p>
				</div>
			</a>
		</li>
		<li class="clearfix rumah-sakit <?php if($_GET['t']=='rumah_sakit'){ echo 'selected'; } ?>" >
			<a href="<?php echo site_url('direktori/rumah-sakit');?>/?t=rumah_sakit">
				<span class="icon left"></span>
				<div class="details left m-left-10">
					<strong class="f-20 block">Rumah Sakit</strong>
					<p class="f-12">Temukan Rumah Sakit &amp; Klinik Rekanan AXA Mandiri terdekat</p>
				</div>
			</a>
		</li>
		<li class="clearfix bengkel <?php if($_GET['t']=='bengkel'){ echo 'selected'; } ?>" >
			<a href="<?php echo site_url('direktori/direktori-bengkel');?>/?t=bengkel">
				<span class="icon left"></span>
				<div class="details left m-left-10">
					<strong class="f-20 block">Bengkel</strong>
					<p class="f-12">Bengkel mobil rekanan AXA Mandiri untuk pemegang polis AXA General</p>
				</div>
			</a>
		</li>
		<li class="clearfix cabang <?php if($_GET['t']=='kantorcabang'){ echo 'selected'; } ?>">
			<a href="<?php echo site_url('direktori/kantorcabang');?>/?t=kantorcabang">
				<span class="icon left"></span>
				<div class="details left m-left-10">
					<strong class="f-20 block">Kantor Cabang</strong>
					<p class="f-12">Daftar Kantor Cabang AXA Mandiri, Bank Mandiri dan Financial Advisor di seluruh Indonesia</p>
				</div>
			</a>
		</li>
	</ul>
</section>