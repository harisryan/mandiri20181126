<script type="text/javascript">
	var siteUrl= '<?php echo site_url(''); ?>';
</script>
<?php $umur = ($_GET['umur']) ? $_GET['umur'] : '';
	if ($umur >=18 && $umur <=25) {
		$range='18 - 25';
		$show='';
	}elseif ($umur >=26 && $umur <=40) {
		$range='26 - 40';
		$show='';
	}elseif ($umur >=41 && $umur <=55) {
		$range='41 - 55';
		$show='';
	}elseif ($umur >=56) {
		$range='56 lebih';
		$show='';
	}elseif($umur==''){
		$show='class="cp-display--none"';
	}
	else{
		$range=$umur;
		$show='class="cp-display--none"';
	}

?>
<div id="panel-advisor" class="cp-advisor--panel" style="min-height: 900px">
	<div class="row">
	 <div class="box">
		<h1>Solusi untuk Anda</h1>
		<h2>Mari cari tahu apa perlindungan yang Anda butuhkan</h2>
		<form id="advisor">
			<div id="step1">
			 	<div class="question">
			 		<div class="description">
			 			Saya membutuhkan perlindungan
				 		<a href="#" data-dropdown="#perlindungan-1" class="perlindungan"><label aria-label="Perlindungan 1"><span>(pilih di sini)</span></label></a>
				 		<div id="perlindungan-1" class="dropdown dropdown-tip tooltip">
							<ul class="choice dropdown-menu ">
								<li class="Kesehatan" data-id="step3"><span class="icon"></span>Kesehatan</li>
								<li class="Harta benda" data-id="step4"><span class="icon"></span>Harta benda</li>
								<li class="Perjalanan" data-id="step4"><span class="icon"></span>Perjalanan</li>
								<li class="Jiwa" data-id="step3"><span class="icon"></span>Jiwa</li>
								<li class="Investasi" data-id="step3"><span class="icon"></span>Investasi</li>
							</ul>
						</div>
					</div><!--end description-->
			 	</div>
			</div>

			<div id="step2" class="top-space" style="display: none;">
			 	<div class="question">
			 		<div class="description">
			 			<div id="step2-1">
			 				Saya membutuhkan perlindungan
					 		<a href="#" data-dropdown="#perlindungan-2" class="perlindungan"><label aria-label="Perlindungan 2"><span>  </span> <i class="fa fa-angle-down"></i></label></a>
					 		<div id="perlindungan-2" class="dropdown dropdown-tip tooltip">
								<ul class="choice dropdown-menu ">
									<li class="Kesehatan" data-id="step3"><span class="icon"></span>Kesehatan</li>
									<li class="Harta benda" data-id="step4"><span class="icon"></span>Harta benda</li>
									<li class="Perjalanan" data-id="step4"><span class="icon"></span>Perjalanan</li>
									<li class="Jiwa" data-id="step3"><span class="icon"></span>Jiwa</li>
									<li class="Investasi" data-id="step3"><span class="icon"></span>Investasi</li>
								</ul>
							</div><br>
						</div>
						<div id="step2-2">
				 			Saya berusia
				 			<a href="#" data-dropdown="#usia-2" class="umur"><label aria-label="Usia 2"><span><?php echo $range; ?>  </span> <i class="fa fa-angle-down"></i></label></a>
					 		<div id="usia-2" class="dropdown dropdown-tip tooltip">
								<ul class="usia dropdown-menu ">
									<li data-usia="20"><span class="icon"></span>18 - 25</li>
									<li data-usia="30"><span class="icon"></span>26 - 40</li>
									<li data-usia="50"><span class="icon"></span>41 - 55</li>
									<li data-usia="57"><span class="icon"></span>56 lebih</li>
								</ul>
							</div>
				 			tahun.
				 		</div>
				 		<div id="step2-3" style="display: none;">
							Saya
				 			<a href="#" data-dropdown="#status-2" class="matrial"><label aria-label="Status 2"><span>  </span> <i class="fa fa-angle-down"></i></label></a>
					 		<div id="status-2" class="dropdown dropdown-tip tooltip">
								<ul class="status dropdown-menu ">
									<li class="lajang"><span class="icon"></span>lajang</li>
									<li class="menikah"><span class="icon"></span>menikah</li>
								</ul>
							</div>
						</div>
						<div id="step2-4" style="display: none">
				 			dengan
				 			<a href="#" data-dropdown="#tanggungan-2" class="tanggungan"><label aria-label="Tanggungan 2"><span>  </span> <i class="fa fa-angle-down"></i></label></a>
					 		<div id="tanggungan-2" class="dropdown dropdown-tip tooltip">
								<ul class="tanggung dropdown-menu ">
									<li class="lajang"><span class="icon"></span>memiliki tanggungan</li>
									<li class="menikah"><span class="icon"></span>tidak memiliki tanggungan</li>
								</ul>
							</div><br>
						</div>
						<div id="step2-4" style="display: none">
				 			Penghasilan saya per tahun sebesar

							<a href="#" data-dropdown="#penghasilan-2" class="penghasilan"><label aria-label="Penghasilan 2"><span>  </span> <i class="fa fa-angle-down"></i></label></a>
					 		<div id="penghasilan-2" class="dropdown dropdown-tip tooltip">
								<ul class="gaji dropdown-menu ">
									<li data-gaji="90000000"><span class="icon"></span>Rp. 0 - 150 juta</li>
									<li data-gaji="200000000"><span class="icon"></span>Rp. 151 juta - 225 juta</li>
									<li data-gaji="240000000"><span class="icon"></span>Rp. 225 juta - 250 juta</li>
									<li data-gaji="300000000"><span class="icon"></span>Rp. 250 juta lebih</li>
								</ul>
							</div>
						</div>
			 		</div><!--end description-->
					<a class="button red" href="">Lihat Pilihan Perlindungan</a>
			 	</div>
			</div>

			<div id="step3" class="top-space" style="display: none;">
			 	<div class="question">
			 		<div class="description">
			 			<div id="step3-1">
				 			Saya membutuhkan perlindungan
					 		<a href="#" data-dropdown="#perlindungan-3" class="perlindungan"><label aria-label="Perlindungan 3"><span>  </span> <i class="fa fa-angle-down"></i></label></a>
					 		<div id="perlindungan-3" class="dropdown dropdown-tip tooltip">
								<ul class="choice dropdown-menu ">
									<li class="Kesehatan" data-id="step3"><span class="icon"></span>Kesehatan</li>
									<li class="Harta benda" data-id="step4"><span class="icon"></span>Harta benda</li>
									<li class="Perjalanan" data-id="step4"><span class="icon"></span>Perjalanan</li>
									<li class="Jiwa" data-id="step3"><span class="icon"></span>Jiwa</li>
									<li class="Investasi" data-id="step3"><span class="icon"></span>Investasi</li>
								</ul>
							</div>.<br>
						</div>
						<div id="step3-2" >
				 			Saya berusia
							<a href="#" data-dropdown="#usia-3" class="umur"><label aria-label="Usia 3"><span><?php echo $range; ?>  </span> <i class="fa fa-angle-down"></i></label></a>
					 		<div id="usia-3" class="dropdown dropdown-tip tooltip">
								<ul class="usia dropdown-menu ">
									<li data-usia="20"><span class="icon"></span>18 - 25</li>
									<li data-usia="30"><span class="icon"></span>26 - 40</li>
									<li data-usia="50"><span class="icon"></span>41 - 55</li>
									<li data-usia="57"><span class="icon"></span>56 lebih</li>
								</ul>
							</div>
				 			tahun.
				 		</div>
				 		<div id="step3-3" style="display: none;">
				 			Saya
				 			<a href="#" data-dropdown="#status-3" class="matrial"><label aria-label="Status 3"><span>  </span> <i class="fa fa-angle-down"></i></label></a>
					 		<div id="status-3" class="dropdown dropdown-tip tooltip">
								<ul class="status dropdown-menu ">
									<li class="lajang"><span class="icon"></span>lajang</li>
									<li class="menikah"><span class="icon"></span>menikah</li>
								</ul>
							</div>
						</div>
				 		<div id="step3-4" style="display: none">
							dengan
				 			<a href="#" data-dropdown="#tanggungan-3" class="tanggungan"><label aria-label="Tanggungan 3"><span>  </span> <i class="fa fa-angle-down"></i></label></a>.
					 		<div id="tanggungan-3" class="dropdown dropdown-tip tooltip">
								<ul class="tanggung dropdown-menu ">
									<li class="lajang"><span class="icon"></span>memiliki tanggungan</li>
									<li class="menikah"><span class="icon"></span>tidak memiliki tanggungan</li>
								</ul>
							</div><br>
						</div>
				 		<div id="step3-5" style="display: none">
							Penghasilan saya per tahun sebesar
							<a href="#" data-dropdown="#penghasilan-3" class="penghasilan"><label aria-label="Penghasilan 3"><span>  </span> <i class="fa fa-angle-down"></i></label></a>
					 		<div id="penghasilan-3" class="dropdown dropdown-tip tooltip">
								<ul class="gaji dropdown-menu ">
									<li data-gaji="90000000"><span class="icon"></span>Rp. 0 - 150 juta</li>
									<li data-gaji="200000000"><span class="icon"></span>Rp. 151 juta - 225 juta</li>
									<li data-gaji="240000000"><span class="icon"></span>Rp. 225 juta - 250 juta</li>
									<li data-gaji="300000000"><span class="icon"></span>Rp. 250 juta lebih</li>
								</ul>
							</div>
						</div>
				 		<div id="step3-6" style="display: none">

				 			Saya
			 				<a href="#" data-dropdown="#bersedia-3" class="bersedia"><label aria-label="Bersedia 3"><span>  </span> <i class="fa fa-angle-down"></i></label></a>
					 		<div id="bersedia-3" class="dropdown dropdown-tip tooltip">
								<ul class="bersedia-drop dropdown-menu ">
									<li class="ya" data-status="ya"><span class="icon"></span>juga ingin</li>
									<li class="tidak" data-status="tidak"><span class="icon"></span>tidak ingin</li>
								</ul>
							</div>

				 			<span class="proteksi">Berinvestasi</span>
				 		</div>
			 		</div><!--end description-->
					<a class="button red" href="">Lihat Pilihan Perlindungan</a>
			 	</div>
			</div>
			<div id="step4" class="top-space" style="display: none;">
			 	<div class="question">
			 	<div class="description">
				 	<div id="step4-1">
			 			Saya membutuhkan perlindungan
				 		<a href="#" data-dropdown="#perlindungan-4" class="perlindungan"><label aria-label="Perlindungan 4"><span>  </span> <i class="fa fa-angle-down"></i></label></a>
				 		<div id="perlindungan-4" class="dropdown dropdown-tip tooltip">
							<ul class="choice dropdown-menu ">
								<li class="Kesehatan" data-id="step3"><span class="icon"></span>Kesehatan</li>
								<li class="Harta benda" data-id="step4"><span class="icon"></span>Harta benda</li>
								<li class="Perjalanan" data-id="step4"><span class="icon"></span>Perjalanan</li>
								<li class="Jiwa" data-id="step3"><span class="icon"></span>Jiwa</li>
								<li class="Investasi" data-id="step3"><span class="icon"></span>Investasi</li>
							</ul>
						</div><br>
					</div>
				 	<div id="step4-2" >
			 			Saya berusia
			 				<a href="#" data-dropdown="#usia-4" class="umur"><label aria-label="Usia 4"><span><?php echo $range; ?>  </span> <i class="fa fa-angle-down"></i></label></a>
					 		<div id="usia-4" class="dropdown dropdown-tip tooltip">
								<ul class="usia dropdown-menu ">
									<li data-usia="20"><span class="icon"></span>18 - 25</li>
									<li data-usia="30"><span class="icon"></span>26 - 40</li>
									<li data-usia="50"><span class="icon"></span>41 - 55</li>
									<li data-usia="57"><span class="icon"></span>56 lebih</li>
								</ul>
							</div>
			 			tahun.
			 		</div>
			 		<div id="step4-3" style="display: none">
						Penghasilan saya per tahun sebesar
						<a href="#" data-dropdown="#penghasilan-4" class="penghasilan"><label aria-label="Penghasilan 4"><span>  </span> <i class="fa fa-angle-down"></i></label></a>
					 		<div id="penghasilan-4" class="dropdown dropdown-tip tooltip">
								<ul class="gaji dropdown-menu ">
									<li data-gaji="90000000"><span class="icon"></span>Rp. 0 - 150 juta</li>
									<li data-gaji="200000000"><span class="icon"></span>Rp. 151 juta - 225 juta</li>
									<li data-gaji="240000000"><span class="icon"></span>Rp. 225 juta - 250 juta</li>
									<li data-gaji="300000000"><span class="icon"></span>Rp. 250 juta lebih</li>
								</ul>
							</div>
					</div>
			 	</div><!--end description-->
				<a class="button red" href="">Lihat Pilihan Perlindungan</a>
			 	</div>
			</div>

			<!--choice tooltip-->


			<?php if ($range=='') {
				$umur_val='';
			} ?>

			<input type="hidden" name="perlindungan" id="perlindungan-hasil" value="">
			<input type="hidden" name="mar_status" id="status-hasil" value="">
			<input type="hidden" name="umur" id="age-hasil" value="<?php echo $umur; ?>">
			<input type="hidden" name="gaji" id="gaji-hasil" value="">
			<input type="hidden" name="bersedia" id="bersedia-hasil" value="ya">
			<input type="hidden" name="tanggungan" id="tanggungan-hasil" value="">
			<input type="hidden" name="produk" id="produk-hasil" value="">
			<input type="hidden" name="product_label" id="product_label" value="">
			<input type="hidden" name="entity" id="entity-hasil" value="">
			<input type="hidden" name="nama" id="nama-hasil" value="">
			<input type="hidden" name="tlp" id="tlp-hasil" value="">
			<input type="hidden" name="email" id="email-hasil" value="">



		<div id="result" class="clearfix" style="display: none">
			<div class="relative">
				<a href="#" id="back-to-list" onclick="location.reload();"class="back left c-white"> <i class="fa fa-arrow-circle-left"></i> Hitung Kembali</a>
			</div>
			<ul id="listing-items" class="clearfix">
			</ul>

		</div>

		<div id="step5" style="display: none">
			<div id="hubungi-saya">
				<fieldset>
					<label for="name">Nama saya</label>
					<input type="text" class="namanya required" value="" id="name"  autocomplete="off" size="1" required>
				</fieldset>
				<fieldset>
					<label for="tlp">. Telepon saya di</label>
					<input type="text" class="teleponnya required" value="" id="tlp"  autocomplete="off" size="1" required>
				</fieldset>
				<fieldset>
					<label for="email">. Atau email ke</label>
					<input type="email" class="emailnya required" value="" id="email"  autocomplete="off" size="1" required>
				</fieldset>

				<div class="clearfix cp-advisor--agreement">
		            <input id="chk-agreement" type="checkbox" name="agreement" value="1" class="customcheck left m-left-0 cp-advisor--input" required="" aria-required="true">
		            <label for="chk-agreement" id="agreement" class="left text-left m-right-0 cp-advisor--label">*Saya bersedia dihubungi untuk mendapatkan informasi selanjutnya dari AXA Mandiri.</label>
		        </div>

				<div class="button-box ssplay--none">
					<input class="call-me button" type="submit" value="Hubungi saya">
				</div>
			</div>
			</div>
			<div class="notification">
				<span class="message success">Terima kasih, data Anda telah terkirim</span>
				<span class="message error">Maaf data tidak terkirim</span>
			</div>
		</form>
		</div>
	</div><!--end row-->
	<span style="display: none"><span>
	<div class="row backtohome">
		<a href="<?php echo home_url(); ?>"><i class="fa fa-home"></i> Kembali ke Halaman Utama</a>
	</div>
</div><!--end panel-->
